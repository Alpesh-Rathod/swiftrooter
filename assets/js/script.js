document.addEventListener('DOMContentLoaded', () => {

    // Mobile Navigation Js Start
    const navbarToggle = document.getElementById('navbarToggle');
    const navMenu = document.getElementById('navMenu');
    const getBtn = document.getElementById('getBtn');
    const mobileOverlay = document.getElementById('mobileOverlay');

    // Toggle mobile menu
    navbarToggle.addEventListener('click', function () {
        this.classList.toggle('active');
        navMenu.classList.toggle('active');
        getBtn.classList.toggle('active');
        mobileOverlay.classList.toggle('active');

        // Prevent body scroll when menu is open
        if (navMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });

    // Mobile Navigation Js End

    // Animated Counter Js Start

    function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16); // 60fps
        let current = start;

        const timer = setInterval(() => {
            current += increment;

            if (current >= target) {
                current = target;
                clearInterval(timer);
            }

            // Format number with K suffix
            if (current >= 1000) {
                element.textContent = Math.floor(current / 1000) + 'K+';
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    // Start animation when page loads
    window.addEventListener('load', () => {
        const counterElement = document.getElementById('counter');
        animateCounter(counterElement, 16000, 2000);
    });

    // Animated Counter Js End


    // Tab switching functionality Start
    const tabs = document.querySelectorAll('.services__tab');
    const residentialGrid = document.getElementById('residential-grid');
    const commercialGrid = document.getElementById('commercial-grid');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const tabType = this.getAttribute('data-tab');

            // Remove active class from all tabs
            tabs.forEach(t => {
                t.classList.remove('services__tab--active');
                t.classList.add('services__tab--inactive');
            });

            // Add active class to clicked tab
            this.classList.remove('services__tab--inactive');
            this.classList.add('services__tab--active');

            // Show/hide appropriate grid
            if (tabType === 'residential') {
                residentialGrid.classList.remove('services__grid--hidden');
                commercialGrid.classList.add('services__grid--hidden');
            } else {
                commercialGrid.classList.remove('services__grid--hidden');
                residentialGrid.classList.add('services__grid--hidden');
            }
        });
    });

    // Tab switching functionality End


    // FAQ Accordion Functionality Start

    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const icon = item.querySelector('.faq-icon');

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                otherItem.querySelector('.faq-icon').textContent = '+';
            });

            if (!isActive) {
                item.classList.add('active');
                icon.textContent = '✕';
            }
        });
    });

    // FAQ Accordion Functionality End

    // Video Playback Functionality Start
    
    const video = document.getElementById('videoPlayer');
    const playOverlay = document.getElementById('playOverlay');

    playOverlay.addEventListener('click', function () {
        video.setAttribute('controls', 'controls');
        video.play();
        playOverlay.classList.add('hidden');
    });

    video.addEventListener('play', function () {
        playOverlay.classList.add('hidden');
    });

    video.addEventListener('pause', function () {
        if (video.currentTime < video.duration) {
            playOverlay.classList.remove('hidden');
        }
    });

    video.addEventListener('ended', function () {
        playOverlay.classList.remove('hidden');
    });


});


