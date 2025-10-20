@extends('layouts.app')

@section('title', 'Chúc Mừng Ngày Phụ Nữ Việt Nam 20/10')

@section('styles')
    <style>
        body {
            overflow-x: hidden;
        }

        .floating-hearts {
            position: fixed;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .heart {
            position: absolute;
            color: rgba(255, 255, 255, 0.7);
            font-size: 20px;
            animation: float 6s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .container-main {
            padding: 2rem 0;
        }

        .header-section {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out;
        }

        .main-title {
            font-family: 'Dancing Script', cursive;
            font-size: 4rem;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 1rem;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3), 0 0 10px rgba(255, 255, 255, 0.5);
            }

            to {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3), 0 0 20px rgba(255, 255, 255, 0.8), 0 0 30px rgba(255, 255, 255, 0.6);
            }
        }

        .subtitle {
            font-size: 1.5rem;
            color: #fff;
            font-weight: 300;
        }

        .card-message {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            margin: 2rem auto;
            max-width: 800px;
            animation: slideIn 1.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .message-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #444;
            text-align: center;
            margin-bottom: 2rem;
        }

        .flower-decoration {
            text-align: center;
            margin: 2rem 0;
        }

        .flower {
            font-size: 3rem;
            color: #ff6b9d;
            margin: 0 0.5rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .wishes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .wish-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .wish-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .wish-icon {
            font-size: 3rem;
            color: #ff6b9d;
            margin-bottom: 1rem;
        }

        .wish-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
        }

        .wish-text {
            color: #666;
            line-height: 1.6;
        }

        .footer-section {
            text-align: center;
            margin-top: 4rem;
            color: #fff;
        }

        .footer-text {
            font-size: 1.1rem;
            font-weight: 300;
        }

        .heart-pulse {
            color: #ff4757;
            animation: heartbeat 1.5s ease-in-out infinite;
        }

        @keyframes heartbeat {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-special {
            background: linear-gradient(45deg, #ff6b9d, #ff4d6d);
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 8px 15px rgba(255, 107, 157, 0.3);
        }

        .btn-special:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(255, 107, 157, 0.4);
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 2.5rem;
            }

            .card-message {
                padding: 2rem;
                margin: 1rem;
            }

            .wishes-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Floating Hearts Animation -->
    <div class="floating-hearts" id="floating-hearts"></div>
    <div class="container-main">
        <!-- Header Section -->
        <div class="header-section">
            <h1 class="main-title">
                <i class="fas fa-heart heart-pulse"></i>
                Chúc Mừng Ngày Phụ Nữ Việt Nam
                <i class="fas fa-heart heart-pulse"></i>
            </h1>
            <p class="subtitle">20 tháng 10 - Ngày tri ân những người phụ nữ tuyệt vời</p>
        </div>

        <!-- Main Message Card -->
        <div class="card-message">
            <div class="flower-decoration">
                <i class="fas fa-seedling flower"></i>
                <i class="fas fa-rose flower"></i>
                <i class="fas fa-seedling flower"></i>
            </div>

            <p class="message-text">
                Gửi tới tất cả những người phụ nữ tuyệt vời - những bông hoa đẹp nhất trong cuộc sống,
                những người mẹ tài năng, những người vợ đảm đang, những người chị em đáng yêu,
                và những cô gái xinh đẹp đầy nghị lực.
            </p>

            <p class="message-text">
                <strong style="color: #ff6b9d;">
                    {{ $randomWish }}
                </strong>
            </p>
        </div>

        <!-- Wishes Grid -->
        <div class="wishes-grid">
            @foreach ($wishes as $wish)
                <div class="wish-card">
                    <div class="wish-icon">
                        <i class="{{ $wish['icon'] }}"></i>
                    </div>
                    <h3 class="wish-title">{{ $wish['title'] }}</h3>
                    <p class="wish-text">
                        {{ $wish['message'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Special Message -->
        <div class="text-center mt-5">
            <p style="color: white; font-size: 1.3rem; margin-bottom: 2rem;">
                💐 Tặng những người phụ nữ tuyệt vời nhất thế giới! 💐
            </p>
            <a href="#" class="btn-special" onclick="showSurprise()">
                <i class="fas fa-gift"></i> Nhận Quà Bất Ngờ
            </a>
        </div>

        <!-- Footer -->
        <div class="footer-section">
            <p class="footer-text">
                Với tất cả tình yêu và sự trân trọng
                <i class="fas fa-heart heart-pulse"></i>
            </p>
            <p class="footer-text mt-2">
                <small>© {{ date('Y') }} - Được tạo với ❤️ cho ngày 20/10</small>
            </p>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Create floating hearts animation
        function createFloatingHearts() {
            const heartsContainer = document.getElementById('floating-hearts');
            const heartSymbols = ['💖', '💕', '💗', '🌸', '🌺', '🌹'];

            setInterval(() => {
                const heart = document.createElement('div');
                heart.className = 'heart';
                heart.innerHTML = heartSymbols[Math.floor(Math.random() * heartSymbols.length)];
                heart.style.left = Math.random() * 100 + '%';
                heart.style.animationDuration = (Math.random() * 3 + 3) + 's';
                heart.style.animationDelay = Math.random() * 2 + 's';

                heartsContainer.appendChild(heart);

                // Remove heart after animation
                setTimeout(() => {
                    if (heart.parentNode) {
                        heart.parentNode.removeChild(heart);
                    }
                }, 8000);
            }, 800);
        }

        // Show surprise message
        async function showSurprise() {
            let randomMessage = "🎉 Chúc chị em luôn xinh đẹp và hạnh phúc! 🎉";

            try {
                const response = await fetch('/random-wish');
                const data = await response.json();
                randomMessage = data.message;
            } catch (error) {
                console.log('Sử dụng tin nhắn mặc định');
            }

            // Create modal-like alert with custom styling
            const modal = document.createElement('div');
            modal.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.8);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
                animation: fadeIn 0.3s ease;
            `;

            modal.innerHTML = `
                <div style="
                    background: linear-gradient(135deg, #ff6b9d, #ff8cc8);
                    padding: 3rem;
                    border-radius: 20px;
                    text-align: center;
                    color: white;
                    max-width: 500px;
                    margin: 2rem;
                    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
                    animation: slideInUp 0.5s ease;
                ">
                    <h2 style="font-family: 'Dancing Script', cursive; font-size: 2.5rem; margin-bottom: 1rem;">
                        🎁 Quà Bất Ngờ! 🎁
                    </h2>
                    <p style="font-size: 1.3rem; margin-bottom: 2rem;">
                        ${randomMessage}
                    </p>
                    <button onclick="this.closest('div').style.display='none'" style="
                        background: rgba(255,255,255,0.2);
                        border: 2px solid white;
                        color: white;
                        padding: 10px 30px;
                        border-radius: 25px;
                        font-size: 1.1rem;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    " onmouseover="this.style.background='rgba(255,255,255,0.3)'"
                       onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                        ❤️ Cảm ơn!
                    </button>
                </div>
            `;

            document.body.appendChild(modal);

            // Remove modal when clicked outside
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    document.body.removeChild(modal);
                }
            });
        }

        // Add some CSS animations dynamically
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            @keyframes slideInUp {
                from {
                    opacity: 0;
                    transform: translateY(50px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);

        // Initialize animations when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createFloatingHearts();

            // Add stagger animation to wish cards
            const wishCards = document.querySelectorAll('.wish-card');
            wishCards.forEach((card, index) => {
                card.style.animationDelay = (index * 0.2) + 's';
                card.style.animation = 'fadeInUp 0.8s ease forwards';
                card.style.opacity = '0';
            });
        });

        // Add some interactive effects
        document.querySelectorAll('.wish-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Create sparkle effect on click
        document.addEventListener('click', function(e) {
            createSparkle(e.clientX, e.clientY);
        });

        function createSparkle(x, y) {
            const sparkle = document.createElement('div');
            sparkle.style.cssText = `
                position: fixed;
                left: ${x}px;
                top: ${y}px;
                width: 10px;
                height: 10px;
                background: radial-gradient(circle, #ff6b9d, transparent);
                border-radius: 50%;
                pointer-events: none;
                z-index: 1000;
                animation: sparkleAnim 1s ease-out forwards;
            `;

            document.body.appendChild(sparkle);

            setTimeout(() => {
                if (sparkle.parentNode) {
                    sparkle.parentNode.removeChild(sparkle);
                }
            }, 1000);
        }

        // Add sparkle animation
        const sparkleStyle = document.createElement('style');
        sparkleStyle.textContent = `
            @keyframes sparkleAnim {
                0% {
                    opacity: 1;
                    transform: scale(0) rotate(0deg);
                }
                50% {
                    opacity: 1;
                    transform: scale(1) rotate(180deg);
                }
                100% {
                    opacity: 0;
                    transform: scale(0) rotate(360deg);
                }
            }
        `;
        document.head.appendChild(sparkleStyle);
    </script>
@endsection
