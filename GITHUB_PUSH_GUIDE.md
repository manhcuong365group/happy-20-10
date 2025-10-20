# 🚀 PUSH CODE LÊN GITHUB VÀ DEPLOY VERCEL

## 📂 Repository GitHub của bạn
**URL**: https://github.com/manhcuong365group/happy-20-10

## 🔐 Cách 1: Sử dụng SSH (Khuyến nghị)

### Bước 1: Setup SSH key (nếu chưa có)
```bash
# Tạo SSH key
ssh-keygen -t rsa -b 4096 -C "your_email@example.com"

# Copy public key
cat ~/.ssh/id_rsa.pub
```

### Bước 2: Thêm SSH key vào GitHub
1. Vào GitHub → Settings → SSH and GPG keys
2. Click "New SSH key"
3. Paste public key và save

### Bước 3: Push với SSH
```bash
# Xóa remote cũ và thêm SSH remote
git remote remove origin
git remote add origin git@github.com:manhcuong365group/happy-20-10.git
git push -u origin main
```

## 🔐 Cách 2: Sử dụng Personal Access Token

### Bước 1: Tạo Personal Access Token
1. GitHub → Settings → Developer settings → Personal access tokens
2. Generate new token (classic)
3. Chọn scope: `repo` (full control)
4. Copy token (chỉ hiện 1 lần)

### Bước 2: Push với token
```bash
# Sử dụng token thay password khi được hỏi
git push -u origin main
# Username: manhcuong365group
# Password: [paste_your_token_here]
```

## 🔐 Cách 3: Sử dụng GitHub Desktop (Đơn giản nhất)

1. Download GitHub Desktop
2. Sign in với GitHub account
3. Add existing repository từ thư mục dự án
4. Commit và Push

## 🚀 SAU KHI PUSH THÀNH CÔNG

### Bước tiếp theo: Deploy lên Vercel

1. **Truy cập Vercel**: https://vercel.com
2. **Sign up/Login** bằng GitHub account
3. **New Project** → Import từ repository `manhcuong365group/happy-20-10`
4. **Framework**: Chọn "Other" (không phải Laravel preset)
5. **Deploy** → Chờ build hoàn tất

### Environment Variables cần thêm trong Vercel:
```env
APP_NAME=Happy 20/10
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:da0ijGQL44vms/W7W7IjrFiFUCsXta6jS3AZ8sBhE7Q=
APP_URL=https://your-project-name.vercel.app
DB_CONNECTION=sqlite
LOG_CHANNEL=stderr
SESSION_DRIVER=cookie
CACHE_STORE=file
```

## 🎯 KIỂM TRA KẾT QUẢ

Sau khi deploy xong, website sẽ có URL như:
- `https://happy-20-10.vercel.app` (hoặc tên khác do Vercel tự sinh)

Các trang hoạt động:
- Trang chủ: `/`
- Gallery: `/gallery`
- Lời chúc: `/wishes`
- Về 20/10: `/about`

## 🔧 TROUBLESHOOTING

### Nếu gặp lỗi "Application key not set"
- Kiểm tra APP_KEY trong Vercel Environment Variables
- Redeploy sau khi thêm env vars

### Nếu CSS/JS không load
- Kiểm tra APP_URL trong environment variables
- Đảm bảo URL đúng với domain Vercel

### Nếu 500 Error
- Xem logs trong Vercel Dashboard → Functions
- Kiểm tra các env vars đã đầy đủ

## 🎉 HOÀN TẤT!

Sau khi hoàn thành các bước trên, bạn sẽ có:
- ✅ Code trên GitHub: https://github.com/manhcuong365group/happy-20-10
- ✅ Website live trên Vercel
- ✅ Tự động deploy khi push code mới

---

💡 **Mẹo**: Mỗi lần push code mới lên GitHub, Vercel sẽ tự động deploy lại!
