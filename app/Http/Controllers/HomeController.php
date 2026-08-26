<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Jeslyn B. Bernal';

        $tagline = 'Bachelor of Science in Information Technology';

        $stats = [
            ['value' => '', 'label' => ''],
            ['value' => '', 'label' => ''],
            ['value' => '', 'label' => ''],
        ];

        $education = [
            [
                'duration' => '2023 – Present',
                'degree' => 'Bachelor of Science in Information Technology',
                'school' => 'Data Center College of Bangued',
                'location' => 'Ubbog-Lipcan, Bangued, Abra',
            ],
            [
                'duration' => '2021 – 2023',
                'degree' => 'General Academic Strand',
                'school' => 'Abra High School',
                'location' => 'Zone 3, Bangued, Abra',
            ],
        ];

        // ─── PROJECTS ─────────────────────────────────────────────
        // To add a new project, copy one block below and fill in:
        //   title        – project name
        //   description  – short summary (1-2 sentences)
        //   image        – thumbnail path inside public/images/projects/
        //   tags         – array of tech tags
        //   live_url     – external URL (Live Demo) — set to null to hide the button
        //   document_path– local PDF/doc inside public/documents/ — set to null to hide the button
        // ──────────────────────────────────────────────────────────

        $projects = [
            [
                'title'         => 'System Analysis and Design',
                'description'   => 'A web-based ordering and management system for Happy Stem\'s floral shop, featuring customer browsing, cart, checkout and an admin dashboard for product and order management.',
                'image'         => null,
                'tags'          => ['php', 'MySQL'],
                'live_url'      => null,
                'document_path' => '/documents/happystem_chap4.docx',
            ],
            [
                'title'         => 'Task Management App',
                'description'   => 'A collaborative project management tool with real-time updates, drag-and-drop boards, and team workspaces.',
                'image'         => '/images/projects/task-manager.jpg',
                'tags'          => ['Vue.js', 'Laravel', 'WebSocket', 'Redis'],
                'live_url'      => null,                            // REPLACE with your live demo URL, or null to hide
                'document_path' => null,                            // REPLACE with e.g. '/documents/task-manager-docs.pdf', or null to hide
            ],
            [
                'title'         => 'Weather Dashboard',
                'description'   => 'A responsive weather application featuring 7-day forecasts, interactive maps, and location-based alerts.',
                'image'         => '/images/projects/weather.jpg',
                'tags'          => ['React', 'OpenWeather API', 'Chart.js', 'Tailwind CSS'],
                'live_url'      => null,
                'document_path' => null,
            ],
            [
                'title'         => 'Portfolio CMS',
                'description'   => 'A lightweight content management system for developers to showcase their work with a clean, minimal interface.',
                'image'         => '/images/projects/portfolio-cms.jpg',
                'tags'          => ['Laravel', 'Blade', 'SQLite', 'Vite'],
                'live_url'      => null,
                'document_path' => null,
            ],
            [
                'title'         => 'Chat Application',
                'description'   => 'Real-time messaging platform with private and group chats, file sharing, and emoji support.',
                'image'         => '/images/projects/chat-app.jpg',
                'tags'          => ['Node.js', 'Socket.io', 'Express', 'MongoDB'],
                'live_url'      => null,
                'document_path' => null,
            ],
            [
                'title'         => 'Blog Platform',
                'description'   => 'A developer-focused blogging platform with markdown support, syntax highlighting, and RSS feed generation.',
                'image'         => '/images/projects/blog.jpg',
                'tags'          => ['Laravel', 'Markdown', 'MySQL', 'Alpine.js'],
                'live_url'      => null,
                'document_path' => null,
            ],
        ];

        $certifications = [
            [
                'title' => 'NCII-COMPUTER SYSTEMS SERVICING',
                'issuer' => 'TESDA',
                'date' => ' SEPTEMBER 6 2025',
                'image' => asset('images/certifications/IMG_20250910_111350.jpg'),
            ],
            [
                'title' => 'EMPOWERING THE NEXT GEN:ICT CAREER PREP ESSENTIALS WEBINAR',
                'issuer' => 'DICT',
                'date' => ' JUNE 26 2025',
                'image' => asset('images/certifications/IMG_20250919_151113.jpg'),
            ],
            [
                'title' => 'DATA ANALYTICS AND VISUALIZATION ESSENTIALS',
                'issuer' => 'DICT',
                'date' => 'DECEMBER 11 2025',
                'image' => asset('images/certifications/IMG_20260119_135601.jpg'),
            ],
            [
                'title' => 'ONLINE THROUGH SAFETY NETIQUETTE',
                'issuer' => 'DICT',
                'date' => 'JULY 23 2026',
                'image' => asset('images/certifications/Screenshot_2026-08-03-12-06-42-645_cn.wps.moffice_eng.jpg'),
            ],
        ];

        $socialLinks = [
            ['name' => 'GitHub', 'url' => 'https://github.com/jeslynbuldabernal3', 'icon' => 'github'],
            ['name' => 'Facebook', 'url' => 'https://www.facebook.com/jeslyn.bernal.7/', 'icon' => 'facebook'],
            ['name' => 'Instagram', 'url' => 'https://www.instagram.com/jxlyn03?igsi=MTRvOXByamZxb3p0cA==', 'icon' => 'instagram'],
        ];

        return view('home', compact('name', 'tagline', 'stats', 'education', 'certifications', 'projects', 'socialLinks'));
    }
}
