# 🚀 HƯỚNG DẪN DEPLOY WEBSITE 20/10 LÊN VERCEL

## 📋 Chuẩn bị trước khi deploy

### 1. Kiểm tra files cần thiết (✅ Đã có)
- ✅ `vercel.json` - Cấu hình Vercel
- ✅ `app/index.php` - Entry point cho Vercel
- ✅ `package.json` - Cấu hình Node.js
- ✅ `.env.example` - Template environment variables

### 2. Tạo tài khoản Vercel
1. Truy cập: https://vercel.com
2. Đăng ký bằng GitHub/GitLab/Email
3. Tạo tài khoản miễn phí

## 🔄 Phương pháp 1: Deploy qua Git (Khuyến nghị)

### Bước 1: Tạo Git repository
```bash
# Khởi tạo git trong thư mục dự án
cd d:/Manh_Cuong/laragon/www/happy_20_10
git init
git add .
git commit -m "Initial commit - Happy 20/10 website"
```

### Bước 2: Push lên GitHub
1. Tạo repository mới trên GitHub
2. Copy URL repository
3. Thêm remote và push:
```bash
git remote add origin https://github.com/your-username/happy-20-10.git
git branch -M main
git push -u origin main
```

### Bước 3: Import vào Vercel
1. Vào Vercel Dashboard
2. Click "New Project"
3. Import repository từ GitHub
4. Vercel sẽ tự động detect Laravel project

### Bước 4: Cấu hình Environment Variables
Trong Vercel Dashboard > Settings > Environment Variables:
```
APP_NAME = Happy 20/10
APP_ENV = production
APP_DEBUG = false
APP_KEY = base64:your-generated-key
APP_URL = https://your-app-name.vercel.app
DB_CONNECTION = sqlite
LOG_CHANNEL = stderr
SESSION_DRIVER = cookie
CACHE_STORE = file
```

## 📦 Phương pháp 2: Deploy qua Vercel CLI

### Bước 1: Cài đặt Vercel CLI
```bash
npm install -g vercel
```

### Bước 2: Login và deploy
```bash
# Đăng nhập Vercel
vercel login

# Deploy từ thư mục dự án
cd d:/Manh_Cuong/laragon/www/happy_20_10
vercel

# Trả lời các câu hỏi:
# - Set up and deploy? Yes
# - Which scope? Your account
# - Link to existing project? No
# - Project name? happy-20-10
# - Directory? ./
```

## ⚙️ Cấu hình quan trọng

### 1. File `vercel.json` (Đã tạo)
```json
{
  "functions": {
    "app/index.php": {
      "runtime": "vercel-php@0.7.0"
    }
  },
  "routes": [
    {
      "src": "/(.*)",
      "dest": "/app/index.php"
    }
  ]
}
```

### 2. File `app/index.php` (Đã tạo)
Entry point cho Vercel, thay thế `public/index.php`

### 3. Environment Variables cần thiết
- `APP_KEY`: Generate bằng `php artisan key:generate --show`
- `APP_URL`: URL của Vercel app
- `DB_CONNECTION=sqlite` (database sẽ reset mỗi deploy)

## 🔧 Xử lý các vấn đề thường gặp

### 1. Lỗi "Application key not set"
```bash
# Generate app key local
php artisan key:generate --show

# Copy key vào Vercel Environment Variables
APP_KEY=base64:your-generated-key
```

### 2. Lỗi CSS/JS không load
- Kiểm tra `APP_URL` trong environment variables
- Đảm bảo `asset()` helper được dùng đúng cách

### 3. Lỗi database
- SQLite database sẽ reset mỗi lần deploy
- Để persist data, cần dùng external database (MySQL, PostgreSQL)

### 4. Lỗi permissions
- Vercel tự động set permissions cho storage
- Không cần chỉnh sửa gì thêm

## 📊 Monitor và Debug

### 1. Xem logs
```bash
vercel logs https://your-app-name.vercel.app
```

### 2. Functions dashboard
- Vào Vercel Dashboard > Functions
- Xem runtime, errors, performance

### 3. Realtime logs
- Vercel Dashboard > Project > Functions tab
- Click vào function để xem chi tiết

## 🎯 Tối ưu hóa sau khi deploy

### 1. Custom domain (Tùy chọn)
1. Vercel Dashboard > Settings > Domains
2. Add domain của bạn
3. Cấu hình DNS

### 2. Performance optimization
- Vercel tự động optimize
- Enable compression
- CDN global

### 3. SSL Certificate
- Vercel tự động cung cấp SSL
- Không cần cấu hình thêm

## 🔗 URLs sau khi deploy

Sau khi deploy thành công:
- **Website**: https://your-app-name.vercel.app
- **Trang chủ**: https://your-app-name.vercel.app/
- **Gallery**: https://your-app-name.vercel.app/gallery
- **Lời chúc**: https://your-app-name.vercel.app/wishes
- **Về 20/10**: https://your-app-name.vercel.app/about

## 📝 Checklist trước khi deploy

- [ ] Đã tạo `vercel.json`
- [ ] Đã tạo `app/index.php`
- [ ] Đã cấu hình `package.json`
- [ ] Đã tạo Git repository
- [ ] Đã push code lên GitHub
- [ ] Đã cấu hình Environment Variables
- [ ] Đã test local trước khi deploy

## 🆘 Hỗ trợ

### Nếu gặp lỗi:
1. Check logs trong Vercel Dashboard
2. Kiểm tra Environment Variables
3. Test local trước
4. Tham khảo Vercel docs: https://vercel.com/docs

### Contact:
- Vercel Support: https://vercel.com/support
- Laravel docs: https://laravel.com/docs

---

🎉 **Chúc bạn deploy thành công website Happy 20/10!** 🌸
