<section id="contact" class="py-24" style="background-color: var(--bg);">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-3xl sm:text-4xl font-bold mb-4">Get In Touch</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
            <p class="mt-5 text-base max-w-xl mx-auto" style="color: var(--text-secondary);">
                Have a project in mind or just want to say hello? Feel free to reach out.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10 max-w-4xl mx-auto">
            <div class="space-y-5">
                <a href="mailto:jeslyn@example.com" class="flex items-center gap-4 p-5 rounded-xl card-hover card-base">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background: color-mix(in srgb, var(--accent) 15%, transparent);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs font-medium mb-0.5" style="color: var(--text-secondary);">Email</div>
                        <div class="text-sm font-semibold">jeslynbuldabernal3.com</div>
                    </div>
                </a>

                <div class="flex items-center gap-4 p-5 rounded-xl card-base">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background: color-mix(in srgb, var(--accent) 15%, transparent);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs font-medium mb-0.5" style="color: var(--text-secondary);">Location</div>
                        <div class="text-sm font-semibold">Sta.Rosa Bangued Abra</div>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-5 rounded-xl card-base">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background: color-mix(in srgb, var(--accent) 15%, transparent);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs font-medium mb-0.5" style="color: var(--text-secondary);">Phone</div>
                        <div class="text-sm font-semibold">+63 936 105 2907</div>
                    </div>
                </div>
            </div>

            <form class="space-y-4" onsubmit="return false;">
                <div>
                    <input type="text" placeholder="Your Name" required class="w-full px-4 py-3 rounded-xl text-sm outline-none transition-all duration-200" style="background-color: var(--bg-card); border: 1px solid var(--border); color: var(--text-primary);" onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor='var(--border)'">
                </div>
                <div>
                    <input type="email" placeholder="Your Email" required class="w-full px-4 py-3 rounded-xl text-sm outline-none transition-all duration-200" style="background-color: var(--bg-card); border: 1px solid var(--border); color: var(--text-primary);" onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor='var(--border)'">
                </div>
                <div>
                    <textarea rows="5" placeholder="Your Message" required class="w-full px-4 py-3 rounded-xl text-sm outline-none transition-all duration-200 resize-none" style="background-color: var(--bg-card); border: 1px solid var(--border); color: var(--text-primary);" onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor='var(--border)'"></textarea>
                </div>
                <button type="submit" class="btn-primary w-full py-3 rounded-xl text-sm font-semibold">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
