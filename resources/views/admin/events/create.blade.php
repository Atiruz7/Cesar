<x-admin.app>
    <div class="max-w-3xl">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Crear Evento</h1>
            <p class="mt-1 text-gray-600">Completa la información del nuevo evento</p>
        </div>

        <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="card">
            <div class="card-body space-y-6">
                @csrf

                <div>
                    <label for="title" class="input-label">Título <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" required
                        value="{{ old('title') }}"
                        class="input-field"
                        placeholder="Título del evento">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="event_date" class="input-label">Fecha del Evento <span class="text-red-500">*</span></label>
                        <input type="date" name="event_date" id="event_date" required
                            value="{{ old('event_date') }}"
                            class="input-field">
                        @error('event_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="video_url" class="input-label">Video URL (opcional)</label>
                        <input type="url" name="video_url" id="video_url"
                            value="{{ old('video_url') }}"
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
                        class="input-field whitespace-pre-wrap">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                            class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-700">Evento activo</span>
                    </label>
                </div>

                <div>
                    <label class="input-label">Imágenes (opcional, múltiples)</label>
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
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Crear Evento
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