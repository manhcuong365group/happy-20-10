# Vercel Environment Setup cho Laravel

## Environment Variables cần thêm trong Vercel Dashboard:

### Basic Laravel Config:
- APP_NAME = "Happy 20/10"
- APP_ENV = production
- APP_KEY = base64:da0ijGQL44vms/W7W7IjrFiFUCsXta6jS3AZ8sBhE7Q=
- APP_DEBUG = false
- APP_URL = https://happy-20-10-seven.vercel.app

### Database Config:
- DB_CONNECTION = sqlite
- DB_DATABASE = /tmp/database.sqlite

### Session & Cache:
- SESSION_DRIVER = cookie
- CACHE_STORE = array
- LOG_CHANNEL = stderr

### Hướng dẫn thêm Environment Variables:
1. Vào Vercel Dashboard → Your Project
2. Settings → Environment Variables
3. Thêm từng biến ở trên
4. Redeploy

### Nếu vẫn lỗi 500:
1. Check Vercel Functions logs
2. Hoặc thử xóa project và tạo lại
3. Hoặc dùng alternative config trong vercel-alternative.json
