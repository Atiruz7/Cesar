<x-layouts.app>
    <x-header />

    <!-- Hero  -->
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white overflow-hidden pt-16">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23ffffff%22 fill-opacity=%220.03%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-32">
            <div class="text-center">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold mb-6 leading-tight">
                    Engrandece tu ser y disfruta del éxito
                </h1>
                <p class="text-xl sm:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                    Formando líderes empresariales desde la esencia. Autoconocimiento, disciplina emocional y propósito.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#libro" style="background: linear-gradient(135deg, #FF9900 0%, #FF8F00 100%);" class="inline-flex items-center gap-2 text-lg px-8 py-3 rounded-lg font-bold tracking-wide text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-amazon-orange focus:ring-offset-2 shadow-lg hover:shadow-xl transition-all duration-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M13.39 20.48c-.06 1.39.99 2.44 2.19 2.44 1.3 0 2.1-.89 2.22-2.19l.02-.91h.91v2h1.34V6.5h-1.2V4.5h-.87v1.24H8.4V4.5H7.5v1.2H6.5v2h1.2v9.1l-.04.9c-.13 1.22.86 2.33 2.23 2.33.87 0 1.7-.63 2.01-1.55l.31-.82h-2.8v-2.4h2.4l-.05-.91zm-1.28 0c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11zm-7.2-8.68V6.5h1.62v5.3H6.1zm1.57 8.68c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11z"/></svg>
                        <span class="font-bold tracking-wide">Adquirir el libro</span>
                    </a>
                    <button class="text-lg px-8 py-3 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors opacity-50 cursor-not-allowed" disabled>
                        Unirse al grupo de WhatsApp
                    </button>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent"></div>
    </section>

    <!-- Sobre mi-->
    <section id="inicio" class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mb-6">Sobre mí</h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>Soy César Díaz Vásquez, tengo 39 años y nací en la hermosa tierra de Cajamarca, conocida también como la flor del Cumbe, en Perú.</p>
                        <p>Desde muy joven entendí que la vida no se trata solo de lograr metas externas, sino de <strong class="text-gray-900">cultivar lo que llevamos dentro</strong>. Por eso, mi propósito es claro: <strong class="text-gray-900">formar líderes empresariales, pero desde el ser</strong>, desde la esencia de cada persona. Eliminando todos los conflictos mentales y de ese modo liberarlo para que pueda alcanzar el éxito.</p>
                        <p>Creo firmemente que antes de alcanzar el éxito, <strong class="text-gray-900">es necesario engrandecer nuestro interior</strong>. El liderazgo real nace del autoconocimiento, la disciplina emocional y la conexión con un propósito más grande. Esa es la razón por la que mi lema es: <em class="text-blue-600">"Engrandece tu ser y disfruta del éxito."</em></p>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/Cesar.jpg') }}" alt="César Díaz" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Libro -->
    <section id="libro" class="py-20 sm:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mb-4">Mi Libro</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">"12 amigos infalibles para la Riqueza" - Una historia de transformación y sabiduría</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center max-w-4xl mx-auto">
                <div class="relative aspect-[3/4] rounded-xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/Libro.jpg') }}" alt="12 amigos infalibles para la Riqueza" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-serif font-bold text-gray-900 mb-4">12 amigos infalibles para la Riqueza</h3>
                    <div class="space-y-4 text-gray-600 leading-relaxed mb-8">
                        <p>Soy autor del libro <strong>«Los 12 amigos infalibles para la Riqueza»</strong>, donde relato una experiencia muy especial de mi infancia. Siendo niño, caminé durante 12 horas para cumplir una misión que marcó mi vida.</p>
                        <p>Cada hora me dejó una lección, y esas lecciones las transformé en "amigos" que me han acompañado desde entonces. Fue un camino duro, pero lleno de sabiduría. Y si hubo alguien que me enseñó a interpretar cada experiencia con amor y propósito, fue el amigo más sabio de todos: Jesús.</p>
                        <p>Hoy, con gratitud y pasión, sigo ese llamado. Acompaño a otros en su viaje de transformación interior, convencido de que cuando el ser se fortalece, el éxito llega como consecuencia natural.</p>
                    </div>
                    <a href="https://a.co/d/0bs4RrHv" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-lg px-8 py-3 rounded-lg font-medium transition-all duration-200 bg-amazon-orange text-white hover:bg-amazon-orange-dark focus:outline-none focus:ring-2 focus:ring-amazon-orange focus:ring-offset-2 shadow-lg hover:shadow-xl" style="background: linear-gradient(135deg, #FF9900 0%, #FF8F00 100%);">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M13.39 20.48c-.06 1.39.99 2.44 2.19 2.44 1.3 0 2.1-.89 2.22-2.19l.02-.91h.91v2h1.34V6.5h-1.2V4.5h-.87v1.24H8.4V4.5H7.5v1.2H6.5v2h1.2v9.1l-.04.9c-.13 1.22.86 2.33 2.23 2.33.87 0 1.7-.63 2.01-1.55l.31-.82h-2.8v-2.4h2.4l-.05-.91zm-1.28 0c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11zm-7.2-8.68V6.5h1.62v5.3H6.1zm1.57 8.68c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11z"/></svg>
                        <span class="font-bold tracking-wide">Comprar en Amazon</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Eventos -->
    <section id="eventos" class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mb-4">Próximos Eventos</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Participa en experiencias transformadoras de liderazgo y crecimiento personal</p>
            </div>

            @if ($events->isEmpty())
                <div class="text-center py-12">
                    <svg class="mx-auto h-16 w-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">No hay eventos programados</h3>
                    <p class="mt-2 text-gray-500">Vuelve pronto para ver los próximos eventos.</p>
                </div>
@else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ modalOpen: false, currentImageIndex: 0, currentEventImages: [] }">
@foreach ($events as $event)
                        <article class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow" x-data="{ showMore: false }">
                            <a href="{{ route('events.show', $event) }}" class="block">
                                @if ($event->images->isNotEmpty())
                                    <div class="aspect-video relative overflow-hidden">
                                        <img src="{{ asset('storage/' . $event->images->first()->path) }}"
                                             alt="{{ $event->title }}"
                                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                        @if ($event->images->count() > 1)
                                            <div class="absolute bottom-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded flex items-center gap-1">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 002-2H6a2 2 0 002 2v12a2 2 0 002 2z"/></svg>
                                                <span>{{$event->images->count()}} fotos</span>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="aspect-video bg-gray-100 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 002-2H6a2 2 0 002 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                            </a>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2-2v12a2 2 0 002 2z"/></svg>
                                        <time>{{ $event->event_date->format('d/m/Y') }}</time>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $event->title }}</h3>
                                    @if ($event->description)
                                        <p class="text-gray-600 mb-3 line-clamp-3" x-ref="desc" :class="{ 'line-clamp-6': showMore, 'line-clamp-3': !showMore }">{{ $event->description }}</p>
                                        @if (strlen($event->description) > 150)
                                            <button @click.prevent="showMore = !showMore" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center gap-1 mt-2">
                                                <span x-text="showMore ? 'Leer menos' : 'Leer m\u00e1s'"></span>
                                                <svg class="w-4 h-4 transition-transform duration-200" :class="showMore ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                            </button>
                                        @endif
                                    @endif
                                    <a href="{{ route('events.show', $event) }}" class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-blue-600 text-white hover:bg-blue-700 transition-colors mt-3">
                                        Ver evento
                                    </a>
                                </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Videos-->
    <section id="videos" class="py-20 sm:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mb-4">Videos</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Conferencias, entrevistas y contenido de valor</p>
            </div>
            <div class="text-center">
                <a href="https://www.youtube.com/channel/UCRpXITe8tKDhrDAsk7bLkiA" target="_blank" rel="noopener noreferrer" class="btn-primary inline-flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    Ver canal de YouTube
                </a>
            </div>
        </div>
    </section>

    <!-- Blog  -->
    <section id="blog" class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mb-4">Blog</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Artículos sobre liderazgo, crecimiento personal y éxito</p>
            </div>
            <div class="text-center text-gray-500">
                <p>Próximamente...</p>
            </div>
        </div>
    </section>

    <!-- Contactos-->
    <section id="contacto" class="py-20 sm:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mb-4">Contacto</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">¿Quieres trabajar conmigo o solicitar una conferencia?</p>
            </div>
            <div class="max-w-xl mx-auto text-center">
                <a href="mailto:info@cesar-diaz.com" class="btn-primary inline-flex items-center gap-2 text-lg px-8 py-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Enviar correo
                </a>
                <p class="mt-4 text-gray-500">WhatsApp disponible próximamente</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 sm:py-28 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-6">¿Listo para transformar tu liderazgo?</h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">Únete a la comunidad de líderes que están engrandeciendo su ser para alcanzar el éxito verdadero.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#libro" style="background: linear-gradient(135deg, #FF9900 0%, #FF8F00 100%);" class="inline-flex items-center gap-2 text-lg px-8 py-3 rounded-lg font-bold tracking-wide text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-amazon-orange focus:ring-offset-2 shadow-lg hover:shadow-xl transition-all duration-200">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M13.39 20.48c-.06 1.39.99 2.44 2.19 2.44 1.3 0 2.1-.89 2.22-2.19l.02-.91h.91v2h1.34V6.5h-1.2V4.5h-.87v1.24H8.4V4.5H7.5v1.2H6.5v2h1.2v9.1l-.04.9c-.13 1.22.86 2.33 2.23 2.33.87 0 1.7-.63 2.01-1.55l.31-.82h-2.8v-2.4h2.4l-.05-.91zm-1.28 0c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11zm-7.2-8.68V6.5h1.62v5.3H6.1zm1.57 8.68c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11z"/></svg>
                    <span class="font-bold tracking-wide">Comprar en Amazon</span>
                </a>
                <button class="text-lg px-8 py-3 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors opacity-50 cursor-not-allowed" disabled>
                    Unirse al grupo de WhatsApp
                </button>
            </div>
        </div>
    </section>
</x-layouts.app>