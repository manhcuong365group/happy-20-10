@extends('layouts.app')

@section('title', 'Gửi Lời Chúc - Ngày 20/10')

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

        .wish-form-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            margin: 2rem 0;
        }

        .form-control {
            border-radius: 15px;
            border: 2px solid #f0f0f0;
            padding: 15px 20px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff6b9d;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 157, 0.25);
        }

        .btn-send {
            background: linear-gradient(45deg, #ff6b9d, #ff4d6d);
            border: none;
            color: white;
            padding: 15px 40px;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 8px 15px rgba(255, 107, 157, 0.3);
        }

        .btn-send:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(255, 107, 157, 0.4);
        }

        .wishes-display {
            margin-top: 3rem;
        }

        .wish-item {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 2rem;
            margin: 1.5rem 0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #ff6b9d;
            animation: slideInRight 0.6s ease;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .wish-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .wish-author {
            font-weight: 600;
            color: #ff6b9d;
            font-size: 1.1rem;
        }

        .wish-time {
            color: #666;
            font-size: 0.9rem;
        }

        .wish-content {
            color: #444;
            line-height: 1.6;
            font-size: 1.1rem;
        }

        .quick-wishes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .quick-wish-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.5);
            color: white;
            padding: 1rem;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .quick-wish-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #666;
        }

        .empty-state i {
            font-size: 4rem;
            color: #ff6b9d;
            margin-bottom: 1rem;
        }
    </style>
@endsection

@section('content')
    <div class="floating-hearts" id="floating-hearts"></div>

    <div class="page-header">
        <div class="container">
            <h1 class="page-title">
                <i class="fas fa-envelope-heart"></i>
                Gửi Lời Chúc 20/10
            </h1>
            <p class="page-subtitle">Chia sẻ những lời chúc tốt đẹp nhất đến phụ nữ Việt Nam</p>

            <!-- Quick Wishes -->
            <div class="quick-wishes">
                <div class="quick-wish-btn"
                    onclick="selectQuickWish('Chúc chị em luôn xinh đẹp, hạnh phúc và thành công trong mọi lĩnh vực!')">
                    <i class="fas fa-star"></i><br>
                    Lời chúc thành công
                </div>
                <div class="quick-wish-btn"
                    onclick="selectQuickWish('Chúc các chị em sức khỏe dồi dào, tình yêu ngọt ngào và gia đình ấm áp!')">
                    <i class="fas fa-heart"></i><br>
                    Lời chúc hạnh phúc
                </div>
                <div class="quick-wish-btn"
                    onclick="selectQuickWish('Cảm ơn những người phụ nữ tuyệt vời đã làm cuộc sống trở nên đẹp đẽ hơn!')">
                    <i class="fas fa-rose"></i><br>
                    Lời cảm ơn
                </div>
                <div class="quick-wish-btn"
                    onclick="selectQuickWish('Chúc ngày 20/10 thật ý nghĩa, tràn đầy niềm vui và hạnh phúc!')">
                    <i class="fas fa-gift"></i><br>
                    Chúc mừng 20/10
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Wish Form -->
        <div class="wish-form-card">
            <h3 style="color: #ff6b9d; margin-bottom: 2rem;">
                <i class="fas fa-pen-fancy me-2"></i>
                Viết Lời Chúc Của Bạn
            </h3>

            <form id="wishForm">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tên của bạn:</label>
                        <input type="text" class="form-control" id="authorName" placeholder="Nhập tên của bạn..."
                            required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gửi đến:</label>
                        <select class="form-control" id="recipient">
                            <option value="Tất cả phụ nữ Việt Nam">Tất cả phụ nữ Việt Nam</option>
                            <option value="Các bà mẹ">Các bà mẹ</option>
                            <option value="Các chị em phụ nữ">Các chị em phụ nữ</option>
                            <option value="Đồng nghiệp nữ">Đồng nghiệp nữ</option>
                            <option value="Bạn gái/vợ">Bạn gái/vợ</option>
                            <option value="Mẹ">Mẹ</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Lời chúc:</label>
                    <textarea class="form-control" id="wishContent" rows="4" placeholder="Viết lời chúc của bạn..." required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-send">
                        <i class="fas fa-paper-plane me-2"></i>
                        Gửi Lời Chúc
                    </button>
                </div>
            </form>
        </div>

        <!-- Wishes Display -->
        <div class="wishes-display">
            <h3 style="color: white; text-align: center; margin-bottom: 2rem;">
                <i class="fas fa-comments me-2"></i>
                Lời Chúc Từ Mọi Người
            </h3>

            <div id="wishesContainer">
                <!-- Dynamic content will be loaded here -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Sample wishes data (in a real app, this would come from a database)
        let wishesData = [{
                id: 1,
                author: "Nguyễn Văn A",
                recipient: "Tất cả phụ nữ Việt Nam",
                content: "Chúc tất cả phụ nữ Việt Nam luôn xinh đẹp, mạnh khỏe và hạnh phúc. Các chị em là niềm tự hào của đất nước!",
                time: "2 giờ trước"
            },
            {
                id: 2,
                author: "Trần Thị B",
                recipient: "Các bà mẹ",
                content: "Gửi lời tri ân sâu sắc đến tất cả các bà mẹ. Cảm ơn những hy sinh thầm lặng và tình yêu vô bờ bến của mẹ!",
                time: "3 giờ trước"
            },
            {
                id: 3,
                author: "Lê Văn C",
                recipient: "Bạn gái/vợ",
                content: "Chúc em luôn tỏa sáng như ngôi sao, hạnh phúc mỗi ngày và mãi mãi là công chúa trong tim anh!",
                time: "5 giờ trước"
            }
        ];

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

        // Render wishes
        function renderWishes() {
            const container = document.getElementById('wishesContainer');

            if (wishesData.length === 0) {
                container.innerHTML = `
                <div class="empty-state">
                    <i class="fas fa-heart-crack"></i>
                    <h4>Chưa có lời chúc nào</h4>
                    <p>Hãy là người đầu tiên gửi lời chúc tốt đẹp!</p>
                </div>
            `;
                return;
            }

            container.innerHTML = wishesData.map(wish => `
            <div class="wish-item">
                <div class="wish-header">
                    <div class="wish-author">
                        <i class="fas fa-user-circle me-2"></i>
                        ${wish.author}
                    </div>
                    <div class="wish-time">
                        <i class="fas fa-clock me-1"></i>
                        ${wish.time}
                    </div>
                </div>
                <div class="wish-recipient" style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">
                    <i class="fas fa-arrow-right me-1"></i>
                    Gửi đến: ${wish.recipient}
                </div>
                <div class="wish-content">
                    ${wish.content}
                </div>
            </div>
        `).join('');
        }

        // Select quick wish
        function selectQuickWish(wishText) {
            document.getElementById('wishContent').value = wishText;
            document.getElementById('wishContent').focus();
        }

        // Handle form submission
        document.getElementById('wishForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const authorName = document.getElementById('authorName').value;
            const recipient = document.getElementById('recipient').value;
            const content = document.getElementById('wishContent').value;

            if (authorName && content) {
                // Add new wish to the beginning of array
                wishesData.unshift({
                    id: Date.now(),
                    author: authorName,
                    recipient: recipient,
                    content: content,
                    time: "Vừa xong"
                });

                // Re-render wishes
                renderWishes();

                // Show success message
                showSuccessMessage();

                // Reset form
                this.reset();

                // Scroll to wishes section
                document.getElementById('wishesContainer').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });

        // Show success message
        function showSuccessMessage() {
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
                max-width: 400px;
                margin: 2rem;
                box-shadow: 0 20px 40px rgba(0,0,0,0.3);
                animation: slideInUp 0.5s ease;
            ">
                <i class="fas fa-check-circle" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                <h2 style="font-family: 'Dancing Script', cursive; font-size: 2rem; margin-bottom: 1rem;">
                    Cảm ơn bạn! 💖
                </h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                    Lời chúc của bạn đã được gửi thành công!
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
                ">
                    Đóng
                </button>
            </div>
        `;

            document.body.appendChild(modal);

            // Auto close after 3 seconds
            setTimeout(() => {
                if (modal.parentNode) {
                    document.body.removeChild(modal);
                }
            }, 3000);

            // Remove modal when clicked outside
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    document.body.removeChild(modal);
                }
            });
        }

        // Add CSS animations dynamically
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

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createFloatingHearts();
            renderWishes();
        });
    </script>
@endsection
