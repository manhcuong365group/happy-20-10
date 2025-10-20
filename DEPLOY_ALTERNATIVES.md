# 🚀 HƯỚNG DẪN DEPLOY ALTERNATIVE PLATFORMS

## 🔥 NETLIFY (DỄ NHẤT - KHUYẾN NGHỊ)

### Bước 1: Tạo tài khoản Netlify
- Vào https://netlify.com
- Đăng ký bằng GitHub

### Bước 2: Deploy từ GitHub
1. **New site from Git**
2. **Connect to GitHub** 
3. Chọn repo: `manhcuong365group/happy-20-10`
4. **Build settings:**
   - Build command: `composer install --no-dev --optimize-autoloader`
   - Publish directory: `/`
5. **Deploy site**

### Bước 3: Environment Variables (Netlify)
Site settings → Environment variables:
```
APP_NAME=Happy 20/10
APP_ENV=production
APP_KEY=base64:da0ijGQL44vms/W7W7IjrFiFUCsXta6jS3AZ8sBhE7Q=
APP_DEBUG=false
```

---

## 🚂 RAILWAY (HỖ TRỢ PHP TỐT)

### Bước 1: Tạo tài khoản Railway
- Vào https://railway.app
- Connect GitHub

### Bước 2: Deploy
1. **New Project** → **Deploy from GitHub repo**
2. Chọn `manhcuong365group/happy-20-10`
3. Railway tự detect PHP project
4. **Deploy**

### Bước 3: Environment Variables (Railway)
Variables tab:
```
APP_NAME=Happy 20/10
APP_ENV=production
APP_KEY=base64:da0ijGQL44vms/W7W7IjrFiFUCsXta6jS3AZ8sBhE7Q=
APP_DEBUG=false
```

---

## 🔴 HEROKU (CLASSIC)

### Bước 1: Tạo Heroku account
- https://heroku.com
- Install Heroku CLI

### Bước 2: Deploy
```bash
heroku create happy-20-10-app
git remote add heroku https://git.heroku.com/happy-20-10-app.git
git push heroku main
```

### Bước 3: Config vars
```bash
heroku config:set APP_KEY=base64:da0ijGQL44vms/W7W7IjrFiFUCsXta6jS3AZ8sBhE7Q=
heroku config:set APP_ENV=production
```

---

## 💡 STATIC VERSION (100% WORK)

Nếu muốn chắc chắn 100%, dùng **current index.php** (đã là static version):
- ✅ Không cần Laravel framework
- ✅ Chạy trên mọi PHP hosting
- ✅ 4 trang: Home, Gallery, Wishes, About
- ✅ Đầy đủ hiệu ứng và animation

**KHUYẾN NGHỊ: Thử NETLIFY trước! Dễ nhất và free!** 🌸
