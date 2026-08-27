<section id="home" class="min-h-screen flex items-center justify-center relative" style="background-color: var(--bg);">
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <div class="mb-8">
            <span class="inline-block px-5 py-2 rounded-full text-sm font-semibold tracking-widest uppercase tag">
                Available for opportunities
            </span>
        </div>

        <h1 class="font-serif font-bold tracking-tight leading-none mb-8 gold-glow whitespace-nowrap" style="font-size: 8rem;">
            {{ $name }}
        </h1>

        <div class="w-24 h-0.5 mx-auto mb-8 section-line"></div>

        <p class="text-xl sm:text-2xl md:text-3xl font-light max-w-3xl mx-auto mb-14 leading-relaxed" style="color: var(--text-secondary); font-family: 'Natural', cursive;">
            {{ $tagline }}
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
            <a href="#projects" class="btn-primary inline-flex items-center justify-center gap-2.5 px-10 py-4 rounded-xl text-base font-semibold" style="min-width: 220px;">
                View My Work
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>
            <a href="#contact" class="btn-outline inline-flex items-center justify-center gap-2.5 px-10 py-4 rounded-xl text-base font-semibold" style="min-width: 220px;">
                Get In Touch
            </a>
        </div>

        <div class="mt-24 animate-bounce" style="color: var(--accent);">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"/>
            </svg>
        </div>
    </div>
</section>
