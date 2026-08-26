<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="#home" class="font-serif text-xl font-bold tracking-wide" style="color: var(--accent);">
                JB
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="nav-link text-base font-medium" style="color: var(--text-secondary);">Home</a>
                <a href="#about" class="nav-link text-base font-medium" style="color: var(--text-secondary);">About</a>
                <a href="#education" class="nav-link text-base font-medium" style="color: var(--text-secondary);">Education</a>
                <a href="#certifications" class="nav-link text-base font-medium" style="color: var(--text-secondary);">Certifications</a>
                <a href="#projects" class="nav-link text-base font-medium" style="color: var(--text-secondary);">Projects</a>
                <a href="#contact" class="nav-link text-base font-medium" style="color: var(--text-secondary);">Contact</a>
            </div>

            <div class="flex items-center gap-3">
                <button id="theme-toggle" class="p-2 rounded-lg transition-colors hover:opacity-80" style="color: var(--text-secondary);" aria-label="Toggle dark mode">
                    <svg id="theme-icon-light" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                    </svg>
                    <svg id="theme-icon-dark" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5"/>
                        <line x1="12" y1="1" x2="12" y2="3"/>
                        <line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/>
                        <line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </svg>
                </button>

                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg" style="color: var(--text-secondary);" aria-label="Toggle menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden border-t" style="border-color: var(--border); background-color: rgba(10, 14, 26, 0.95);">
        <div class="px-4 py-3 space-y-1">
            <a href="#home" class="block px-3 py-2 rounded-lg text-base font-medium transition-colors" style="color: var(--text-secondary);">Home</a>
            <a href="#about" class="block px-3 py-2 rounded-lg text-base font-medium transition-colors" style="color: var(--text-secondary);">About</a>
            <a href="#education" class="block px-3 py-2 rounded-lg text-base font-medium transition-colors" style="color: var(--text-secondary);">Education</a>
            <a href="#certifications" class="block px-3 py-2 rounded-lg text-base font-medium transition-colors" style="color: var(--text-secondary);">Certifications</a>
            <a href="#projects" class="block px-3 py-2 rounded-lg text-base font-medium transition-colors" style="color: var(--text-secondary);">Projects</a>
            <a href="#contact" class="block px-3 py-2 rounded-lg text-base font-medium transition-colors" style="color: var(--text-secondary);">Contact</a>
        </div>
    </div>
</nav>
