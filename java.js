document.addEventListener("DOMContentLoaded", function() {

    // --- LOGIKA UNTUK EFEK MENGETIK ---
    const dynamicText = document.getElementById('dynamic-text');
    if (dynamicText) {
        const words = ["UI/UX Design", "Design Grafis", "IT Consultant" , "Social Media Specialist"];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typeTimeout;

        function type() {
            clearTimeout(typeTimeout);
            const currentWord = words[wordIndex];
            let typeSpeed = 120;
            if (isDeleting) {
                typeSpeed = 80;
                dynamicText.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                dynamicText.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }
            if (!isDeleting && charIndex === currentWord.length) {
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 500;
            }
            typeTimeout = setTimeout(type, typeSpeed);
        }
        if (words.length > 0) {
           typeTimeout = setTimeout(type, 1500);
        }
    }

    // --- LOGIKA UNTUK NAVBAR (HAMBURGER & ACTIVE LINK ON SCROLL) ---
    const navMenu = document.getElementById('nav-menu');
    const navToggle = document.getElementById('nav-toggle');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');
    const body = document.body;

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
            if (navMenu.classList.contains('active')) {
                body.style.overflow = 'hidden';
            } else {
                body.style.overflow = 'auto';
            }
        });
    }

    function scrollActive() {
        const scrollY = window.pageYOffset;
        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - (window.innerHeight * 0.5);
            let sectionId = current.getAttribute('id');
            let link = document.querySelector('.nav-menu a[href*=' + sectionId + ']');
            if (link) {
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelectorAll('.nav-menu a.active-link').forEach(l => l.classList.remove('active-link'));
                    link.classList.add('active-link');
                }
            }
        });
    }
    window.addEventListener('scroll', scrollActive);

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
                body.style.overflow = 'auto';
            }
        });
    });
});