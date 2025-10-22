# Git Deployment Workflow for Bluebridge IT Solutions

## 🚀 **Git Deployment Setup Complete!**

Your Laravel project is now connected to cPanel Git integration. Here's your deployment workflow:

### **Current Status:**
- ✅ Git repository: `https://github.com/daniellamptey9/bluepeak.git`
- ✅ cPanel Git integration configured
- ✅ Automatic deployment enabled
- ✅ Latest commit pushed: `7f39b8e`

### **🔄 Deployment Workflow:**

#### **Step 1: Make Changes**
Edit your files in VS Code as usual.

#### **Step 2: Commit Changes**
```bash
git add .
git commit -m "Your descriptive commit message"
```

#### **Step 3: Push to Deploy**
```bash
git push origin main
```

#### **Step 4: Automatic Deployment**
- cPanel will automatically pull your changes
- Your website will update within 1-2 minutes
- Visit `https://wearebluebridge.com` to see changes

### **📁 Important Files for Deployment:**

#### **Production Files (Auto-deployed):**
- `resources/views/` - All your Blade templates
- `public/` - Web-accessible files
- `routes/` - Route definitions
- `app/` - Application logic
- `config/` - Configuration files

#### **Configuration Files:**
- `.htaccess` - Server configuration (root level)
- `index.php` - Laravel entry point redirect
- `public/.htaccess` - Laravel routing rules

#### **Test Files:**
- `public/test-sync.html` - Deployment test page
- `public/test-laravel.php` - Laravel configuration test

### **🔧 cPanel Configuration Needed:**

#### **1. Document Root Setup**
In cPanel, set your document root to point to the `public` directory:
- **Current:** `/public_html/`
- **Should be:** `/public_html/public/`

#### **2. Environment File**
Create `.env` file on your server with production settings:
```env
APP_NAME="Bluebridge IT Solutions"
APP_ENV=production
APP_KEY=base64:your_generated_key
APP_DEBUG=false
APP_URL=https://wearebluebridge.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

#### **3. File Permissions**
Set proper permissions on your server:
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chmod 644 .env
```

### **🧪 Testing Your Deployment:**

#### **Test 1: Git Sync**
1. Make a small change to any file
2. Commit and push: `git push origin main`
3. Check if changes appear on website within 2 minutes

#### **Test 2: Laravel Configuration**
Visit: `https://wearebluebridge.com/test-laravel.php`
This will show if Laravel is properly configured.

#### **Test 3: Main Website**
Visit: `https://wearebluebridge.com`
Should show your Bluebridge IT Solutions website.

### **🚨 Troubleshooting:**

#### **If website shows directory listing:**
- Document root not set to `/public/`
- Fix: Update document root in cPanel

#### **If Laravel shows routing errors:**
- Missing `.env` file
- Fix: Create `.env` file on server

#### **If changes don't appear:**
- Check Git push was successful
- Wait 2-3 minutes for cPanel sync
- Check cPanel Git logs

### **📝 Best Practices:**

#### **Commit Messages:**
```bash
git commit -m "feat: add new service page"
git commit -m "fix: update logo size"
git commit -m "style: improve mobile responsiveness"
```

#### **Before Major Changes:**
```bash
git status                    # Check what's changed
git diff                      # Review changes
git add .                     # Stage changes
git commit -m "descriptive message"
git push origin main          # Deploy
```

### **🔗 Useful Commands:**

```bash
# Check status
git status

# See recent commits
git log --oneline -5

# Check what files are tracked
git ls-files

# Force add ignored files (if needed)
git add -f filename

# Create new branch (if needed)
git checkout -b feature-branch
```

### **📞 Support:**

If you encounter issues:
1. Check this documentation first
2. Verify Git push was successful
3. Check cPanel Git integration logs
4. Test with small changes first

---

**Repository:** `https://github.com/daniellamptey9/bluepeak.git`  
**Website:** `https://wearebluebridge.com`  
**Last Updated:** December 22, 2025

## 🎉 **You're Ready to Deploy!**

Your Git workflow is now set up. Every time you push to the main branch, your website will automatically update!
