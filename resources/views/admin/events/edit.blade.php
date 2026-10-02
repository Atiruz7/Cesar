<x-admin.app>
    <div class="max-w-3xl">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Editar Evento</h1>
            <p class="mt-1 text-gray-600">Modifica la información del evento</p>
        </div>

        <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data" class="card">
            <div class="card-body space-y-6">
                @csrf @method('PUT')

                <div>
                    <label for="title" class="input-label">Título <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" required
                        value="{{ old('title', $event->title) }}"
                        class="input-field"
                        placeholder="Título del evento">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="slug" class="input-label">Slug (URL amigable)</label>
                    <input type="text" name="slug" id="slug"
                        value="{{ old('slug', $event->slug) }}"
                        class="input-field"
                        placeholder="se-genera-automaticamente">
                    <p class="mt-1 text-xs text-gray-500">Dejar vacío para auto-generar. Ej: mi-evento-2024</p>
                    @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="event_date" class="input-label">Fecha del Evento <span class="text-red-500">*</span></label>
                        <input type="date" name="event_date" id="event_date" required
                            value="{{ old('event_date', $event->event_date->format('Y-m-d')) }}"
                            class="input-field">
                        @error('event_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="video_url" class="input-label">Video URL (opcional)</label>
                        <input type="url" name="video_url" id="video_url"
                            value="{{ old('video_url', $event->video_url) }}"
                            placeholder="https://youtube.com/watch?v=... o https://vimeo.com/..."
                            class="input-field">
                        <p class="mt-1 text-xs text-gray-500">URL de YouTube, Vimeo, etc.</p>
                        @error('video_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="description" class="input-label">Descripción (opcional)</label>
                    <textarea name="description" id="description" rows="5"
                        class="input-field whitespace-pre-wrap">{{ old('description', $event->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $event->is_active) ? 'checked' : '' }}
                            class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-700">Evento activo</span>
                    </label>
                </div>

                <div>
                    <label class="input-label">Imágenes actuales</label>
                    @if ($event->images->isEmpty())
                        <p class="mt-1 text-sm text-gray-500">No hay imágenes.</p>
                    @else
                        <div class="mt-2 grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach ($event->images as $index => $image)
                                <div class="relative group border border-gray-200 rounded-lg overflow-hidden">
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
                    <label class="input-label">Agregar más imágenes (opcional)</label>
                    <div class="relative">
                        <input type="file" name="images[]" id="images" multiple accept="image/*"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                            onchange="handleImagePreview(this)">
                        <div id="dropZone" class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-blue-400 hover:bg-blue-50 transition-colors">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <p class="mt-3 text-lg font-medium text-gray-900">Arrastra imágenes aquí</p>
                            <p class="mt-1 text-sm text-gray-500">o haz clic para seleccionar</p>
                            <p class="mt-2 text-xs text-gray-400">Máx 2MB cada una. JPG, PNG, WebP</p>
                        </div>
                    </div>
                    <div id="imagePreviews" class="mt-4 grid grid-cols-2 sm:grid-cols-4 gap-3 hidden"></div>
                    @error('images.*')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-3 pt-6 border-t">
                    <a href="{{ route('admin.events.index') }}" class="btn-secondary">Cancelar</a>
                    <button type="submit" class="btn-primary">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                        Actualizar Evento
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-admin.app>

<script>
function handleImagePreview(input) {
    const dropZone = document.getElementById('dropZone');
    const previewsContainer = document.getElementById('imagePreviews');
    
    if (input.files.length > 0) {
        previewsContainer.classList.remove('hidden');
        
        Array.from(input.files).forEach((file, index) => {
            if (!file.type.startsWith('image/')) return;
            
            const reader = new FileReader();
            reader.onload = (e) => {
                const preview = document.createElement('div');
                preview.className = 'relative group';
                preview.innerHTML = `
                    <img src="${e.target.result}" alt="Preview ${index + 1}" class="w-full h-24 object-cover rounded-lg">
                    <button type="button" class="absolute top-1 right-1 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity" onclick="removeImagePreview(this, ${index})">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                    <input type="hidden" name="preview_indices[]" value="${index}">
                `;
                previewsContainer.appendChild(preview);
            };
            reader.readAsDataURL(file);
        });
        
        dropZone.classList.add('border-blue-400', 'bg-blue-50');
    } else {
        previewsContainer.classList.add('hidden');
        dropZone.classList.remove('border-blue-400', 'bg-blue-50');
    }
}

function removeImagePreview(button, index) {
    const input = document.getElementById('images');
    const previewsContainer = document.getElementById('imagePreviews');
    const dropZone = document.getElementById('dropZone');
    
    // Remove the file from the FileList by creating a new DataTransfer
    const dt = new DataTransfer();
    const files = input.files;
    for (let i = 0; i < files.length; i++) {
        if (i !== index) {
            dt.items.add(files[i]);
        }
    }
    input.files = dt.files;
    
    // Remove preview
    button.closest('div').remove();
    
    if (input.files.length === 0) {
        previewsContainer.classList.add('hidden');
        dropZone.classList.remove('border-blue-400', 'bg-blue-50');
    }
}

// Drag and drop
const dropZone = document.getElementById('dropZone');
if (dropZone) {
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });
    
    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, () => dropZone.classList.add('border-blue-400', 'bg-blue-50'), false);
    });
    
    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, () => dropZone.classList.remove('border-blue-400', 'bg-blue-50'), false);
    });
    
    dropZone.addEventListener('drop', (e) => {
        const input = document.getElementById('images');
        input.files = e.dataTransfer.files;
        handleImagePreview(input);
    }, false);
}

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}
</script>