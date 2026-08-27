<style>
    .cert-card {
        border: 1px solid var(--border);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }
    .cert-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 30px color-mix(in srgb, var(--accent) 25%, transparent),
                    0 0 0 1px var(--accent);
        border-color: var(--accent);
    }

    /* Lightbox overlay */
    #cert-lightbox {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    #cert-lightbox.active {
        opacity: 1;
        visibility: visible;
    }

    /* Lightbox image container: scale-in */
    #cert-lightbox .lb-content {
        transform: scale(0.85);
        transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    }
    #cert-lightbox.active .lb-content {
        transform: scale(1);
    }

    /* Circular zoom icon: fade + scale in on hover */
    .cert-zoom {
        transition: opacity 0.3s ease, transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }
    .cert-card:hover .cert-zoom {
        opacity: 1;
        transform: scale(1);
        background-color: var(--accent);
        box-shadow: 0 0 25px color-mix(in srgb, var(--accent) 55%, transparent);
    }

    /* Gold accent border around image */
    #cert-lightbox .lb-image-wrap {
        border: 2px solid var(--accent);
        box-shadow: 0 0 40px color-mix(in srgb, var(--accent) 20%, transparent),
                    0 25px 60px rgba(0, 0, 0, 0.5);
        border-radius: 0.75rem;
        overflow: hidden;
        background-color: var(--bg);
    }

    #cert-lightbox .lb-image-wrap img {
        max-width: 85vw;
        max-height: 70vh;
        width: auto;
        height: auto;
        display: block;
        object-fit: contain;
    }

    /* Close button */
    #cert-lightbox .lb-close {
        transition: color 0.2s ease, transform 0.2s ease;
    }
    #cert-lightbox .lb-close:hover {
        color: var(--accent);
        transform: rotate(90deg);
    }

    /* Nav arrows */
    #cert-lightbox .lb-nav {
        transition: background-color 0.2s ease, color 0.2s ease;
    }
    #cert-lightbox .lb-nav:hover {
        background-color: var(--accent);
        color: #0a0e1a;
    }

    /* Mobile adjustments */
    @media (max-width: 640px) {
        #cert-lightbox .lb-image-wrap img {
            max-width: 92vw;
            max-height: 60vh;
        }
        #cert-lightbox .lb-nav {
            width: 2.5rem;
            height: 2.5rem;
        }
    }
</style>

<section id="certifications" class="py-24" style="background-color: var(--bg-alt);">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-5xl sm:text-6xl font-bold mb-4">Certificates</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($certifications as $index => $cert)
                <div class="cert-card group rounded-2xl overflow-hidden card-base cursor-pointer"
                     data-lightbox="{{ $index }}"
                     data-src="{{ $cert['image'] }}"
                     data-title="{{ $cert['title'] }}"
                     data-issuer="{{ $cert['issuer'] }}">
                    <div class="aspect-[4/3] overflow-hidden relative" style="background-color: var(--bg-alt);">
                        <img src="{{ $cert['image'] }}"
                             alt="{{ $cert['title'] }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/25 transition-colors duration-300 flex items-center justify-center">
                            <div class="cert-zoom w-14 h-14 rounded-full flex items-center justify-center opacity-0 scale-75 transition-all duration-300" style="background-color: #c9a875;">
                                <svg class="w-7 h-7" style="color: #0a0e1a;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold" style="background: linear-gradient(135deg, var(--accent), var(--accent-light)); color: #0a0e1a;">{{ $cert['date'] }}</span>
                        </div>
                        <h3 class="font-serif text-lg font-bold mb-1 uppercase">{{ $cert['title'] }}</h3>
                        <p class="text-sm font-semibold uppercase tracking-wide" style="color: var(--accent);">{{ $cert['issuer'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="cert-lightbox" class="fixed inset-0 z-50 flex items-center justify-center p-4" style="background-color: rgba(0,0,0,0.85); backdrop-filter: blur(4px);">

        <!-- Close button -->
        <button id="lb-close" class="lb-close absolute top-4 right-4 sm:top-6 sm:right-6 text-white/70 hover:text-white z-20" aria-label="Close lightbox">
            <svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Previous arrow -->
        <button id="lb-prev" class="lb-nav absolute left-3 sm:left-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full flex items-center justify-center text-white/70" style="background-color: rgba(0,0,0,0.45);" aria-label="Previous certificate">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>

        <!-- Next arrow -->
        <button id="lb-next" class="lb-nav absolute right-3 sm:right-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full flex items-center justify-center text-white/70" style="background-color: rgba(0,0,0,0.45);" aria-label="Next certificate">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <!-- Image + caption (the scalable content) -->
        <div class="lb-content relative z-10 flex flex-col items-center">
            <div class="lb-image-wrap">
                <img id="lb-img" src="" alt="">
            </div>
            <div class="mt-4 text-center">
                <h3 id="lb-title" class="font-serif text-lg sm:text-xl font-bold text-white mb-0.5"></h3>
                <p id="lb-issuer" class="text-sm font-semibold" style="color: var(--accent);"></p>
                <p id="lb-counter" class="text-white/40 text-xs mt-1.5 tracking-wide"></p>
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    const overlay  = document.getElementById("cert-lightbox");
    const img      = document.getElementById("lb-img");
    const title    = document.getElementById("lb-title");
    const issuer   = document.getElementById("lb-issuer");
    const counter  = document.getElementById("lb-counter");
    const btnClose = document.getElementById("lb-close");
    const btnPrev  = document.getElementById("lb-prev");
    const btnNext  = document.getElementById("lb-next");
    if (!overlay) return;

    const items = Array.from(document.querySelectorAll("[data-lightbox]")).map(function (el) {
        return {
            src:    el.getAttribute("data-src"),
            title:  el.getAttribute("data-title"),
            issuer: el.getAttribute("data-issuer")
        };
    });

    var current = 0;

    function show(i) {
        current = i;
        var cert = items[current];
        img.src          = cert.src;
        img.alt          = cert.title;
        title.textContent  = cert.title;
        issuer.textContent = cert.issuer;
        counter.textContent = (current + 1) + " / " + items.length;
    }

    function open(i) {
        show(i);
        overlay.classList.add("active");
        document.body.style.overflow = "hidden";
    }

    function close() {
        overlay.classList.remove("active");
        document.body.style.overflow = "";
    }

    function prev() { show((current - 1 + items.length) % items.length); }
    function next() { show((current + 1) % items.length); }

    /* Thumbnail clicks */
    document.querySelectorAll("[data-lightbox]").forEach(function (card) {
        card.addEventListener("click", function () {
            open(parseInt(card.getAttribute("data-lightbox"), 10));
        });
    });

    /* Button clicks */
    btnClose.addEventListener("click", close);
    btnPrev.addEventListener("click", function (e) { e.stopPropagation(); prev(); });
    btnNext.addEventListener("click", function (e) { e.stopPropagation(); next(); });

    /* Click outside image = close */
    overlay.addEventListener("click", function (e) {
        if (e.target === overlay) close();
    });

    /* Keyboard */
    document.addEventListener("keydown", function (e) {
        if (!overlay.classList.contains("active")) return;
        if (e.key === "Escape")     close();
        if (e.key === "ArrowLeft")  prev();
        if (e.key === "ArrowRight") next();
    });
})();
</script>
