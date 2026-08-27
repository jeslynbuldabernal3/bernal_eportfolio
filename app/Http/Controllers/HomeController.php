<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        //   image        – thumbnail path inside public/images/projects/ (card image)
        //   tags         – array of tech tags
        //   live_url     – external URL (Live Demo) — set to null to hide the button
        //   photos       – one image string OR an array of image strings inside
        //                  public/images/projects/photos/ — powers "View Photo(s)"
        //                  lightbox; null/empty to hide the button
        // ──────────────────────────────────────────────────────────

        $projects = [
            [
                'title'         => 'System Analysis and Design',
                'description'   => 'A web-based ordering and management system for Happy Stem\'s floral shop, featuring customer browsing, cart, checkout and an admin dashboard for product and order management.',
                'image'         => asset('images/projects/SAD1.jpg'),
                'tags'          => ['php', 'MySQL'],
                'live_url'      => null,
                'hide_details'  => true,
                'photos'        => [
                    asset('images/projects/SAD1.jpg'),
                    asset('images/projects/SAD2.jpg'),
                    asset('images/projects/SAD9.jpg'),
                    asset('images/projects/SAD10.jpg'),
                    asset('images/projects/SAD11.jpg'),
                    asset('images/projects/SAD16.jpg'),
                    asset('images/projects/SAD17.png'),
                    asset('images/projects/SAD19.jpg'),
                    asset('images/projects/SAD20.jpg'),
                    asset('images/projects/SAD21.jpg'),
                    asset('images/projects/SAD23.jpg'),
                    asset('images/projects/SAD24.jpg'),
                    asset('images/projects/SAD26.jpg'),
                    asset('images/projects/SAD27.jpg'),
                    asset('images/projects/SAD30.jpg'),
                    asset('images/projects/SAD32.png'),
                    asset('images/projects/SAD33.jpg'),
                    asset('images/projects/SAD34.jpg'),
                    asset('images/projects/SAD35.jpg'),
                    asset('images/projects/SAD36.jpg'),
                    asset('images/projects/SAD37.jpg'),
                    asset('images/projects/SAD39.jpg'),
                ],
            ],
            [
                'title'         => 'Permanent Record',
                'description'   => 'A Windows desktop form titled "PERMANENT RECORD" for managing student records.',
                'image'         => asset('images/projects/photo_2026-08-28_01-22-50.jpg'),
                'tags'          => ['VB.NET'],
                'live_url'      => null,                            // REPLACE with your live demo URL, or null to hide
                'photos'        => null,
                'hide_details'  => true,
            ],
            [
                'title'         => 'Trirec Area Finder',
                'description'   => 'A two grouped panels, Rectangle/Triangle selection checkboxes and Reset/Start buttons for calculating shape areas..',
                'image'         => asset('images/projects/photo_2026-08-28_01-22-29.jpg'),
                'tags'          => ['Visual Basic'],
                'live_url'      => null,
                'photos'        => null,
                'hide_details'  => true,
            ],
            [
                'title'         => 'Boarding House Management System',
                'description'   => 'A project documentation report for the BlueHaven Boarding House Management System, a VB.NET desktop app with login, dashboard, and Tenant/Room/Billing/Rental Agreement modules, submitted as an academic capstone project for 2nd Sem S.Y. 2025–2026.',
                'image'         => asset('images/projects/BHMS.png'),
                'tags'          => ['Visual Basic'],
                'live_url'      => null,
                'hide_details'  => true,
                'photos'        => [
                    asset('images/projects/BHMS.png'),
                    asset('images/projects/BHMS1.png'),
                    asset('images/projects/BHMS2.png'),
                    asset('images/projects/BHMS4.png'),
                    asset('images/projects/BHMS5.png'),
                    asset('images/projects/BHMS7.png'),
                    asset('images/projects/BHMS8.png'),
                    asset('images/projects/BHMS9.png'),
                    asset('images/projects/BHMS11.png'),
                    asset('images/projects/BHMS12.png'),
                    asset('images/projects/BHMS13.png'),
                    asset('images/projects/BHMS14.png'),
                    asset('images/projects/BHMS16.png'),
                ],
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

    public function sendContactMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactMessage(
                $validated['name'],
                $validated['email'],
                $validated['message'],
            ));

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
