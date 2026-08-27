# Jeslyn B. Bernal — Personal Portfolio

A personal portfolio website built with **Laravel 12** and **Blade**. It presents the owner's profile, story, educational background, certificates, projects, and contact details in a single-page, dark-themed layout.

## Description

This project is a student portfolio for **Jeslyn B. Bernal**, a fourth-year Bachelor of Science in Information Technology (BSIT) student. It showcases the owner's personal information, profile photo, short bio, educational background, professional certificates, an academic/technical project gallery, and contact information.

All portfolio content (name, tagline, education, projects, certificates, and social links) is defined directly in `app/Http/Controllers/HomeController.php` and rendered through Blade templates — no custom database is required to display content.

## Main Sections / Features

The home page is a single-page layout assembled from Blade partials:

- **Hero** — owner's name, tagline, and call-to-action buttons ("View My Work", "Get In Touch").
- **About Me** — profile photo and a short bio.
- **Education** — educational background (BSIT / General Academic Strand).
- **Certificates** — a grid of certificate cards. Each card opens a **lightbox modal** with prev/next navigation, title/issuer caption, and keyboard support (Esc, arrow keys).
- **Projects** — a responsive grid of project cards. Each card displays a thumbnail, title, description, and tech tags. Clicking a project photo opens a **photo gallery modal** showing all of that project's designated screenshots (with prev/next navigation). Projects may be flagged to hide details.
- **Contact** — "Get in Touch" card showing email and location.
- **Footer** — copyright notice and social icon links (GitHub, Facebook, Instagram).

Supported interactions:

- Certificate **lightbox** with navigation and counters.
- Project **photo gallery modal** (per-project galleries with prev/next).
- Responsive navigation bar that anchors to each section.

## Technologies Used

- **Laravel 12** (PHP `^8.2`) — backend and Blade templating
- **Blade** — templating engine for the views
- **Tailwind CSS 4** (via Vite) — styling
- **Vite** — front-end asset bundling
- **Inline SVG icons** and custom CSS with CSS variables (dark navy + gold theme)
- **Google Fonts** (Playfair Display, Inter)
- **Laravel Mail** — contact form email sending (via SMTP)
- **SQLite** — default Laravel database (no custom app tables used)

## Project Structure

```
app/
  Http/Controllers/
    HomeController.php    # all portfolio data + contact form handling
    DocumentController.php# serves files from public/documents
  Mail/ContactMessage.php # mailable used by the contact form
resources/views/
  layouts/app.blade.php   # base layout (fonts + assets)
  partials/               # hero, about, education, certifications,
                          # projects, contact, navbar, footer
  emails/contact-message.blade.php  # email template
routes/web.php            # home, contact, and document routes
public/
  images/                 # profile, hero pattern, certificates, projects
  documents/              # downloadable files (via DocumentController)
```

### Key routes (`routes/web.php`)

| Method | URI        | Description                              |
| ------ | ---------- | ---------------------------------------- |
| GET    | `/`        | Renders the portfolio home page           |
| POST   | `/contact` | Validates and sends the contact form mail |
| GET    | `/documents/{filename}` | Serves a file from `public/documents` |

### How content is added

Portfolio content lives in `HomeController@index`. To add a project, copy an array block and fill in `title`, `description`, `image`, `tags`, `live_url`, and optional `photos` (an array of image paths used by the photo gallery modal). Certificates and social links are edited the same way, also in the controller.

## Running Locally

Requirements: PHP `^8.2`, Composer, Node.js (for front-end assets), and the Laravel CLI.

1. Install PHP dependencies:
   ```bash
   composer install
   ```
2. Create and configure the environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Build front-end assets:
   ```bash
   npm install
   npm run build
   ```
4. Start the development server:
   ```bash
   php artisan serve
   ```
5. Visit `http://localhost:8000` in your browser.

### Running under XAMPP (Apache)

This project is currently served under an XAMPP subdirectory at:

```
http://localhost/bernal_Eportfolio/public
```

Because the app runs from a subdirectory, `APP_URL` in `.env` must include the full base path so Laravel generates correct URLs:

```
APP_URL=http://localhost/bernal_Eportfolio/public
```

If the project is renamed or moved, update `APP_URL` in `.env` accordingly.

## Contact Form (Email)

The contact form posts to the `/contact` route, validates the inputs, and sends an email using Laravel's mail system (`app/Mail/ContactMessage.php`). Mail settings (SMTP host, username, app password, from address) are configured in `.env` under the `MAIL_*` variables. The `.env` file is gitignored to keep credentials out of the repository.

## License

This is a personal/student portfolio project. The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
