# BluePeak MSP Website

A modern, professional website for BluePeak MSP (Managed Service Provider) built with Laravel, MySQL, and Tailwind CSS.

## Features

- **Modern Design**: Clean, professional design with minimal color scheme (blue and gray)
- **Responsive Layout**: Fully responsive design that works on all devices
- **Dynamic Content**: Database-driven content for services, team members, and testimonials
- **Contact Form**: Functional contact form with validation
- **SEO Optimized**: Proper meta tags and semantic HTML structure

## Technology Stack

- **Backend**: Laravel 10
- **Database**: MySQL
- **Frontend**: Tailwind CSS
- **Build Tool**: Vite
- **Fonts**: Inter (Google Fonts)

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd bluepeak
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   - Copy `.env.example` to `.env`
   - Update database configuration in `.env`:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=blue
     DB_USERNAME=root
     DB_PASSWORD=
     ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the Database**
   ```bash
   php artisan db:seed
   ```

8. **Build Assets**
   ```bash
   npm run build
   ```

9. **Start Development Server**
   ```bash
   php artisan serve
   ```

## Database Structure

The application includes the following tables:

- **services**: IT services offered by the MSP
- **team_members**: Team member information
- **testimonials**: Client testimonials
- **contact_messages**: Contact form submissions

## Customization

### Colors
The website uses a minimal color scheme defined in `tailwind.config.js`:
- Primary: Blue shades (primary-50 to primary-900)
- Secondary: Gray shades (secondary-50 to secondary-900)

### Content
- Services, team members, and testimonials can be managed through the database
- Default content is seeded when running `php artisan db:seed`

## File Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   └── ContactController.php
│   └── Models/
│       ├── Service.php
│       ├── TeamMember.php
│       ├── Testimonial.php
│       └── ContactMessage.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── MSPDataSeeder.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   └── home.blade.php
│   └── css/
│       └── app.css
└── routes/
    └── web.php
```

## Development

### Running in Development Mode
```bash
# Start Laravel server
php artisan serve

# Watch for changes and rebuild assets
npm run dev
```

### Production Build
```bash
npm run build
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).