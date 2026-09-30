<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('images')->latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'is_active' => 'boolean',
            'images.*' => 'nullable|image|max:2048',
        ]);

        $event = Event::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'event_date' => $validated['event_date'],
            'is_active' => $request->boolean('is_active'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('events', 'public');
                EventImage::create([
                    'event_id' => $event->id,
                    'path' => $path,
                    'order' => $index,
                ]);
            }
        }

        return redirect()->route('admin.events.index')
            ->with('success', 'Evento creado correctamente');
    }

    public function edit(Event $event)
    {
        $event->load('images');
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'is_active' => 'boolean',
            'images.*' => 'nullable|image|max:2048',
            'existing_images' => 'nullable|array',
            'existing_images.*' => 'integer|exists:event_images,id',
        ]);

        $event->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'event_date' => $validated['event_date'],
            'is_active' => $request->boolean('is_active'),
        ]);

        if ($request->has('existing_images')) {
            $keepIds = $request->existing_images;
            $event->images()->whereNotIn('id', $keepIds)->each(function ($image) {
                Storage::disk('public')->delete($image->path);
                $image->delete();
            });

            foreach ($keepIds as $index => $id) {
                EventImage::where('id', $id)->update(['order' => $index]);
            }
        } else {
            $event->images()->each(function ($image) {
                Storage::disk('public')->delete($image->path);
                $image->delete();
            });
        }

        if ($request->hasFile('images')) {
            $maxOrder = $event->images()->max('order') ?? -1;
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('events', 'public');
                EventImage::create([
                    'event_id' => $event->id,
                    'path' => $path,
                    'order' => $maxOrder + 1 + $index,
                ]);
            }
        }

        return redirect()->route('admin.events.index')
            ->with('success', 'Evento actualizado correctamente');
    }

    public function destroy(Event $event)
    {
        foreach ($event->images as $image) {
            Storage::disk('public')->delete($image->path);
        }
        $event->delete();

        return redirect()->route('admin.events.index')
            ->with('success', 'Evento eliminado correctamente');
    }
}