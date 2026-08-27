<style>
    /* ── Shared button style (used by both modals' triggers) ────── */
    .project-btn {
        border: 1px solid #c9a875;
        color: #c9a875;
        background: transparent;
        transition: background 0.25s ease, color 0.25s ease, box-shadow 0.25s ease;
    }
    .project-btn:hover {
        background: #c9a875;
        color: #0a0e1a;
        box-shadow: 0 0 16px rgba(201, 168, 117, 0.35);
    }
    /* Circular zoom icon: fade + scale in on card hover */
    .project-zoom {
        transition: opacity 0.3s ease, transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }
    .card-hover:hover .project-zoom,
    .js-project-card:hover .project-zoom {
        opacity: 1;
        transform: scale(1);
        background-color: #c9a875;
        box-shadow: 0 0 25px rgba(201, 168, 117, 0.55);
    }
    .photo-dim { background-color: rgba(0, 0, 0, 0); }
    .card-hover:hover .photo-dim,
    .js-project-card:hover .photo-dim {
        background-color: rgba(0, 0, 0, 0.25);
    }

    /* ══════════════ 1) PHOTO GALLERY MODAL (independent) ══════════════ */
    .photo-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(4px);
        z-index: 60;
        padding: 1rem;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    .photo-modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }
    .photo-modal-overlay .photo-content {
        transform: scale(0.9);
        opacity: 0;
        transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.3s ease;
        max-width: 100%;
        max-height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .photo-modal-overlay.active .photo-content {
        transform: scale(1);
        opacity: 1;
    }
    .photo-modal-overlay .photo-frame {
        display: inline-block;
        border-radius: 0.75rem;
        border: 2px solid #c9a875;
        box-shadow: 0 0 40px rgba(201, 168, 117, 0.2), 0 25px 60px rgba(0, 0, 0, 0.5);
        background-color: var(--bg);
        line-height: 0;
        max-width: 90vw;
        max-height: 80vh;
    }
    .photo-modal-overlay .photo-frame .photo-img {
        display: block;
        max-width: 90vw;
        max-height: 80vh;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: calc(0.75rem - 2px);
    }
    .photo-modal-overlay .photo-close {
        position: absolute;
        top: 16px;
        right: 16px;
        z-index: 20;
        transition: color 0.2s ease, transform 0.2s ease;
    }
    .photo-modal-overlay .photo-close:hover {
        color: var(--accent);
        transform: rotate(90deg);
    }
    .photo-modal-overlay .photo-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 20;
        transition: background-color 0.2s ease, color 0.2s ease;
    }
    .photo-modal-overlay .photo-prev { left: 12px; }
    .photo-modal-overlay .photo-next { right: 12px; }
    .photo-modal-overlay .photo-nav:hover {
        background-color: #c9a875;
        color: #0a0e1a;
    }
    .photo-modal-overlay .photo-dots {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 12px;
    }
    .photo-modal-overlay .photo-dot {
        width: 10px;
        height: 10px;
        flex: 0 0 auto;
        border-radius: 50%;
        border: none;
        padding: 0;
        cursor: pointer;
        background-color: rgba(255, 255, 255, 0.35);
        transition: background-color 0.2s ease, transform 0.2s ease;
    }
    .photo-modal-overlay .photo-dot:hover { transform: scale(1.2); }
    .photo-modal-overlay .photo-dot.active { background-color: #c9a875; }
    @media (min-width: 640px) {
        .photo-modal-overlay .photo-nav { top: 50%; }
        .photo-modal-overlay .photo-prev { left: 20px; }
        .photo-modal-overlay .photo-next { right: 20px; }
    }
    @media (max-width: 640px) {
        .photo-modal-overlay .photo-nav { width: 2.5rem; height: 2.5rem; }
    }

    /* ══════════════ 2) PROJECT DETAILS MODAL (independent) ══════════════ */
    .details-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(4px);
        z-index: 70;
        padding: 1rem;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    .details-modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }
    .details-modal-overlay .details-content {
        transform: scale(0.92);
        opacity: 0;
        transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.3s ease;
    }
    .details-modal-overlay.active .details-content {
        transform: scale(1);
        opacity: 1;
    }
    .details-modal-overlay .details-close {
        position: absolute;
        top: 16px;
        right: 16px;
        z-index: 20;
        transition: color 0.2s ease, transform 0.2s ease;
    }
    .details-modal-overlay .details-close:hover {
        color: var(--accent);
        transform: rotate(90deg);
    }
    .details-modal-overlay .details-card {
        max-width: 40rem;
        width: 100%;
        max-height: 88vh;
        overflow-y: auto;
        border-radius: 1rem;
        background-color: var(--bg-alt);
        border: 1px solid #c9a875;
        box-shadow: 0 0 40px rgba(201, 168, 117, 0.2), 0 25px 60px rgba(0, 0, 0, 0.5);
    }
    .details-modal-overlay .details-image {
        aspect-ratio: 16 / 9;
        width: 100%;
        object-fit: cover;
        display: block;
    }
    @media (max-width: 640px) {
        .details-modal-overlay .details-card { max-width: 100%; }
    }
</style>

<section id="projects" class="py-24" style="background-color: var(--bg-alt);">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-5xl sm:text-6xl font-bold mb-4">Projects</h2>
            <div class="w-20 h-0.5 mx-auto section-line"></div>
            <p class="mt-5 max-w-2xl mx-auto leading-relaxed" style="font-size: 20px; color: var(--text-secondary);">
                A curated selection of projects I've built or contributed to.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                @php
                    $photos     = $project['photos'] ?? [];
                    if (!is_array($photos)) { $photos = $photos ? [$photos] : []; }
                    $photos     = array_values(array_filter($photos));
                    $photoCount = count($photos);
                    $cardImage  = $project['image'] ?? ($photoCount > 0 ? $photos[0] : null);
                    $puid       = $loop->index;
                @endphp

                <div class="rounded-xl overflow-hidden card-hover card-base flex flex-col js-project-card"
                     data-project-index="{{ $puid }}">
                    @if(!empty($cardImage))
                        <div class="aspect-[4/3] overflow-hidden relative rounded-t-xl cursor-pointer js-open-photo" style="background-color: #f5f0e8; border-radius: 0.75rem 0.75rem 0 0;"
                             data-photo-id="{{ $puid }}"
                             data-photo-title="{{ $project['title'] }}"
                             data-photo-src="{{ $cardImage }}"
                             data-photos='@json($photos)'>
                            <img src="{{ $cardImage }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            @if($photoCount > 0)
                                <div class="absolute inset-0 photo-dim transition-colors duration-300 flex items-center justify-center">
                                    <div class="project-zoom w-12 h-12 rounded-full flex items-center justify-center opacity-0 scale-75 transition-all duration-300" style="background-color: #c9a875;">
                                        <svg class="w-6 h-6" style="color: #0a0e1a;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                        </svg>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                    <div class="p-5 flex flex-col flex-1{{ empty($cardImage) ? ' items-center text-center' : '' }}">
                        <h3 class="font-serif font-bold mb-2" style="font-size: 21px;">{{ $project['title'] }}</h3>
                        <p class="leading-relaxed mb-4" style="font-size: 17px; color: var(--text-secondary);">{{ $project['description'] }}</p>

                        <div class="flex flex-wrap gap-2 mb-4{{ empty($cardImage) ? ' justify-center' : '' }}">
                            @foreach($project['tags'] as $tag)
                                <span class="px-2.5 py-0.5 rounded-full font-medium tag" style="font-size: 17px;">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ══════════ PHOTO GALLERY MODAL (independent) ══════════ -->
    <div id="photoGalleryModal" class="photo-modal-overlay" aria-hidden="true">
        <button id="photo-close" class="photo-close text-white/70 hover:text-white" aria-label="Close photo gallery">
            <svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <button id="photo-prev" class="photo-nav photo-prev w-10 h-10 sm:w-11 sm:h-11 rounded-full flex items-center justify-center text-white/70" style="background-color: rgba(0,0,0,0.45);" aria-label="Previous photo">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>

        <button id="photo-next" class="photo-nav photo-next w-10 h-10 sm:w-11 sm:h-11 rounded-full flex items-center justify-center text-white/70" style="background-color: rgba(0,0,0,0.45);" aria-label="Next photo">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <div class="photo-content relative z-10 flex flex-col items-center max-w-full">
            <h3 id="photo-title" class="font-serif font-bold text-white text-center mb-4" style="font-size: 22px;"></h3>
            <div class="photo-frame">
                <img id="photo-img" class="photo-img" src="" alt="">
            </div>
            <div class="mt-4 text-center">
                <p id="photo-counter" class="text-white/40 text-xs tracking-wide"></p>
            </div>
            <div id="photo-dots" class="photo-dots"></div>
        </div>
    </div>

    <!-- ══════════ PROJECT DETAILS MODAL (independent) ══════════ -->
    <div id="projectDetailsModal" class="details-modal-overlay" aria-hidden="true">
        <button id="details-close" class="details-close text-white/70 hover:text-white" aria-label="Close project details">
            <svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="details-content relative z-10 w-full flex justify-center">
            <div class="details-card relative">
                <img id="details-image" class="details-image" src="" alt="">
                <div class="p-6 sm:p-8">
                    <h3 id="details-title" class="font-serif text-2xl sm:text-3xl font-bold mb-3" style="color: var(--text-primary);"></h3>
                    <p id="details-description" class="leading-relaxed mb-4" style="font-size: 17px; color: var(--text-secondary);"></p>
                    <div id="details-tags" class="flex flex-wrap gap-2 mb-5"></div>
                    <div id="details-live">
                        <a id="details-live-url" href="#" target="_blank" rel="noopener noreferrer"
                           class="project-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg font-semibold" style="font-size: 17px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                            View Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    "use strict";

    /* ══════════════ 1) PHOTO GALLERY MODAL — independent state ══════════════ */
    const photoOverlay  = document.getElementById("photoGalleryModal");
    const photoImg      = document.getElementById("photo-img");
    const photoTitle    = document.getElementById("photo-title");
    const photoCounter  = document.getElementById("photo-counter");
    const photoDotsWrap = document.getElementById("photo-dots");
    const photoContent  = photoOverlay ? photoOverlay.querySelector(".photo-content") : null;
    const photoBtnClose = document.getElementById("photo-close");
    const photoBtnPrev  = document.getElementById("photo-prev");
    const photoBtnNext  = document.getElementById("photo-next");

    const photoGalleries = {};
    const photoTitles = {};
    document.querySelectorAll(".js-photo-btn").forEach(function (btn) {
        const idx = btn.getAttribute("data-index");
        photoGalleries[idx] = JSON.parse(btn.getAttribute("data-photos") || "[]");
        photoTitles[idx] = btn.getAttribute("data-title") || "";
    });

    const photoState = {
        gallery: null,
        current: 0
    };

    function renderPhotoDots() {
        if (!photoDotsWrap) return;
        photoDotsWrap.innerHTML = "";
        if (photoState.gallery.length <= 1) return;
        photoState.gallery.forEach(function (_, i) {
            const dot = document.createElement("button");
            dot.type = "button";
            dot.className = "photo-dot" + (i === photoState.current ? " active" : "");
            dot.setAttribute("aria-label", "Go to photo " + (i + 1));
            dot.addEventListener("click", function () {
                showPhoto(i);
            });
            photoDotsWrap.appendChild(dot);
        });
    }

    function showPhoto(i) {
        if (!photoState.gallery || !photoState.gallery.length) return;
        photoState.current = (i + photoState.gallery.length) % photoState.gallery.length;
        photoImg.src = photoState.gallery[photoState.current];
        photoCounter.textContent = photoState.gallery.length > 1
            ? (photoState.current + 1) + " / " + photoState.gallery.length
            : "";
        renderPhotoDots();
    }

    function openPhotoModal(projectId, explicitGallery, explicitTitle) {
        photoState.gallery = explicitGallery || photoGalleries[projectId] || [];
        if (!photoState.gallery.length) return;
        photoState.current = 0;
        const t = explicitTitle || photoTitles[projectId] || "";
        photoTitle.textContent = t;
        photoImg.alt = t;
        photoImg.src = photoState.gallery[0];
        showPhoto(0);
        photoOverlay.classList.add("active");
        photoOverlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                photoContent.style.transform = "scale(1)";
                photoContent.style.opacity = "1";
            });
        });
    }

    function closePhotoModal() {
        if (!photoOverlay.classList.contains("active")) return;
        photoOverlay.classList.remove("active");
        photoOverlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
        setTimeout(function () {
            photoImg.src = "";
            photoState.gallery = null;
        }, 300);
    }

    function photoPrev() { if (photoState.gallery) showPhoto(photoState.current - 1); }
    function photoNext() { if (photoState.gallery) showPhoto(photoState.current + 1); }

    document.querySelectorAll(".js-photo-btn").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            openPhotoModal(btn.getAttribute("data-index"));
        });
    });
    // Clicking the card image / zoom icon opens the photo modal
    document.querySelectorAll(".js-open-photo").forEach(function (el) {
        el.addEventListener("click", function (e) {
            e.stopPropagation();
            const id = el.getAttribute("data-photo-id");
            const t  = el.getAttribute("data-photo-title") || "";
            let photos = [];
            try { photos = JSON.parse(el.getAttribute("data-photos") || "[]"); } catch (err) { photos = []; }
            if (photos.length > 0) {
                openPhotoModal(id, photos, t);
            } else {
                const src = el.getAttribute("data-photo-src");
                if (src) openPhotoModal(id, [src], t);
            }
        });
    });
    if (photoBtnClose) photoBtnClose.addEventListener("click", closePhotoModal);
    if (photoBtnPrev)  photoBtnPrev.addEventListener("click", function (e) { e.stopPropagation(); photoPrev(); });
    if (photoBtnNext)  photoBtnNext.addEventListener("click", function (e) { e.stopPropagation(); photoNext(); });
    if (photoOverlay)  photoOverlay.addEventListener("click", function (e) {
        if (e.target === photoOverlay) closePhotoModal();
    });

    /* ══════════════ 2) PROJECT DETAILS MODAL — independent state ══════════════ */
    const detailsOverlay  = document.getElementById("projectDetailsModal");
    const detailsImage    = document.getElementById("details-image");
    const detailsTitle    = document.getElementById("details-title");
    const detailsDesc     = document.getElementById("details-description");
    const detailsTags     = document.getElementById("details-tags");
    const detailsLive     = document.getElementById("details-live");
    const detailsLiveUrl  = document.getElementById("details-live-url");
    const detailsContent  = detailsOverlay ? detailsOverlay.querySelector(".details-content") : null;
    const detailsBtnClose = document.getElementById("details-close");

    const detailsData = {};
    document.querySelectorAll(".js-project-card").forEach(function (card) {
        const id = card.getAttribute("data-project-index");
        const img = card.querySelector("img");
        const live = card.querySelector('a[target="_blank"][rel="noopener noreferrer"]');
        const tags = [];
        card.querySelectorAll(".tag").forEach(function (t) { tags.push(t.textContent.trim()); });
        const titleEl = card.querySelector("h3.js-open-details");
        const descEl  = card.querySelector("p.leading-relaxed");
        detailsData[id] = {
            image: img ? img.src : "",
            title: titleEl ? titleEl.textContent.trim() : "",
            description: descEl ? descEl.textContent.trim() : "",
            tags: tags,
            live_url: live ? live.getAttribute("href") : null
        };
    });

    function renderDetailsTags(tags) {
        if (!detailsTags) return;
        detailsTags.innerHTML = "";
        (tags || []).forEach(function (tag) {
            const span = document.createElement("span");
            span.className = "px-2.5 py-0.5 rounded-full font-medium tag";
            span.style.fontSize = "14px";
            span.textContent = tag;
            detailsTags.appendChild(span);
        });
    }

    function openDetailsModal(projectId) {
        const d = detailsData[projectId];
        if (!d) return;
        detailsTitle.textContent = d.title || "";
        detailsDesc.textContent = d.description || "";
        renderDetailsTags(d.tags);
        if (detailsImage) {
            if (d.image) { detailsImage.src = d.image; detailsImage.style.display = "block"; }
            else { detailsImage.style.display = "none"; }
        }
        if (d.live_url) {
            detailsLiveUrl.href = d.live_url;
            detailsLive.style.display = "";
        } else {
            detailsLive.style.display = "none";
        }
        detailsOverlay.classList.add("active");
        detailsOverlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                detailsContent.style.transform = "scale(1)";
                detailsContent.style.opacity = "1";
            });
        });
    }

    function closeDetailsModal() {
        if (!detailsOverlay.classList.contains("active")) return;
        detailsOverlay.classList.remove("active");
        detailsOverlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
        setTimeout(function () {
            detailsTitle.textContent = "";
            detailsDesc.textContent = "";
        }, 300);
    }

    document.querySelectorAll(".js-details-btn").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            openDetailsModal(btn.getAttribute("data-details-id"));
        });
    });
    // Card title also opens details (skipped when details are hidden)
    document.querySelectorAll(".js-open-details").forEach(function (el) {
        el.addEventListener("click", function (e) {
            if (e.target.closest(".js-photo-btn") || e.target.closest(".js-details-btn")) return;
            const card = el.closest(".js-project-card");
            if (!card) return;
            if (!card.querySelector(".js-details-btn")) return;
            openDetailsModal(card.getAttribute("data-project-index"));
        });
    });
    if (detailsBtnClose) detailsBtnClose.addEventListener("click", closeDetailsModal);
    if (detailsOverlay)  detailsOverlay.addEventListener("click", function (e) {
        if (e.target === detailsOverlay) closeDetailsModal();
    });

    /* ── Esc closes whichever modal is currently active (not both) ── */
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            if (detailsOverlay.classList.contains("active")) closeDetailsModal();
            else if (photoOverlay.classList.contains("active")) closePhotoModal();
        }
        if (e.key === "ArrowLeft")  { if (photoOverlay.classList.contains("active")) photoPrev(); }
        if (e.key === "ArrowRight") { if (photoOverlay.classList.contains("active")) photoNext(); }
    });
})();
</script>
