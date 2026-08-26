<style>
    .project-btn {
        border: 1px solid var(--accent);
        color: var(--accent);
        background: transparent;
        transition: background 0.25s ease, color 0.25s ease, box-shadow 0.25s ease;
    }
    .project-btn:hover {
        background: var(--accent);
        color: #0a0e1a;
        box-shadow: 0 0 16px color-mix(in srgb, var(--accent) 35%, transparent);
    }
</style>

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
                <div class="rounded-xl overflow-hidden card-hover card-base flex flex-col">
                    @if(!empty($project['image']))
                        <div class="aspect-[4/3] overflow-hidden p-3" style="background-color: #f5f0e8;">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-contain rounded-lg transition-transform duration-300 hover:scale-105">
                        </div>
                    @endif
                    <div class="p-5 flex flex-col flex-1{{ empty($project['image']) ? ' items-center text-center' : '' }}">
                        <h3 class="font-serif font-bold mb-2" style="font-size: 21px;">{{ $project['title'] }}</h3>
                        <p class="leading-relaxed mb-4" style="font-size: 17px; color: var(--text-secondary);">{{ $project['description'] }}</p>

                        <div class="flex flex-wrap gap-2 mb-4{{ empty($project['image']) ? ' justify-center' : '' }}">
                            @foreach($project['tags'] as $tag)
                                <span class="px-2.5 py-0.5 rounded-full font-medium tag" style="font-size: 17px;">{{ $tag }}</span>
                            @endforeach
                        </div>

                        {{-- Action buttons — only shown if the value is not null/empty --}}
                        <div class="flex flex-wrap items-center gap-3 mt-auto pt-2{{ empty($project['image']) ? ' justify-center' : '' }}">
                            @if(!empty($project['live_url']))
                                <a href="{{ $project['live_url'] }}"
                                   class="project-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg font-semibold" style="font-size: 17px;"
                                   target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                        <polyline points="15 3 21 3 21 9"/>
                                        <line x1="10" y1="14" x2="21" y2="3"/>
                                    </svg>
                                    View Project
                                </a>
                            @endif

                            @if(!empty($project['document_path']))
                                <a href="{{ route('documents.show', basename($project['document_path'])) }}"
                                   class="project-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg font-semibold" style="font-size: 17px;"
                                   target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14 2 14 8 20 8"/>
                                        <line x1="16" y1="13" x2="8" y2="13"/>
                                        <line x1="16" y1="17" x2="8" y2="17"/>
                                        <polyline points="10 9 9 9 8 9"/>
                                    </svg>
                                    View Document
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
