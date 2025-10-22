# Bluebridge IT Solutions - Deployment Guide

## Pre-Deployment Checklist

### ✅ Completed
- [x] Composer dependencies optimized for production (`--no-dev`)
- [x] Configuration cached (`php artisan config:cache`)
- [x] Routes cached (`php artisan route:cache`)
- [x] Views cached (`php artisan view:cache`)
- [x] Logo updated to Bluebridge branding
- [x] SFTP configuration set up

### 🔧 Required Before Go-Live

#### 1. Environment Configuration
Create a `.env` file on your cPanel hosting with these settings:

```env
APP_NAME="Bluebridge IT Solutions"
APP_ENV=production
APP_KEY=base64:your_generated_app_key
APP_DEBUG=false
APP_URL=https://wearebluebridge.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@wearebluebridge.com"
MAIL_FROM_NAME="Bluebridge IT Solutions"
```

#### 2. Database Setup
- Create MySQL database in cPanel
- Import any existing data
- Update database credentials in `.env`

#### 3. File Permissions
Set proper permissions on your hosting:
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chmod 644 public/.htaccess
```

#### 4. Generate Application Key
Run on your hosting:
```bash
php artisan key:generate
```

#### 5. Run Migrations
```bash
php artisan migrate --force
```

### 📁 Files to Upload via SFTP

#### Essential Files & Directories:
- `app/` - Application logic
- `config/` - Configuration files
- `database/` - Migrations and seeders
- `public/` - Web-accessible files
- `resources/` - Views, CSS, JS
- `routes/` - Route definitions
- `storage/` - File storage
- `vendor/` - Composer dependencies
- `bootstrap/` - Bootstrap files
- `artisan` - Laravel command line tool

#### Configuration Files:
- `.env` - Environment configuration
- `composer.json` - Dependencies
- `composer.lock` - Locked dependencies
- `.htaccess` - Apache configuration

### 🚀 Testing Deployment

1. **SFTP Sync Test**: Visit `https://wearebluebridge.com/test-sync.html`
2. **Main Website**: Visit `https://wearebluebridge.com`
3. **Logo Verification**: Check that Bluebridge logo appears correctly
4. **Responsive Design**: Test on mobile and desktop

### 🔒 Security Considerations

- Set `APP_DEBUG=false` in production
- Use strong database passwords
- Enable SSL/HTTPS
- Configure proper file permissions
- Set up regular backups

### 📞 Support

For deployment issues or questions, contact:
- **Email**: info@wearebluebridge.com
- **Website**: https://wearebluebridge.com

---

**Last Updated**: December 22, 2025
**Version**: 1.0
