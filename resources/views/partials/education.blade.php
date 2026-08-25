<section id="education" class="py-24" style="background-color: var(--bg);">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-3xl sm:text-4xl font-bold mb-4">Education</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="relative pl-8">
                @foreach($education as $item)
                    <div class="timeline-item">
                        <div class="rounded-xl p-6 card-hover card-base">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold" style="background: linear-gradient(135deg, var(--accent), var(--accent-light)); color: #0a0e1a;">{{ $item['duration'] }}</span>
                            </div>
                            <h3 class="font-serif text-lg font-bold mb-1">{{ $item['degree'] }}</h3>
                            <p class="text-sm font-semibold mb-3" style="color: var(--accent);">{{ $item['school'] }}</p>
                            <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">{{ $item['location'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
