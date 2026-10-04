<x-layouts.app>
    <x-header />

    <!-- Hero  -->
    <section class="relative bg-[#0B0F17] text-white overflow-hidden pt-24 lg:pt-20 min-h-[660px] lg:h-[760px] flex items-center">
        <!-- Background Ambient Elements & Subtle Glows -->
        <div class="absolute top-1/4 left-10 w-80 h-80 bg-[#6846A5]/20 rounded-full blur-[110px] pointer-events-none"></div>
        <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-96 h-96 bg-[#6846A5]/25 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-64 h-64 bg-[#70C900]/10 rounded-full blur-[90px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] [background-size:28px_28px] opacity-40 pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-12 lg:py-0">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                <!-- Text Content (Left-aligned) -->
                <div class="lg:col-span-7 flex flex-col justify-center text-left z-20">
                    <!-- Brand Pill Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.06] border border-white/10 backdrop-blur-sm self-start mb-6">
                        <span class="w-2 h-2 rounded-full bg-[#70C900] shadow-[0_0_8px_#70C900] animate-pulse"></span>
                        <span class="text-xs uppercase tracking-widest font-semibold text-[#F4D51F]">César Díaz · Mentor & Autor</span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-[1.08] uppercase">
                        Engrandece tu ser<br>
                        <span class="normal-case block mt-2 font-serif font-bold italic text-[#70C900]">y disfruta del éxito.</span>
                    </h1>

                    <!-- Secondary Text / Value Proposition -->
                    <p class="mt-6 text-xl sm:text-2xl font-semibold text-gray-100 max-w-xl leading-snug">
                        Formando líderes empresariales <span class="text-white underline decoration-[#70C900] decoration-2 underline-offset-4">desde la esencia.</span>
                    </p>

                    <!-- Complement -->
                    <p class="mt-3 text-base sm:text-lg text-gray-300 max-w-lg leading-relaxed font-light">
                        Autoconocimiento, disciplina emocional y propósito.
                    </p>

                    <!-- CTAs -->
                    <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <!-- Primer botón: Adquirir el libro (#libro) -->
                        <a href="#libro" class="inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl bg-[#70C900] hover:bg-[#62b100] text-[#0A1A05] text-base font-bold tracking-wide shadow-lg shadow-[#70C900]/25 transition-all duration-300 hover:scale-[1.02] hover:shadow-[#70C900]/40 active:scale-[0.98]">
                            <span>Adquirir el libro</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <!-- Segundo botón: Unirse al grupo de WhatsApp (Preparado) -->
                        <a href="javascript:void(0)" class="inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl bg-[#6846A5] hover:bg-[#58398E] text-white text-base font-semibold tracking-wide border border-[#6846A5]/60 shadow-lg shadow-[#6846A5]/25 transition-all duration-300 hover:scale-[1.02] hover:shadow-[#6846A5]/40 active:scale-[0.98]">
                            <svg class="w-5 h-5 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            <span>Unirse al grupo de WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: César Díaz Photograph -->
                <div class="lg:col-span-5 relative flex items-end justify-center lg:justify-end h-full mt-4 lg:mt-0">
                    <div class="relative w-full max-w-sm sm:max-w-md lg:max-w-none flex items-end justify-center lg:justify-end">
                        <!-- Subtle ambient back glow behind photo -->
                        <div class="absolute -inset-4 bg-gradient-to-tr from-[#6846A5]/35 via-[#6846A5]/10 to-[#70C900]/20 rounded-full blur-3xl pointer-events-none"></div>

                        <!-- Photograph -->
                        <div class="relative z-10 w-full flex justify-center lg:justify-end">
                            <img src="{{ asset('images/Cesar.jpg') }}"
                                 alt="César Díaz - Mentor y Conferencista"
                                 class="w-auto h-[380px] sm:h-[480px] lg:h-[620px] max-h-[80vh] object-contain object-bottom drop-shadow-[0_25px_35px_rgba(0,0,0,0.7)] select-none pointer-events-none">
                        </div>

                        <!-- Seamless bottom fade into hero base -->
                        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-[#0B0F17] via-[#0B0F17]/70 to-transparent z-10"></div>
                        <!-- Left subtle feather on desktop to blend with dark canvas -->
                        <div class="hidden lg:block pointer-events-none absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-[#0B0F17] to-transparent z-10"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Base bottom subtle edge -->
        <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-black/20 to-transparent pointer-events-none z-20"></div>
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
                <div class="relative flex justify-center">
    <img
        src="{{ asset('images/Libro.jpg') }}"
        alt="12 amigos infalibles para la Riqueza"
        class="w-full max-w-sm h-auto object-contain rounded-xl shadow-2xl"
    >
</div>
                <div>
                    <h3 class="text-2xl font-serif font-bold text-gray-900 mb-4">12 amigos infalibles para la Riqueza</h3>
                    <div class="space-y-4 text-gray-600 leading-relaxed mb-8">
                        <p>Soy autor del libro <strong>«Los 12 amigos infalibles para la Riqueza»</strong>, donde relato una experiencia muy especial de mi infancia. Siendo niño, caminé durante 12 horas para cumplir una misión que marcó mi vida.</p>
                        <p>Cada hora me dejó una lección, y esas lecciones las transformé en "amigos" que me han acompañado desde entonces. Fue un camino duro, pero lleno de sabiduría. Y si hubo alguien que me enseñó a interpretar cada experiencia con amor y propósito, fue el amigo más sabio de todos: Jesús.</p>
                        <p>Hoy, con gratitud y pasión, sigo ese llamado. Acompaño a otros en su viaje de transformación interior, convencido de que cuando el ser se fortalece, el éxito llega como consecuencia natural.</p>
                    </div>
                    <a href="https://a.co/d/0bs4RrHv" target="_blank" rel="noopener noreferrer" class="btn-primary inline-flex items-center gap-2 text-lg px-8 py-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M13.39 20.48c-.06 1.39.99 2.44 2.19 2.44 1.3 0 2.1-.89 2.22-2.19l.02-.91h.91v2h1.34V6.5h-1.2V4.5h-.87v1.24H8.4V4.5H7.5v1.2H6.5v2h1.2v9.1l-.04.9c-.13 1.22.86 2.33 2.23 2.33.87 0 1.7-.63 2.01-1.55l.31-.82h-2.8v-2.4h2.4l-.05-.91zm-1.28 0c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11zm-7.2-8.68V6.5h1.62v5.3H6.1zm1.57 8.68c-.63 0-1.14-.48-1.14-1.11v-.9c0-.7.55-1.18 1.14-1.18.66 0 1.14.52 1.14 1.18v.9c0 .6-.51 1.11-1.14 1.11z"/></svg>
                        Comprar en Amazon
                    </a>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Videos-->
    <section id="videos" class="py-20 sm:py-28 bg-[#0B0F17] text-white relative overflow-hidden">
        <!-- Elementos de luz ambiental y textura sutil -->
        <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-[#6846A5]/20 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-[#70C900]/15 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff08_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Encabezado de la sección -->
            <div class="text-center mb-12 sm:mb-16">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.06] border border-white/10 backdrop-blur-sm mb-4">
                    <span class="w-2 h-2 rounded-full bg-[#70C900] shadow-[0_0_8px_#70C900]"></span>
                    <span class="text-xs uppercase tracking-widest font-semibold text-[#F4D51F]">Contenido Audiovisual</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-white mb-4 tracking-tight">Videos</h2>
                <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                    Conferencias, entrevistas y lecciones de vida para engrandecer tu ser y transformar tu liderazgo.
                </p>
            </div>

            <!-- Video Principal Grande y Destacado -->
            <div class="max-w-4xl mx-auto mb-16 sm:mb-20">
                <div class="relative rounded-2xl sm:rounded-3xl p-1 bg-gradient-to-tr from-[#6846A5]/40 via-white/10 to-[#70C900]/30 shadow-2xl shadow-black/80">
                    <div class="relative rounded-[calc(1rem-1px)] sm:rounded-[calc(1.5rem-1px)] overflow-hidden bg-black aspect-video">
                        <iframe
                            class="w-full h-full"
                            src="https://www.youtube.com/embed/-O7zQo3P8xc"
                            title="César Díaz - Conferencia Magistral"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Galería Visual de Videos / Tarjetas -->
            {{--
                ========================================================================
                GUÍA PARA AGREGAR O EDITAR VIDEOS EN LA GALERÍA:
                Para cada tarjeta, actualiza:
                1. El ID del video de YouTube en el enlace o imagen:
                   https://img.youtube.com/vi/TU_YOUTUBE_ID/hqdefault.jpg
                2. La categoría (badge superior).
                3. El título del video.
                ========================================================================
            --}}
            <div>
                <div class="flex items-center justify-between mb-8 pb-4 border-b border-white/10">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-serif font-bold text-white">Más conferencias y reflexiones</h3>
                        <p class="text-sm text-gray-400 mt-1">Explora conferencias y charlas inspiracionales de César Díaz</p>
                    </div>
                </div>

                <!-- Video Cards (Reels) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 max-w-4xl mx-auto">

                    <!-- TARJETA 1 (REEL 1) -->
                    <article class="group relative w-full overflow-hidden rounded-2xl border border-white/10 bg-black transition-all duration-300 hover:-translate-y-1 hover:border-[#6846A5]/70 hover:shadow-2xl hover:shadow-[#6846A5]/25"
                             style="min-height: 520px; height: 520px;">

                        <!-- Video Reel 1 -->
                        <video
    src="{{ asset('videos/REEL2.mp4') }}"
    playsinline
    preload="metadata"
    class="absolute inset-0 w-full h-full object-contain bg-black z-0 hidden rounded-2xl"
                            onended="this.classList.add('hidden'); this.controls = false; const art = this.closest('article'); art.querySelector('.card-cover').classList.remove('hidden'); art.querySelector('button').classList.remove('hidden');"
                        ></video>

                        <!-- Capa visual (Cover) -->
                        <div class="card-cover absolute inset-0 w-full h-full pointer-events-none">
                            <!-- Imagen César Díaz recortado -->
                            <img
                                src="{{ asset('images/cesar-recortado.png') }}"
                                alt="César Díaz"
                                class="absolute bottom-0 right-0 h-[90%] w-auto max-w-[85%] object-contain object-bottom pointer-events-none z-10 transition-transform duration-500 group-hover:scale-[1.03]"
                                style="height: 90%; max-height: 480px;"
                            >

                            <!-- Texto superior izquierdo -->
                            <div class="relative z-20 p-7 sm:p-8 w-[65%] sm:w-[60%]">
                                <p class="text-2xl sm:text-3xl font-light leading-tight text-white">
                                    Las condiciones
                                    <br>
                                    en las que
                                    <br>
                                    tu naciste,
                                    <br>
                                    <span class="text-[#F4D51F] font-normal">
                                        no determina
                                    </span>
                                    <br>
                                    <span class="text-3xl sm:text-4xl font-semibold text-[#F4D51F]">
                                        TU ÉXITO
                                    </span>
                                </p>
                            </div>
                        </div>

                        <!-- Botón circular Play -->
                        <button type="button"
                                aria-label="Reproducir video"
                                onclick="const art = this.closest('article'); const vid = art.querySelector('video'); const cov = art.querySelector('.card-cover'); vid.classList.remove('hidden'); vid.controls = true; vid.play(); cov.classList.add('hidden'); this.classList.add('hidden');"
                                class="absolute z-30 flex h-20 w-20 sm:h-22 sm:w-22 items-center justify-center rounded-full border-4 border-white/90 bg-white/10 backdrop-blur-sm transition-all duration-300 group-hover:scale-110 group-hover:bg-[#6846A5]/40 group-hover:border-[#F4D51F] cursor-pointer"
                                style="top: 55%; left: 40%; transform: translate(-50%, -50%);">
                            <svg class="ml-1 h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </article>


                    <!-- TARJETA 2 (REEL 2) -->
                    <article class="group relative w-full overflow-hidden rounded-2xl border border-white/10 bg-black transition-all duration-300 hover:-translate-y-1 hover:border-[#6846A5]/70 hover:shadow-2xl hover:shadow-[#6846A5]/25"
                             style="min-height: 520px; height: 520px;">

                        <!-- Video Reel 2 -->
                        <video
                            src="{{ asset('videos/REEL1.mp4') }}"
                            playsinline
                            preload="metadata"
                            class="absolute inset-0 w-full h-full object-contain bg-black z-0 hidden rounded-2xl"
                            onended="this.classList.add('hidden'); this.controls = false; const art = this.closest('article'); art.querySelector('.card-cover').classList.remove('hidden'); art.querySelector('button').classList.remove('hidden');"
                        ></video>

                        <!-- Capa visual (Cover) -->
                        <div class="card-cover absolute inset-0 w-full h-full pointer-events-none">
                            <!-- Imagen César Díaz recortado -->
                            <img
                                src="{{ asset('images/cesar-recortado.png') }}"
                                alt="César Díaz"
                                class="absolute bottom-0 right-0 h-[90%] w-auto max-w-[85%] object-contain object-bottom pointer-events-none z-10 transition-transform duration-500 group-hover:scale-[1.03]"
                                style="height: 90%; max-height: 480px;"
                            >

                            <!-- Texto superior izquierdo -->
                            <div class="relative z-20 p-7 sm:p-8 w-[70%] sm:w-[65%]">
                                <h3 class="text-3xl sm:text-4xl font-normal leading-tight text-[#F4D51F]">
                                    YO NACÍ POBRE
                                </h3>

                                <p class="mt-3 text-2xl sm:text-3xl font-light leading-tight text-white">
                                    Pero ahora soy
                                    <br>
                                    rico materialmente,
                                    <br>
                                    espiritualmente
                                    <br>
                                    y mentalmente.
                                </p>
                            </div>
                        </div>

                        <!-- Botón circular Play -->
                        <button type="button"
                                aria-label="Reproducir video"
                                onclick="const art = this.closest('article'); const vid = art.querySelector('video'); const cov = art.querySelector('.card-cover'); vid.classList.remove('hidden'); vid.controls = true; vid.play(); cov.classList.add('hidden'); this.classList.add('hidden');"
                                class="absolute z-30 flex h-20 w-20 sm:h-22 sm:w-22 items-center justify-center rounded-full border-4 border-white/90 bg-white/10 backdrop-blur-sm transition-all duration-300 group-hover:scale-110 group-hover:bg-[#6846A5]/40 group-hover:border-[#F4D51F] cursor-pointer"
                                style="top: 55%; left: 40%; transform: translate(-50%, -50%);">
                            <svg class="ml-1 h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </article>

                </div>

                <!-- Enlace al canal de YouTube -->
                <div class="text-center mt-12 sm:mt-16">
                    <a href="https://www.youtube.com/channel/UCRpXITe8tKDhrDAsk7bLkiA"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl bg-white/[0.08] hover:bg-white/[0.14] text-white border border-white/10 hover:border-[#6846A5]/50 text-sm font-semibold tracking-wide transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                        <span>Ver más en el canal de YouTube</span>
                    </a>
                </div>
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
                <p>Próximamente solo en cines...</p>
            </div>
        </div>
    </section>

    <!-- Contactos-->
    <section id="contacto" class="py-20 sm:py-28 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-gray-900 mb-4 tracking-tight">Contacto</h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto font-light leading-relaxed">¿Quieres trabajar conmigo o solicitar una conferencia?</p>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-xl shadow-black/5 border border-gray-100/80 grid grid-cols-1 lg:grid-cols-12">
                <!-- Columna Izquierda: Morado #6846A5 -->
                <div class="lg:col-span-5 bg-[#6846A5] text-white p-8 sm:p-12 lg:p-14 flex flex-col justify-between relative overflow-hidden">
                    <!-- Sutil resplandor ambiental minimalista -->
                    <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/5 rounded-full blur-2xl pointer-events-none"></div>

                    <div class="relative z-10">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-medium tracking-wider text-white/90 mb-8">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#70C900]"></span>
                            <span>Mensaje directo</span>
                        </div>

                        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-white mb-6 tracking-tight leading-tight">
                            Escríbeme
                        </h3>

                        <p class="text-white/90 text-lg sm:text-xl font-light leading-relaxed max-w-md">
                            Hola, me encantaría poder ayudarte a tener éxito en tu vida y disfrutar de esta vida.
                        </p>
                    </div>

                    <!-- Pie de columna elegante con amplio espacio en blanco -->
                    <div class="relative z-10 pt-10 mt-8 border-t border-white/10">
                        <div class="flex items-center gap-3 text-white/80 text-sm font-medium">
                            <svg class="w-5 h-5 text-[#F4D51F] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>Conferencias, mentorías y colaboraciones</span>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Amarillo #F4D51F -->
                <div class="lg:col-span-7 bg-[#F4D51F] p-8 sm:p-12 lg:p-14 flex flex-col justify-center">
                    <form action="#" method="POST" onsubmit="event.preventDefault();" class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <!-- Nombre -->
                            <div>
                                <label for="contacto-nombre" class="block text-sm font-semibold text-gray-900 mb-1.5">
                                    Nombre <span class="text-[#6846A5] font-bold">*</span>
                                </label>
                                <input type="text"
                                       id="contacto-nombre"
                                       name="nombre"
                                       required
                                       placeholder="Tu nombre"
                                       class="w-full px-4 py-3 rounded-xl bg-white border-0 text-gray-900 placeholder-gray-400 text-sm shadow-sm focus:ring-2 focus:ring-[#6846A5] focus:outline-none transition-all">
                            </div>

                            <!-- Apellidos -->
                            <div>
                                <label for="contacto-apellidos" class="block text-sm font-semibold text-gray-900 mb-1.5">
                                    Apellidos
                                </label>
                                <input type="text"
                                       id="contacto-apellidos"
                                       name="apellidos"
                                       placeholder="Tus apellidos"
                                       class="w-full px-4 py-3 rounded-xl bg-white border-0 text-gray-900 placeholder-gray-400 text-sm shadow-sm focus:ring-2 focus:ring-[#6846A5] focus:outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <!-- Correo electrónico -->
                            <div>
                                <label for="contacto-email" class="block text-sm font-semibold text-gray-900 mb-1.5">
                                    Correo electrónico <span class="text-[#6846A5] font-bold">*</span>
                                </label>
                                <input type="email"
                                       id="contacto-email"
                                       name="email"
                                       required
                                       placeholder="correo@ejemplo.com"
                                       class="w-full px-4 py-3 rounded-xl bg-white border-0 text-gray-900 placeholder-gray-400 text-sm shadow-sm focus:ring-2 focus:ring-[#6846A5] focus:outline-none transition-all">
                            </div>

                            <!-- Teléfono -->
                            <div>
                                <label for="contacto-telefono" class="block text-sm font-semibold text-gray-900 mb-1.5">
                                    Teléfono <span class="text-[#6846A5] font-bold">*</span>
                                </label>
                                <input type="tel"
                                       id="contacto-telefono"
                                       name="telefono"
                                       required
                                       placeholder="+51 987 654 321"
                                       class="w-full px-4 py-3 rounded-xl bg-white border-0 text-gray-900 placeholder-gray-400 text-sm shadow-sm focus:ring-2 focus:ring-[#6846A5] focus:outline-none transition-all">
                            </div>
                        </div>

                        <!-- Comentario o mensaje -->
                        <div>
                            <label for="contacto-mensaje" class="block text-sm font-semibold text-gray-900 mb-1.5">
                                Comentario o mensaje
                            </label>
                            <textarea id="contacto-mensaje"
                                      name="mensaje"
                                      rows="4"
                                      placeholder="¿En qué te puedo ayudar o de qué trataría tu evento?"
                                      class="w-full px-4 py-3 rounded-xl bg-white border-0 text-gray-900 placeholder-gray-400 text-sm shadow-sm focus:ring-2 focus:ring-[#6846A5] focus:outline-none transition-all resize-none"></textarea>
                        </div>

                        <!-- Botón Enviar mensaje -->
                        <div class="pt-2">
                            <button type="submit"
                                    class="w-full inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl bg-[#6846A5] hover:bg-[#58398E] text-white text-base font-bold tracking-wide shadow-md shadow-[#6846A5]/25 hover:shadow-lg hover:shadow-[#6846A5]/35 hover:scale-[1.01] active:scale-[0.99] transition-all duration-200">
                                <span>Enviar mensaje</span>
                               
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 sm:py-28 bg-[#0B0F17] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-6">
                ¿Listo para transformar tu liderazgo?
            </h2>

            <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                Únete a la comunidad de líderes que están engrandeciendo su ser para alcanzar el éxito verdadero.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

                <!-- Adquirir el libro -->
                <a href="#libro"
                class="inline-flex items-center justify-center px-8 py-3 rounded-xl bg-[#70C900] text-[#0B0F17] text-lg font-bold hover:bg-[#62b100] transition-all duration-200">
                    Adquirir el libro
                </a>

                <!-- WhatsApp -->
                <button
                    class="inline-flex items-center justify-center px-8 py-3 rounded-xl bg-[#6846A5] text-white text-lg font-semibold opacity-60 cursor-not-allowed transition-all duration-200"
                    disabled>
                    Unirse al grupo de WhatsApp
                </button>

            </div>
        </div>
    </section>
</x-layouts.app>