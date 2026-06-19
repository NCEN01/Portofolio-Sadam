// ===== Portfolio JavaScript - Scroll Based =====

document.addEventListener('DOMContentLoaded', () => {
    initWelcome();
    initCustomCursor();
    initParticles();
    initNavigation();
    initTypedEffect();
    initCounters();
    initSkillBars();
    initRadarChart();
    initProjectFilter();
    initContactForm();
    initScrollSpy();
    initScrollEffects();
    initBackToTop();
    initProjectModal();
    initParallax();
    initProfileGlitch();
    initRevealAnimations();
    initEnhancedSkills();
    initProjectDeviceAnimation();
    initHeroPhotoEffects();
    initGlitchCardEffects();
    initInternshipEffects();
    initCertificationEffects();
    initAboutEffects();
    initModernProjectCards();
});

// ===== Loader =====
function initLoader() {
    document.body.classList.add('loading');

    const loader = document.getElementById('loader');
    const progress = document.getElementById('loaderProgress');
    const loaderText = document.getElementById('loaderText');
    const messages = ['Loading assets...', 'Building UI...', 'Almost ready...', 'Welcome!'];

    let progressValue = 0;
    const interval = setInterval(() => {
        progressValue += Math.random() * 15 + 5;
        if (progressValue >= 100) {
            progressValue = 100;
            clearInterval(interval);
            loaderText.textContent = messages[3];
            setTimeout(() => {
                loader.classList.add('hidden');
                document.body.classList.remove('loading');
                initCounters();
            }, 500);
        } else {
            progress.style.width = progressValue + '%';
            const msgIndex = Math.floor(progressValue / 30);
            loaderText.textContent = messages[Math.min(msgIndex, messages.length - 1)];
        }
    }, 200);
}

// ===== Welcome Screen Animation =====
function initWelcome() {
    const overlay = document.getElementById('welcomeOverlay');
    if (!overlay) return;

    document.body.classList.add('loading');

    const roleEl = document.getElementById('welcomeRole');
    const terminalMsg = document.getElementById('terminalMsg');
    const terminalBody = document.getElementById('terminalBody');

    // === Welcome Particles Canvas ===
    const canvas = document.getElementById('welcomeParticles');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let wParticles = [];

        function resizeWelcomeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resizeWelcomeCanvas();
        window.addEventListener('resize', resizeWelcomeCanvas);

        class WelcomeParticle {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2.5 + 0.5;
                this.speedX = (Math.random() - 0.5) * 0.4;
                this.speedY = (Math.random() - 0.5) * 0.4;
                this.opacity = Math.random() * 0.6 + 0.2;
                this.color = Math.random() > 0.5 ? '255, 107, 53' : '255, 68, 68';
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
                    this.reset();
                }
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(${this.color}, ${this.opacity})`;
                ctx.fill();
            }
        }

        const particleCount = Math.min(Math.floor(canvas.width * canvas.height / 12000), 100);
        for (let i = 0; i < particleCount; i++) {
            wParticles.push(new WelcomeParticle());
        }

        function animateWelcomeParticles() {
            if (!overlay.classList.contains('hidden')) {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                wParticles.forEach(p => {
                    p.update();
                    p.draw();
                });
                // Draw connections
                for (let i = 0; i < wParticles.length; i++) {
                    for (let j = i + 1; j < wParticles.length; j++) {
                        const dx = wParticles[i].x - wParticles[j].x;
                        const dy = wParticles[i].y - wParticles[j].y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 80) {
                            ctx.beginPath();
                            ctx.moveTo(wParticles[i].x, wParticles[i].y);
                            ctx.lineTo(wParticles[j].x, wParticles[j].y);
                            ctx.strokeStyle = `rgba(255, 107, 53, ${0.12 * (1 - dist / 80)})`;
                            ctx.lineWidth = 0.5;
                            ctx.stroke();
                        }
                    }
                }
            }
            requestAnimationFrame(animateWelcomeParticles);
        }
        animateWelcomeParticles();
    }

    // === Role Typing Animation (faster cycling) ===
    const roles = ['WEB DEVELOPER', 'MOBILE DEVELOPER', 'UI UX DESIGNER'];
    let roleIndex = 0;
    let charIdx = 0;
    let isDel = false;
    let roleTimer;

    function typeRole() {
        const currentRole = roles[roleIndex];
        if (isDel) {
            roleEl.textContent = currentRole.substring(0, charIdx - 1);
            charIdx--;
        } else {
            roleEl.textContent = currentRole.substring(0, charIdx + 1);
            charIdx++;
        }

        let speed = isDel ? 25 : 50;

        if (!isDel && charIdx === currentRole.length) {
            speed = 1200;
            isDel = true;
        } else if (isDel && charIdx === 0) {
            isDel = false;
            roleIndex = (roleIndex + 1) % roles.length;
            speed = 200;
        }

        roleTimer = setTimeout(typeRole, speed);
    }

    // Start role typing after a short delay
    setTimeout(() => {
        if (roleEl) typeRole();
    }, 400);

    // === Terminal Animation (shortened) ===
    const terminalMessages = [
        'Initializing system...',
        'Loading portfolio...',
        'Rendering UI...',
        'System ready! Welcome.'
    ];

    let msgIndex = 0;

    function typeTerminalMessage(text, callback) {
        if (!terminalMsg) return;
        terminalMsg.textContent = '';
        let i = 0;
        const speed = text.length > 25 ? 18 : 30;
        const interval = setInterval(() => {
            if (i < text.length) {
                terminalMsg.textContent += text[i];
                i++;
            } else {
                clearInterval(interval);
                if (callback) setTimeout(callback, 300);
            }
        }, speed);
    }

    function cycleTerminalMessages() {
        if (msgIndex >= terminalMessages.length) return;
        typeTerminalMessage(terminalMessages[msgIndex], () => {
            // Add new terminal line for previous message
            if (terminalBody && msgIndex > 0) {
                const cursorLine = document.getElementById('terminalCursorLine');
                const newLine = document.createElement('div');
                newLine.className = 'terminal-line';
                newLine.innerHTML = `<span class="terminal-prompt">></span> <span style="color:#4a4;">OK</span>`;
                if (cursorLine) {
                    terminalBody.insertBefore(newLine, cursorLine);
                }
            }
            msgIndex++;
            if (msgIndex < terminalMessages.length) {
                cycleTerminalMessages();
            }
        });
    }

    setTimeout(() => cycleTerminalMessages(), 800);

    // === Page Entrance Animation ===
    const main = document.querySelector('main');
    const navbar = document.querySelector('.navbar');
    const particles = document.getElementById('particles');
    const bgGlow = document.querySelector('.bg-glow');
    const bgGrid = document.querySelector('.bg-grid');

    function triggerPageEntrance() {
        // Staggered fade-in for background elements
        if (bgGrid) bgGrid.style.transition = 'opacity 0.8s ease';
        if (bgGrid) bgGrid.style.opacity = '1';
        if (bgGlow) bgGlow.style.transition = 'opacity 1s ease 0.2s';
        if (bgGlow) bgGlow.style.opacity = '1';
        if (particles) particles.style.transition = 'opacity 1s ease 0.3s';
        if (particles) particles.style.opacity = '1';

        // Navbar slide down
        if (navbar) {
            navbar.style.transition = 'transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.1s, opacity 0.6s ease 0.1s';
            navbar.style.transform = 'translateY(0)';
            navbar.style.opacity = '1';
        }

        // Main content zoom-in
        if (main) {
            main.style.transition = 'opacity 0.8s ease 0.2s, transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s';
            main.style.opacity = '1';
            main.style.transform = 'scale(1)';
        }

        // Footer fade in
        const footer = document.querySelector('.footer');
        if (footer) {
            footer.style.transition = 'opacity 0.8s ease 0.5s, transform 0.8s ease 0.5s';
            footer.style.opacity = '1';
            footer.style.transform = 'translateY(0)';
        }
    }

    // === Hide Welcome Screen ===
    const totalDuration = terminalMessages.length * 1000 + 800;
    const exitDelay = Math.max(totalDuration, 2800);

    setTimeout(() => {
        overlay.classList.add('exiting');
        // Trigger page entrance while welcome is exiting
        setTimeout(() => triggerPageEntrance(), 300);
        setTimeout(() => {
            overlay.classList.add('hidden');
            document.body.classList.remove('loading');
            if (roleTimer) clearTimeout(roleTimer);
        }, 600);
    }, exitDelay);
}

// ===== Custom Cursor =====
function initCustomCursor() {
    const cursor = document.getElementById('cursor');
    const trail = document.getElementById('cursorTrail');
    if (!cursor || !trail) return;

    let trailX = 0, trailY = 0;
    let cursorX = 0, cursorY = 0;

    document.addEventListener('mousemove', (e) => {
        cursorX = e.clientX;
        cursorY = e.clientY;
    });

    function animateTrail() {
        trailX += (cursorX - trailX) * 0.15;
        trailY += (cursorY - trailY) * 0.15;
        trail.style.left = trailX + 'px';
        trail.style.top = trailY + 'px';
        requestAnimationFrame(animateTrail);
    }

    function moveCursor() {
        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';
        requestAnimationFrame(moveCursor);
    }

    animateTrail();
    moveCursor();

    // Hover effect
    const hoverElements = document.querySelectorAll('a, button, .project-card, .skill-card, .service-card, .filter-btn, .social-link');
    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
    });

    // Hide cursor on mobile
    if ('ontouchstart' in window) {
        cursor.style.display = 'none';
        trail.style.display = 'none';
        document.body.style.cursor = 'auto';
    }
}

// ===== Particle System =====
function initParticles() {
    const canvas = document.getElementById('particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let particles = [];

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    function createParticle() {
        return {
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            vx: (Math.random() - 0.5) * 0.5,
            vy: (Math.random() - 0.5) * 0.5,
            radius: Math.random() * 2 + 1,
            opacity: Math.random() * 0.5 + 0.2,
            color: Math.random() > 0.5 ? '0, 240, 255' : '123, 44, 191'
        };
    }

    function initParticlesArray() {
        particles = [];
        const count = Math.min(Math.floor(canvas.width * canvas.height / 15000), 80);
        for (let i = 0; i < count; i++) {
            particles.push(createParticle());
        }
    }

    function drawConnections() {
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < 150) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = `rgba(0, 240, 255, ${0.1 * (1 - dist / 150)})`;
                    ctx.lineWidth = 1;
                    ctx.stroke();
                }
            }
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${p.color}, ${p.opacity})`;
            ctx.fill();

            p.x += p.vx;
            p.y += p.vy;

            if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
            if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
        });

        drawConnections();
        requestAnimationFrame(animate);
    }

    resize();
    initParticlesArray();
    animate();

    window.addEventListener('resize', () => {
        resize();
        initParticlesArray();
    });
}

// ===== Navigation =====
function initNavigation() {
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Close menu when clicking a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }
}

// ===== Typed Effect =====
function initTypedEffect() {
    const roleText = document.getElementById('roleText');
    if (!roleText) return;

    const roles = [
        'Web Developer',
        'Mobile Developer',
        'UI/UX Designer'
    ];
    let roleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100;

    function typeRole() {
        const currentRole = roles[roleIndex];

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
            typeSpeed = 2500;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            roleIndex = (roleIndex + 1) % roles.length;
            typeSpeed = 500;
        }

        setTimeout(typeRole, typeSpeed);
    }

    // Start typing effect
    typeRole();
}

// ===== Counter Animation =====
function initCounters() {
    const counters = document.querySelectorAll('.stat-num');

    counters.forEach(counter => {
        const target = parseInt(counter.dataset.target);
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        counter.textContent = '0';

        function updateCounter() {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        }

        setTimeout(updateCounter, 500);
    });
}

// ===== Skill Bars Animation =====
function initSkillBars() {
    const skillBars = document.querySelectorAll('.skill-bar');

    skillBars.forEach((bar, index) => {
        const percent = bar.dataset.percent;
        const fill = bar.querySelector('.skill-fill');
        const percentText = bar.querySelector('.skill-percent');

        fill.style.width = '0';
        percentText.textContent = '0%';

        setTimeout(() => {
            fill.style.width = `${percent}%`;

            let current = 0;
            const target = parseInt(percent);
            const increment = target / 100;

            function updatePercent() {
                current += increment;
                if (current <= target) {
                    percentText.textContent = `${Math.floor(current)}%`;
                    setTimeout(updatePercent, 15);
                } else {
                    percentText.textContent = `${target}%`;
                }
            }

            updatePercent();
        }, 300 + (index * 150));
    });
}

// ===== Enhanced Radar Chart =====
function initRadarChart() {
    const canvas = document.getElementById('radarChart');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    canvas.width = 400;
    canvas.height = 400;
    const centerX = 200;
    const centerY = 200;
    const radius = 130;

    const skills = [
        { name: 'HTML/CSS', value: 90 },
        { name: 'JavaScript', value: 85 },
        { name: 'PHP', value: 85 },
        { name: 'Java', value: 75 },
        { name: 'Dart', value: 85 },
        { name: 'Python', value: 70 }
    ];

    const angleStep = (Math.PI * 2) / skills.length;
    let currentValues = new Array(skills.length).fill(0);
    const targetValues = skills.map(s => s.value);
    let isHovering = false;
    let hoverAngle = -1;
    let particles = [];
    let rotation = 0;

    // Create particles
    for (let i = 0; i < 30; i++) {
        particles.push({
            angle: Math.random() * Math.PI * 2,
            radius: radius + Math.random() * 40,
            speed: 0.002 + Math.random() * 0.003,
            size: 1 + Math.random() * 2,
            alpha: 0.3 + Math.random() * 0.5
        });
    }

    // Mouse interaction
    canvas.addEventListener('mousemove', (e) => {
        const rect = canvas.getBoundingClientRect();
        const x = e.clientX - rect.left - centerX;
        const y = e.clientY - rect.top - centerY;
        const dist = Math.sqrt(x * x + y * y);

        if (dist < radius + 30) {
            isHovering = true;
            hoverAngle = Math.atan2(y, x);
        } else {
            isHovering = false;
            hoverAngle = -1;
        }
    });

    canvas.addEventListener('mouseleave', () => {
        isHovering = false;
        hoverAngle = -1;
    });

    function drawGlow(x, y, radius, color) {
        const gradient = ctx.createRadialGradient(x, y, 0, x, y, radius);
        gradient.addColorStop(0, color);
        gradient.addColorStop(1, 'transparent');
        ctx.fillStyle = gradient;
        ctx.beginPath();
        ctx.arc(x, y, radius, 0, Math.PI * 2);
        ctx.fill();
    }

    function drawRadar() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Update rotation
        rotation += 0.001;

        // Draw background glow
        drawGlow(centerX, centerY, radius * 1.5, 'rgba(255, 107, 53, 0.05)');

        // Draw particles
        particles.forEach(p => {
            p.angle += p.speed;
            const px = centerX + Math.cos(p.angle) * p.radius;
            const py = centerY + Math.sin(p.angle) * p.radius;

            ctx.beginPath();
            ctx.arc(px, py, p.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(255, 107, 53, ${p.alpha})`;
            ctx.fill();
        });

        // Draw grid rings with gradient
        for (let i = 1; i <= 5; i++) {
            const r = (radius / 5) * i;
            ctx.beginPath();

            for (let j = 0; j <= skills.length; j++) {
                const angle = j * angleStep + rotation - Math.PI / 2;
                const x = centerX + r * Math.cos(angle);
                const y = centerY + r * Math.sin(angle);
                if (j === 0) ctx.moveTo(x, y);
                else ctx.lineTo(x, y);
            }
            ctx.closePath();

            // Gradient stroke for rings
            const gradient = ctx.createLinearGradient(
                centerX - r, centerY,
                centerX + r, centerY
            );
            gradient.addColorStop(0, 'rgba(255, 107, 53, 0.1)');
            gradient.addColorStop(0.5, 'rgba(255, 107, 53, 0.3)');
            gradient.addColorStop(1, 'rgba(255, 107, 53, 0.1)');
            ctx.strokeStyle = gradient;
            ctx.lineWidth = 1;
            ctx.stroke();
        }

        // Draw axes with glow
        skills.forEach((_, i) => {
            const angle = i * angleStep + rotation - Math.PI / 2;
            ctx.beginPath();
            ctx.moveTo(centerX, centerY);
            ctx.lineTo(centerX + radius * Math.cos(angle), centerY + radius * Math.sin(angle));

            const gradient = ctx.createLinearGradient(
                centerX, centerY,
                centerX + radius * Math.cos(angle), centerY + radius * Math.sin(angle)
            );
            gradient.addColorStop(0, 'rgba(255, 107, 53, 0.5)');
            gradient.addColorStop(1, 'rgba(255, 107, 53, 0.2)');
            ctx.strokeStyle = gradient;
            ctx.lineWidth = 1;
            ctx.stroke();
        });

        // Draw data shape with gradient fill
        ctx.beginPath();
        currentValues.forEach((value, i) => {
            const angle = i * angleStep + rotation - Math.PI / 2;
            const r = (value / 100) * radius;
            const x = centerX + r * Math.cos(angle);
            const y = centerY + r * Math.sin(angle);
            if (i === 0) ctx.moveTo(x, y);
            else ctx.lineTo(x, y);
        });
        ctx.closePath();

        // Gradient fill
        const fillGradient = ctx.createRadialGradient(centerX, centerY, 0, centerX, centerY, radius);
        fillGradient.addColorStop(0, 'rgba(255, 107, 53, 0.4)');
        fillGradient.addColorStop(1, 'rgba(255, 68, 68, 0.1)');
        ctx.fillStyle = fillGradient;
        ctx.fill();

        // Glow border
        ctx.strokeStyle = 'rgba(255, 107, 53, 0.9)';
        ctx.lineWidth = 2;
        ctx.shadowColor = 'rgba(255, 107, 53, 0.8)';
        ctx.shadowBlur = 15;
        ctx.stroke();
        ctx.shadowBlur = 0;

        // Draw dots with glow
        currentValues.forEach((value, i) => {
            const angle = i * angleStep + rotation - Math.PI / 2;
            const r = (value / 100) * radius;
            const x = centerX + r * Math.cos(angle);
            const y = centerY + r * Math.sin(angle);

            // Glow
            drawGlow(x, y, 15, 'rgba(255, 107, 53, 0.3)');

            // Dot
            ctx.beginPath();
            ctx.arc(x, y, isHovering && Math.abs(angle - hoverAngle) < 0.3 ? 7 : 5, 0, Math.PI * 2);
            ctx.fillStyle = '#ff6b35';
            ctx.fill();

            // Inner dot
            ctx.beginPath();
            ctx.arc(x, y, 2, 0, Math.PI * 2);
            ctx.fillStyle = '#fff';
            ctx.fill();
        });

        // Draw enhanced labels
        ctx.font = 'bold 13px Rajdhani';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';

        skills.forEach((skill, i) => {
            const angle = i * angleStep + rotation - Math.PI / 2;
            const labelRadius = radius + 35;
            const x = centerX + labelRadius * Math.cos(angle);
            const y = centerY + labelRadius * Math.sin(angle);

            // Background for label
            const labelWidth = ctx.measureText(skill.name).width + 16;
            const labelHeight = 22;

            ctx.fillStyle = 'rgba(10, 10, 15, 0.8)';
            ctx.beginPath();
            ctx.roundRect(x - labelWidth/2, y - labelHeight/2, labelWidth, labelHeight, 4);
            ctx.fill();

            // Border
            ctx.strokeStyle = 'rgba(255, 107, 53, 0.5)';
            ctx.lineWidth = 1;
            ctx.stroke();

            // Text
            ctx.fillStyle = skill.value >= 80 ? '#ff6b35' : 'rgba(255, 255, 255, 0.9)';
            ctx.fillText(skill.name, x, y);

            // Value indicator
            ctx.font = 'bold 11px Rajdhani';
            ctx.fillStyle = '#ff4444';
            ctx.fillText(`${skill.value}%`, x, y + 15);
        });
    }

    function animate() {
        let allReached = true;
        currentValues = currentValues.map((v, i) => {
            if (v < targetValues[i]) {
                allReached = false;
                return Math.min(v + 1.5, targetValues[i]);
            }
            return v;
        });

        drawRadar();

        if (!allReached) {
            requestAnimationFrame(animate);
        } else {
            // Keep animating for particles and rotation
            requestAnimationFrame(animate);
        }
    }

    animate();
}

// ===== Project Filter =====
function initProjectFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectsGrid = document.querySelector('.projects-grid');
    const projects = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Animate grid
            if (projectsGrid) {
                projectsGrid.style.opacity = '0';
                setTimeout(() => {
                    projects.forEach((project, index) => {
                        if (filter === 'all' || project.dataset.category === filter) {
                            project.classList.remove('hidden');
                            // Re-trigger reveal animation
                            setTimeout(() => {
                                project.classList.add('card-revealed');
                            }, index * 100);
                        } else {
                            project.classList.add('hidden');
                            project.classList.remove('card-revealed');
                        }
                    });
                    projectsGrid.style.opacity = '1';
                }, 200);
            }
        });
    });
}

// ===== Contact Form =====
function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const data = Object.fromEntries(formData);

        if (!data.name || !data.email || !data.message) {
            showToast('Mohon isi semua field yang diperlukan', 'error');
            return;
        }

        if (!isValidEmail(data.email)) {
            showToast('Format email tidak valid', 'error');
            return;
        }

        const btn = form.querySelector('.btn-submit');
        btn.innerHTML = '<span>Mengirim...</span>';

        setTimeout(() => {
            btn.innerHTML = `
                <span>Pesan Terkirim!</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            `;

            showToast(`Terima kasih ${data.name}! Pesan Anda telah dikirim.`, 'success');

            setTimeout(() => {
                btn.innerHTML = `
                    <span>Kirim Pesan</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <line x1="22" y1="2" x2="11" y2="13"/>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                    </svg>
                `;
                form.reset();
            }, 2000);
        }, 1500);
    });
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    if (!toast) return;
    const toastMessage = toast.querySelector('.toast-message');
    const toastIcon = toast.querySelector('.toast-icon');

    toastMessage.textContent = message;

    if (type === 'error') {
        toastIcon.style.background = '#ff4444';
    } else {
        toastIcon.style.background = '#00ff88';
    }

    toast.classList.add('show');

    setTimeout(() => {
        toast.classList.remove('show');
    }, 4000);
}

// ===== Scroll Spy (Active navigation based on scroll) =====
function initScrollSpy() {
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('.nav-link');

    const observerOptions = {
        root: null,
        rootMargin: '-50% 0px -50% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));
}

// ===== Scroll Effects =====
function initScrollEffects() {
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Parallax for background glow
    const bgGlow = document.querySelector('.bg-glow');
    if (bgGlow) {
        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            bgGlow.style.transform = `translateX(-50%) translateY(${scrolled * 0.3}px)`;
        });

        // Mouse parallax
        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth - 0.5) * 50;
            const y = (e.clientY / window.innerHeight - 0.5) * 30;
            bgGlow.style.transform = `translateX(calc(-50% + ${x}px)) translateY(${y}px)`;
        });
    }
}

// ===== Reveal Animations =====
function initRevealAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');

                // Trigger skill bars if in skills section
                if (entry.target.closest('#skills')) {
                    setTimeout(() => {
                        initSkillBars();
                        initRadarChart();
                    }, 300);
                }
            }
        });
    }, observerOptions);

    document.querySelectorAll('.about-card, .skill-card, .project-card, .contact-card, .service-card, .timeline-item').forEach(el => {
        el.classList.add('reveal');
        observer.observe(el);
    });
}

// ===== Back to Top =====
function initBackToTop() {
    const btn = document.getElementById('backToTop');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }
    });

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// ===== Project Modal =====
function initProjectModal() {
    const modal = document.getElementById('projectModal');
    if (!modal) return;

    const overlay = document.getElementById('modalOverlay');
    const closeBtn = document.getElementById('modalClose');
    const modalBody = document.getElementById('modalBody');

    const projectData = {
        scholarship: {
            title: 'Sistem Informasi Scholarship',
            tag: 'Web App',
            description: 'Sistem manajemen beasiswa dengan fitur dashboard admin dan user yang lengkap. Dibangun dengan framework Laravel untuk performa optimal.',
            features: [
                'Dashboard admin untuk manajemen pendaftar',
                'Sistem login multi-level (admin/user)',
                'Verifikasi dokumen otomatis',
                'Pengumuman hasil seleksi',
                'Laporan dan statistik pendaftar'
            ],
            tech: ['Laravel', 'MySQL', 'Bootstrap', 'jQuery']
        },
        patient: {
            title: 'Patient App - Sistem Rekam Medis',
            tag: 'Mobile',
            description: 'Aplikasi android untuk manajemen data pasien dan rekam medis. Dilengkapi dengan fitur pencarian dan histori pengobatan.',
            features: [
                'Registrasi pasien baru',
                'Manajemen rekam medis digital',
                'Riwayat pengobatan lengkap',
                'Pencarian data pasien cepat',
                'Export laporan ke PDF'
            ],
            tech: ['Java', 'Android Studio', 'SQLite', 'MPAndroidChart']
        },
        queue: {
            title: 'Sistem Antrian Pasien',
            tag: 'System',
            description: 'Sistem antrian otomatis untuk klinik dan rumah sakit dengan tampilan display dan notifikasi suara.',
            features: [
                'Display antrian real-time',
                'Panggilan antrian otomatis',
                'Manajemenpoli dan dokter',
                'Cetak nomor antrian',
                'Laporan statistik kunjungan'
            ],
            tech: ['Java', 'MySQL', 'NetBeans', 'JasperReport']
        },
        ecommerce: {
            title: 'E-Commerce Toko Elektronik',
            tag: 'Web App',
            description: 'Sistem toko online lengkap dengan fitur keranjang belanja, checkout, dan manajemen produk. Dibangun dengan arsitektur MVC untuk code yang clean.',
            features: [
                'Dashboard admin untuk manajemen produk dan order',
                'Sistem keranjang belanja dengan local storage',
                'Checkout dengan validasi form',
                'Integrasi payment gateway Midtrans',
                'Laporan penjualan dan statistik'
            ],
            tech: ['Laravel', 'MySQL', 'Bootstrap', 'Midtrans API']
        },
        inventory: {
            title: 'Sistem Inventory Gudang',
            tag: 'System',
            description: 'Aplikasi desktop untuk mengelola stok barang di gudang. Dilengkapi dengan fitur barcode scanning dan laporan lengkap.',
            features: [
                'Manajemen barang masuk dan keluar',
                'Scan barcode untuk input data cepat',
                'Laporan stok harian dan bulanan',
                'Notifikasi barang dengan stok minim',
                'Export laporan ke Excel dan PDF'
            ],
            tech: ['Java', 'MySQL', 'NetBeans', 'Apache POI']
        },
        portfolio: {
            title: 'Portfolio Website',
            tag: 'Web App',
            description: 'Website portfolio personal dengan desain modern dan futuristik. Menampilkan project dan keahlian secara menarik.',
            features: [
                'Desain responsive multiplatform',
                'Efek animasi cyberpunk',
                'Smooth scroll navigation',
                'Contact form interaktif',
                'Project showcase dengan filter'
            ],
            tech: ['HTML5', 'CSS3', 'JavaScript', 'Canvas API']
        }
    };

    document.querySelectorAll('.view-project').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const projectId = btn.dataset.project;
            const project = projectData[projectId];

            if (project) {
                modalBody.innerHTML = `
                    <span class="project-tag">${project.tag}</span>
                    <h2>${project.title}</h2>
                    <p>${project.description}</p>
                    <div class="modal-section">
                        <h3>Fitur Utama</h3>
                        <ul class="modal-features">
                            ${project.features.map(f => `<li>${f}</li>`).join('')}
                        </ul>
                    </div>
                    <div class="modal-section">
                        <h3>Technologies</h3>
                        <div class="modal-tech-list">
                            ${project.tech.map(t => `<span>${t}</span>`).join('')}
                        </div>
                    </div>
                `;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    overlay.addEventListener('click', () => closeModal(modal));
    closeBtn.addEventListener('click', () => closeModal(modal));

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal(modal);
    });
}

function closeModal(modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
}

// ===== Parallax Effects =====
function initParallax() {
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const profileContainer = document.querySelector('.profile-container');
        if (profileContainer) {
            const rect = profileContainer.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                const progress = (window.innerHeight - rect.top) / (window.innerHeight + rect.height);
                profileContainer.style.transform = `translateY(${progress * 30}px)`;
            }
        }
    });

    // Mouse parallax for profile
    const heroRight = document.querySelector('.hero-right');
    if (heroRight) {
        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth - 0.5) * 20;
            const y = (e.clientY / window.innerHeight - 0.5) * 20;
            heroRight.style.transform = `translate(${x}px, ${y}px)`;
        });
    }
}

// ===== Enhanced Hero Photo Animation =====
function initHeroPhotoEffects() {
    const photoWrapper = document.getElementById('photoWrapper');
    const photo3D = document.getElementById('photo3D');
    const photoCube = document.getElementById('photoCube');
    const mainPhoto = document.getElementById('mainPhoto');
    const glowOrb = document.getElementById('glowOrb');

    if (!photoWrapper) return;

    // 3D Tilt effect following mouse
    photoWrapper.addEventListener('mousemove', (e) => {
        const rect = photoWrapper.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;

        if (photo3D) {
            photo3D.style.transform = `perspective(1000px) rotateY(${x * 15}deg) rotateX(${-y * 15}deg)`;
        }

        if (photoCube) {
            photoCube.style.transform = `perspective(1000px) rotateY(${x * 10}deg) rotateX(${-y * 10}deg)`;
        }

        // Glow follows cursor
        if (glowOrb) {
            glowOrb.style.left = `${e.clientX - rect.left}px`;
            glowOrb.style.top = `${e.clientY - rect.top}px`;
        }

        // Photo subtle movement (parallax)
        if (mainPhoto) {
            const photoRect = mainPhoto.getBoundingClientRect();
            const moveX = (e.clientX - rect.left - rect.width / 2) / 20;
            const moveY = (e.clientY - rect.top - rect.height / 2) / 20;
            mainPhoto.style.transform = `translate(${moveX}px, ${moveY}px)`;
        }
    });

    photoWrapper.addEventListener('mouseleave', () => {
        if (photo3D) photo3D.style.transform = '';
        if (photoCube) photoCube.style.transform = '';
        if (mainPhoto) mainPhoto.style.transform = '';
    });

    // ===== Modern Glitch Effect Every 3 Seconds =====
    function triggerModernGlitch() {
        if (!mainPhoto) return;

        const frameOuter = document.querySelector('.photo-frame-outer');
        if (!frameOuter) return;

        // Create multiple glitch layers - grayscale/black only
        const glitchElements = [];
        const glitchOffsets = [
            { y: '0', offset: 4 },
            { y: '30%', offset: -3 },
            { y: '60%', offset: 5 }
        ];

        glitchOffsets.forEach((glitch, i) => {
            const glitchEl = mainPhoto.cloneNode();
            glitchEl.style.cssText = `
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                filter: grayscale(100%) contrast(1.5);
                clip-path: inset(${glitch.y} 0 ${100 - parseInt(glitch.y) - 15}% 0);
                mix-blend-mode: multiply;
                opacity: 0.6;
                transform: translateX(${glitch.offset}px);
            `;
            frameOuter.appendChild(glitchEl);
            glitchElements.push(glitchEl);
        });

        // Add grayscale noise/scanline effect
        const scanlineGlitch = document.createElement('div');
        scanlineGlitch.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 2px,
                rgba(0, 0, 0, 0.1) 2px,
                rgba(0, 0, 0, 0.1) 4px
            );
            animation: scanlineGlitch 0.3s steps(3) forwards;
            z-index: 15;
            pointer-events: none;
        `;
        frameOuter.appendChild(scanlineGlitch);
        glitchElements.push(scanlineGlitch);

        // Add static noise effect
        const noiseGlitch = document.createElement('div');
        noiseGlitch.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.15);
            animation: noiseFlash 0.3s steps(2) forwards;
            z-index: 12;
            pointer-events: none;
        `;
        frameOuter.appendChild(noiseGlitch);
        glitchElements.push(noiseGlitch);

        // Screen shake effect
        if (photoCube) {
            photoCube.style.animation = 'glitchShake 0.3s ease-out';
        }

        // Remove all glitch elements after animation
        setTimeout(() => {
            glitchElements.forEach(el => el.remove());
            if (photoCube) {
                photoCube.style.animation = 'photoFloat 6s ease-in-out infinite';
            }
        }, 350);
    }

    // Auto-trigger glitch every 3 seconds
    setInterval(triggerModernGlitch, 3000);

    // Add CSS animations for glitch effects - grayscale style
    const glitchStyle = document.createElement('style');
    glitchStyle.textContent = `
        @keyframes glitchShake {
            0% { transform: translate(0); }
            20% { transform: translate(-4px, 2px); }
            40% { transform: translate(4px, -2px); }
            60% { transform: translate(-3px, 1px); }
            80% { transform: translate(3px, -1px); }
            100% { transform: translate(0); }
        }
        @keyframes scanlineGlitch {
            0% { opacity: 0.3; transform: translateY(0); }
            25% { opacity: 0.6; transform: translateY(-5px); }
            50% { opacity: 0.2; transform: translateY(5px); }
            75% { opacity: 0.5; transform: translateY(-3px); }
            100% { opacity: 0; transform: translateY(0); }
        }
        @keyframes noiseFlash {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }
    `;
    document.head.appendChild(glitchStyle);

    // Holographic scan effect
    createScanLines();

    // Floating animation for photo
    if (photoCube) {
        photoCube.style.animation = 'photoFloat 6s ease-in-out infinite';
    }

    // Skill badges follow with delay
    const skillBadges = document.querySelectorAll('.skill-badge');
    skillBadges.forEach((badge, i) => {
        badge.style.animationDelay = `${i * 0.5}s`;
    });

    // Dynamic particles around photo
    createFloatingParticles();

    // ===== Reposition skill badges on resize =====
    function repositionSkillBadges() {
        const badges = document.querySelectorAll('.skill-badge');
        const photoWrapper = document.getElementById('photoWrapper');

        if (!photoWrapper) return;

        const wrapperWidth = photoWrapper.offsetWidth;
        const wrapperHeight = photoWrapper.offsetHeight;

        badges.forEach(badge => {
            const skillType = badge.dataset.skill;

            // Reset all positions first
            badge.style.top = '';
            badge.style.bottom = '';
            badge.style.left = '';
            badge.style.right = '';

            if (wrapperWidth < 300) {
                // Mobile - hide badges
                badge.style.display = 'none';
            } else if (wrapperWidth < 500) {
                // Small tablet
                badge.style.display = '';
                if (skillType === 'ui') {
                    badge.style.top = '-40px';
                    badge.style.left = '50%';
                    badge.style.transform = 'translateX(-50%)';
                } else if (skillType === 'web') {
                    badge.style.top = '50%';
                    badge.style.left = '-' + (wrapperWidth * 0.3) + 'px';
                    badge.style.transform = 'translateY(-50%)';
                } else if (skillType === 'mobile') {
                    badge.style.top = '50%';
                    badge.style.right = '-' + (wrapperWidth * 0.3) + 'px';
                    badge.style.transform = 'translateY(-50%)';
                }
            } else {
                // Desktop
                badge.style.display = '';
                badge.style.transform = '';
                if (skillType === 'ui') {
                    badge.style.top = '-50px';
                    badge.style.left = '50%';
                    badge.style.transform = 'translateX(-50%)';
                } else if (skillType === 'web') {
                    badge.style.top = '50%';
                    badge.style.left = '-' + (wrapperWidth * 0.25) + 'px';
                    badge.style.transform = 'translateY(-50%)';
                } else if (skillType === 'mobile') {
                    badge.style.top = '50%';
                    badge.style.right = '-' + (wrapperWidth * 0.25) + 'px';
                    badge.style.transform = 'translateY(-50%)';
                }
            }
        });
    }

    repositionSkillBadges();
    window.addEventListener('resize', repositionSkillBadges);
}

function createScanLines() {
    const photoContent = document.querySelector('.photo-content');
    if (!photoContent) return;

    const scanLine = document.createElement('div');
    scanLine.className = 'holographic-scan';
    photoContent.appendChild(scanLine);

    function animateScanLine() {
        scanLine.style.top = '0';
        scanLine.style.opacity = '0.3';
        scanLine.style.transition = 'top 3s linear, opacity 0.5s ease';

        setTimeout(() => {
            scanLine.style.top = '100%';
            scanLine.style.opacity = '0';
        }, 100);

        setTimeout(animateScanLine, 4000);
    }

    setTimeout(animateScanLine, 2000);
}

function createFloatingParticles() {
    const photoWrapper = document.getElementById('photoWrapper');
    if (!photoWrapper) return;

    const particlesContainer = document.createElement('div');
    particlesContainer.className = 'hero-photo-particles';
    particlesContainer.style.cssText = `
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 1;
    `;
    photoWrapper.appendChild(particlesContainer);

    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'photo-particle';
        const size = 2 + Math.random() * 4;
        const startX = Math.random() * 100;
        const startY = Math.random() * 100;

        particle.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            background: var(--primary);
            border-radius: 50%;
            left: ${startX}%;
            top: ${startY}%;
            opacity: 0;
            box-shadow: 0 0 ${size * 2}px var(--primary);
        `;

        particlesContainer.appendChild(particle);

        // Animate each particle
        animateParticle(particle, startX, startY);
    }
}

function animateParticle(particle, startX, startY) {
    const duration = 3000 + Math.random() * 3000;
    const delay = Math.random() * 2000;

    function animate() {
        setTimeout(() => {
            particle.style.transition = `all ${duration}ms ease-in-out`;
            particle.style.opacity = '0.6';
            particle.style.left = `${startX + (Math.random() - 0.5) * 30}%`;
            particle.style.top = `${startY - Math.random() * 30}%`;
            particle.style.opacity = '0';

            setTimeout(animate, duration);
        }, delay);
    }

    animate();
}

// Add CSS for glitch effect
const glitchCSS = document.createElement('style');
glitchCSS.textContent = `
    @keyframes photoFloat {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-8px) rotate(0.5deg); }
        75% { transform: translateY(-4px) rotate(-0.5deg); }
    }

    @keyframes glitchClip1 {
        0% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        100% { transform: translateX(0); }
    }

    @keyframes glitchClip2 {
        0% { transform: translateX(5px); }
        50% { transform: translateX(-5px); }
        100% { transform: translateX(0); }
    }

    .holographic-scan {
        position: absolute;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, transparent, rgba(255, 107, 53, 0.5), transparent);
        z-index: 10;
        pointer-events: none;
    }

    .photo-particle {
        pointer-events: none;
    }

    .photo-main {
        transition: transform 0.1s ease-out;
    }

    .frame-glow-border {
        animation: borderGlowPulse 2s ease-in-out infinite;
    }

    @keyframes borderGlowPulse {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 1; }
    }
`;
document.head.appendChild(glitchCSS);

// Initialize hero photo effects
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(initHeroPhotoEffects, 500);
});

// ===== Profile Glitch Effect =====
function initProfileGlitch() {
    const profileGlitch = document.getElementById('profileGlitch');
    const profilePhoto = document.getElementById('profilePhoto');

    if (!profileGlitch || !profilePhoto) return;

    // Random glitch effect
    setInterval(() => {
        if (Math.random() > 0.95) {
            profileGlitch.classList.add('active');
            setTimeout(() => {
                profileGlitch.classList.remove('active');
            }, 300);
        }
    }, 1000);

    // Glitch on mouse near profile
    profilePhoto.addEventListener('mouseenter', () => {
        profileGlitch.classList.add('active');
        setTimeout(() => {
            profileGlitch.classList.remove('active');
        }, 300);
    });
}

// ===== Add reveal styles dynamically =====
const revealStyle = document.createElement('style');
revealStyle.textContent = `
    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Mobile menu overlay */
    .nav-links.active::before {
        content: '';
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }
`;
document.head.appendChild(revealStyle);

// ===== Enhanced Skills Cards Animation =====
function initEnhancedSkills() {
    const skillsGridSection = document.querySelector('.skills-grid-section');
    if (!skillsGridSection) return;

    const skillCards = skillsGridSection.querySelectorAll('.skill-card');

    // Progress Ring Animation
    function animateProgressRing(card) {
        const ringFill = card.querySelector('.progress-ring-fill');
        const ringValue = card.querySelector('.progress-ring-value');
        if (!ringFill || !ringValue) return;

        const percent = parseInt(ringFill.dataset.percent) || 0;
        const circumference = 2 * Math.PI * 26; // r=26
        ringFill.style.strokeDasharray = circumference;
        ringFill.style.strokeDashoffset = circumference;

        setTimeout(() => {
            ringFill.style.strokeDashoffset = circumference - (percent / 100) * circumference;

            // Animate percentage counter
            let current = 0;
            const target = percent;
            const increment = target / 60;
            const interval = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(interval);
                }
                ringValue.textContent = Math.floor(current) + '%';
            }, 25);
        }, 500);
    }

    // Card Intersection Observer
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };

    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                const card = entry.target;
                setTimeout(() => {
                    card.classList.add('card-visible', 'card-animated');
                    animateProgressRing(card);

                    // Stagger icon animation
                    const icon = card.querySelector('.skill-card-icon');
                    if (icon) {
                        setTimeout(() => icon.classList.add('icon-animated'), 1000);
                    }

                    // Stagger tags
                    const tags = card.querySelectorAll('.skill-tag');
                    tags.forEach((tag, i) => {
                        setTimeout(() => tag.classList.add('tag-visible'), 800 + (i * 100));
                    });
                }, index * 150);

                cardObserver.unobserve(card);
            }
        });
    }, observerOptions);

    skillCards.forEach(card => cardObserver.observe(card));

    // Mouse move tilt effect with background following cursor
    skillCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            card.style.setProperty('--x', x + '%');
            card.style.setProperty('--y', y + '%');

            // Subtle 3D tilt
            const rotateY = ((e.clientX - rect.left - rect.width / 2) / rect.width) * 10;
            const rotateX = ((e.clientY - rect.top - rect.height / 2) / rect.height) * -10;
            card.style.setProperty('--rotateX', rotateX + 'deg');
            card.style.setProperty('--rotateY', rotateY + 'deg');
        });

        card.addEventListener('mouseleave', () => {
            card.style.setProperty('--rotateX', '0deg');
            card.style.setProperty('--rotateY', '0deg');
        });

        // Click flip effect
        card.addEventListener('click', (e) => {
            if (card.classList.contains('card-flipped')) {
                card.classList.remove('card-flipped');
            } else {
                // Remove flipped from other cards
                skillCards.forEach(c => {
                    if (c !== card) c.classList.remove('card-flipped');
                });
                card.classList.add('card-flipped');

                // Add ripple effect
                const ripple = document.createElement('div');
                ripple.className = 'card-ripple';
                const rect = card.getBoundingClientRect();
                ripple.style.left = (e.clientX - rect.left) + 'px';
                ripple.style.top = (e.clientY - rect.top) + 'px';
                ripple.style.width = ripple.style.height = '50px';
                card.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            }
        });
    });

    // Create floating particles in the grid section
    function createGridParticle() {
        if (!skillsGridSection) return;

        const particle = document.createElement('div');
        particle.className = 'grid-particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 6 + 's';
        particle.style.animationDuration = (4 + Math.random() * 4) + 's';

        skillsGridSection.appendChild(particle);

        setTimeout(() => particle.remove(), 10000);
    }

    // Create particles periodically
    setInterval(createGridParticle, 2000);
    for (let i = 0; i < 5; i++) {
        setTimeout(createGridParticle, i * 400);
    }
}

// ===== Enhanced Project Cards Animation =====
function initProjectDeviceAnimation() {
    // Check if already initialized
    if (window.projectCardsInitialized) return;
    window.projectCardsInitialized = true;

    const projectCards = document.querySelectorAll('.project-card[data-type]');

    projectCards.forEach((card, index) => {
        // Add staggered animation delay
        card.style.animationDelay = `${index * 100}ms`;

        // Immediately add card-revealed class to show cards
        setTimeout(() => {
            card.classList.add('card-revealed');
        }, index * 150);

        // Trigger particle creation
        createProjectParticles(card);

        // Add glitch effect periodically
        startGlitchEffect(card);

        // Enhanced 3D tilt effect for device frames
        const deviceFrame = card.querySelector('.device-frame');
        if (deviceFrame) {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;

                const rotateY = x * 20;
                const rotateX = -y * 20;

                if (card.dataset.type === 'mobile') {
                    deviceFrame.style.transform = `perspective(500px) rotateY(${rotateY}deg) rotateX(${rotateX}deg) scale(1.08)`;
                } else {
                    deviceFrame.style.transform = `perspective(1000px) rotateY(${rotateY * 0.7}deg) rotateX(${rotateX * 0.5}deg)`;
                }

                // Move glow effect following cursor
                const glow = card.querySelector('.project-glow');
                if (glow) {
                    glow.style.left = `${e.clientX - rect.left}px`;
                    glow.style.top = `${e.clientY - rect.top}px`;
                }
            });

            card.addEventListener('mouseleave', () => {
                deviceFrame.style.transform = '';
            });
        }
    });

    // Dynamic typing effect for browser URLs with better timing
    const browserUrls = document.querySelectorAll('.browser-url');
    browserUrls.forEach((url, index) => {
        const originalText = url.textContent;
        url.textContent = '';

        // Start typing effect with delay
        setTimeout(() => {
            typeUrl(url, originalText);
        }, index * 300 + 1000);
    });

    // Add click ripple effect
    projectCards.forEach(card => {
        card.addEventListener('click', (e) => {
            const ripple = document.createElement('div');
            ripple.className = 'click-ripple';
            ripple.style.cssText = `
                position: absolute;
                left: ${e.offsetX}px;
                top: ${e.offsetY}px;
                width: 20px;
                height: 20px;
                background: rgba(255, 107, 53, 0.4);
                border-radius: 50%;
                transform: scale(0);
                animation: clickRipple 0.6s ease-out forwards;
                pointer-events: none;
                z-index: 100;
            `;
            card.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    });
}

// Create floating particles around project
function createProjectParticles(card) {
    const particlesContainer = card.querySelector('.project-particles');
    if (!particlesContainer) return;

    // Clear existing particles
    particlesContainer.innerHTML = '';

    const isMobile = card.dataset.type === 'mobile';
    const particleCount = isMobile ? 8 : 12;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'p-particle';

        const startX = Math.random() * 100;
        const startY = Math.random() * 100;
        const endX = startX + (Math.random() - 0.5) * 50;
        const endY = startY - Math.random() * 30 - 20;
        const duration = 3 + Math.random() * 2;
        const delay = Math.random() * 3;
        const size = 2 + Math.random() * 4;

        particle.style.cssText = `
            left: ${startX}%;
            top: ${startY}%;
            width: ${size}px;
            height: ${size}px;
            opacity: 0;
        `;

        particlesContainer.appendChild(particle);

        // Animate particle
        setTimeout(() => {
            particle.style.transition = `all ${duration}s ease-out`;
            particle.style.opacity = Math.random() > 0.5 ? '0.8' : '0.4';
            particle.style.left = `${endX}%`;
            particle.style.top = `${endY}%`;
            particle.style.opacity = '0';

            // Continuous particle animation
            setInterval(() => {
                particle.style.transition = 'none';
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                particle.style.opacity = '0';

                setTimeout(() => {
                    particle.style.transition = `all ${duration}s ease-out`;
                    particle.style.opacity = Math.random() > 0.5 ? '0.6' : '0.3';
                    particle.style.left = `${Math.random() * 100}%`;
                    particle.style.top = `${Math.random() * 30}%`;
                    particle.style.opacity = '0';
                }, 50);
            }, duration * 1000);
        }, delay * 1000);
    }
}

// Glitch effect for project cards
function startGlitchEffect(card) {
    const deviceFrame = card.querySelector('.device-frame');
    if (!deviceFrame) return;

    setInterval(() => {
        if (Math.random() > 0.95) {
            deviceFrame.style.transform += ' translateX(3px)';
            setTimeout(() => {
                deviceFrame.style.transform = deviceFrame.style.transform.replace(' translateX(3px)', '');
            }, 50);
        }
    }, 2000);
}

// Typing effect for URLs
function typeUrl(element, text) {
    let i = 0;
    const interval = setInterval(() => {
        if (i < text.length) {
            element.textContent += text[i];
            i++;
        } else {
            clearInterval(interval);
        }
    }, 40);
}

// Add CSS for click ripple animation
const rippleStyle = document.createElement('style');
rippleStyle.textContent = `
    @keyframes clickRipple {
        to {
            transform: scale(15);
            opacity: 0;
        }
    }
`;
document.head.appendChild(rippleStyle);

// ===== Glitch Card Effects for About Section =====
function initGlitchCardEffects() {
    const glitchCards = document.querySelectorAll('.glitch-card');

    glitchCards.forEach((card, index) => {
        // Random glitch on hover
        card.addEventListener('mouseenter', () => {
            triggerCardGlitch(card);
        });

        // Parallax effect on mousemove
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;

            const icon = card.querySelector('.glitch-icon');
            const header = card.querySelector('.card-header h3');
            const text = card.querySelector('.glitch-text');

            if (icon) {
                icon.style.transform = `translate(${x * 3}px, ${y * 3}px)`;
            }
            if (header) {
                header.style.transform = `translate(${x * 2}px, ${y * 2}px)`;
            }
            if (text) {
                text.style.transform = `translate(${x * 1}px, ${y * 1}px)`;
            }
        });

        card.addEventListener('mouseleave', () => {
            const icon = card.querySelector('.glitch-icon');
            const header = card.querySelector('.card-header h3');
            const text = card.querySelector('.glitch-text');

            if (icon) icon.style.transform = '';
            if (header) header.style.transform = '';
            if (text) text.style.transform = '';
        });
    });

    function triggerCardGlitch(card) {
        const icon = card.querySelector('.glitch-icon');
        const text = card.querySelector('.glitch-text');

        if (icon) {
            icon.style.filter = 'hue-rotate(90deg)';
            setTimeout(() => {
                icon.style.filter = '';
            }, 100);
        }

        if (text) {
            text.style.textShadow = '2px 0 #ff0000, -2px 0 #00ffff';
            setTimeout(() => {
                text.style.textShadow = '';
            }, 150);
        }
    }

    // Random glitch for cards
    function randomGlitch() {
        const cards = document.querySelectorAll('.glitch-card');
        const randomCard = cards[Math.floor(Math.random() * cards.length)];
        if (randomCard && document.visibilityState === 'visible') {
            triggerCardGlitch(randomCard);
        }
        setTimeout(randomGlitch, 3000 + Math.random() * 4000);
    }

    // Start random glitches
    setTimeout(randomGlitch, 5000);
}

// Initialize glitch cards
initGlitchCardEffects();

// ===== Internship Section Effects =====
function initInternshipEffects() {
    // Company logo animation
    const companyLogo = document.getElementById('companyLogo');
    if (companyLogo) {
        // Add hover particle effect
        companyLogo.addEventListener('mousemove', (e) => {
            const rect = companyLogo.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const glow = companyLogo.querySelector('.logo-glow');
            if (glow) {
                glow.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(255, 107, 53, 0.5) 0%, transparent 70%)`;
            }
        });

        companyLogo.addEventListener('mouseleave', () => {
            const glow = companyLogo.querySelector('.logo-glow');
            if (glow) {
                glow.style.background = '';
            }
        });
    }

    // Project cards hover effect
    const projectCards = document.querySelectorAll('.internship-project-card');
    projectCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.2}s`;

        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = '0 20px 40px rgba(255, 107, 53, 0.15)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = '';
        });
    });

    // Documentation photos hover effect
    const docPhotos = document.querySelectorAll('.doc-photo-wrapper');
    docPhotos.forEach((photo, index) => {
        photo.style.animationDelay = `${index * 0.1}s`;

        // Add ripple effect on click
        photo.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            ripple.style.cssText = `
                position: absolute;
                width: 20px;
                height: 20px;
                background: rgba(255, 107, 53, 0.3);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                left: ${e.offsetX}px;
                top: ${e.offsetY}px;
                animation: photoRipple 0.6s ease-out forwards;
            `;
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    });

    // Stats counter animation
    const internStats = document.querySelectorAll('.internship-stats .stat-value');
    const observerIntern = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.textContent);
                let current = 0;
                const step = target / 30;
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        el.textContent = target;
                        clearInterval(timer);
                    } else {
                        el.textContent = Math.floor(current);
                    }
                }, 50);
                observerIntern.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    internStats.forEach(stat => observerIntern.observe(stat));

    // Add floating animation to company logo
    const companyLogoWrapper = document.querySelector('.company-logo-wrapper');
    if (companyLogoWrapper) {
        companyLogoWrapper.style.animation = 'companyLogoFloat 4s ease-in-out infinite';
    }

    // Light sweep effect on project cards
    projectCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            card.style.background = `linear-gradient(${x}px, rgba(255, 107, 53, 0.05) 0%, transparent 50%)`;
        });
    });
}

// ===== Certification Section Effects =====
function initCertificationEffects() {
    const certCards = document.querySelectorAll('.certification-card');

    certCards.forEach((card, index) => {
        // Staggered animation on scroll
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';

        setTimeout(() => {
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 200);

        // Hover parallax effect
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;

            card.style.transform = `perspective(1000px) rotateY(${x * 10}deg) rotateX(${-y * 10}deg) translateY(-10px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });

        // Click ripple effect
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            const rect = this.getBoundingClientRect();
            ripple.style.cssText = `
                position: absolute;
                width: 20px;
                height: 20px;
                background: rgba(255, 107, 53, 0.4);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                left: ${e.clientX - rect.left}px;
                top: ${e.clientY - rect.top}px;
                animation: certRipple 0.6s ease-out forwards;
                pointer-events: none;
            `;
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });

        // Random glow pulse for verified certificates
        if (card.querySelector('.cert-status.verified')) {
            setInterval(() => {
                if (Math.random() > 0.8) {
                    card.style.boxShadow = '0 0 40px rgba(255, 107, 53, 0.4)';
                    setTimeout(() => {
                        card.style.boxShadow = '';
                    }, 300);
                }
            }, 3000);
        }
    });

    // Scroll reveal animation
    const certObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('cert-visible');
            }
        });
    }, { threshold: 0.2 });

    certCards.forEach(card => certObserver.observe(card));
}

// Add certification animation CSS
const certStyle = document.createElement('style');
certStyle.textContent = `
    @keyframes certRipple {
        to {
            transform: translate(-50%, -50%) scale(20);
            opacity: 0;
        }
    }
    .certification-card {
        will-change: transform;
    }
`;
document.head.appendChild(certStyle);

// Add photo ripple animation CSS
const photoRippleStyle = document.createElement('style');
photoRippleStyle.textContent = `
    @keyframes photoRipple {
        to {
            transform: translate(-50%, -50%) scale(15);
            opacity: 0;
        }
    }
    @keyframes companyLogoFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
`;
document.head.appendChild(photoRippleStyle);

// ===== About Section Typing Effect =====
function initAboutEffects() {
    const aboutText = document.getElementById('aboutMainText');
    const cursor = document.querySelector('.about-typing-cursor');
    const highlights = document.querySelectorAll('.highlight-item');

    if (!aboutText) return;

    const text = "I am an Informatics Engineering student at Serang Raya University with a strong passion for technology and digital innovation. I enjoy building modern web and mobile applications, as well as crafting intuitive and engaging UI/UX designs. With a versatile skill set, I strive to grow as a full-stack developer who delivers impactful and user-centered solutions.";

    let charIndex = 0;
    const typingSpeed = 25;

    function typeText() {
        if (charIndex < text.length) {
            aboutText.textContent += text.charAt(charIndex);
            charIndex++;
            setTimeout(typeText, typingSpeed);
        }
    }

    // Start typing effect when about section is visible
    const aboutObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && aboutText.textContent === '') {
                setTimeout(typeText, 500);
                aboutObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    aboutObserver.observe(aboutText);

    // Animate highlights with stagger
    const highlightObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                highlights.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    }, index * 200);
                });
                highlightObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    if (highlights.length > 0) {
        highlightObserver.observe(highlights[0].parentElement);
    }

    // Add hover glow effect to highlights
    highlights.forEach((item, index) => {
        item.addEventListener('mouseenter', () => {
            const icon = item.querySelector('.highlight-icon');
            icon.style.background = 'linear-gradient(135deg, var(--primary), var(--accent))';
            icon.style.color = '#fff';
        });

        item.addEventListener('mouseleave', () => {
            const icon = item.querySelector('.highlight-icon');
            icon.style.background = '';
            icon.style.color = '';
        });
    });

    // Scroll animation for text wrapper
    const textWrapper = document.querySelector('.about-text-wrapper');
    const wrapperObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    entry.target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);
                wrapperObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    if (textWrapper) {
        wrapperObserver.observe(textWrapper);
    }
}

// ===== Modern Project Cards JS Effects =====
function initModernProjectCards() {
    const projectCards = document.querySelectorAll('.project-card-modern');

    projectCards.forEach((card, index) => {
        // Initial state
        card.style.opacity = '0';
        card.style.transform = 'translateY(40px)';

        // Staggered entrance animation
        setTimeout(() => {
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 150);

        // 3D tilt effect on hover
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;

            card.style.transform = `perspective(1000px) rotateY(${x * 8}deg) rotateX(${-y * 8}deg) translateY(-8px)`;

            // Move glow effect with cursor
            const glow = card.querySelector('.project-card-glow');
            if (glow) {
                glow.style.background = `radial-gradient(ellipse at ${e.clientX - rect.left}px ${e.clientY - rect.top}px, rgba(255, 107, 53, 0.25) 0%, transparent 70%)`;
            }
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
            const glow = card.querySelector('.project-card-glow');
            if (glow) {
                glow.style.background = '';
            }
        });

        // Ripple effect on click
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            const rect = this.getBoundingClientRect();
            ripple.style.cssText = `
                position: absolute;
                width: 20px;
                height: 20px;
                background: rgba(255, 107, 53, 0.3);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                left: ${e.clientX - rect.left}px;
                top: ${e.clientY - rect.top}px;
                animation: modernRipple 0.6s ease-out forwards;
                pointer-events: none;
                z-index: 20;
            `;
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });

        // Parallax effect on device frame
        const deviceFrame = card.querySelector('.device-frame-modern');
        if (deviceFrame) {
            const imageSection = card.querySelector('.project-image');
            if (imageSection) {
                imageSection.addEventListener('mousemove', (e) => {
                    const rect = imageSection.getBoundingClientRect();
                    const x = (e.clientX - rect.left - rect.width / 2) / rect.width;
                    const y = (e.clientY - rect.top - rect.height / 2) / rect.height;

                    deviceFrame.style.transform = `perspective(500px) rotateY(${x * 10}deg) rotateX(${-y * 5}deg) translateZ(10px)`;
                });

                imageSection.addEventListener('mouseleave', () => {
                    deviceFrame.style.transform = '';
                });
            }
        }
    });

    // Random glow pulse animation
    setInterval(() => {
        const randomCard = projectCards[Math.floor(Math.random() * projectCards.length)];
        if (randomCard && document.visibilityState === 'visible') {
            const glow = randomCard.querySelector('.project-card-glow');
            if (glow) {
                glow.style.opacity = '0.8';
                setTimeout(() => {
                    glow.style.opacity = '';
                }, 400);
            }
        }
    }, 4000);

    // Tech tags hover effect
    projectCards.forEach(card => {
        const techTags = card.querySelectorAll('.project-tech-modern span');
        techTags.forEach(tag => {
            tag.addEventListener('mouseenter', () => {
                tag.style.transform = 'scale(1.1)';
                tag.style.boxShadow = '0 0 15px rgba(255, 107, 53, 0.3)';
            });
            tag.addEventListener('mouseleave', () => {
                tag.style.transform = '';
                tag.style.boxShadow = '';
            });
        });
    });
}

// Add modern ripple animation CSS
const modernRippleStyle = document.createElement('style');
modernRippleStyle.textContent = `
    @keyframes modernRipple {
        to {
            transform: translate(-50%, -50%) scale(20);
            opacity: 0;
        }
    }
    .project-card-modern {
        will-change: transform;
    }
`;
document.head.appendChild(modernRippleStyle);
