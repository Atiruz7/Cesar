<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
            $table->string('video_url')->nullable()->after('description');
        });
        
        // Populate slugs for existing events
        \App\Models\Event::all()->each(function ($event) {
            $event->slug = \Illuminate\Support\Str::slug($event->title) . '-' . $event->id;
            $event->save();
        });
        
        Schema::table('events', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->unique()->change();
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['slug', 'video_url']);
        });
    }
};