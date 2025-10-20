// Common JavaScript functions for Happy 20/10 website

// Loading animation
document.addEventListener('DOMContentLoaded', function () {
    // Create loading overlay
    const loading = document.createElement('div');
    loading.className = 'loading';
    loading.innerHTML = '<div class="loading-heart">💖</div>';
    document.body.prepend(loading);

    // Hide loading after page is fully loaded
    window.addEventListener('load', function () {
        setTimeout(() => {
            loading.classList.add('hide');
            setTimeout(() => loading.remove(), 500);
        }, 1000);
    });
});

// Floating hearts animation
function createFloatingHearts() {
    const heartsContainer = document.getElementById('floating-hearts');
    if (!heartsContainer) return;

    const heartSymbols = ['💖', '💕', '💗', '🌸', '🌺', '🌹', '❤️', '💛', '💜'];

    setInterval(() => {
        const heart = document.createElement('div');
        heart.className = 'heart';
        heart.innerHTML = heartSymbols[Math.floor(Math.random() * heartSymbols.length)];
        heart.style.left = Math.random() * 100 + '%';
        heart.style.animationDuration = (Math.random() * 3 + 3) + 's';
        heart.style.animationDelay = Math.random() * 2 + 's';
        heart.style.fontSize = (Math.random() * 10 + 15) + 'px';

        heartsContainer.appendChild(heart);

        // Remove heart after animation
        setTimeout(() => {
            if (heart.parentNode) {
                heart.parentNode.removeChild(heart);
            }
        }, 8000);
    }, 800);
}

// Sparkle effect on click
function createSparkleEffect() {
    document.addEventListener('click', function (e) {
        // Skip if clicking on buttons or links
        if (e.target.tagName === 'BUTTON' || e.target.tagName === 'A' || e.target.closest('button, a')) {
            return;
        }

        createSparkle(e.clientX, e.clientY);
    });
}

function createSparkle(x, y) {
    const sparkle = document.createElement('div');
    sparkle.style.cssText = `
        position: fixed;
        left: ${x}px;
        top: ${y}px;
        width: 6px;
        height: 6px;
        background: radial-gradient(circle, #ff6b9d, transparent);
        border-radius: 50%;
        pointer-events: none;
        z-index: 1000;
        animation: sparkleAnim 0.8s ease-out forwards;
    `;

    document.body.appendChild(sparkle);

    setTimeout(() => {
        if (sparkle.parentNode) {
            sparkle.parentNode.removeChild(sparkle);
        }
    }, 800);
}

// Add sparkle animation CSS
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

// Smooth scroll to top
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Add scroll to top button
function addScrollToTopButton() {
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.onclick = scrollToTop;

    scrollBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(45deg, #ff6b9d, #ff4d6d);
        border: none;
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
        box-shadow: 0 8px 15px rgba(255, 107, 157, 0.3);
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(100px);
        z-index: 1000;
    `;

    document.body.appendChild(scrollBtn);

    // Show/hide scroll button based on scroll position
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 300) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.transform = 'translateY(0)';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.transform = 'translateY(100px)';
        }
    });

    // Hover effect
    scrollBtn.addEventListener('mouseenter', function () {
        this.style.transform = 'translateY(-5px) scale(1.1)';
        this.style.boxShadow = '0 15px 25px rgba(255, 107, 157, 0.4)';
    });

    scrollBtn.addEventListener('mouseleave', function () {
        this.style.transform = window.pageYOffset > 300 ? 'translateY(0) scale(1)' : 'translateY(100px) scale(1)';
        this.style.boxShadow = '0 8px 15px rgba(255, 107, 157, 0.3)';
    });
}

// Random quote generator
const inspirationalQuotes = [
    "Phụ nữ là những bông hoa đẹp nhất trong vườn đời.",
    "Sức mạnh của phụ nữ nằm ở sự dịu dàng và kiên cường.",
    "Mỗi người phụ nữ đều có một vẻ đẹp riêng độc đáo.",
    "Tình yêu của mẹ là ngọn lửa không bao giờ tắt.",
    "Phụ nữ thông minh là báu vật của xã hội.",
    "Nụ cười của phụ nữ có thể thắp sáng cả thế giới.",
    "Phụ nữ mạnh mẽ nuôi dưỡng những thế hệ tương lai."
];

function getRandomQuote() {
    return inspirationalQuotes[Math.floor(Math.random() * inspirationalQuotes.length)];
}

// Initialize all effects
document.addEventListener('DOMContentLoaded', function () {
    createFloatingHearts();
    createSparkleEffect();
    addScrollToTopButton();

    // Add some animations to elements
    const cards = document.querySelectorAll('.card, .wish-card, .gallery-item, .info-card');
    cards.forEach((card, index) => {
        card.style.animationDelay = (index * 0.1) + 's';
        card.style.animation = 'fadeInUp 0.6s ease forwards';
        card.style.opacity = '0';
    });
});

// Fade in animation
const fadeInStyle = document.createElement('style');
fadeInStyle.textContent = `
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
`;
document.head.appendChild(fadeInStyle);

// Error handling for images
document.addEventListener('DOMContentLoaded', function () {
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('error', function () {
            this.style.display = 'none';
        });
    });
});

// Performance optimization
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        // Service worker can be added later for caching
    });
}

// Export functions for global use
window.HappyUtils = {
    createSparkle,
    getRandomQuote,
    scrollToTop,
    createFloatingHearts
};
