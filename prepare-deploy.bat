@echo off
echo 🚀 CHUẨN BỊ DEPLOY WEBSITE HAPPY 20/10 LÊN VERCEL
echo ================================================

REM Tạo thư mục backup nếu cần
if not exist backup mkdir backup

REM Backup database hiện tại
echo 📦 Backup database...
if exist database\database.sqlite (
    copy database\database.sqlite backup\database-%date:~-4,4%%date:~-10,2%%date:~-7,2%-%time:~0,2%%time:~3,2%.sqlite
) else (
    echo Không có database để backup
)

REM Tối ưu hóa autoloader
echo ⚡ Tối ưu hóa autoloader...
composer install --optimize-autoloader --no-dev --no-interaction

REM Cache configurations để tăng performance
echo 🔧 Cache configurations...
php artisan config:cache
php artisan route:cache
php artisan view:cache

REM Tạo app key nếu chưa có
echo 🔑 Kiểm tra app key...
findstr /C:"APP_KEY=" .env | findstr /C:"APP_KEY=$" >nul
if %errorlevel% equ 0 (
    echo Tạo app key mới...
    php artisan key:generate
)

REM Build assets nếu có
echo 🎨 Build assets...
npm run build 2>nul || echo Không có assets để build

REM Tạo .vercelignore để loại trừ files không cần thiết
echo 📝 Tạo .vercelignore...
(
echo /node_modules
echo /storage/logs
echo /storage/framework/cache
echo /storage/framework/sessions
echo /storage/framework/views
echo /tests
echo /.phpunit.result.cache
echo /backup
echo .env.local
echo .env.testing
) > .vercelignore

echo.
echo ✅ HOÀN THÀNH CHUẨN BỊ!
echo.
echo 📋 BƯỚC TIẾP THEO:
echo 1. Tạo Git repository: git init ^&^& git add . ^&^& git commit -m "Initial commit"
echo 2. Push lên GitHub
echo 3. Import vào Vercel từ GitHub
echo 4. Cấu hình Environment Variables trong Vercel
echo.
echo 🔗 Chi tiết xem file DEPLOY_GUIDE.md

pause
