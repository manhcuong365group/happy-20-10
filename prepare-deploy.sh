#!/bin/bash

echo "🚀 CHUẨN BỊ DEPLOY WEBSITE HAPPY 20/10 LÊN VERCEL"
echo "================================================"

# Tạo thư mục backup nếu cần
mkdir -p backup

# Backup database hiện tại
echo "📦 Backup database..."
cp database/database.sqlite backup/database-$(date +%Y%m%d-%H%M%S).sqlite 2>/dev/null || echo "Không có database để backup"

# Tối ưu hóa autoloader
echo "⚡ Tối ưu hóa autoloader..."
composer install --optimize-autoloader --no-dev --no-interaction

# Cache configurations để tăng performance
echo "🔧 Cache configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Tạo app key nếu chưa có
echo "🔑 Kiểm tra app key..."
if grep -q "APP_KEY=$" .env; then
    echo "Tạo app key mới..."
    php artisan key:generate
fi

# Build assets nếu có
echo "🎨 Build assets..."
npm run build 2>/dev/null || echo "Không có assets để build"

# Tạo .vercelignore để loại trừ files không cần thiết
echo "📝 Tạo .vercelignore..."
cat > .vercelignore << 'EOF'
/node_modules
/storage/logs
/storage/framework/cache
/storage/framework/sessions
/storage/framework/views
/tests
/.phpunit.result.cache
/backup
.env.local
.env.testing
EOF

echo "✅ HOÀN THÀNH CHUẨN BỊ!"
echo ""
echo "📋 BƯỚC TIẾP THEO:"
echo "1. Tạo Git repository: git init && git add . && git commit -m 'Initial commit'"
echo "2. Push lên GitHub"
echo "3. Import vào Vercel từ GitHub"
echo "4. Cấu hình Environment Variables trong Vercel"
echo ""
echo "🔗 Chi tiết xem file DEPLOY_GUIDE.md"
