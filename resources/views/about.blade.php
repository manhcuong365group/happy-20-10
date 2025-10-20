@extends('layouts.app')

@section('title', 'Về Ngày Phụ Nữ Việt Nam 20/10')

@section('styles')
    <style>
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

        .content-section {
            padding: 2rem 0;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            margin: 2rem 0;
        }

        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, #ff6b9d, #ff8cc8);
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin: 3rem 0;
            width: 45%;
        }

        .timeline-item:nth-child(even) {
            margin-left: 55%;
        }

        .timeline-content {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .timeline-date {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: #ff6b9d;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .timeline-item:nth-child(even) .timeline-date {
            left: -25%;
        }

        .timeline-item:nth-child(odd) .timeline-date {
            left: 125%;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ff6b9d;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }

            .timeline-item {
                width: 100%;
                margin-left: 70px !important;
            }

            .timeline-item:nth-child(even) {
                margin-left: 70px !important;
            }

            .timeline-date {
                left: -50px !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">
                <i class="fas fa-info-circle"></i>
                Về Ngày Phụ Nữ Việt Nam
            </h1>
            <p class="page-subtitle">20 tháng 10 - Ngày tri ân những người phụ nữ Việt Nam</p>
        </div>
    </div>

    <div class="content-section">
        <div class="container">
            <div class="info-card">
                <h2 style="color: #ff6b9d; margin-bottom: 2rem;">
                    <i class="fas fa-calendar-heart me-2"></i>
                    Ý Nghĩa Ngày 20/10
                </h2>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #444;">
                    Ngày Phụ nữ Việt Nam 20/10 là ngày lễ quan trọng của đất nước ta,
                    được tổ chức hàng năm để tri ân, tôn vinh những đóng góp to lớn của
                    phụ nữ Việt Nam trong sự nghiệp xây dựng và bảo vệ Tổ quốc.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #444;">
                    Đây cũng là dịp để ghi nhận vai trò quan trọng của người phụ nữ
                    trong gia đình và xã hội, đồng thời khuyến khích sự phát triển
                    toàn diện của phụ nữ trong mọi lĩnh vực.
                </p>
            </div>

            <div class="info-card">
                <h2 style="color: #ff6b9d; margin-bottom: 2rem;">
                    <i class="fas fa-history me-2"></i>
                    Lịch Sử Hình Thành
                </h2>

                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h4>Thành lập Hội Liên hiệp Phụ nữ Việt Nam</h4>
                            <p>Ngày 20/10/1930, Hội Liên hiệp Phụ nữ Việt Nam được thành lập,
                                đánh dấu bước ngoặt quan trọng trong phong trào phụ nữ Việt Nam.</p>
                        </div>
                        <div class="timeline-date">20/10/1930</div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h4>Chính thức trở thành ngày lễ</h4>
                            <p>Sau Cách mạng tháng Tám 1945, ngày 20/10 chính thức được
                                công nhận là Ngày Phụ nữ Việt Nam.</p>
                        </div>
                        <div class="timeline-date">1945</div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h4>Phát triển và lan rộng</h4>
                            <p>Ngày 20/10 trở thành truyền thống đẹp, được cả nước hưởng ứng
                                và tổ chức với nhiều hoạt động ý nghĩa.</p>
                        </div>
                        <div class="timeline-date">Hiện tại</div>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h2 style="color: #ff6b9d; margin-bottom: 2rem;">
                    <i class="fas fa-chart-bar me-2"></i>
                    Một Số Con Số Ấn Tượng
                </h2>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">49.5%</div>
                        <div class="stat-label">Tỷ lệ phụ nữ trong dân số Việt Nam</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-number">70%</div>
                        <div class="stat-label">Phụ nữ tham gia lực lượng lao động</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-number">27%</div>
                        <div class="stat-label">Tỷ lệ nữ đại biểu Quốc hội</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-number">16%</div>
                        <div class="stat-label">Phụ nữ là lãnh đạo doanh nghiệp</div>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h2 style="color: #ff6b9d; margin-bottom: 2rem;">
                    <i class="fas fa-gifts me-2"></i>
                    Cách Tổ Chức Ngày 20/10
                </h2>

                <div class="row">
                    <div class="col-md-6">
                        <h5><i class="fas fa-home text-pink me-2"></i>Trong gia đình:</h5>
                        <ul style="line-height: 1.8;">
                            <li>Tặng hoa, quà cho mẹ, vợ, chị em</li>
                            <li>Tổ chức bữa ăn gia đình ấm cúng</li>
                            <li>Chia sẻ công việc nhà với phụ nữ</li>
                            <li>Bày tỏ lời yêu thương, biết ơn</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h5><i class="fas fa-building text-pink me-2"></i>Tại công ty:</h5>
                        <ul style="line-height: 1.8;">
                            <li>Tổ chức tiệc chúc mừng cho nữ nhân viên</li>
                            <li>Tặng quà, hoa cho đồng nghiệp nữ</li>
                            <li>Tổ chức các hoạt động văn nghệ</li>
                            <li>Vinh danh những phụ nữ xuất sắc</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="info-card text-center">
                <h2 style="color: #ff6b9d; margin-bottom: 2rem;">
                    <i class="fas fa-heart me-2"></i>
                    Thông Điệp 20/10
                </h2>
                <blockquote style="font-size: 1.3rem; color: #333; font-style: italic; margin: 2rem 0;">
                    "Ngày 20/10 không chỉ là dịp để tặng hoa, tặng quà mà còn là cơ hội
                    để chúng ta thể hiện sự trân trọng, yêu thương và ghi nhận những đóng góp
                    to lớn của phụ nữ trong cuộc sống."
                </blockquote>

                <div
                    style="background: linear-gradient(135deg, #ff6b9d, #ff8cc8); color: white; padding: 2rem; border-radius: 15px; margin-top: 2rem;">
                    <h4>💐 Chúc tất cả phụ nữ Việt Nam 💐</h4>
                    <p style="margin: 1rem 0; font-size: 1.1rem;">
                        Luôn mạnh khỏe, hạnh phúc, thành công và tỏa sáng như những ngôi sao!
                    </p>
                    <i class="fas fa-heart" style="font-size: 2rem; animation: heartbeat 1.5s infinite;"></i>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Add heartbeat animation
        const style = document.createElement('style');
        style.textContent = `
        @keyframes heartbeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }
        .text-pink { color: #ff6b9d !important; }
    `;
        document.head.appendChild(style);

        // Add scroll animation for timeline items
        document.addEventListener('DOMContentLoaded', function() {
            const timelineItems = document.querySelectorAll('.timeline-item');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            });

            timelineItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(50px)';
                item.style.transition = 'all 0.6s ease';
                observer.observe(item);
            });
        });
    </script>
@endsection
