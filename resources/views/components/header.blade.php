<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md transition-all duration-300"
        x-data="{ mobileMenuOpen: false, scrolled: false }"
        :class="scrolled ? 'shadow-sm shadow-[#6846A5]/10 border-b border-gray-100' : 'border-b border-transparent'"
        @scroll.window="scrolled = window.scrollY > 20">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Navegación principal">
        <div class="flex h-20 items-center justify-between">
            <!-- Logo César Díaz -->
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center group" aria-label="{{ config('app.name') }} - Inicio">
                    <img src="{{ asset('images/logo-cesar.png') }}"
                         alt="{{ config('app.name') }}"
                         class="h-12 sm:h-14 lg:h-16 w-auto transition-transform duration-300 group-hover:scale-[1.02]">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:items-center lg:space-x-8 xl:space-x-9">
                <a href="#inicio" class="relative group py-2 text-[15px] font-semibold text-[#6846A5] transition-colors duration-200 hover:text-[#4F2F8B]">
                    <span>Inicio</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#70C900] rounded-full transition-all duration-300 ease-out group-hover:w-full"></span>
                </a>
                <a href="#libro" class="relative group py-2 text-[15px] font-semibold text-[#6846A5] transition-colors duration-200 hover:text-[#4F2F8B]">
                    <span>Libro</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#70C900] rounded-full transition-all duration-300 ease-out group-hover:w-full"></span>
                </a>
                <a href="#videos" class="relative group py-2 text-[15px] font-semibold text-[#6846A5] transition-colors duration-200 hover:text-[#4F2F8B]">
                    <span>Videos</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#70C900] rounded-full transition-all duration-300 ease-out group-hover:w-full"></span>
                </a>
                <a href="#eventos" class="relative group py-2 text-[15px] font-semibold text-[#6846A5] transition-colors duration-200 hover:text-[#4F2F8B]">
                    <span>Eventos</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#70C900] rounded-full transition-all duration-300 ease-out group-hover:w-full"></span>
                </a>
                <a href="#blog" class="relative group py-2 text-[15px] font-semibold text-[#6846A5] transition-colors duration-200 hover:text-[#4F2F8B]">
                    <span>Blog</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#70C900] rounded-full transition-all duration-300 ease-out group-hover:w-full"></span>
                </a>
                <a href="#contacto" class="relative group py-2 text-[15px] font-semibold text-[#6846A5] transition-colors duration-200 hover:text-[#4F2F8B]">
                    <span>Contacto</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#70C900] rounded-full transition-all duration-300 ease-out group-hover:w-full"></span>
                </a>
            </div>

            <!-- Desktop Social Icons Buttons -->
            <div class="hidden lg:flex lg:items-center lg:space-x-3">
                <a href="https://web.facebook.com/profile.php?id=61576606527153"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="w-9 h-9 rounded-lg bg-[#6846A5] text-white flex items-center justify-center transition-all duration-300 shadow-sm hover:bg-[#1877F2] hover:-translate-y-0.5 hover:shadow-md hover:shadow-[#1877F2]/25"
                   aria-label="Facebook de César Díaz">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </a>
                <a href="https://www.youtube.com/channel/UCRpXITe8tKDhrDAsk7bLkiA"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="w-9 h-9 rounded-lg bg-[#6846A5] text-white flex items-center justify-center transition-all duration-300 shadow-sm hover:bg-[#FF0000] hover:-translate-y-0.5 hover:shadow-md hover:shadow-[#FF0000]/25"
                   aria-label="Canal de YouTube de César Díaz">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="https://www.instagram.com/cesardiaz_oficial/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="w-9 h-9 rounded-lg bg-[#6846A5] text-white flex items-center justify-center transition-all duration-300 shadow-sm hover:bg-[#E4405F] hover:-translate-y-0.5 hover:shadow-md hover:shadow-[#E4405F]/25"
                   aria-label="Instagram de César Díaz">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="w-11 h-11 rounded-xl flex items-center justify-center text-[#6846A5] hover:bg-[#6846A5]/10 active:bg-[#6846A5]/20 transition-colors focus:outline-none focus:ring-2 focus:ring-[#6846A5]/30"
                        aria-label="Abrir menú"
                        :aria-expanded="mobileMenuOpen">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="mobileMenuOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-3"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-3"
             class="lg:hidden py-4 border-t border-gray-100 bg-white shadow-2xl rounded-b-2xl px-2">
            <div class="flex flex-col space-y-1">
                <a href="#inicio" @click="mobileMenuOpen = false" class="flex items-center justify-between text-base font-semibold text-[#6846A5] hover:text-[#4F2F8B] hover:bg-[#6846A5]/5 px-4 py-3 rounded-xl transition-colors">
                    <span>Inicio</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#70C900]"></span>
                </a>
                <a href="#libro" @click="mobileMenuOpen = false" class="flex items-center justify-between text-base font-semibold text-[#6846A5] hover:text-[#4F2F8B] hover:bg-[#6846A5]/5 px-4 py-3 rounded-xl transition-colors">
                    <span>Libro</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#70C900]"></span>
                </a>
                <a href="#videos" @click="mobileMenuOpen = false" class="flex items-center justify-between text-base font-semibold text-[#6846A5] hover:text-[#4F2F8B] hover:bg-[#6846A5]/5 px-4 py-3 rounded-xl transition-colors">
                    <span>Videos</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#70C900]"></span>
                </a>
                <a href="#eventos" @click="mobileMenuOpen = false" class="flex items-center justify-between text-base font-semibold text-[#6846A5] hover:text-[#4F2F8B] hover:bg-[#6846A5]/5 px-4 py-3 rounded-xl transition-colors">
                    <span>Eventos</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#70C900]"></span>
                </a>
                <a href="#blog" @click="mobileMenuOpen = false" class="flex items-center justify-between text-base font-semibold text-[#6846A5] hover:text-[#4F2F8B] hover:bg-[#6846A5]/5 px-4 py-3 rounded-xl transition-colors">
                    <span>Blog</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#70C900]"></span>
                </a>
                <a href="#contacto" @click="mobileMenuOpen = false" class="flex items-center justify-between text-base font-semibold text-[#6846A5] hover:text-[#4F2F8B] hover:bg-[#6846A5]/5 px-4 py-3 rounded-xl transition-colors">
                    <span>Contacto</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#70C900]"></span>
                </a>

                <!-- Mobile Social Links -->
                <div class="flex items-center justify-between pt-4 pb-2 px-4 border-t border-gray-100 mt-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-gray-500">Sígueme en redes:</span>
                    <div class="flex space-x-2.5">
                        <a href="https://web.facebook.com/profile.php?id=61576606527153" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-[#6846A5] text-white flex items-center justify-center hover:bg-[#1877F2] transition-colors" aria-label="Facebook">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCRpXITe8tKDhrDAsk7bLkiA" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-[#6846A5] text-white flex items-center justify-center hover:bg-[#FF0000] transition-colors" aria-label="YouTube">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/cesardiaz_oficial/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-[#6846A5] text-white flex items-center justify-center hover:bg-[#E4405F] transition-colors" aria-label="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>