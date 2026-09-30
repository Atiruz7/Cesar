<x-admin.app>
    <div class="max-w-3xl">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Crear Evento</h1>
            <p class="mt-1 text-gray-600">Completa la información del nuevo evento</p>
        </div>

        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-sm border p-6 space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Título <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" required
                    value="{{ old('title') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="event_date" class="block text-sm font-medium text-gray-700">Fecha del Evento <span class="text-red-500">*</span></label>
                <input type="date" name="event_date" id="event_date" required
                    value="{{ old('event_date') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border">
                @error('event_date')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción (opcional)</label>
                <textarea name="description" id="description" rows="5"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border whitespace-pre-wrap">{{ old('description') }}</textarea>
                <p class="mt-1 text-xs text-gray-500">Se respetan los saltos de línea</p>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-700">Evento activo</span>
                </label>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Imágenes (opcional, múltiples)</label>
                <input type="file" name="images[]" id="images" multiple accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="mt-1 text-xs text-gray-500">Formatos: JPG, PNG, WebP. Máx 2MB cada una.</p>
                @error('images.*')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t">
                <a href="{{ route('events.index') }}" class="btn-secondary">Cancelar</a>
                <button type="submit" class="btn-primary">Crear Evento</button>
            </div>
        </form>
    </div>
</x-admin.app>