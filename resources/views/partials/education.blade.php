<section id="education" class="py-24" style="background-color: var(--bg);">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-5xl sm:text-6xl font-bold mb-4">Education</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="relative pl-8">
                @foreach($education as $item)
                    <div class="timeline-item">
                        <div class="rounded-xl p-6 card-hover card-base">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <span class="inline-block px-3 py-1 rounded-full font-semibold" style="font-size: 17px; background: linear-gradient(135deg, var(--accent), var(--accent-light)); color: #0a0e1a;">{{ $item['duration'] }}</span>
                            </div>
                            <h3 class="font-serif font-bold mb-1" style="font-size: 21px;">{{ $item['degree'] }}</h3>
                            <p class="font-semibold mb-3" style="font-size: 17px; color: var(--accent);">{{ $item['school'] }}</p>
                            <p class="leading-relaxed" style="font-size: 17px; color: var(--text-secondary);">{{ $item['location'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
