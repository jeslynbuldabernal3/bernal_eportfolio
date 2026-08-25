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

        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured online store with product management, cart system, payment integration, and admin dashboard.',
                'image' => '/images/projects/ecommerce.jpg',
                'tags' => ['Laravel', 'Tailwind CSS', 'MySQL', 'Stripe'],
                'demo' => '#',
                'github' => '#',
            ],
            [
                'title' => 'Task Management App',
                'description' => 'A collaborative project management tool with real-time updates, drag-and-drop boards, and team workspaces.',
                'image' => '/images/projects/task-manager.jpg',
                'tags' => ['Vue.js', 'Laravel', 'WebSocket', 'Redis'],
                'demo' => '#',
                'github' => '#',
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'A responsive weather application featuring 7-day forecasts, interactive maps, and location-based alerts.',
                'image' => '/images/projects/weather.jpg',
                'tags' => ['React', 'OpenWeather API', 'Chart.js', 'Tailwind CSS'],
                'demo' => '#',
                'github' => '#',
            ],
            [
                'title' => 'Portfolio CMS',
                'description' => 'A lightweight content management system for developers to showcase their work with a clean, minimal interface.',
                'image' => '/images/projects/portfolio-cms.jpg',
                'tags' => ['Laravel', 'Blade', 'SQLite', 'Vite'],
                'demo' => '#',
                'github' => '#',
            ],
            [
                'title' => 'Chat Application',
                'description' => 'Real-time messaging platform with private and group chats, file sharing, and emoji support.',
                'image' => '/images/projects/chat-app.jpg',
                'tags' => ['Node.js', 'Socket.io', 'Express', 'MongoDB'],
                'demo' => '#',
                'github' => '#',
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'A developer-focused blogging platform with markdown support, syntax highlighting, and RSS feed generation.',
                'image' => '/images/projects/blog.jpg',
                'tags' => ['Laravel', 'Markdown', 'MySQL', 'Alpine.js'],
                'demo' => '#',
                'github' => '#',
            ],
        ];

        $certifications = [
            [
                'title' => 'Certificate Title Here',
                'issuer' => 'Issuing Organization',
                'date' => '2024',
                'credential_id' => '',
                'image' => '/images/certifications/cert-1.jpg',
            ],
            [
                'title' => 'Another Certificate',
                'issuer' => 'Organization Name',
                'date' => '2023',
                'credential_id' => '',
                'image' => '/images/certifications/cert-2.jpg',
            ],
            [
                'title' => 'Third Certificate',
                'issuer' => 'Issuing Body',
                'date' => '2023',
                'credential_id' => '',
                'image' => '/images/certifications/cert-3.jpg',
            ],
            [
                'title' => 'Fourth Certificate',
                'issuer' => 'Another Issuer',
                'date' => '2022',
                'credential_id' => '',
                'image' => '/images/certifications/cert-4.jpg',
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
