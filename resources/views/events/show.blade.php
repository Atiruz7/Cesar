<x-layouts.app>
    <x-header />

    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-600">Inicio</a></li>
                    <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></li>
                    <li><a href="#eventos" class="hover:text-blue-600">Eventos</a></li>
                    <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></li>
                    <li class="text-gray-900 font-medium truncate max-w-xs">{{ $event->title }}</li>
                </ol>
            </nav>

            <article>
                <!-- Video Section -->
                @if ($event->video_url)
                    <div class="mb-8 aspect-video bg-black rounded-xl overflow-hidden">
                        <div class="w-full h-full relative">
                            <iframe 
                                src="{{ $event->video_url }}" 
                                class="w-full h-full" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                @endif

                <!-- Event Header -->
                <header class="mb-8">
                    <div class="flex items-center gap-3 text-sm text-gray-500 mb-4">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <time datetime="{{ $event->event_date->format('Y-m-d') }}">
                            {{ $event->event_date->format('d/m/Y') }}
                        </time>
                        @if ($event->is_active)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 ml-2">Activo</span>
                        @endif
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 leading-tight">
                        {{ $event->title }}
                    </h1>
                </header>

                <!-- Image Gallery -->
                @if ($event->images->isNotEmpty())
                    <div class="mb-8" x-data="{ currentIndex: 0, count: {{ $event->images->count() }} }">
                        <div class="relative bg-gray-100 rounded-xl overflow-hidden mb-4 aspect-video">
                            @foreach ($event->images as $index => $image)
                                <div x-show="currentIndex === {{ $index }}" class="absolute inset-0 transition-opacity duration-300 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->alt ?? $event->title }}" class="w-full h-full object-cover">
                                </div>
                            @endforeach
                        </div>
                        
                        @if ($event->images->count() > 1)
                            <div class="flex justify-center gap-2">
                                <button @click="currentIndex = (currentIndex - 1 + count) % count" 
                                        class="p-2 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-colors" 
                                        aria-label="Anterior">
                                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <div class="flex items-center gap-1.5">
                                    @foreach ($event->images as $index => $image)
                                        <button @click="currentIndex = {{ $index }}" 
                                                :class="currentIndex === {{ $index }} ? 'bg-blue-600' : 'bg-gray-300 hover:bg-gray-400'" 
                                                class="w-2 h-2 rounded-full transition-all duration-200" 
                                                aria-label="Imagen {{ $index + 1 }}"></button>
                                    @endforeach
                                </div>
                                <button @click="currentIndex = (currentIndex + 1) % count" 
                                        class="p-2 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-colors" 
                                        aria-label="Siguiente">
                                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        @endif
                    </div>
                @endif

                <!-- Full Description -->
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <div class="whitespace-pre-wrap">{{ $event->description }}</div>
                </div>

                <!-- Back to Events -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <a href="{{ route('home') }}#eventos" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Volver a eventos
                    </a>
                </div>
            </article>
        </div>
    </section>
</x-layouts.app>