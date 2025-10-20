# 🚀 HƯỚNG DẪN SỬ DỤNG NHANH

## ✅ Kiểm tra server đang chạy

Server Laravel đang chạy tại: **http://localhost:8000**

## 🌟 Các trang có sẵn

1. **Trang chủ**: http://localhost:8000/
   - Lời chúc chính và hiệu ứng đẹp mắt
   - Nút "Nhận Quà Bất Ngờ" để xem lời chúc ngẫu nhiên

2. **Thư viện ảnh**: http://localhost:8000/gallery
   - 6 chủ đề về phụ nữ Việt Nam
   - Click vào từng card để xem chi tiết

3. **Gửi lời chúc**: http://localhost:8000/wishes
   - Gửi lời chúc của bạn
   - Xem lời chúc từ người khác

4. **Về ngày 20/10**: http://localhost:8000/about
   - Lịch sử và ý nghĩa ngày 20/10
   - Thống kê về phụ nữ Việt Nam

## 💡 Các tính năng đặc biệt

- **Trái tim bay**: Tự động hiển thị trên tất cả trang
- **Sparkle effect**: Click chuột để tạo hiệu ứng
- **Scroll to top**: Nút quay lên đầu trang khi scroll xuống
- **Responsive**: Hoạt động tốt trên mobile và desktop

## 🛠️ Thay đổi nội dung

### Sửa lời chúc chính
File: `resources/views/happy-20-10.blade.php`

### Thêm ảnh gallery
File: `resources/views/gallery.blade.php`

### Sửa thông tin về 20/10
File: `resources/views/about.blade.php`

## 🎨 Tùy chỉnh giao diện

### Thay đổi màu sắc
File: `public/css/custom.css`
```css
/* Thay đổi màu gradient chính */
body {
    background: linear-gradient(135deg, #your-color 0%, #your-color-2 50%, #your-color-3 100%);
}
```

### Thêm hiệu ứng mới
File: `public/js/app.js`

## 🔧 Troubleshooting

### Server không khởi động được
```bash
# Kiểm tra port có bị chiếm không
netstat -ano | findstr :8000

# Dùng port khác
php artisan serve --port=8080
```

### Lỗi 404
- Kiểm tra routes trong `routes/web.php`
- Đảm bảo controller methods tồn tại

### CSS/JS không load
```bash
# Clear cache
php artisan cache:clear
php artisan config:clear
```

## 📱 Test trên mobile

1. Mở cmd/terminal
2. Chạy: `php artisan serve --host=0.0.0.0 --port=8000`
3. Truy cập: `http://[IP-máy-tính]:8000` từ điện thoại

## 🎯 Next Steps

1. **Deploy lên hosting**: Cấu hình web server (Apache/Nginx)
2. **Thêm database**: Lưu lời chúc vào database thật
3. **SEO optimization**: Thêm meta tags, sitemap
4. **Performance**: Optimize images, minify CSS/JS
5. **Analytics**: Thêm Google Analytics

---

🎉 **Chúc bạn có website 20/10 tuyệt đẹp!** 🎉
