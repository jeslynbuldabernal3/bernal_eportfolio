<section id="projects" class="py-24" style="background-color: var(--bg-alt);">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-3xl sm:text-4xl font-bold mb-4">Projects</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
            <p class="mt-5 text-base max-w-2xl mx-auto" style="color: var(--text-secondary);">
                A curated selection of projects I've built or contributed to.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <div class="rounded-xl overflow-hidden card-hover card-base">
                    <div class="aspect-[4/3] overflow-hidden p-3" style="background-color: #f5f0e8;">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-contain rounded-lg transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-5">
                        <h3 class="font-serif text-lg font-bold mb-2">{{ $project['title'] }}</h3>
                        <p class="text-sm leading-relaxed mb-4" style="color: var(--text-secondary);">{{ $project['description'] }}</p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project['tags'] as $tag)
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-medium tag">{{ $tag }}</span>
                            @endforeach
                        </div>

                        <div class="flex items-center gap-4">
                            <a href="{{ $project['demo'] }}" class="inline-flex items-center gap-1.5 text-sm font-semibold transition-colors" style="color: var(--accent);" target="_blank" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                    <polyline points="15 3 21 3 21 9"/>
                                    <line x1="10" y1="14" x2="21" y2="3"/>
                                </svg>
                                Live Demo
                            </a>
                            <a href="{{ $project['github'] }}" class="inline-flex items-center gap-1.5 text-sm font-semibold transition-colors" style="color: var(--text-secondary);" target="_blank" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                                </svg>
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
