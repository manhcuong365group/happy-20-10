# 🌸 Website Chúc Mừng Ngày Phụ Nữ Việt Nam 20/10 🌸

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)](https://php.net)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg)](https://getbootstrap.com)

Một website tuyệt đẹp được xây dựng bằng Laravel để chúc mừng ngày Phụ nữ Việt Nam 20/10, với thiết kế hiện đại và nhiều hiệu ứng tương tác hấp dẫn.

## ✨ Tính năng

- 🏠 **Trang chủ**: Lời chúc và thông điệp ý nghĩa
- 🖼️ **Thư viện ảnh**: Trưng bày những khoảnh khắc đẹp
- 💌 **Gửi lời chúc**: Tính năng tương tác cho người dùng
- 📚 **Về ngày 20/10**: Thông tin lịch sử và ý nghĩa
- 💖 **Hiệu ứng đặc biệt**: Trái tim bay, sparkle, và nhiều animation

## 🚀 Công nghệ sử dụng

- **Backend**: Laravel 12.x
- **Frontend**: Bootstrap 5.3, Font Awesome 6.4
- **Database**: SQLite (có thể thay đổi)
- **Styling**: CSS3 với animations
- **JavaScript**: Vanilla JS với nhiều hiệu ứng

## 📦 Cài đặt

### Yêu cầu hệ thống
- PHP 8.1 hoặc cao hơn
- Composer
- Node.js (optional, cho asset compilation)

### Các bước cài đặt

1. **Clone dự án**
```bash
git clone <repository-url>
cd happy_20_10
```

2. **Cài đặt dependencies**
```bash
composer install
```

3. **Cấu hình environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Chạy migration (nếu có)**
```bash
php artisan migrate
```

5. **Khởi động server**
```bash
php artisan serve
```

Website sẽ chạy tại: `http://localhost:8000`

## 🎨 Cấu trúc dự án

```
happy_20_10/
├── app/
│   └── Http/Controllers/
│       └── Happy2010Controller.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── happy-20-10.blade.php
│       ├── gallery.blade.php
│       ├── wishes.blade.php
│       └── about.blade.php
├── public/
│   ├── css/
│   │   └── custom.css
│   └── js/
│       └── app.js
└── routes/
    └── web.php
```

## 🌟 Các trang chính

### 1. Trang chủ (`/`)
- Lời chúc mừng và thông điệp chính
- Hiệu ứng trái tim bay
- Card thông tin về phụ nữ
- Nút nhận quà bất ngờ

### 2. Thư viện ảnh (`/gallery`)
- 6 chủ đề về phụ nữ Việt Nam
- Modal với thông tin chi tiết
- Hiệu ứng hover và animation

### 3. Gửi lời chúc (`/wishes`)
- Form gửi lời chúc tương tác
- Lời chúc nhanh có sẵn
- Hiển thị danh sách lời chúc
- AJAX để gửi lời chúc

### 4. Về ngày 20/10 (`/about`)
- Lịch sử hình thành
- Ý nghĩa của ngày 20/10
- Thống kê về phụ nữ Việt Nam
- Timeline tương tác

## 🎯 Tính năng đặc biệt

### Hiệu ứng Visual
- ✨ Trái tim bay liên tục
- 🎆 Sparkle effect khi click
- 🎨 Gradient background động
- 📱 Responsive design
- 🔄 Smooth animations

### Tương tác người dùng
- 🎁 Quà bất ngờ ngẫu nhiên
- 💬 Form gửi lời chúc
- 📊 Thống kê realtime
- 🖱️ Hover effects

### Performance
- ⚡ Lazy loading
- 🗜️ Optimized assets
- 📱 Mobile-first design
- 🎯 SEO friendly

## 🛠️ Tùy chỉnh

### Thêm lời chúc mới
Chỉnh sửa trong `Happy2010Controller.php`:
```php
$specialMessages = [
    "Lời chúc mới của bạn...",
    // Thêm lời chúc khác
];
```

### Thay đổi màu sắc
Chỉnh sửa trong `public/css/custom.css`:
```css
:root {
    --primary-pink: #ff6b9d;
    --secondary-pink: #ff8cc8;
    --accent-pink: #ff4d6d;
}
```

### Thêm hiệu ứng mới
Chỉnh sửa trong `public/js/app.js`:
```javascript
// Thêm function hiệu ứng mới
function newEffect() {
    // Code hiệu ứng
}
```

## 📱 Responsive Design

Website được thiết kế responsive hoàn toàn:
- 📱 Mobile: 320px - 768px
- 💻 Tablet: 768px - 1024px
- 🖥️ Desktop: 1024px+

## 🎨 Color Palette

- **Primary Pink**: `#ff6b9d`
- **Secondary Pink**: `#ff8cc8`
- **Accent Pink**: `#ff4d6d`
- **White**: `#ffffff`
- **Text Dark**: `#333333`

## 📄 License

Dự án này được phát hành dưới [MIT License](https://opensource.org/licenses/MIT).

## 👥 Đóng góp

Chúng tôi hoan nghênh mọi đóng góp! Hãy:
1. Fork dự án
2. Tạo feature branch
3. Commit changes
4. Push to branch
5. Tạo Pull Request

## 📞 Liên hệ

- **Author**: [Tên của bạn]
- **Email**: [email@example.com]
- **Website**: [website-url]

## 🙏 Cảm ơn

Cảm ơn tất cả những người phụ nữ tuyệt vời và những đóng góp cho dự án này!

---

💖 **Được tạo với tình yêu cho ngày Phụ nữ Việt Nam 20/10** 💖

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
