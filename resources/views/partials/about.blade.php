<section id="about" class="py-24" style="background-color: var(--bg-alt);">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-5xl sm:text-6xl font-bold mb-4">About Me</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="flex justify-center">
                <div class="relative" style="max-width: 320px; width: 100%;">
                    <div class="w-full aspect-square overflow-hidden card-base" style="border: 2px solid var(--accent); border-radius: 50%;">
                        <img src="./images/profile.jpg" alt="Profile photo" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div>
                <p class="font-serif text-xl sm:text-2xl leading-relaxed mb-6" style="color: var(--text-primary);">
                   I am currently a fourth-year college student at Data Center College of the Philippines. I am working hard to finish my studies and achieve my goals.
                </p>
                <p class="font-serif text-xl sm:text-2xl leading-relaxed mb-10" style="color: var(--text-primary);">
                    I believe that education will help me build a better future and prepare me for the challenges of my future career.
                </p>

               <!-- <div class="grid grid-cols-3 gap-4">
                    @foreach($stats as $stat)
                        <div class="stat-card rounded-xl p-5 text-center">
                            <div class="text-2xl sm:text-3xl font-magnolia font-bold mb-1" style="color: var(--accent);">{{ $stat['value'] }}</div>
                            <div class="text-xs sm:text-sm font-medium" style="color: var(--text-secondary);">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div> -->
            </div>
        </div>
    </div>
</section>
