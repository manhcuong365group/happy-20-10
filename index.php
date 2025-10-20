<?php
// STATIC VERSION - NO LARAVEL FRAMEWORK
// Simple PHP website for Happy 20/10

function getRandomWish()
{
    $wishes = [
        // Lời chúc về vẻ đẹp
        "Chúc chị mãi mãi xinh đẹp như hoa sen trong nắng mai! 🌸",
        "20/10 này, chúc chị luôn tươi trẻ như đóa hướng dương hướng về mặt trời! 🌻",
        "Mong chị luôn rạng rỡ và quyến rủ trong mọi khoảnh khắc! ✨",
        "Chúc chị có làn da mịn màng như cánh hoa và nụ cười tỏa nắng! 😊",
        
        // Lời chúc về hạnh phúc
        "Chúc chị có một trái tim luôn tràn đầy niềm vui và hạnh phúc! 💕",
        "Mong chị được bao quanh bởi tình yêu thương và sự che chở! 🤗",
        "20/10 - Ngày để chị được yêu thương và được trân trọng như một nàng công chúa! �",
        "Chúc chị luôn có những khoảnh khắc ngọt ngào bên gia đình và bạn bè! 👨‍👩‍👧‍👦",
        
        // Lời chúc về sự nghiệp
        "Chúc chị thành công rực rỡ trong sự nghiệp và cuộc sống! �",
        "Mong chị đạt được tất cả những ước mơ và hoài bão trong lòng! ⭐",
        "Chúc chị luôn tự tin chinh phục mọi đỉnh cao trong cuộc sống! 🚀",
        "20/10 này, chúc chị trở thành phiên bản tốt nhất của chính mình! �",
        
        // Lời chúc về sức khỏe
        "Chúc chị luôn mạnh khỏe, tràn đầy năng lượng tích cực! 🌟",
        "Mong chị có sức khỏe dẻo dai như cây tre Việt Nam! 🎋",
        "Chúc chị luôn khỏe mạnh để yêu thương và chăm sóc những người xung quanh! ❤️",
        
        // Lời chúc về may mắn
        "Chúc chị gặp nhiều may mắn và thuận lợi trên mọi nẻo đường! 🍀",
        "Mong chị luôn được thần may mắn chiếu cố và phù hộ! 🌈",
        "20/10 - Chúc chị có những điều bất ngờ tuyệt vời trong cuộc sống! 🎁",
        
        // Lời chúc đặc biệt và ý nghĩa
        "Phụ nữ như chị chính là món quà quý giá nhất của cuộc đời! 💎",
        "Chúc chị mãi mãi là nguồn cảm hứng và động lực cho mọi người xung quanh! 🌺",
        "20/10 - Ngày tôn vinh vẻ đẹp, trí tuệ và nhân cách tuyệt vời của chị! 🌹",
        "Mong chị luôn tự hào về bản thân và giá trị to lớn mà chị mang lại! �",
        "Chúc chị là ánh sáng ấm áp, lan tỏa yêu thương đến mọi nơi! 🕯️",
        "Phụ nữ Việt Nam như chị chính là niềm tự hào của dân tộc! 🇻🇳",
        
        // Lời chúc thơ mộng
        "Như cánh hoa anh đào bay trong gió, chúc chị luôn nhẹ nhàng và duyên dáng! 🌸",
        "Chúc chị có cuộc sống ngọt ngào như mật ong và thơm như hoa nhài! 🍯",
        "Mong chị luôn tỏa sáng như ngôi sao sáng nhất trên bầu trời đêm! ⭐",
        "20/10 - Chúc chị có trái tim ấm áp như mặt trời và tâm hồn trong veo như suối nguồn! 🌞"
    ];
    return $wishes[array_rand($wishes)];
}

$page = $_GET['page'] ?? 'home';

if ($page === 'random-wish') {
    header('Content-Type: application/json');
    echo json_encode(['wish' => getRandomWish()]);
    exit;
}
?>
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

        .btn-outline-pink {
            border: 2px solid #ff1493;
            color: #ff1493;
            transition: all 0.3s ease;
        }

        .btn-outline-pink:hover {
            background: #ff1493;
            border-color: #ff1493;
            color: white;
            transform: translateY(-2px);
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

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .gallery-item {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
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
                        <a class="nav-link <?= $page === 'home' ? 'active' : '' ?>" href="?page=home">
                            <i class="fas fa-home me-1"></i>Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page === 'gallery' ? 'active' : '' ?>" href="?page=gallery">
                            <i class="fas fa-images me-1"></i>Thư viện
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page === 'wishes' ? 'active' : '' ?>" href="?page=wishes">
                            <i class="fas fa-heart me-1"></i>Lời chúc
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page === 'about' ? 'active' : '' ?>" href="?page=about">
                            <i class="fas fa-info-circle me-1"></i>Về 20/10
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid">
        <?php
        switch ($page) {
            case 'gallery':
        ?>
                <section class="hero-section">
                    <div class="floating-hearts" id="floating-hearts"></div>
                    <div class="container">
                        <h1 class="main-title">Thư Viện Ảnh 20/10</h1>
                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <i class="fas fa-flower fa-3x text-pink mb-3"></i>
                                <h4>Hoa Sen</h4>
                                <p>Biểu tượng của sự thanh cao và thuần khiết</p>
                            </div>
                            <div class="gallery-item">
                                <i class="fas fa-heart fa-3x text-danger mb-3"></i>
                                <h4>Tình Yêu Thương</h4>
                                <p>Dành cho những người phụ nữ tuyệt vời</p>
                            </div>
                            <div class="gallery-item">
                                <i class="fas fa-star fa-3x text-warning mb-3"></i>
                                <h4>Tỏa Sáng</h4>
                                <p>Như những ngôi sao trên bầu trời</p>
                            </div>
                            <div class="gallery-item">
                                <i class="fas fa-gift fa-3x text-success mb-3"></i>
                                <h4>Món Quà</h4>
                                <p>Những lời chúc tốt đẹp nhất</p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php
                break;

            case 'wishes':
            ?>
                <section class="hero-section">
                    <div class="floating-hearts" id="floating-hearts"></div>
                    <div class="container">
                        <h1 class="main-title">Lời Chúc 20/10</h1>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="wish-card">
                                    <h5><i class="fas fa-heart text-danger me-2"></i>Chúc mừng ngày Phụ nữ</h5>
                                    <p>"Chúc các chị, các cô luôn xinh đẹp, hạnh phúc và thành công trong cuộc sống!"</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="wish-card">
                                    <h5><i class="fas fa-star text-warning me-2"></i>Tỏa sáng mãi</h5>
                                    <p>"20/10 này chúc chị luôn tươi trẻ và rạng rỡ như những bông hoa!"</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="wish-card">
                                    <h5><i class="fas fa-flower text-pink me-2"></i>Như hoa thơm</h5>
                                    <p>"Gửi chị những lời chúc tốt đẹp nhất nhân ngày Phụ nữ Việt Nam!"</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="wish-card">
                                    <h5><i class="fas fa-crown text-warning me-2"></i>Nữ hoàng</h5>
                                    <p>"20/10 - Ngày của những người phụ nữ tuyệt vời như chị!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php
                break;

            case 'about':
            ?>
                <section class="hero-section">
                    <div class="floating-hearts" id="floating-hearts"></div>
                    <div class="container">
                        <h1 class="main-title">Về Ngày 20/10</h1>
                        <div class="wish-card">
                            <h4>Ngày Phụ nữ Việt Nam 20/10</h4>
                            <p class="lead">
                                Ngày Phụ nữ Việt Nam 20/10 là ngày lễ đặc biệt để tôn vinh những đóng góp to lớn của phụ nữ Việt Nam cho xã hội.
                            </p>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <i class="fas fa-heart fa-3x text-danger mb-3"></i>
                                    <h5>Tình Yêu Thương</h5>
                                    <p>Thể hiện sự trân trọng và yêu thương</p>
                                </div>
                                <div class="col-md-4">
                                    <i class="fas fa-hands-helping fa-3x text-success mb-3"></i>
                                    <h5>Đóng Góp</h5>
                                    <p>Ghi nhận những cống hiến của phụ nữ</p>
                                </div>
                                <div class="col-md-4">
                                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                                    <h5>Cộng Đồng</h5>
                                    <p>Kết nối và chia sẻ yêu thương</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php
                break;

            default: // home
            ?>
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
                                        <?= getRandomWish() ?>
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

                                    <div class="row mb-4">
                                        <div class="col-md-12 text-center">
                                            <h6 class="text-muted mb-3">Chọn chủ đề lời chúc:</h6>
                                            <div class="btn-group-vertical btn-group-lg d-md-none">
                                                <button class="btn btn-outline-pink mb-2" onclick="getWishByTheme('beauty')">
                                                    <i class="fas fa-flower me-2"></i>Vẻ đẹp
                                                </button>
                                                <button class="btn btn-outline-success mb-2" onclick="getWishByTheme('happiness')">
                                                    <i class="fas fa-heart me-2"></i>Hạnh phúc
                                                </button>
                                                <button class="btn btn-outline-warning mb-2" onclick="getWishByTheme('success')">
                                                    <i class="fas fa-trophy me-2"></i>Thành công
                                                </button>
                                                <button class="btn btn-outline-info mb-2" onclick="getWishByTheme('health')">
                                                    <i class="fas fa-leaf me-2"></i>Sức khỏe
                                                </button>
                                                <button class="btn btn-outline-primary mb-2" onclick="getWishByTheme('luck')">
                                                    <i class="fas fa-clover me-2"></i>May mắn
                                                </button>
                                                <button class="btn btn-outline-secondary mb-2" onclick="getWishByTheme('special')">
                                                    <i class="fas fa-crown me-2"></i>Đặc biệt
                                                </button>
                                                <button class="btn btn-outline-dark mb-2" onclick="getWishByTheme('poetic')">
                                                    <i class="fas fa-feather me-2"></i>Thơ mộng
                                                </button>
                                            </div>
                                            <div class="d-none d-md-block">
                                                <button class="btn btn-outline-pink btn-sm me-2 mb-2" onclick="getWishByTheme('beauty')">
                                                    <i class="fas fa-flower me-1"></i>Vẻ đẹp
                                                </button>
                                                <button class="btn btn-outline-success btn-sm me-2 mb-2" onclick="getWishByTheme('happiness')">
                                                    <i class="fas fa-heart me-1"></i>Hạnh phúc
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-2 mb-2" onclick="getWishByTheme('success')">
                                                    <i class="fas fa-trophy me-1"></i>Thành công
                                                </button>
                                                <button class="btn btn-outline-info btn-sm me-2 mb-2" onclick="getWishByTheme('health')">
                                                    <i class="fas fa-leaf me-1"></i>Sức khỏe
                                                </button>
                                                <button class="btn btn-outline-primary btn-sm me-2 mb-2" onclick="getWishByTheme('luck')">
                                                    <i class="fas fa-clover me-1"></i>May mắn
                                                </button>
                                                <button class="btn btn-outline-secondary btn-sm me-2 mb-2" onclick="getWishByTheme('special')">
                                                    <i class="fas fa-crown me-1"></i>Đặc biệt
                                                </button>
                                                <button class="btn btn-outline-dark btn-sm me-2 mb-2" onclick="getWishByTheme('poetic')">
                                                    <i class="fas fa-feather me-1"></i>Thơ mộng
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-pink btn-lg me-3" onclick="getNewWish()">
                                        <i class="fas fa-magic me-2"></i>Lời chúc ngẫu nhiên
                                    </button>

                                    <a href="?page=gallery" class="btn btn-outline-danger btn-lg">
                                        <i class="fas fa-images me-2"></i>Xem thư viện
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <?php
                break;
        }
        ?>
    </div>

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
        function getNewWish() {
            const wishes = [
                // Lời chúc về vẻ đẹp
                "Chúc chị mãi mãi xinh đẹp như hoa sen trong nắng mai! 🌸",
                "20/10 này, chúc chị luôn tươi trẻ như đóa hướng dương hướng về mặt trời! 🌻",
                "Mong chị luôn rạng rỡ và quyến rủ trong mọi khoảnh khắc! ✨",
                "Chúc chị có làn da mịn màng như cánh hoa và nụ cười tỏa nắng! 😊",
                
                // Lời chúc về hạnh phúc
                "Chúc chị có một trái tim luôn tràn đầy niềm vui và hạnh phúc! 💕",
                "Mong chị được bao quanh bởi tình yêu thương và sự che chở! 🤗",
                "20/10 - Ngày để chị được yêu thương và được trân trọng như một nàng công chúa! �",
                "Chúc chị luôn có những khoảnh khắc ngọt ngào bên gia đình và bạn bè! 👨‍👩‍👧‍👦",
                
                // Lời chúc về sự nghiệp
                "Chúc chị thành công rực rỡ trong sự nghiệp và cuộc sống! �",
                "Mong chị đạt được tất cả những ước mơ và hoài bão trong lòng! ⭐",
                "Chúc chị luôn tự tin chinh phục mọi đỉnh cao trong cuộc sống! 🚀",
                "20/10 này, chúc chị trở thành phiên bản tốt nhất của chính mình! �",
                
                // Lời chúc về sức khỏe
                "Chúc chị luôn mạnh khỏe, tràn đầy năng lượng tích cực! 🌟",
                "Mong chị có sức khỏe dẻo dai như cây tre Việt Nam! 🎋",
                "Chúc chị luôn khỏe mạnh để yêu thương và chăm sóc những người xung quanh! ❤️",
                
                // Lời chúc về may mắn
                "Chúc chị gặp nhiều may mắn và thuận lợi trên mọi nẻo đường! 🍀",
                "Mong chị luôn được thần may mắn chiếu cố và phù hộ! 🌈",
                "20/10 - Chúc chị có những điều bất ngờ tuyệt vời trong cuộc sống! 🎁",
                
                // Lời chúc đặc biệt và ý nghĩa
                "Phụ nữ như chị chính là món quà quý giá nhất của cuộc đời! 💎",
                "Chúc chị mãi mãi là nguồn cảm hứng và động lực cho mọi người xung quanh! 🌺",
                "20/10 - Ngày tôn vinh vẻ đẹp, trí tuệ và nhân cách tuyệt vời của chị! 🌹",
                "Mong chị luôn tự hào về bản thân và giá trị to lớn mà chị mang lại! �",
                "Chúc chị là ánh sáng ấm áp, lan tỏa yêu thương đến mọi nơi! 🕯️",
                "Phụ nữ Việt Nam như chị chính là niềm tự hào của dân tộc! 🇻🇳",
                
                // Lời chúc thơ mộng
                "Như cánh hoa anh đào bay trong gió, chúc chị luôn nhẹ nhàng và duyên dáng! 🌸",
                "Chúc chị có cuộc sống ngọt ngào như mật ong và thơm như hoa nhài! 🍯",
                "Mong chị luôn tỏa sáng như ngôi sao sáng nhất trên bầu trời đêm! ⭐",
                "20/10 - Chúc chị có trái tim ấm áp như mặt trời và tâm hồn trong veo như suối nguồn! 🌞"
            ];

            const randomWish = wishes[Math.floor(Math.random() * wishes.length)];
            document.getElementById('random-wish').innerHTML = randomWish;
        }

        // Lấy lời chúc theo chủ đề
        function getWishByTheme(theme) {
            const allWishes = {
                beauty: [
                    "Chúc chị mãi mãi xinh đẹp như hoa sen trong nắng mai! 🌸",
                    "20/10 này, chúc chị luôn tươi trẻ như đóa hướng dương hướng về mặt trời! 🌻",
                    "Mong chị luôn rạng rỡ và quyến rủ trong mọi khoảnh khắc! ✨",
                    "Chúc chị có làn da mịn màng như cánh hoa và nụ cười tỏa nắng! 😊"
                ],
                happiness: [
                    "Chúc chị có một trái tim luôn tràn đầy niềm vui và hạnh phúc! 💕",
                    "Mong chị được bao quanh bởi tình yêu thương và sự che chở! 🤗",
                    "20/10 - Ngày để chị được yêu thương và được trân trọng như một nàng công chúa! 👸",
                    "Chúc chị luôn có những khoảnh khắc ngọt ngào bên gia đình và bạn bè! 👨‍👩‍👧‍👦"
                ],
                success: [
                    "Chúc chị thành công rực rỡ trong sự nghiệp và cuộc sống! 🏆",
                    "Mong chị đạt được tất cả những ước mơ và hoài bão trong lòng! ⭐",
                    "Chúc chị luôn tự tin chinh phục mọi đỉnh cao trong cuộc sống! 🚀",
                    "20/10 này, chúc chị trở thành phiên bản tốt nhất của chính mình! 💪"
                ],
                health: [
                    "Chúc chị luôn mạnh khỏe, tràn đầy năng lượng tích cực! 🌟",
                    "Mong chị có sức khỏe dẻo dai như cây tre Việt Nam! 🎋",
                    "Chúc chị luôn khỏe mạnh để yêu thương và chăm sóc những người xung quanh! ❤️"
                ],
                luck: [
                    "Chúc chị gặp nhiều may mắn và thuận lợi trên mọi nẻo đường! 🍀",
                    "Mong chị luôn được thần may mắn chiếu cố và phù hộ! 🌈",
                    "20/10 - Chúc chị có những điều bất ngờ tuyệt vời trong cuộc sống! 🎁"
                ],
                special: [
                    "Phụ nữ như chị chính là món quà quý giá nhất của cuộc đời! 💎",
                    "Chúc chị mãi mãi là nguồn cảm hứng và động lực cho mọi người xung quanh! 🌺",
                    "20/10 - Ngày tôn vinh vẻ đẹp, trí tuệ và nhân cách tuyệt vời của chị! 🌹",
                    "Mong chị luôn tự hào về bản thân và giá trị to lớn mà chị mang lại! 👑",
                    "Chúc chị là ánh sáng ấm áp, lan tỏa yêu thương đến mọi nơi! 🕯️",
                    "Phụ nữ Việt Nam như chị chính là niềm tự hào của dân tộc! 🇻🇳"
                ],
                poetic: [
                    "Như cánh hoa anh đào bay trong gió, chúc chị luôn nhẹ nhàng và duyên dáng! 🌸",
                    "Chúc chị có cuộc sống ngọt ngào như mật ong và thơm như hoa nhài! 🍯",
                    "Mong chị luôn tỏa sáng như ngôi sao sáng nhất trên bầu trời đêm! ⭐",
                    "20/10 - Chúc chị có trái tim ấm áp như mặt trời và tâm hồn trong veo như suối nguồn! 🌞"
                ]
            };

            const themeWishes = allWishes[theme] || allWishes.special;
            const randomWish = themeWishes[Math.floor(Math.random() * themeWishes.length)];
            document.getElementById('random-wish').innerHTML = randomWish;

            // Thêm hiệu ứng
            const wishElement = document.getElementById('random-wish');
            wishElement.style.transform = 'scale(0.9)';
            wishElement.style.transition = 'transform 0.3s ease';
            setTimeout(() => {
                wishElement.style.transform = 'scale(1)';
            }, 150);
        }

        // Khởi tạo hiệu ứng
        setInterval(createHeart, 1000);
        document.addEventListener('click', createSparkle);

        // Tự động đổi lời chúc
        setInterval(getNewWish, 8000);
    </script>
</body>

</html>
