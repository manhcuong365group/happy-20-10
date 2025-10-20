<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chúc Mừng Ngày Phụ Nữ Việt Nam 20/10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .hero-section {
            position: relative;
            padding: 100px 0;
            text-align: center;
        }

        .floating-hearts {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .heart {
            position: absolute;
            color: #ff69b4;
            animation: float 6s ease-in-out infinite;
            opacity: 0.7;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10%,
            90% {
                opacity: 1;
            }

            50% {
                transform: translateY(-10vh) rotate(180deg);
            }
        }

        .sparkle {
            position: absolute;
            color: gold;
            animation: sparkle 2s linear infinite;
        }

        @keyframes sparkle {

            0%,
            100% {
                opacity: 0;
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .main-title {
            font-size: 3.5rem;
            font-weight: bold;
            background: linear-gradient(45deg, #ff1493, #ff69b4, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 30px;
            position: relative;
            z-index: 10;
        }

        .wish-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin: 20px 0;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 10;
        }

        .btn-pink {
            background: linear-gradient(45deg, #ff1493, #ff69b4);
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .btn-pink:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 20, 147, 0.3);
            color: white;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand,
        .nav-link {
            color: #ff1493 !important;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="?page=home">
                <i class="fas fa-heart me-2"></i>Happy 20/10
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="?page=home">
                            <i class="fas fa-home me-1"></i>Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=gallery">
                            <i class="fas fa-images me-1"></i>Thư viện
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=wishes">
                            <i class="fas fa-heart me-1"></i>Lời chúc
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=about">
                            <i class="fas fa-info-circle me-1"></i>Về 20/10
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-hearts" id="floating-hearts"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="main-title">
                        Chúc Mừng Ngày Phụ Nữ Việt Nam 20/10
                    </h1>

                    <div class="wish-card">
                        <h3 class="text-pink mb-4">
                            <i class="fas fa-heart text-danger me-2"></i>
                            Gửi tặng những người phụ nữ tuyệt vời
                            <i class="fas fa-heart text-danger ms-2"></i>
                        </h3>

                        <p class="lead mb-4" id="random-wish">
                            Chúc các chị, các cô, các bạn luôn xinh đẹp, hạnh phúc và thành công trong cuộc sống! 🌸
                        </p>

                        <div class="row text-center mb-4">
                            <div class="col-md-4 mb-3">
                                <div class="p-3">
                                    <i class="fas fa-star fa-3x text-warning mb-3"></i>
                                    <h5>Xinh Đẹp</h5>
                                    <p>Luôn tỏa sáng với vẻ đẹp tự nhiên</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-3">
                                    <i class="fas fa-heart fa-3x text-danger mb-3"></i>
                                    <h5>Hạnh Phúc</h5>
                                    <p>Được yêu thương và che chở</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-3">
                                    <i class="fas fa-trophy fa-3x text-success mb-3"></i>
                                    <h5>Thành Công</h5>
                                    <p>Đạt được mọi ước mơ, hoài bão</p>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-pink btn-lg me-3" onclick="getNewWish()">
                            <i class="fas fa-magic me-2"></i>Lời chúc mới
                        </button>

                        <a href="?page=gallery" class="btn btn-outline-pink btn-lg">
                            <i class="fas fa-images me-2"></i>Xem thư viện
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Tạo trái tim bay
        function createHeart() {
            const heart = document.createElement('i');
            heart.className = 'fas fa-heart heart';
            heart.style.left = Math.random() * 100 + '%';
            heart.style.fontSize = (Math.random() * 20 + 10) + 'px';
            heart.style.animationDelay = Math.random() * 6 + 's';
            heart.style.animationDuration = (Math.random() * 3 + 4) + 's';

            document.getElementById('floating-hearts').appendChild(heart);

            setTimeout(() => {
                heart.remove();
            }, 8000);
        }

        // Tạo hiệu ứng lấp lánh
        function createSparkle(e) {
            const sparkle = document.createElement('i');
            sparkle.className = 'fas fa-star sparkle';
            sparkle.style.left = e.clientX + 'px';
            sparkle.style.top = e.clientY + 'px';
            sparkle.style.fontSize = (Math.random() * 15 + 5) + 'px';

            document.body.appendChild(sparkle);

            setTimeout(() => {
                sparkle.remove();
            }, 2000);
        }

        // Lấy lời chúc ngẫu nhiên
        async function getNewWish() {
            const wishes = [
                "Chúc BÉ ÊU luôn xinh đẹp, hạnh phúc và thành công! 🌸",
                "20/10 này chúc BÉ ÊU luôn tươi trẻ và rạng rỡ! ✨",
                "Gửi BÉ ÊU những lời chúc tốt đẹp nhất nhân ngày Phụ nữ Việt Nam! 💐",
                "Chúc BÉ ÊU có một ngày 20/10 thật ý nghĩa và vui vẻ! 🌺",
                "Mong BÉ ÊU luôn được yêu thương và che chở! 💖",
                "Chúc BÉ ÊU luôn mạnh khỏe và gặp nhiều may mắn! 🍀",
                "20/10 - Ngày của những người phụ nữ tuyệt vời như BÉ ÊU! 👸",
                "Chúc BÉ ÊU luôn tự tin và tỏa sáng! ⭐"
            ];

            const randomWish = wishes[Math.floor(Math.random() * wishes.length)];
            document.getElementById('random-wish').innerHTML = randomWish;
        }

        // Khởi tạo hiệu ứng
        setInterval(createHeart, 1000);
        document.addEventListener('click', createSparkle);

        // Tự động đổi lời chúc
        setInterval(getNewWish, 8000);
    </script>
</body>

</html>
