# Fix Environment Configuration

## 🚨 **Database Connection Error Fix**

Your website is showing this error:
```
SQLSTATE[28000] [1045] Access denied for user 'root'@'localhost' (using password: NO)
```

## 🔍 **Issues Found in Your .env File:**

1. **DB_HOST**: `http://wearebluebridge.com` ❌ (Should be: `localhost`)
2. **APP_ENV**: `local` ❌ (Should be: `production`)
3. **APP_DEBUG**: `true` ❌ (Should be: `false`)
4. **APP_URL**: `http://localhost` ❌ (Should be: `https://wearebluebridge.com`)
5. **APP_NAME**: `Laravel` ❌ (Should be: `Bluebridge IT Solutions`)

## ✅ **Correct .env Configuration:**

```env
APP_NAME="Bluebridge IT Solutions"
APP_ENV=production
APP_KEY=base64:Vw+VnoCMGzeSrpGP6TMa3znIYh9ASYcIDzxd91EeRak=
APP_DEBUG=false
APP_URL=https://wearebluebridge.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=weareblu_db
DB_USERNAME=weareblu_weareblu
DB_PASSWORD=@Mantse1

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@wearebluebridge.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

## 🔧 **How to Fix:**

### **Method 1: cPanel File Manager**
1. Log into your cPanel
2. Open File Manager
3. Navigate to your website's root directory
4. Find and edit the `.env` file
5. Replace the content with the correct configuration above
6. Save the file

### **Method 2: cPanel Terminal (if available)**
```bash
cd /home/yourcpaneluser/public_html
cp .env .env.backup
sed -i 's/APP_ENV=local/APP_ENV=production/' .env
sed -i 's/APP_DEBUG=true/APP_DEBUG=false/' .env
sed -i 's|APP_URL=http://localhost|APP_URL=https://wearebluebridge.com|' .env
sed -i 's/APP_NAME=Laravel/APP_NAME="Bluebridge IT Solutions"/' .env
sed -i 's|DB_HOST=http://wearebluebridge.com|DB_HOST=localhost|' .env
```

### **Method 3: Create New .env File**
1. Delete the existing `.env` file
2. Create a new `.env` file
3. Copy and paste the correct configuration above

## 🧪 **Test After Fixing:**

1. Visit: `https://wearebluebridge.com/test-laravel.php`
2. Check if all tests pass
3. Visit: `https://wearebluebridge.com`
4. Verify the website loads without database errors

## 📞 **If Still Having Issues:**

1. Check your cPanel database credentials
2. Verify the database exists
3. Ensure the database user has proper permissions
4. Check cPanel error logs

---

**Note:** The main issue is that `DB_HOST=http://wearebluebridge.com` should be `DB_HOST=localhost`. This is causing the database connection to fail.
