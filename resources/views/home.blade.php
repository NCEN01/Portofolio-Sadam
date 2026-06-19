@extends('layouts.main')

@section('title', 'Sadam Alamsyah | Portfolio')

@section('content')
<!-- ===== HERO SECTION ===== -->
<section id="home" class="section hero-landing-v2">
    <!-- Background Grid -->
    <div class="hero-bg-grid"></div>

    <!-- Hero Content -->
    <div class="hero-main-content">
        <!-- Left Side - Text Content -->
        <div class="hero-text-section">
            <div class="hero-greeting">
                <span class="greeting-line"></span>
                <span class="greeting-text">Hello, I'm</span>
            </div>
            <h1 class="hero-name">
                <span class="name-line">Sadam,</span>
                <span class="name-role-wrapper">
                    <span class="name-role" id="roleText">Web Developer</span>
                </span>
            </h1>

            <p class="hero-description">
                Building elegant digital experiences through clean code and creative design.
                Specializing in modern web development, mobile applications, and user-centered interface design.
            </p>

            <div class="hero-stats-row">
                <div class="stat-box">
                    <span class="stat-value">3+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-box">
                    <span class="stat-value">55+</span>
                    <span class="stat-label">Projects Done</span>
                </div>
                <div class="stat-box">
                    <span class="stat-value">12+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
            </div>

            <div class="hero-cta-buttons">
                <a href="{{ asset('cv/CV SADAM ALAMSYAH.pdf') }}" class="cta-main cta-main-primary" download>
                    <span>See My CV</span>
                    <i class='bx bx-download'></i>
                </a>
                <a href="#projects" class="cta-main cta-main-secondary">
                    <span>See My Project</span>
                    <i class='bx bx-briefcase'></i>
                </a>
            </div>

            <div class="hero-social-links">
                <a href="https://www.instagram.com/sdmsyh_?igsh=MWt5MHk0cHVjNjRneQ==&utm_source=ig_contact_invite" target="_blank" class="social-link-port">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://wa.me/6287885697679" target="_blank" class="social-link-port">
                    <i class='bx bxl-whatsapp'></i>
                </a>
                <a href="https://www.linkedin.com/in/sadam-alamsyah-349a51308" target="_blank" class="social-link-port" aria-label="LinkedIn Sadam Alamsyah" title="LinkedIn Sadam Alamsyah">
                    <i class='bx bxl-linkedin'></i>
                </a>
                <a href="https://github.com/NCEN01" target="_blank" class="social-link-port">
                    <i class='bx bxl-github'></i>
                </a>
                <a href="mailto:sadam.alamsyah04@gmail.com?subject=Halo%20Sadam&body=Halo%20Sadam%2C%20saya%20tertarik%20untuk%20berbicara%20lebih%20lanjut." class="social-link-port">
                    <i class='bx bxs-envelope'></i>
                </a>
            </div>
        </div>

        <!-- Right Side - Interactive Photo Section -->
        <div class="hero-photo-section" id="photoSection">
            <!-- Canvas for Particles -->
            <canvas id="particlesCanvas"></canvas>

            <!-- Interactive Photo Container -->
            <div class="photo-interactive-wrapper" id="photoWrapper">

                <!-- Background Decorative Rings -->
                <div class="photo-rings">
                    <div class="ring ring-1"></div>
                    <div class="ring ring-2"></div>
                    <div class="ring ring-3"></div>
                </div>

                <!-- Glow Effects -->
                <div class="photo-glow-orb" id="glowOrb"></div>

                <!-- Floating Particles -->
                <div class="floating-particles" id="floatingParticles">
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                </div>

                <!-- Main Photo Frame with 3D Effect -->
                <div class="photo-3d-container" id="photo3D">
                    <!-- Frame Border Glow -->
                    <div class="frame-glow-border"></div>

                    <!-- Embedded Skill Badges at Corners -->
                    <div class="skill-badges-embedded">
                        <div class="skill-badge-embedded" data-skill="mobile">
                            <span class="badge-icon"><i class='bx bx-mobile-alt'></i></span>
                            <span class="badge-name">Mobile</span>
                        </div>
                        <div class="skill-badge-embedded" data-skill="web">
                            <span class="badge-icon"><i class='bx bx-code-alt'></i></span>
                            <span class="badge-name">Web</span>
                        </div>
                        <div class="skill-badge-embedded" data-skill="ui">
                            <span class="badge-icon"><i class='bx bxl-figma'></i></span>
                            <span class="badge-name">UI/UX</span>
                        </div>
                    </div>

                    <div class="photo-cube" id="photoCube">
                        <!-- Photo Face -->
                        <div class="photo-face photo-front">
                            <div class="photo-content">
                                <!-- Main Photo -->
                                <div class="photo-frame-outer">
                                    <img src="{{ asset('img/sadam.png') }}" alt="Sadam Alamsyah" class="photo-main" id="mainPhoto">
                                    <!-- Photo Reflection -->
                                    <div class="photo-reflection">
                                        <img src="{{ asset('img/sadam.png') }}" alt="" class="reflection-img">
                                        <div class="reflection-overlay"></div>
                                    </div>
                                    <!-- Photo Frame Decorations -->
                                    <div class="frame-deco frame-deco-top"></div>
                                    <div class="frame-deco frame-deco-bottom"></div>
                                    <!-- Date/Time Stamp -->
                                    <div class="photo-timestamp">
                                        <span class="timestamp-text">PORTFOLIO 2026</span>
                                    </div>
                                </div>
                                <div class="photo-tunnel-effect"></div>
                            </div>
                            <div class="photo-glitch-overlay" id="glitchOverlay"></div>
                            <div class="photo-light-rays" id="lightRays"></div>
                        </div>
                    </div>

                    <!-- Magnetic Effect Elements -->
                    <div class="magnetic-cursor" id="magneticCursor"></div>

                    <!-- Distortion Overlay -->
                    <div class="distortion-overlay" id="distortionOverlay">
                        <div class="distortion-line"></div>
                        <div class="distortion-line"></div>
                        <div class="distortion-line"></div>
                    </div>

                    <!-- Corner Brackets -->
                    <div class="frame-corner-3d corner-tl-3d"></div>
                    <div class="frame-corner-3d corner-tr-3d"></div>
                    <div class="frame-corner-3d corner-bl-3d"></div>
                    <div class="frame-corner-3d corner-br-3d"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-portfolio">
        <div class="scroll-line-port"></div>
        <span class="scroll-text-port">Scroll Down</span>
    </div>
</section>

<!-- Advanced JavaScript for Interactive Photo Effects -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== ROLE TYPING ANIMATION =====
    const roleText = document.getElementById('roleText');
    const roles = ['Web Developer', 'Mobile Developer', 'UI UX Design'];
    let currentIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100;

    function typeRole() {
        const currentRole = roles[currentIndex];
        if (isDeleting) {
            roleText.textContent = currentRole.substring(0, charIndex - 1);
            charIndex--;
            typeSpeed = 50;
        } else {
            roleText.textContent = currentRole.substring(0, charIndex + 1);
            charIndex++;
            typeSpeed = 100;
        }
        if (!isDeleting && charIndex === currentRole.length) {
            typeSpeed = 2000;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            currentIndex = (currentIndex + 1) % roles.length;
            typeSpeed = 500;
        }
        setTimeout(typeRole, typeSpeed);
    }
    setTimeout(typeRole, 1000);

    // ===== INTERACTIVE PHOTO EFFECTS =====
    const photoSection = document.getElementById('photoSection');
    const photoWrapper = document.getElementById('photoWrapper');
    const photo3D = document.getElementById('photo3D');
    const photoCube = document.getElementById('photoCube');
    const mainPhoto = document.getElementById('mainPhoto');
    const glowOrb = document.getElementById('glowOrb');
    const magneticCursor = document.getElementById('magneticCursor');
    const glitchOverlay = document.getElementById('glitchOverlay');
    const lightRays = document.getElementById('lightRays');
    const floatingParticles = document.getElementById('floatingParticles');
    const particlesCanvas = document.getElementById('particlesCanvas');
    const ctx = particlesCanvas.getContext('2d');

    // Setup Canvas
    function resizeCanvas() {
        particlesCanvas.width = photoSection.offsetWidth;
        particlesCanvas.height = photoSection.offsetHeight;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    // ===== ENHANCED PARTICLES SYSTEM =====
    class Particle {
        constructor() {
            this.reset();
        }
        reset() {
            this.x = Math.random() * particlesCanvas.width;
            this.y = Math.random() * particlesCanvas.height;
            this.size = Math.random() * 3 + 1;
            this.speedX = (Math.random() - 0.5) * 0.5;
            this.speedY = (Math.random() - 0.5) * 0.5;
            this.opacity = Math.random() * 0.5 + 0.2;
            this.hue = Math.random() > 0.5 ? 25 : 0;
        }
        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            if (this.x < 0 || this.x > particlesCanvas.width ||
                this.y < 0 || this.y > particlesCanvas.height) {
                this.reset();
            }
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = `hsla(${this.hue}, 100%, 60%, ${this.opacity})`;
            ctx.fill();
        }
    }

    const particles = Array.from({ length: 60 }, () => new Particle());

    function animateParticles() {
        ctx.clearRect(0, 0, particlesCanvas.width, particlesCanvas.height);
        particles.forEach(p => {
            p.update();
            p.draw();
        });
        // Draw connections
        particles.forEach((p1, i) => {
            particles.slice(i + 1).forEach(p2 => {
                const dx = p1.x - p2.x;
                const dy = p1.y - p2.y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 120) {
                    ctx.beginPath();
                    ctx.moveTo(p1.x, p1.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.strokeStyle = `rgba(255, 107, 53, ${0.15 * (1 - dist / 120)})`;
                    ctx.lineWidth = 0.5;
                    ctx.stroke();
                }
            });
        });
        requestAnimationFrame(animateParticles);
    }
    animateParticles();

    // ===== 3D PARALLAX EFFECT =====
    let rotateX = 0;
    let rotateY = 0;
    let targetX = 0;
    let targetY = 0;
    let isHovering = false;

    photoSection.addEventListener('mousemove', (e) => {
        const rect = photoSection.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        targetX = (y / rect.height - 0.5) * 15;
        targetY = (x / rect.width - 0.5) * -15;

        magneticCursor.style.left = x + 'px';
        magneticCursor.style.top = y + 'px';
        glowOrb.style.left = x + 'px';
        glowOrb.style.top = y + 'px';

        // Photo 3D tilt
        const tiltX = (y / rect.height - 0.5) * 8;
        const tiltY = (x / rect.width - 0.5) * -8;
        photo3D.style.transform = `rotateX(${-tiltX}deg) rotateY(${tiltY}deg)`;

        // Glitch effect
        if (Math.random() > 0.97) {
            triggerGlitch();
        }
    });

    photoSection.addEventListener('mouseleave', () => {
        targetX = 0;
        targetY = 0;
        setTimeout(() => {
            photo3D.style.transform = 'rotateX(0deg) rotateY(0deg)';
        }, 100);
    });

    photoWrapper.addEventListener('mouseenter', () => {
        isHovering = true;
        glowOrb.style.opacity = '1';
        floatingParticles.style.opacity = '1';
    });

    photoWrapper.addEventListener('mouseleave', () => {
        isHovering = false;
        glowOrb.style.opacity = '0.3';
        floatingParticles.style.opacity = '0.3';
    });

    // ===== GLITCH EFFECT =====
    function triggerGlitch() {
        glitchOverlay.classList.add('active');
        mainPhoto.style.transform = `translate(${Math.random() * 4 - 2}px, ${Math.random() * 4 - 2}px)`;
        setTimeout(() => {
            glitchOverlay.classList.remove('active');
            mainPhoto.style.transform = 'translate(0, 0)';
        }, 80);
    }

    // Auto glitch every few seconds
    setInterval(() => {
        if (Math.random() > 0.7) triggerGlitch();
    }, 3000);

    // ===== RIPPLE EFFECT =====
    const photoFrameOuter = document.querySelector('.photo-frame-outer');
    if (photoFrameOuter) {
        photoFrameOuter.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            ripple.className = 'photo-ripple';
            const rect = this.getBoundingClientRect();
            ripple.style.left = (e.clientX - rect.left) + 'px';
            ripple.style.top = (e.clientY - rect.top) + 'px';
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    }

    // ===== HOLOGRAPHIC SHIMMER =====
    const photoContent = document.querySelector('.photo-content');
    let shimmerAngle = 0;

    function animateShimmer() {
        shimmerAngle += 0.02;
        if (photoContent) {
            photoContent.style.background = `linear-gradient(${shimmerAngle}deg,
                transparent 0%,
                rgba(255, 107, 53, 0.03) 30%,
                rgba(255, 68, 68, 0.03) 50%,
                rgba(255, 140, 66, 0.03) 70%,
                transparent 100%)`;
        }
        requestAnimationFrame(animateShimmer);
    }
    animateShimmer();

    // ===== SKILL BADGES INTERACTION =====
    const skillBadges = document.querySelectorAll('.skill-badge');
    skillBadges.forEach((badge, index) => {
        badge.style.animationDelay = `${index * 0.2}s`;

        badge.addEventListener('mouseenter', () => {
            badge.classList.add('active');
            badge.style.transform = 'scale(1.15) translateY(-5px)';
        });

        badge.addEventListener('mouseleave', () => {
            badge.classList.remove('active');
            badge.style.transform = 'scale(1) translateY(0)';
        });

        badge.addEventListener('mousemove', (e) => {
            const rect = badge.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            badge.style.transform = `scale(1.15) translateY(-5px) rotateX(${y * -10}deg) rotateY(${x * 10}deg)`;
        });
    });

    // ===== FLOATING PARTICLES =====
    const particles_html = document.querySelectorAll('.particle');
    particles_html.forEach((particle, index) => {
        particle.style.setProperty('--x', Math.random() * 100 + '%');
        particle.style.setProperty('--y', Math.random() * 100 + '%');
        particle.style.setProperty('--duration', (Math.random() * 3 + 2) + 's');
        particle.style.setProperty('--delay', (Math.random() * 2) + 's');
    });

    // ===== 3D ROTATION ANIMATION =====
    function animate3D() {
        rotateX += (targetX - rotateX) * 0.08;
        rotateY += (targetY - rotateY) * 0.08;

        lightRays.style.transform = `rotateX(${rotateX * 0.5}deg) rotateY(${rotateY * 0.5}deg)`;
        requestAnimationFrame(animate3D);
    }
    animate3D();

    // ===== SMOOTH SCROLL ANIMATION FOR STATS =====
    const statBoxes = document.querySelectorAll('.stat-box');
    const observerStats = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, { threshold: 0.5 });

    statBoxes.forEach(stat => observerStats.observe(stat));

    // ===== RINGS ANIMATION =====
    const rings = document.querySelectorAll('.ring');
    rings.forEach((ring, index) => {
        ring.style.animationDelay = `${index * 0.5}s`;
    });

    // ===== FRAME GLOW PULSE =====
    const frameGlowBorder = document.querySelector('.frame-glow-border');
    function pulseGlow() {
        if (frameGlowBorder) {
            const opacity = 0.3 + Math.sin(Date.now() / 1000) * 0.2;
            frameGlowBorder.style.opacity = opacity;
        }
        requestAnimationFrame(pulseGlow);
    }
    pulseGlow();

    // ===== PHOTO LOADING EFFECT =====
    mainPhoto.addEventListener('load', function() {
        this.style.opacity = '0';
        this.style.transform = 'scale(1.1)';
        setTimeout(() => {
            this.style.transition = 'opacity 1s ease, transform 1s ease';
            this.style.opacity = '1';
            this.style.transform = 'scale(1)';
        }, 100);
    });

    // If image already loaded
    if (mainPhoto.complete) {
        mainPhoto.style.opacity = '0';
        mainPhoto.style.transform = 'scale(1.1)';
        setTimeout(() => {
            mainPhoto.style.transition = 'opacity 1s ease, transform 1s ease';
            mainPhoto.style.opacity = '1';
            mainPhoto.style.transform = 'scale(1)';
        }, 100);
    }

    // ===== ORGANIZATION PHOTO JS EFFECTS =====
    const orgPhotoSection = document.getElementById('orgPhotoSection');
    const orgGlowOrb = document.getElementById('orgGlowOrb');
    const orgFrame = document.getElementById('orgFrame');
    const orgPhoto = document.getElementById('orgPhoto');
    const orgGlitchOverlay = document.getElementById('orgGlitchOverlay');
    const orgLightRays = document.getElementById('orgLightRays');
    const orgParticlesCanvas = document.getElementById('orgParticlesCanvas');
    const orgCtx = orgParticlesCanvas.getContext('2d');

    // Setup Org Particles Canvas
    function setupOrgCanvas() {
        if (orgPhotoSection) {
            orgParticlesCanvas.width = orgPhotoSection.offsetWidth;
            orgParticlesCanvas.height = orgPhotoSection.offsetHeight;
        }
    }
    setupOrgCanvas();
    window.addEventListener('resize', setupOrgCanvas);

    // Org Particles System
    class OrgParticle {
        constructor() { this.reset(); }
        reset() {
            this.x = Math.random() * orgParticlesCanvas.width;
            this.y = Math.random() * orgParticlesCanvas.height;
            this.size = Math.random() * 2 + 0.5;
            this.speedX = (Math.random() - 0.5) * 0.3;
            this.speedY = (Math.random() - 0.5) * 0.3;
            this.opacity = Math.random() * 0.4 + 0.1;
        }
        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            if (this.x < 0 || this.x > orgParticlesCanvas.width ||
                this.y < 0 || this.y > orgParticlesCanvas.height) {
                this.reset();
            }
        }
        draw() {
            orgCtx.beginPath();
            orgCtx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            orgCtx.fillStyle = `rgba(255, 107, 53, ${this.opacity})`;
            orgCtx.fill();
        }
    }

    const orgParticles = Array.from({ length: 40 }, () => new OrgParticle());

    function animateOrgParticles() {
        if (orgParticlesCanvas.width > 0) {
            orgCtx.clearRect(0, 0, orgParticlesCanvas.width, orgParticlesCanvas.height);
            orgParticles.forEach(p => { p.update(); p.draw(); });
            orgParticles.forEach((p1, i) => {
                orgParticles.slice(i + 1).forEach(p2 => {
                    const dx = p1.x - p2.x;
                    const dy = p1.y - p2.y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 80) {
                        orgCtx.beginPath();
                        orgCtx.moveTo(p1.x, p1.y);
                        orgCtx.lineTo(p2.x, p2.y);
                        orgCtx.strokeStyle = `rgba(255, 107, 53, ${0.08 * (1 - dist / 80)})`;
                        orgCtx.lineWidth = 0.5;
                        orgCtx.stroke();
                    }
                });
            });
        }
        requestAnimationFrame(animateOrgParticles);
    }
    animateOrgParticles();

    // Org 3D Parallax
    let orgTargetX = 0, orgTargetY = 0, orgRotateX = 0, orgRotateY = 0;

    if (orgPhotoSection) {
        orgPhotoSection.addEventListener('mousemove', (e) => {
            const rect = orgPhotoSection.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            orgTargetX = (y / rect.height - 0.5) * 10;
            orgTargetY = (x / rect.width - 0.5) * -10;
            if (orgGlowOrb) {
                orgGlowOrb.style.left = x + 'px';
                orgGlowOrb.style.top = y + 'px';
            }
            if (Math.random() > 0.95) triggerOrgGlitch();
        });

        orgPhotoSection.addEventListener('mouseleave', () => {
            orgTargetX = 0;
            orgTargetY = 0;
        });
    }

    function animateOrg3D() {
        orgRotateX += (orgTargetX - orgRotateX) * 0.08;
        orgRotateY += (orgTargetY - orgRotateY) * 0.08;
        if (orgFrame) orgFrame.style.transform = `rotateX(${orgRotateX}deg) rotateY(${orgRotateY}deg)`;
        if (orgLightRays) orgLightRays.style.transform = `rotateX(${orgRotateX * 0.5}deg) rotateY(${orgRotateY * 0.5}deg)`;
        requestAnimationFrame(animateOrg3D);
    }
    animateOrg3D();

    // Org Glitch Effect
    function triggerOrgGlitch() {
        if (orgGlitchOverlay) {
            orgGlitchOverlay.classList.add('active');
            if (orgPhoto) orgPhoto.style.transform = `translate(${Math.random() * 4 - 2}px, ${Math.random() * 4 - 2}px)`;
            setTimeout(() => {
                orgGlitchOverlay.classList.remove('active');
                if (orgPhoto) orgPhoto.style.transform = 'translate(0, 0)';
            }, 80);
        }
    }

    setInterval(() => { if (Math.random() > 0.7) triggerOrgGlitch(); }, 4000);

    // Org Stats Counter Animation
    const orgStatNums = document.querySelectorAll('.org-stat-num[data-value]');
    const observerOrgStats = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.value);
                let current = 0;
                const step = target / 40;
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        el.textContent = target;
                        clearInterval(timer);
                    } else {
                        el.textContent = Math.floor(current);
                    }
                }, 40);
                observerOrgStats.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    orgStatNums.forEach(el => observerOrgStats.observe(el));

    // Org Photo Load Effect
    if (orgPhoto) {
        if (orgPhoto.complete) {
            orgPhoto.style.opacity = '0';
            setTimeout(() => {
                orgPhoto.style.transition = 'opacity 1s ease';
                orgPhoto.style.opacity = '1';
            }, 200);
        } else {
            orgPhoto.addEventListener('load', () => {
                orgPhoto.style.opacity = '0';
                setTimeout(() => {
                    orgPhoto.style.transition = 'opacity 1s ease';
                    orgPhoto.style.opacity = '1';
                }, 200);
            });
        }
    }

    // ===== ENHANCED SKILLS ANIMATION =====
    const skillsSection = document.getElementById('skills');
    const skillBars = document.querySelectorAll('.skill-bar[data-percent]');
    const skillCards = document.querySelectorAll('.skill-card');
    const skillsRadar = document.querySelector('.skills-radar');

    // Skills animation with counter and glow
    const observerSkills = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const percent = el.dataset.percent;
                const fill = el.querySelector('.skill-fill');
                const percentEl = el.querySelector('.skill-percent');
                const skillName = el.querySelector('.skill-name');

                if (fill) {
                    // Add active class
                    el.classList.add('skill-active');

                    // Animate width with delay
                    setTimeout(() => {
                        fill.style.width = percent + '%';

                        // Animate percentage counter
                        let current = 0;
                        const step = parseInt(percent) / 30;
                        const counter = setInterval(() => {
                            current += step;
                            if (current >= parseInt(percent)) {
                                if (percentEl) percentEl.textContent = percent + '%';
                                clearInterval(counter);
                                el.classList.add('skill-complete');
                            } else {
                                if (percentEl) percentEl.textContent = Math.floor(current) + '%';
                            }
                        }, 30);
                    }, el.dataset.index * 150 || 100);
                }

                observerSkills.unobserve(el);
            }
        });
    }, { threshold: 0.3 });

    skillBars.forEach((el, index) => {
        el.dataset.index = index;
        observerSkills.observe(el);
    });

    // ===== ENHANCED SKILL CARDS INTERACTIONS =====
    const skillCards = document.querySelectorAll('.skill-card');
    const observerCards = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('card-visible');
                }, index * 100);
                observerCards.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    skillCards.forEach(card => observerCards.observe(card));

    // Skill cards magnetic effect & detailed info
    skillCards.forEach(card => {
        const tags = card.querySelectorAll('.skill-tag');
        const icon = card.querySelector('.skill-card-icon');

        card.addEventListener('mouseenter', () => {
            card.classList.add('card-active');
            tags.forEach((tag, i) => {
                tag.style.animationDelay = `${i * 0.1}s`;
                tag.classList.add('tag-visible');
            });
            if (icon) {
                icon.classList.add('icon-pulse');
            }
        });

        card.addEventListener('mouseleave', () => {
            card.classList.remove('card-active');
            tags.forEach(tag => tag.classList.remove('tag-visible'));
            if (icon) {
                icon.classList.remove('icon-pulse');
            }
        });

        // Card tilt effect
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            card.style.transform = `translateY(-8px) rotateX(${-y * 8}deg) rotateY(${x * 8}deg)`;

            // Update glow position
            const glow = card.querySelector('.card-glow-effect');
            if (glow) {
                glow.style.left = (e.clientX - rect.left) + 'px';
                glow.style.top = (e.clientY - rect.top) + 'px';
            }
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
        });

        // Add glow element to each card
        const glowEl = document.createElement('div');
        glowEl.className = 'card-glow-effect';
        card.appendChild(glowEl);
    });

    // Skills radar hover parallax
    if (skillsRadar) {
        skillsRadar.addEventListener('mousemove', (e) => {
            const rect = skillsRadar.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            skillsRadar.style.transform = `perspective(1000px) rotateY(${x * 5}deg) rotateX(${-y * 5}deg)`;
        });

        skillsRadar.addEventListener('mouseleave', () => {
            skillsRadar.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg)';
        });
    }

    // Skill bar hover glow effect
    skillBars.forEach(bar => {
        bar.addEventListener('mouseenter', () => {
            bar.classList.add('skill-hover');
        });
        bar.addEventListener('mouseleave', () => {
            bar.classList.remove('skill-hover');
        });
    });

    // Animated glow line on skill bars
    skillBars.forEach(bar => {
        const fill = bar.querySelector('.skill-fill');
        if (fill) {
            const glowLine = document.createElement('div');
            glowLine.className = 'skill-glow-line';
            fill.appendChild(glowLine);
        }
    });

    // Skills section background particles
    function createSkillsParticle() {
        if (!skillsSection) return;
        const particle = document.createElement('div');
        particle.className = 'skills-bg-particle';
        particle.style.cssText = `
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.3;
            pointer-events: none;
            left: ${Math.random() * 100}%;
            top: ${Math.random() * 100}%;
            animation: skillsParticleFloat ${Math.random() * 5 + 5}s ease-in-out infinite;
        `;
        skillsSection.appendChild(particle);
    }

    for (let i = 0; i < 15; i++) {
        createSkillsParticle();
    }

    // Add typing effect to section tag
    const skillsTag = skillsSection ? skillsSection.querySelector('.section-tag') : null;
    if (skillsTag) {
        const originalText = skillsTag.textContent;
        skillsTag.textContent = '';
        let i = 0;
        const typeTag = setInterval(() => {
            skillsTag.textContent += originalText[i];
            i++;
            if (i >= originalText.length) clearInterval(typeTag);
        }, 50);
    }

    // ===== ENHANCED SKILL CARDS INTERACTIONS =====
    const skillCardsNew = document.querySelectorAll('.skills-grid-section .skill-card');

    // Progress Ring Animation
    function animateProgressRing(card) {
        const ring = card.querySelector('.progress-ring-fill');
        const valueEl = card.querySelector('.progress-ring-value');
        const percent = parseInt(card.dataset.skill === 'web' ? '90' :
            card.dataset.skill === 'mobile' ? '90' :
            card.dataset.skill === 'ui' ? '85' : '70');

        if (!ring || !valueEl) return;

        const circumference = 2 * Math.PI * 26;
        ring.style.strokeDasharray = circumference;
        ring.style.strokeDashoffset = circumference;

        let current = 0;
        const increment = percent / 50;
        const counter = setInterval(() => {
            current += increment;
            if (current >= percent) {
                const offset = circumference - (percent / 100) * circumference;
                ring.style.strokeDashoffset = offset;
                valueEl.textContent = percent + '%';
                clearInterval(counter);
            } else {
                const offset = circumference - (current / 100) * circumference;
                ring.style.strokeDashoffset = offset;
                valueEl.textContent = Math.floor(current) + '%';
            }
        }, 20);
    }

    // Intersection Observer for cards
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('card-animated');
                    animateProgressRing(entry.target);
                }, index * 150);
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    skillCardsNew.forEach(card => cardObserver.observe(card));

    // Enhanced card interactions
    skillCardsNew.forEach(card => {
        // Mouse move effect
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;

            card.style.transform = `translateY(-12px) rotateX(${-y * 10}deg) rotateY(${x * 10}deg)`;

            // Update background effect position
            const bgEffect = card.querySelector('.skill-card-bg-effect');
            if (bgEffect) {
                bgEffect.style.background = `radial-gradient(circle at ${e.clientX - rect.left}px ${e.clientY - rect.top}px, rgba(255, 107, 53, 0.15) 0%, transparent 50%)`;
            }

            // Update hover overlay
            const overlay = card.querySelector('.skill-card-hover-overlay');
            if (overlay) {
                overlay.style.clipPath = `circle(${50 + Math.abs(x) * 30}% at ${e.clientX - rect.left}px ${e.clientY - rect.top}px)`;
            }
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0) rotateX(0) rotateY(0)';

            const bgEffect = card.querySelector('.skill-card-bg-effect');
            if (bgEffect) {
                bgEffect.style.background = 'radial-gradient(circle at center, rgba(255, 107, 53, 0.1) 0%, transparent 50%)';
            }
        });

        // Icon animation
        const icon = card.querySelector('.skill-card-icon');
        if (icon) {
            card.addEventListener('mouseenter', () => {
                icon.classList.add('icon-animated');
            });
            card.addEventListener('mouseleave', () => {
                icon.classList.remove('icon-animated');
            });
        }

        // Tags animation
        const tags = card.querySelectorAll('.skill-tag');
        tags.forEach((tag, i) => {
            tag.style.setProperty('--delay', `${i * 0.1}s`);
        });
    });

    // Floating particles in skills grid
    const skillsGridSection = document.querySelector('.skills-grid-section');
    if (skillsGridSection) {
        for (let i = 0; i < 20; i++) {
            const particle = document.createElement('div');
            particle.className = 'grid-particle';
            particle.style.cssText = `
                position: absolute;
                width: ${Math.random() * 4 + 2}px;
                height: ${Math.random() * 4 + 2}px;
                background: ${Math.random() > 0.5 ? 'var(--primary)' : 'var(--accent)'};
                border-radius: 50%;
                opacity: ${Math.random() * 0.3 + 0.1};
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation: particleFloat ${Math.random() * 10 + 10}s ease-in-out infinite;
                animation-delay: ${Math.random() * 5}s;
            `;
            skillsGridSection.appendChild(particle);
        }
    }

    // Skill card click effect
    skillCardsNew.forEach(card => {
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            ripple.className = 'card-ripple';
            const rect = this.getBoundingClientRect();
            ripple.style.left = (e.clientX - rect.left) + 'px';
            ripple.style.top = (e.clientY - rect.top) + 'px';
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    });
});
</script>

<!-- ===== ABOUT SECTION ===== -->
<section id="about" class="section">
    <div class="section-header">
        <span class="section-tag">// tentang</span>
        <h2 class="section-title">TENTANG SAYA</h2>
    </div>
    <div class="about-container">
        <div class="about-text-wrapper">
            <div class="about-icon-wrapper">
                <div class="about-icon">
                    <i class='bx bx-code-block'></i>
                </div>
            </div>
            <p class="about-main-text" id="aboutMainText"></p>
            <div class="about-typing-cursor"></div>
        </div>
        <div class="about-highlights">
            <div class="highlight-item" data-index="0">
                <span class="highlight-icon"><i class='bx bx-code-curly'></i></span>
                <span class="highlight-text">Informatics Engineering Student</span>
            </div>
            <div class="highlight-item" data-index="1">
                <div class="highlight-logo">
                    <img src="{{ asset('img/unsera.png') }}" alt="UNSERA" class="unsera-logo">
                </div>
                <span class="highlight-text">Serang Raya University</span>
            </div>
            <div class="highlight-item" data-index="2">
                <span class="highlight-icon"><i class='bx bx-devices'></i></span>
                <span class="highlight-text">Full-Stack Developer</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== EXPERIENCE SECTION ===== -->
<section id="experience" class="section">
    <div class="section-header">
        <span class="section-tag">// pengalaman</span>
        <h2 class="section-title">PENGALAMAN ORGANISASI</h2>
    </div>
    <div class="experience-container">
        <!-- Experience Photo with JS Effects -->
        <div class="org-photo-section" id="orgPhotoSection">
            <canvas id="orgParticlesCanvas" class="org-particles-canvas"></canvas>
            <div class="org-photo-wrapper">
                <div class="org-glow-orb" id="orgGlowOrb"></div>
                <div class="org-rings">
                    <div class="org-ring org-ring-1"></div>
                    <div class="org-ring org-ring-2"></div>
                    <div class="org-ring org-ring-3"></div>
                </div>
                <div class="org-frame" id="orgFrame">
                    <div class="org-frame-border"></div>
                    <div class="org-photo-content">
                        <img src="{{ asset('img/dutautama.jpg') }}" alt="Duta Utama" class="org-photo" id="orgPhoto">
                        <div class="org-photo-overlay"></div>
                    </div>
                    <div class="org-glitch-overlay" id="orgGlitchOverlay"></div>
                    <div class="org-light-rays" id="orgLightRays"></div>
                    <div class="org-corner-bracket org-cb-tl"></div>
                    <div class="org-corner-bracket org-cb-tr"></div>
                    <div class="org-corner-bracket org-cb-bl"></div>
                    <div class="org-corner-bracket org-cb-br"></div>
                </div>
                <div class="org-badge">
                    <span class="org-badge-icon"><i class='bx bx-medal'></i></span>
                    <span class="org-badge-text">DUTA UTAMA UNSERA 2024-2025</span>
                </div>
                <div class="org-scan-line"></div>
            </div>
        </div>

        <!-- Organizational Experience Content -->
        <div class="org-content">
            <div class="org-header-card">
                <div class="org-header-icon">
                    <i class='bx bx-star'></i>
                </div>
                <div class="org-header-text">
                    <span class="org-header-tag">Organizational Experience</span>
                    <h3 class="org-header-title">Leader of Campus Ambassador</h3>
                    <h4 class="org-header-subtitle">Universitas Serang Raya (UNSERA)</h4>
                </div>
            </div>
            <div class="org-experience-card">
                <p class="org-experience-text">
                    Led the Unsera Campus Ambassador team by coordinating programs and fostering collaboration to ensure successful execution of initiatives.
                </p>
                <p class="org-experience-text">
                    Developed and implemented strategic efforts to enhance the university's public image and outreach.
                </p>
                <p class="org-experience-text">
                    Acted as a key brand representative, delivering clear and engaging information about academic programs and campus facilities to prospective students.
                </p>
                <p class="org-experience-text">
                    Applied leadership, communication, and problem-solving skills to manage team dynamics and achieve organizational goals effectively.
                </p>
            </div>
            <div class="org-stats">
                <div class="org-stat">
                    <span class="org-stat-num" data-value="2024">2024</span>
                    <span class="org-stat-label">Year Started</span>
                </div>
                <div class="org-stat">
                    <span class="org-stat-num" data-value="20">20</span>
                    <span class="org-stat-label">Team Members</span>
                </div>
                <div class="org-stat">
                    <span class="org-stat-num" data-value="10">10</span>
                    <span class="org-stat-label">Programs Held</span>
                </div>
            </div>
        </div>
</section>

<!-- ===== INTERNSHIP SECTION ===== -->
<section id="internship" class="section">
    <div class="section-header">
        <span class="section-tag">// magang</span>
        <h2 class="section-title">PENGALAMAN MAGANG</h2>
    </div>
    <div class="internship-container">
        <!-- Company Info & Logo -->
        <div class="internship-left-col">
            <div class="company-logo-wrapper" id="companyLogo">
                <div class="logo-glow"></div>
                <div class="logo-outer-ring">
                    <div class="logo-inner-ring"></div>
                </div>
                <img src="{{ asset('img/kbs.jpg') }}" alt="PT Krakatau International Port" class="company-logo">
                <div class="logo-frame-indicator"></div>
            </div>
            <div class="company-info">
                <span class="company-badge">Internship</span>
                <h3 class="company-name">PT Krakatau International Port</h3>
                <p class="company-location"><i class='bx bx-map'></i> Cilegon, Banten</p>
                <div class="company-period">
                    <i class='bx bx-calendar'></i>
                    <span>3 Bulan</span>
                </div>
                <div class="company-description">
                    <p>Perusahaan yang bergerak di bidang pengelolaan pelabuhan yang berlokasi di Cilegon, Banten. Bergerak di bidang sistem informasi dan teknologi untuk mendukung operasi pelabuhan.</p>
                </div>
            </div>
        </div>

        <!-- Internship Details -->
        <div class="internship-right-col">
            <div class="internship-role">
                <div class="role-icon">
                    <i class='bx bx-code'></i>
                </div>
                <div class="role-info">
                    <span class="role-title">Mobile & Web Developer</span>
                    <span class="role-type">Magang</span>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="internship-projects">
                <!-- Project 1 -->
                <div class="internship-project-card">
                    <div class="project-number">01</div>
                    <div class="project-header">
                        <div class="project-icon">
                            <i class='bx bx-mobile-alt'></i>
                        </div>
                        <div class="project-title">
                            <h4>Pandu Board App</h4>
                            <span class="project-badge">Cross Platform</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Aplikasi mobile untuk sistem absensi karyawan dan pencatatan pekerjaan kapal Pandu. Dibangun dengan Flutter untuk platform Android dan iOS.
                    </p>
                    <div class="project-features">
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Sistem Absensi Karyawan</span>
                        </div>
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Pencatatan Pekerjaan Kapal</span>
                        </div>
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Manajemen Kapal Pandu</span>
                        </div>
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Android & iOS Support</span>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-badge"><i class='bx bxl-flutter'></i> Flutter</span>
                        <span class="tech-badge"><i class='bx bxl-dart'></i> Dart</span>
                        <span class="tech-badge"><i class='bx bxl-firebase'></i> Firebase</span>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="internship-project-card">
                    <div class="project-number">02</div>
                    <div class="project-header">
                        <div class="project-icon">
                            <i class='bx bx-news'></i>
                        </div>
                        <div class="project-title">
                            <h4>BAPPER (Berita Acara Serah Terima Perangkat &amp; Lisensi)</h4>
                            <span class="project-badge">Internal Enterprise</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Aplikasi digital untuk menggantikan sistem manual berbasis kertas dalam pencatatan Berita Acara Serah Terima Perangkat dan Lisensi. Mendukung pencatatan peminjaman dan pengembalian perangkat serta lisensi secara terstruktur untuk internal perusahaan PT Krakatau International Port.
                    </p>
                    <div class="project-features">
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Manajemen Berita Acara</span>
                        </div>
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Peminjaman &amp; Pengembalian</span>
                        </div>
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Pencatatan Perangkat</span>
                        </div>
                        <div class="feature-item">
                            <i class='bx bx-check-circle'></i>
                            <span>Manajemen Lisensi</span>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-badge"><i class='bx bxl-html5'></i> HTML/CSS</span>
                        <span class="tech-badge"><i class='bx bxl-php'></i> PHP (Laravel)</span>
                        <span class="tech-badge"><i class='bx bxs-database'></i> MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Pandu Board Platform Showcase: Mobile App & Web Admin -->
            <div class="bapper-platforms">
                <div class="platform-header">
                    <h4><i class='bx bx-anchor'></i> Platform Pandu Board</h4>
                    <span class="platform-subtitle">Tersedia dalam Mobile App & Web Admin</span>
                </div>
                <div class="platform-grid">

                    <!-- Mobile App Pandu Board -->
                    <div class="platform-card platform-mobile">
                        <div class="platform-badge">Mobile App</div>
                        <div class="platform-frame">
                            <div class="platform-phone-mockup">
                                <div class="phone-notch"></div>
                                <div class="phone-screen" style="background: #fff; display: flex; align-items: center; justify-content: center;">
                                    <img src="{{ asset('img/pandu-mobile.png') }}" alt="Pandu Board Mobile App" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="platform-info">
                            <h5>Aplikasi Mobile Pandu</h5>
                            <p>Aplikasi mobile untuk absensi karyawan dan pencatatan pekerjaan kapal Pandu di pelabuhan. Digunakan langsung oleh petugas di lapangan. Sudah dapat di-install di perangkat Android & iOS karena telah di-deploy sebagai <strong>Unlisted App</strong> untuk akses internal perusahaan.</p>
                            <ul class="platform-features">
                                <li><i class='bx bx-check'></i> Sistem Absensi Karyawan</li>
                                <li><i class='bx bx-check'></i> Pencatatan Pekerjaan Kapal</li>
                                <li><i class='bx bx-check'></i> Android & iOS Support</li>
                            </ul>
                            <div class="platform-tech">
                                <span><i class='bx bxl-flutter'></i> Flutter</span>
                                <span><i class='bx bxl-dart'></i> Dart</span>
                                <span><i class='bx bxl-firebase'></i> Firebase</span>
                            </div>
                        </div>
                    </div>

                    <!-- Web Admin Pandu Board -->
                    <div class="platform-card platform-web">
                        <div class="platform-badge">Web Admin</div>
                        <div class="platform-frame">
                            <div class="platform-browser-mockup">
                                <div class="browser-bar">
                                    <div class="browser-dots">
                                        <span class="dot red"></span>
                                        <span class="dot yellow"></span>
                                        <span class="dot green"></span>
                                    </div>
                                    <div class="browser-url">pandu-board.kip.co.id</div>
                                </div>
                                <div class="browser-screen" style="height: 220px; align-items: center; justify-content: center;">
                                    <img src="{{ asset('img/pandu-admin.png') }}" alt="Pandu Board Web Admin" style="width: 100%; height: 100%; object-fit: contain; background: #fff;">
                                </div>
                            </div>
                        </div>
                        <div class="platform-info">
                            <h5>Web Admin Dashboard</h5>
                            <p>Dashboard admin untuk monitoring aktivitas pelabuhan, pelaporan data, dan manajemen data kapal Pandu secara real-time.</p>
                            <ul class="platform-features">
                                <li><i class='bx bx-check'></i> Dashboard Monitoring Real-time</li>
                                <li><i class='bx bx-check'></i> Manajemen Data Kapal</li>
                                <li><i class='bx bx-check'></i> Laporan & Data Visualization</li>
                            </ul>
                            <div class="platform-tech">
                                <span><i class='bx bxl-html5'></i> HTML/CSS</span>
                                <span><i class='bx bxl-javascript'></i> JS</span>
                                <span><i class='bx bxl-php'></i> PHP</span>
                                <span><i class='bx bxs-data'></i> MySQL</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- BAPPER Platform Showcase: Mobile App & Web App -->
            <div class="bapper-platforms">
                <div class="platform-header">
                    <h4><i class='bx bx-layer'></i> Platform BAPPER</h4>
                    <span class="platform-subtitle">Tersedia dalam Mobile App &amp; Web App</span>
                </div>
                <div class="platform-grid">

                    <!-- Mobile App Platform -->
                    <div class="platform-card platform-mobile">
                        <div class="platform-badge">Mobile App</div>
                        <div class="platform-frame">
                            <div class="platform-phone-mockup">
                                <div class="phone-notch"></div>
                                <div class="phone-screen" style="background: #fff; display: flex; align-items: center; justify-content: center;">
                                    <img src="{{ asset('img/mobile-bapper.png') }}" alt="BAPPER Mobile App" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="platform-info">
                            <h5>Aplikasi Mobile</h5>
                            <p>Akses cepat di lapangan untuk input Berita Acara, peminjaman perangkat, dan verifikasi lisensi langsung dari smartphone.</p>
                            <ul class="platform-features">
                                <li><i class='bx bx-check'></i> Input Berita Acara Mobile</li>
                                <li><i class='bx bx-check'></i> Scan QR Perangkat</li>
                                <li><i class='bx bx-check'></i> Notifikasi Real-time</li>
                            </ul>
                            <div class="platform-tech">
                                <span><i class='bx bxl-flutter'></i> Flutter</span>
                                <span><i class='bx bxl-dart'></i> Dart</span>
                                <span><i class='bx bxl-firebase'></i> Firebase</span>
                            </div>
                        </div>
                    </div>

                    <!-- Web App Platform -->
                    <div class="platform-card platform-web">
                        <div class="platform-badge">Web App</div>
                        <div class="platform-frame">
                            <div class="platform-browser-mockup">
                                <div class="browser-bar">
                                    <div class="browser-dots">
                                        <span class="dot red"></span>
                                        <span class="dot yellow"></span>
                                        <span class="dot green"></span>
                                    </div>
                                    <div class="browser-url">bapper.internal.kip.co.id</div>
                                </div>
                                <div class="browser-screen" style="height: 220px; align-items: center; justify-content: center;">
                                    <img src="{{ asset('img/web-bapper.png') }}" alt="BAPPER Web App" style="width: 100%; height: 100%; object-fit: contain; background: #fff;">
                                </div>
                            </div>
                        </div>
                        <div class="platform-info">
                            <h5>Aplikasi Web</h5>
                            <p>Dashboard admin untuk monitoring seluruh data perangkat, lisensi, dan arsip Berita Acara Serah Terima perusahaan.</p>
                            <ul class="platform-features">
                                <li><i class='bx bx-check'></i> Dashboard Monitoring</li>
                                <li><i class='bx bx-check'></i> Arsip Berita Acara Digital</li>
                                <li><i class='bx bx-check'></i> Laporan &amp; Export PDF</li>
                            </ul>
                            <div class="platform-tech">
                                <span><i class='bx bxl-html5'></i> HTML/CSS</span>
                                <span><i class='bx bxl-javascript'></i> JS</span>
                                <span><i class='bx bxl-php'></i> PHP</span>
                                <span><i class='bx bxs-data'></i> MySQL</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Documentation Photos -->
            <div class="internship-documentation">
                <div class="doc-header">
                    <h4><i class='bx bx-images'></i> Dokumentasi Magang</h4>
                    <span class="doc-period">Periode Magang</span>
                </div>
                <div class="doc-photos-grid">
                    <!-- Photo 1 -->
                    <div class="doc-photo-card">
                        <div class="doc-photo-wrapper">
                            <img src="{{ asset('img/intern1.png') }}" alt="Dokumentasi 1" class="doc-photo" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 300%22%3E%3Crect fill=%22%231a1a2e%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 fill=%22%23505060%22 font-family=%22sans-serif%22 font-size=%2214%22%3EFoto 1%3C/text%3E%3C/svg%3E'">
                            <div class="doc-photo-overlay">
                                <span class="doc-photo-label">Dokumentasi 1</span>
                            </div>
                        </div>
                    </div>
                    <!-- Photo 2 -->
                    <div class="doc-photo-card">
                        <div class="doc-photo-wrapper">
                            <img src="{{ asset('img/intern2.png') }}" alt="Dokumentasi 2" class="doc-photo" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 300%22%3E%3Crect fill=%22%231a1a2e%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 fill=%22%23505060%22 font-family=%22sans-serif%22 font-size=%2214%22%3EFoto 2%3C/text%3E%3C/svg%3E'">
                            <div class="doc-photo-overlay">
                                <span class="doc-photo-label">Dokumentasi 2</span>
                            </div>
                        </div>
                    </div>
                    <!-- Photo 3 -->
                    <div class="doc-photo-card">
                        <div class="doc-photo-wrapper">
                            <img src="{{ asset('img/intern3.png') }}" alt="Dokumentasi 3" class="doc-photo" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 300%22%3E%3Crect fill=%22%231a1a2e%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 fill=%22%23505060%22 font-family=%22sans-serif%22 font-size=%2214%22%3EFoto 3%3C/text%3E%3C/svg%3E'">
                            <div class="doc-photo-overlay">
                                <span class="doc-photo-label">Dokumentasi 3</span>
                            </div>
                        </div>
                    </div>
                    <!-- Photo 4 -->
                    <div class="doc-photo-card">
                        <div class="doc-photo-wrapper">
                            <img src="{{ asset('img/intern4.png') }}" alt="Dokumentasi 4" class="doc-photo" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 300%22%3E%3Crect fill=%22%231a1a2e%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 fill=%22%23505060%22 font-family=%22sans-serif%22 font-size=%2214%22%3EFoto 4%3C/text%3E%3C/svg%3E'">
                            <div class="doc-photo-overlay">
                                <span class="doc-photo-label">Dokumentasi 4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="doc-hint"><i class='bx bx-info-circle'></i> Tambahkan foto dokumentasi ke folder img dengan nama: intern-1.jpg, intern-2.jpg, intern-3.jpg, intern-4.jpg</p>
            </div>

            <!-- Stats -->
            <div class="internship-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class='bx bx-time'></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-value">3</span>
                        <span class="stat-label">Bulan</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class='bx bx-task'></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-value">2</span>
                        <span class="stat-label">Project</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class='bx bx-layer'></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-value">2</span>
                        <span class="stat-label">Platform</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CERTIFICATION SECTION ===== -->
<section id="certification" class="section">
    <div class="section-header">
        <span class="section-tag">// sertifikat</span>
        <h2 class="section-title">SERTIFIKASI</h2>
    </div>
    <div class="certification-container">
        <!-- Certificate 1 -->
        <div class="certification-card" data-cert="1">
            <div class="cert-image-section">
                <img src="{{ asset('img/cert-1.jpg') }}" alt="Sertifikat" class="cert-image" onerror="this.style.display='none'">
                <div class="cert-image-placeholder">
                    <i class='bx bx-image'></i>
                    <span>Upload Foto Sertifikat</span>
                </div>
                <div class="cert-image-overlay"></div>
            </div>
            <div class="cert-header">
                <div class="cert-icon">
                    <i class='bx bx-award'></i>
                </div>
                <div class="cert-badge">LSP UNSERA & BNSP</div>
            </div>
            <div class="cert-content">
                <h3 class="cert-title">Sertifikasi Kompetensi</h3>
                <h4 class="cert-subtitle">Junior Web Programmer</h4>
                <p class="cert-description">Sertifikasi kompetensi dari LSP Universitas Serang Raya untuk bidang Junior Web Programmer yang mencakup pemahaman HTML, CSS, JavaScript, dan PHP.</p>
            </div>
            <div class="cert-footer">
                <span class="cert-year"><i class='bx bx-calendar'></i> 2026</span>
                <span class="cert-status verified"><i class='bx bx-check-circle'></i> Verified</span>
            </div>
            <div class="cert-shine"></div>
        </div>

        <!-- Certificate 2 (Placeholder) -->
        <div class="certification-card" data-cert="2">
            <div class="cert-image-section">
                <img src="{{ asset('img/cert-2.jpg') }}" alt="Sertifikat" class="cert-image" onerror="this.style.display='none'">
                <div class="cert-image-placeholder">
                    <i class='bx bx-image'></i>
                    <span>Upload Foto Sertifikat</span>
                </div>
                <div class="cert-image-overlay"></div>
            </div>
            <div class="cert-header">
                <div class="cert-icon">
                    <i class='bx bx-certification'></i>
                </div>
                <div class="cert-badge">Coming Soon</div>
            </div>
            <div class="cert-content">
                <h3 class="cert-title">Sertifikat Internship</h3>
                <h4 class="cert-subtitle">Internship</h4>
                <p class="cert-description">Sertifikat INtership selama 3 bulan di Krakatau International Port.</p>
            </div>
            <div class="cert-footer">
                <span class="cert-year"><i class='bx bx-calendar'></i> -</span>
                <span class="cert-status pending"><i class='bx bx-time'></i> Pending</span>
            </div>
            <div class="cert-shine"></div>
        </div>

        <!-- Certificate 3 (Placeholder) -->
        <div class="certification-card" data-cert="3">
            <div class="cert-image-section">
                <img src="{{ asset('img/cert-3.jpg') }}" alt="Sertifikat" class="cert-image" onerror="this.style.display='none'">
                <div class="cert-image-placeholder">
                    <i class='bx bx-image'></i>
                    <span>Upload Foto Sertifikat</span>
                </div>
                <div class="cert-image-overlay"></div>
            </div>
            <div class="cert-header">
                <div class="cert-icon">
                    <i class='bx bx-medal'></i>
                </div>
                <div class="cert-badge">Coming Soon</div>
            </div>
            <div class="cert-content">
                <h3 class="cert-title">Sertifikasi Ketiga</h3>
                <h4 class="cert-subtitle">-</h4>
                <p class="cert-description">Sertifikasi tambahan yang akan ditambahkan setelah selesai.</p>
            </div>
            <div class="cert-footer">
                <span class="cert-year"><i class='bx bx-calendar'></i> -</span>
                <span class="cert-status pending"><i class='bx bx-time'></i> Pending</span>
            </div>
            <div class="cert-shine"></div>
        </div>
    </div>
</section>

<!-- ===== SKILLS SECTION ===== -->
<section id="skills" class="section">
    <div class="section-header">
        <span class="section-tag">// keahlian</span>
        <h2 class="section-title">SKILL SET</h2>
    </div>
    <div class="skills-container">
        <div class="skills-radar">
            <canvas id="radarChart"></canvas>
            <div class="radar-center">
                <span class="radar-label">SKILLS</span>
            </div>
        </div>
        <div class="skills-bars">
            <div class="skill-bar" data-percent="90">
                <div class="skill-info">
                    <span class="skill-name">Web Developer</span>
                    <span class="skill-percent">0%</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill"></div>
                </div>
            </div>
            <div class="skill-bar" data-percent="90">
                <div class="skill-info">
                    <span class="skill-name">Mobile App Developer</span>
                    <span class="skill-percent">0%</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill"></div>
                </div>
            </div>
            <div class="skill-bar" data-percent="85">
                <div class="skill-info">
                    <span class="skill-name">UI/UX Design</span>
                    <span class="skill-percent">0%</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill"></div>
                </div>
            </div>
            <div class="skill-bar" data-percent="70">
                <div class="skill-info">
                    <span class="skill-name">Data Analysis</span>
                    <span class="skill-percent">0%</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Skills Cards Grid -->
    <div class="skills-grid-section">
        <div class="skills-grid-header">
            <span class="grid-header-line"></span>
            <h3 class="grid-header-title">Tech Stack</h3>
            <span class="grid-header-line"></span>
        </div>
        <div class="skills-cards">
            <div class="skill-card" data-skill="web" id="skillWeb">
                <div class="skill-card-bg-effect"></div>
                <div class="skill-card-icon">
                    <i class='bx bx-code-alt'></i>
                </div>
                <div class="skill-card-content">
                    <h4>Web Dev</h4>
                    <p class="skill-desc">HTML, CSS, JavaScript, PHP, Python</p>
                    <div class="skill-card-tags">
                        <span class="skill-tag">HTML</span>
                        <span class="skill-tag">CSS</span>
                        <span class="skill-tag">JS</span>
                    </div>
                </div>
                <div class="skill-card-progress">
                    <div class="progress-ring">
                        <svg class="progress-ring-svg" viewBox="0 0 60 60">
                            <defs>
                                <linearGradient id="cardGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ff6b35"/>
                                    <stop offset="100%" style="stop-color:#ff4444"/>
                                </linearGradient>
                            </defs>
                            <circle class="progress-ring-bg" cx="30" cy="30" r="26"/>
                            <circle class="progress-ring-fill" cx="30" cy="30" r="26" data-percent="90" stroke="url(#cardGradient)"/>
                        </svg>
                        <span class="progress-ring-value">0%</span>
                    </div>
                </div>
                <div class="skill-card-hover-overlay">
                    <div class="hover-content">
                        <span class="hover-title">Web Developer</span>
                        <span class="hover-subtitle">Frontend & Backend</span>
                        <div class="hover-tech">
                            <span class="hover-tech-item">React</span>
                            <span class="hover-tech-item">Laravel</span>
                            <span class="hover-tech-item">Vue</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skill-card" data-skill="mobile" id="skillMobile">
                <div class="skill-card-bg-effect"></div>
                <div class="skill-card-icon">
                    <i class='bx bx-mobile-alt'></i>
                </div>
                <div class="skill-card-content">
                    <h4>Mobile App</h4>
                    <p class="skill-desc">Dart, Flutter</p>
                    <div class="skill-card-tags">
                        <span class="skill-tag">Dart</span>
                        <span class="skill-tag">Flutter</span>
                        <span class="skill-tag">Mobile</span>
                    </div>
                </div>
                <div class="skill-card-progress">
                    <div class="progress-ring">
                        <svg class="progress-ring-svg" viewBox="0 0 60 60">
                            <defs>
                                <linearGradient id="cardGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ff6b35"/>
                                    <stop offset="100%" style="stop-color:#ff4444"/>
                                </linearGradient>
                            </defs>
                            <circle class="progress-ring-bg" cx="30" cy="30" r="26"/>
                            <circle class="progress-ring-fill" cx="30" cy="30" r="26" data-percent="90" stroke="url(#cardGradient)"/>
                        </svg>
                        <span class="progress-ring-value">0%</span>
                    </div>
                </div>
                <div class="skill-card-hover-overlay">
                    <div class="hover-content">
                        <span class="hover-title">Mobile Developer</span>
                        <span class="hover-subtitle">Cross Platform Apps</span>
                        <div class="hover-tech">
                            <span class="hover-tech-item">Flutter</span>
                            <span class="hover-tech-item">Dart</span>
                            <span class="hover-tech-item">Firebase</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skill-card" data-skill="ui" id="skillUI">
                <div class="skill-card-bg-effect"></div>
                <div class="skill-card-icon">
                    <i class='bx bx-palette'></i>
                </div>
                <div class="skill-card-content">
                    <h4>UI/UX</h4>
                    <p class="skill-desc">Figma, Prototyping, User Research</p>
                    <div class="skill-card-tags">
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">UI Design</span>
                        <span class="skill-tag">Prototyping</span>
                    </div>
                </div>
                <div class="skill-card-progress">
                    <div class="progress-ring">
                        <svg class="progress-ring-svg" viewBox="0 0 60 60">
                            <circle class="progress-ring-bg" cx="30" cy="30" r="26"/>
                            <circle class="progress-ring-fill" cx="30" cy="30" r="26" data-percent="85"/>
                        </svg>
                        <span class="progress-ring-value">0%</span>
                    </div>
                </div>
                <div class="skill-card-hover-overlay">
                    <div class="hover-content">
                        <span class="hover-title">UI/UX Designer</span>
                        <span class="hover-subtitle">User Experience</span>
                        <div class="hover-tech">
                            <span class="hover-tech-item">Figma</span>
                            <span class="hover-tech-item">Adobe XD</span>
                            <span class="hover-tech-item">Prototyping</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skill-card" data-skill="data" id="skillData">
                <div class="skill-card-bg-effect"></div>
                <div class="skill-card-icon">
                    <i class='bx bx-bar-chart-alt'></i>
                </div>
                <div class="skill-card-content">
                    <h4>Data Analysis</h4>
                    <p class="skill-desc">Python, Excel, Orange Data</p>
                    <div class="skill-card-tags">
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Excel</span>
                        <span class="skill-tag">Data</span>
                    </div>
                </div>
                <div class="skill-card-progress">
                    <div class="progress-ring">
                        <svg class="progress-ring-svg" viewBox="0 0 60 60">
                            <circle class="progress-ring-bg" cx="30" cy="30" r="26"/>
                            <circle class="progress-ring-fill" cx="30" cy="30" r="26" data-percent="70"/>
                        </svg>
                        <span class="progress-ring-value">0%</span>
                    </div>
                </div>
                <div class="skill-card-hover-overlay">
                    <div class="hover-content">
                        <span class="hover-title">Data Analyst</span>
                        <span class="hover-subtitle">Insights & Visualization</span>
                        <div class="hover-tech">
                            <span class="hover-tech-item">Python</span>
                            <span class="hover-tech-item">Tableau</span>
                            <span class="hover-tech-item">SQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PROJECTS SECTION ===== -->
<section id="projects" class="section">
    <div class="section-header">
        <span class="section-tag">// project</span>
        <h2 class="section-title">PROJECT TERBARU</h2>
    </div>
    <div class="projects-filter">
        <button class="filter-btn active" data-filter="all">Semua</button>
        <button class="filter-btn" data-filter="mobile">Mobile App</button>
        <button class="filter-btn" data-filter="web">Web App</button>
    </div>
    <div class="projects-grid" id="projectsGrid">

        <!-- Project 1 - Looka Food -->
        <div class="project-card project-card-modern" data-category="mobile" data-type="mobile" data-index="0">
            <div class="project-card-bg"></div>
            <div class="project-card-glow"></div>
            <div class="project-card-border"></div>
            <div class="project-image">
                <div class="device-frame-modern mobile-frame-modern">
                    <div class="device-screen-modern">
                        <img src="{{ asset('img/lokafood.png') }}" alt="Looka Food App" class="project-img">
                    </div>
                    <div class="device-scan-line"></div>
                </div>
                <div class="project-overlay-modern">
                    <div class="overlay-content">
                        <a href="https://www.figma.com/proto/cK8nPnCjJGi4O1eTrJPXJn/Looka-Food?page-id=0%3A1&node-id=18-24&p=f&viewport=256%2C1146%2C0.19&t=0zA1hIiy9DjE3utM-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1%3A2&show-proto-sidebar=1" target="_blank" class="project-link-modern">
                            <i class='bx bx-link-external'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-info-modern">
                <div class="project-header-modern">
                    <span class="project-tag-modern">Mobile App</span>
                    <span class="project-year-modern">2023</span>
                </div>
                <h3 class="project-title-modern">Looka Food</h3>
                <p class="project-desc-modern">Mobile App Design & Branding - Aplikasi pemesanan makanan dengan desain modern dan intuitif. Project with my team. </Project></p>
                <div class="project-tech-modern">
                    <span>Figma</span>
                    <span>UI/UX</span>
                    <span>Branding</span>
                </div>
            </div>
            <div class="project-card-corner tl"></div>
            <div class="project-card-corner tr"></div>
            <div class="project-card-corner bl"></div>
            <div class="project-card-corner br"></div>
        </div>

        <!-- Project 2 - Baduy Nesia -->
        <div class="project-card project-card-modern" data-category="mobile" data-type="mobile" data-index="1">
            <div class="project-card-bg"></div>
            <div class="project-card-glow"></div>
            <div class="project-card-border"></div>
            <div class="project-image">
                <div class="device-frame-modern mobile-frame-modern">
                    <div class="device-screen-modern">
                        <img src="{{ asset('img/baduynesia.png') }}" alt="Baduy Nesia App" class="project-img">
                    </div>
                    <div class="device-scan-line"></div>
                </div>
                <div class="project-overlay-modern">
                    <div class="overlay-content">
                        <a href="https://www.figma.com/proto/YQv7P2pNzRueSGgiOGGPhM/BADUY-NESIA?page-id=0%3A1&node-id=22-19&starting-point-node-id=2%3A3&scaling=scale-down&content-scaling=fixed&show-proto-sidebar=1&t=Vp5oh8y5QMa6Aigb-1" target="_blank" class="project-link-modern">
                            <i class='bx bx-link-external'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-info-modern">
                <div class="project-header-modern">
                    <span class="project-tag-modern">Mobile App</span>
                    <span class="project-year-modern">2025</span>
                </div>
                <h3 class="project-title-modern">Baduy Nesia App</h3>
                <p class="project-desc-modern">Mobile App Design - Aplikasi wisata budaya Baduy dengan fitur informasi dan pemetaan lokasi.</p>
                <div class="project-tech-modern">
                    <span>Figma</span>
                    <span>UI/UX</span>
                    <span>Mobile Design</span>
                </div>
            </div>
            <div class="project-card-corner tl"></div>
            <div class="project-card-corner tr"></div>
            <div class="project-card-corner bl"></div>
            <div class="project-card-corner br"></div>
        </div>

        <!-- Project 3 - Among Bank -->
        <div class="project-card project-card-modern" data-category="mobile" data-type="mobile" data-index="2">
            <div class="project-card-bg"></div>
            <div class="project-card-glow"></div>
            <div class="project-card-border"></div>
            <div class="project-image">
                <div class="device-frame-modern mobile-frame-modern">
                    <div class="device-screen-modern">
                        <img src="{{ asset('img/amongbank.png') }}" alt="Among Bank App" class="project-img">
                    </div>
                    <div class="device-scan-line"></div>
                </div>
                <div class="project-overlay-modern">
                    <div class="overlay-content">
                        <a href="https://www.figma.com/proto/xlDbiXxLBKHAOX7hR5fMaL/apliikasi-perbankan-1?page-id=0%3A1&node-id=1-2&viewport=493%2C2106%2C0.49&t=M2xxGQBp2VDAAjQH-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1%3A2&show-proto-sidebar=1" target="_blank" class="project-link-modern">
                            <i class='bx bx-link-external'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-info-modern">
                <div class="project-header-modern">
                    <span class="project-tag-modern">Mobile App</span>
                    <span class="project-year-modern">2024</span>
                </div>
                <h3 class="project-title-modern">Among Bank App</h3>
                <p class="project-desc-modern">Mobile Banking Design - Aplikasi perbankan dengan fitur transfer, cek saldo, dan histori transaksi.</p>
                <div class="project-tech-modern">
                    <span>Figma</span>
                    <span>UI/UX</span>
                    <span>Fintech</span>
                </div>
            </div>
        </div>

        <!-- Project 4 - PT Bagas Operation Marine -->
        <div class="project-card project-card-modern" data-category="web" data-type="web" data-index="3" onclick="window.open('https://bagasoprationmarine.com/', '_blank')" style="cursor: pointer;">
            <div class="project-card-bg"></div>
            <div class="project-card-glow"></div>
            <div class="project-card-border"></div>
            <div class="project-image">
                <div class="device-frame-modern desktop-frame-modern">
                    <div class="device-top-bar-modern">
                        <div class="browser-dots-modern">
                            <span class="dot-modern dot-red"></span>
                            <span class="dot-modern dot-yellow"></span>
                            <span class="dot-modern dot-green"></span>
                        </div>
                        <div class="browser-url-modern">bagasoprationmarine.com</div>
                    </div>
                    <div class="device-screen-modern">
                        <img src="{{ asset('img/web-ptbagas.png') }}" alt="PT Bagas Operation Marine Website" class="project-img">
                    </div>
                    <div class="device-scan-line"></div>
                </div>
                <div class="project-overlay-modern">
                    <div class="overlay-content">
                        <a href="https://bagasoprationmarine.com/" target="_blank" class="project-link-modern">
                            <i class='bx bx-link-external'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-info-modern">
                <div class="project-header-modern">
                    <span class="project-tag-modern">Company Profile</span>
                    <span class="project-year-modern">2026</span>
                </div>
                <h3 class="project-title-modern">Website PT Bagas Operation Marine</h3>
                <p class="project-desc-modern">Website profesional Company Profile untuk PT Bagas Operation Marine — perusahaan yang bergerak di bidang marine operation & logistik. Sudah dapat diakses melalui <strong>bagasoprationmarine.com</strong>.</p>
                <div class="project-tech-modern">
                    <span>Framework Laravel</span>
                    <span>Dart</span>
                    <span>PHP&JavaScript</span>
                </div>
            </div>
            <div class="project-card-corner tl"></div>
            <div class="project-card-corner tr"></div>
            <div class="project-card-corner bl"></div>
            <div class="project-card-corner br"></div>
        </div>

        <!-- Project 5 - Skripsi: Sistem Manajemen Proyek Konstruksi EVM -->
        <div class="project-card project-card-modern" data-category="web" data-type="web" data-index="4">
            <div class="project-card-bg"></div>
            <div class="project-card-glow"></div>
            <div class="project-card-border"></div>
            <div class="project-image">
                <div class="device-frame-modern desktop-frame-modern">
                    <div class="device-top-bar-modern">
                        <div class="browser-dots-modern">
                            <span class="dot-modern dot-red"></span>
                            <span class="dot-modern dot-yellow"></span>
                            <span class="dot-modern dot-green"></span>
                        </div>
                        <div class="browser-url-modern">sistem-evk-proyek.com</div>
                    </div>
                    <div class="device-screen-modern">
                        <img src="{{ asset('img/web-skripsi.png') }}" alt="Sistem Manajemen Proyek Konstruksi EVM" class="project-img">
                    </div>
                    <div class="device-scan-line"></div>
                </div>
                <div class="project-overlay-modern">
                    <div class="overlay-content">
                        <a href="#" class="project-link-modern">
                            <i class='bx bx-link-external'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-info-modern">
                <div class="project-header-modern">
                    <span class="project-tag-modern">Web Application</span>
                    <span class="project-year-modern">2026</span>
                </div>
                <h3 class="project-title-modern">Sistem Manajemen Proyek Konstruksi (EVM)</h3>
                <p class="project-desc-modern">Web sistem manajemen informasi kelola proyek konstruksi dengan metode <strong>Earned Value Management (EVM)</strong> untuk perusahaan kontraktor. Mencatat laporan mingguan hasil kerja, menghasilkan <strong>Card EVM yang aktual dan digital</strong>, serta dilengkapi fitur <strong>Forecasting</strong> untuk memprediksi pembengkakan biaya dan waktu kinerja proyek.</p>
                <div class="project-tech-modern">
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>MySQL</span>
                </div>
            </div>
            <div class="project-card-corner tl"></div>
            <div class="project-card-corner tr"></div>
            <div class="project-card-corner bl"></div>
            <div class="project-card-corner br"></div>
        </div>

        <!-- Project 6 - PT Kramat Berkah Jaya -->
        <div class="project-card project-card-modern" data-category="web" data-type="web" data-index="5">
            <div class="project-card-bg"></div>
            <div class="project-card-glow"></div>
            <div class="project-card-border"></div>
            <div class="project-image">
                <div class="device-frame-modern desktop-frame-modern">
                    <div class="device-top-bar-modern">
                        <div class="browser-dots-modern">
                            <span class="dot-modern dot-red"></span>
                            <span class="dot-modern dot-yellow"></span>
                            <span class="dot-modern dot-green"></span>
                        </div>
                        <div class="browser-url-modern">ptkbj.co.id</div>
                    </div>
                    <div class="device-screen-modern">
                        <img src="{{ asset('img/web-ptkbj.png') }}" alt="PT Kramat Berkah Jaya Website" class="project-img">
                    </div>
                    <div class="device-scan-line"></div>
                </div>
                <div class="project-overlay-modern">
                    <div class="overlay-content">
                        <a href="#" class="project-link-modern">
                            <i class='bx bx-link-external'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-info-modern">
                <div class="project-header-modern">
                    <span class="project-tag-modern">Company Profile</span>
                    <span class="project-year-modern">2026</span>
                </div>
                <h3 class="project-title-modern">Website PT Kramat Berkah Jaya (PTKBJ)</h3>
                <p class="project-desc-modern">Website Company Profile untuk <strong>PT Kramat Berkah Jaya</strong> — perusahaan yang bergerak di bidang konstruksi barang dan jasa. Dibangun dengan tampilan profesional untuk memperkenalkan profil perusahaan, layanan, dan portofolio proyek.</p>
                <div class="project-tech-modern">
                    <span>Frame Work NextJS</span>
                    <span>TypeScript</span>
                    <span>React&TailwindCSS</span>
                </div>
            </div>
            <div class="project-card-corner tl"></div>
            <div class="project-card-corner tr"></div>
            <div class="project-card-corner bl"></div>
            <div class="project-card-corner br"></div>
        </div>

    </div>
</section>

<!-- ===== CONTACT SECTION ===== -->
<section id="contact" class="section">
    <div class="section-header">
        <span class="section-tag">// kontak</span>
        <h2 class="section-title">HUBUNGI SAYA</h2>
    </div>
    <div class="contact-container">
        <div class="contact-form-wrapper">
            <div class="form-header">
                <h3>Send Message</h3>
                <p>Feel free to reach out for any inquiries or collaborations</p>
            </div>
            <form id="contactForm" class="contact-form">
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                    <div class="input-icon"><i class='bx bx-user'></i></div>
                    <div class="form-line"></div>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                    <div class="input-icon"><i class='bx bx-envelope'></i></div>
                    <div class="form-line"></div>
                </div>
                <div class="form-group">
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                    <div class="input-icon"><i class='bx bx-chat'></i></div>
                    <div class="form-line"></div>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" rows="5" placeholder="Your Message..." required></textarea>
                    <div class="input-icon textarea-icon"><i class='bx bx-message'></i></div>
                    <div class="form-line"></div>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">
                    <span>Send Message</span>
                    <i class='bx bx-send'></i>
                </button>
            </form>
        </div>
        <div class="contact-info">
            <div class="contact-info-header">
                <h3>Get In Touch</h3>
                <p>Let's work together on your next project</p>
            </div>
            <div class="contact-cards">
                <a href="mailto:sadam.alamsyah04@gmail.com?subject=Halo%20Sadam&body=Halo%20Sadam%2C%20saya%20tertarik%20untuk%20berbicara%20lebih%20lanjut." class="contact-card">
                    <div class="contact-icon">
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="contact-detail">
                        <span class="contact-label">Email</span>
                        <span class="contact-value">sadam.alamsyah04@gmail.com</span>
                    </div>
                    <div class="card-arrow"><i class='bx bx-right-arrow-alt'></i></div>
                </a>
                <a href="https://wa.me/6287885697679" target="_blank" class="contact-card">
                    <div class="contact-icon whatsapp">
                        <i class='bx bxl-whatsapp'></i>
                    </div>
                    <div class="contact-detail">
                        <span class="contact-label">WhatsApp</span>
                        <span class="contact-value">+62 878 8569 7679</span>
                    </div>
                    <div class="card-arrow"><i class='bx bx-right-arrow-alt'></i></div>
                </a>
                <a href="https://www.instagram.com/sdmsyh_?igsh=MWt5MHk0cHVjNjRneQ==&utm_source=ig_contact_invite" target="_blank" class="contact-card">
                    <div class="contact-icon instagram">
                        <i class='bx bxl-instagram-alt'></i>
                    </div>
                    <div class="contact-detail">
                        <span class="contact-label">Instagram</span>
                        <span class="contact-value">@sdmsyh_</span>
                    </div>
                    <div class="card-arrow"><i class='bx bx-right-arrow-alt'></i></div>
                </a>
                <div class="contact-card location">
                    <div class="contact-icon location">
                        <i class='bx bx-map'></i>
                    </div>
                    <div class="contact-detail">
                        <span class="contact-label">Location</span>
                        <span class="contact-value">Serang, Banten, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection