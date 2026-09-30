<x-admin.app>
    <div class="max-w-3xl">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Editar Evento</h1>
            <p class="mt-1 text-gray-600">Modifica la información del evento</p>
        </div>

        <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-sm border p-6 space-y-6">
            @csrf @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Título <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" required
                    value="{{ old('title', $event->title) }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="event_date" class="block text-sm font-medium text-gray-700">Fecha del Evento <span class="text-red-500">*</span></label>
                <input type="date" name="event_date" id="event_date" required
                    value="{{ old('event_date', $event->event_date->format('Y-m-d')) }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border">
                @error('event_date')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción (opcional)</label>
                <textarea name="description" id="description" rows="5"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border whitespace-pre-wrap">{{ old('description', $event->description) }}</textarea>
                <p class="mt-1 text-xs text-gray-500">Se respetan los saltos de línea</p>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $event->is_active) ? 'checked' : '' }}
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-700">Evento activo</span>
                </label>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Imágenes actuales</label>
                @if ($event->images->isEmpty())
                    <p class="mt-1 text-sm text-gray-500">No hay imágenes.</p>
                @else
                    <div class="mt-2 grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach ($event->images as $index => $image)
                            <div class="relative group border rounded-lg overflow-hidden">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $event->title }} - Imagen {{ $index + 1 }}"
                                    class="w-full h-32 object-cover">
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <label class="cursor-pointer">
                                        <input type="checkbox" name="existing_images[]" value="{{ $image->id }}" checked class="sr-only peer">
                                        <span class="peer-checked:hidden peer-focus:ring-2 peer-focus:ring-blue-500 px-3 py-1 bg-white rounded text-sm font-medium">Mantener</span>
                                        <span class="hidden peer-checked:inline-flex px-3 py-1 bg-red-100 text-red-700 rounded text-sm font-medium">Eliminar</span>
                                    </label>
                                </div>
                                <input type="hidden" name="image_order[{{ $image->id }}]" value="{{ $index }}">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Agregar más imágenes (opcional)</label>
                <input type="file" name="images[]" id="images" multiple accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="mt-1 text-xs text-gray-500">Formatos: JPG, PNG, WebP. Máx 2MB cada una.</p>
                @error('images.*')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t">
                <a href="{{ route('events.index') }}" class="btn-secondary">Cancelar</a>
                <button type="submit" class="btn-primary">Actualizar Evento</button>
            </div>
        </form>
    </div>
</x-admin.app>