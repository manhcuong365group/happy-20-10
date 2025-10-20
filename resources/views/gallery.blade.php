@extends('layouts.app')

@section('title', 'Thư Viện Ảnh - Ngày 20/10')

@section('styles')
    <style>
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

        .page-header {
            text-align: center;
            padding: 4rem 0 2rem;
            color: white;
        }

        .page-title {
            font-family: 'Dancing Script', cursive;
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .page-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .gallery-container {
            padding: 2rem 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .gallery-item {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .gallery-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef, #fecfef);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: #ff6b9d;
            position: relative;
            overflow: hidden;
        }

        .gallery-content {
            padding: 1.5rem;
        }

        .gallery-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .gallery-description {
            color: #666;
            line-height: 1.6;
        }

        .modal-content {
            background: linear-gradient(135deg, #ff6b9d, #ff8cc8);
            border: none;
            border-radius: 20px;
        }

        .modal-header,
        .modal-body,
        .modal-footer {
            color: white;
            border: none;
        }

        .btn-close {
            filter: invert(1);
        }

        .quote-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1.5rem;
            margin: 1rem 0;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .quote-text {
            font-style: italic;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .quote-author {
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
@endsection

@section('content')
    <div class="floating-hearts" id="floating-hearts"></div>

    <div class="page-header">
        <div class="container">
            <h1 class="page-title">
                <i class="fas fa-images"></i>
                Thư Viện Ảnh Kỷ Niệm
            </h1>
            <p class="page-subtitle">Những khoảnh khắc đẹp nhất của phụ nữ Việt Nam</p>
        </div>
    </div>

    <div class="gallery-container">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal1">
                    <div class="gallery-image">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="gallery-content">
                        <h3 class="gallery-title">Người Phụ Nữ Việt Nam</h3>
                        <p class="gallery-description">
                            Mạnh mẽ, kiên cường và tràn đầy nghị lực trong cuộc sống.
                        </p>
                    </div>
                </div>

                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal2">
                    <div class="gallery-image">
                        <i class="fas fa-heart-circle-plus"></i>
                    </div>
                    <div class="gallery-content">
                        <h3 class="gallery-title">Tình Yêu Thương</h3>
                        <p class="gallery-description">
                            Tình yêu của mẹ, của vợ, của chị em gái - vô bờ bến và thiêng liêng.
                        </p>
                    </div>
                </div>

                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal3">
                    <div class="gallery-image">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="gallery-content">
                        <h3 class="gallery-title">Tri Thức & Tài Năng</h3>
                        <p class="gallery-description">
                            Phụ nữ hiện đại với tri thức, tài năng và khát vọng vươn xa.
                        </p>
                    </div>
                </div>

                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal4">
                    <div class="gallery-image">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="gallery-content">
                        <h3 class="gallery-title">Sự Hy Sinh</h3>
                        <p class="gallery-description">
                            Những hy sinh thầm lặng vì gia đình, vì con cái, vì xã hội.
                        </p>
                    </div>
                </div>

                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal5">
                    <div class="gallery-image">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="gallery-content">
                        <h3 class="gallery-title">Thành Công Rực Rỡ</h3>
                        <p class="gallery-description">
                            Những thành tựu đáng tự hào trong mọi lĩnh vực của đời sống.
                        </p>
                    </div>
                </div>

                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal6">
                    <div class="gallery-image">
                        <i class="fas fa-rose"></i>
                    </div>
                    <div class="gallery-content">
                        <h3 class="gallery-title">Vẻ Đẹp Vĩnh Cửu</h3>
                        <p class="gallery-description">
                            Vẻ đẹp không chỉ ngoại hình mà còn từ tâm hồn trong sáng.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="galleryModal1" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Người Phụ Nữ Việt Nam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-crown" style="font-size: 5rem; color: #ffd700;"></i>
                    </div>
                    <div class="quote-card">
                        <p class="quote-text">
                            "Phụ nữ Việt Nam là những bông hoa đẹp nhất trong vườn hoa đất nước,
                            mạnh mẽ như tre, dẻo dai như lúa, và dịu dàng như nước."
                        </p>
                        <p class="quote-author">- Lời ca ngợi từ trái tim -</p>
                    </div>
                    <p>
                        Người phụ nữ Việt Nam luôn mang trong mình những phẩm chất tuyệt vời:
                        kiên cường trước nghịch cảnh, nhân ái với mọi người, và luôn hy sinh
                        vì gia đình, vì con cái.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal2" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tình Yêu Thương</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-heart-circle-plus" style="font-size: 5rem; color: #ff69b4;"></i>
                    </div>
                    <div class="quote-card">
                        <p class="quote-text">
                            "Tình yêu của người mẹ là ngọn lửa không bao giờ tắt,
                            là ánh sáng dẫn đường cho con cái suốt cuộc đời."
                        </p>
                    </div>
                    <p>
                        Tình yêu thương của phụ nữ là điều thiêng liêng nhất trên đời.
                        Từ tình yêu của mẹ dành cho con, của vợ dành cho chồng,
                        đến tình cảm chị em dành cho nhau - tất cả đều trong sáng và cao cả.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal3" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tri Thức & Tài Năng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-graduation-cap" style="font-size: 5rem; color: #4169e1;"></i>
                    </div>
                    <div class="quote-card">
                        <p class="quote-text">
                            "Giáo dục phụ nữ là giáo dục cả một dân tộc."
                        </p>
                    </div>
                    <p>
                        Phụ nữ hiện đại không chỉ đẹp về ngoại hình mà còn đẹp về trí tuệ.
                        Họ học hỏi không ngừng, phát triển tài năng và đóng góp tích cực
                        vào sự phát triển của xã hội.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal4" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sự Hy Sinh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-seedling" style="font-size: 5rem; color: #32cd32;"></i>
                    </div>
                    <div class="quote-card">
                        <p class="quote-text">
                            "Sự hy sinh của người phụ nữ là hạt giống của tình yêu,
                            nảy mầm thành những điều tốt đẹp nhất trong cuộc sống."
                        </p>
                    </div>
                    <p>
                        Những hy sinh thầm lặng của phụ nữ - từ việc chăm sóc gia đình,
                        nuôi dạy con cái, đến cống hiến cho công việc và xã hội -
                        là nền tảng cho một xã hội tốt đẹp hơn.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal5" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thành Công Rực Rỡ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-star" style="font-size: 5rem; color: #ffd700;"></i>
                    </div>
                    <div class="quote-card">
                        <p class="quote-text">
                            "Thành công của phụ nữ là niềm tự hào của cả dân tộc."
                        </p>
                    </div>
                    <p>
                        Từ các nhà khoa học, bác sĩ, giáo viên, đến các doanh nhân thành đạt -
                        phụ nữ Việt Nam đã và đang tỏa sáng trong mọi lĩnh vực,
                        góp phần xây dựng đất nước ngày càng phát triển.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal6" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vẻ Đẹp Vĩnh Cửu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-rose" style="font-size: 5rem; color: #ff1493;"></i>
                    </div>
                    <div class="quote-card">
                        <p class="quote-text">
                            "Vẻ đẹp thật sự của người phụ nữ không chỉ ở dung ngoài,
                            mà còn ở tấm lòng nhân ái và tâm hồn trong sáng."
                        </p>
                    </div>
                    <p>
                        Vẻ đẹp của phụ nữ Việt Nam là sự kết hợp hoàn hảo giữa
                        nét đẹp truyền thống và hiện đại, giữa dịu dàng và mạnh mẽ,
                        tạo nên một vẻ đẹp vĩnh cửu không phai mờ theo thời gian.
                    </p>
                </div>
            </div>
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

                setTimeout(() => {
                    if (heart.parentNode) {
                        heart.parentNode.removeChild(heart);
                    }
                }, 8000);
            }, 1000);
        }

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createFloatingHearts();
        });
    </script>
@endsection
