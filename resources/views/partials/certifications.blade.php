<section id="certifications" class="py-24" style="background-color: var(--bg-alt);">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-3xl sm:text-4xl font-bold mb-4">Certifications</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($certifications as $cert)
                <div class="rounded-xl overflow-hidden card-hover card-base">
                    @if(!empty($cert['image']))
                        <div class="aspect-[4/3] overflow-hidden" style="background-color: #f5f0e8;">
                            <img src="{{ $cert['image'] }}" alt="{{ $cert['title'] }}" class="w-full h-full object-contain transition-transform duration-300 hover:scale-105">
                        </div>
                    @endif
                    <div class="p-6">
                        <div class="flex flex-wrap items-center gap-3 mb-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold" style="background: linear-gradient(135deg, var(--accent), var(--accent-light)); color: #0a0e1a;">{{ $cert['date'] }}</span>
                        </div>
                        <h3 class="font-serif text-lg font-bold mb-1">{{ $cert['title'] }}</h3>
                        <p class="text-sm font-semibold mb-2" style="color: var(--accent);">{{ $cert['issuer'] }}</p>
                        @if(!empty($cert['credential_id']))
                            <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">{{ $cert['credential_id'] }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
