<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Portfolio Sadam Alamsyah - UI/UX Designer & IT Consultant">
    <meta name="theme-color" content="#0a0a0f">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>@yield('title', 'Sadam Alamsyah | Portfolio')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- ===== WELCOME SCREEN ===== -->
    <div class="welcome-overlay" id="welcomeOverlay">
        <!-- Background Particles Canvas -->
        <canvas id="welcomeParticles"></canvas>
        
        <!-- Background Grid Lines -->
        <div class="welcome-bg-grid"></div>
        
        <!-- Corner Accents -->
        <div class="welcome-corners">
            <div class="welcome-corner corner-tl"></div>
            <div class="welcome-corner corner-tr"></div>
            <div class="welcome-corner corner-bl"></div>
            <div class="welcome-corner corner-br"></div>
        </div>

        <!-- Main Content -->
        <div class="welcome-content" id="welcomeContent">
            <!-- Glitch Name -->
            <div class="welcome-glitch-wrapper">
                <h1 class="welcome-name" data-text="SADAM ALAMSYAH">SADAM ALAMSYAH</h1>
                <div class="welcome-glitch-clone welcome-glitch-1" aria-hidden="true">SADAM ALAMSYAH</div>
                <div class="welcome-glitch-clone welcome-glitch-2" aria-hidden="true">SADAM ALAMSYAH</div>
            </div>
            
            <!-- Role Line -->
            <div class="welcome-role-wrapper">
                <span class="welcome-bracket"><</span>
                <span class="welcome-role" id="welcomeRole"></span>
                <span class="welcome-bracket">/></span>
            </div>
            
            <!-- Terminal Loader -->
            <div class="welcome-terminal">
                <div class="terminal-header">
                    <span class="terminal-dot dot-r"></span>
                    <span class="terminal-dot dot-y"></span>
                    <span class="terminal-dot dot-g"></span>
                    <span class="terminal-title">portfolio.exe</span>
                </div>
                <div class="terminal-body" id="terminalBody">
                    <div class="terminal-line"><span class="terminal-prompt">></span> <span>Initializing system...</span></div>
                    <div class="terminal-line" id="terminalLine2"><span class="terminal-prompt">></span> <span id="terminalMsg">Loading assets...</span></div>
                    <div class="terminal-line terminal-cursor-line" id="terminalCursorLine">
                        <span class="terminal-prompt">></span> <span class="terminal-cursor">_</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Rings -->
        <div class="welcome-rings">
            <div class="welcome-ring ring-a"></div>
            <div class="welcome-ring ring-b"></div>
            <div class="welcome-ring ring-c"></div>
        </div>

        <!-- Scan Line Overlay -->
        <div class="welcome-scanlines"></div>
    </div>

    <!-- Custom Cursor (Desktop Only) -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor-trail" id="cursorTrail"></div>

    <!-- Background Effects -->
    <div class="bg-grid"></div>
    <div class="bg-glow"></div>
    <canvas id="particles"></canvas>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-logo">
            <span class="logo-bracket">&lt;</span>
            <span class="logo-text">SA</span>
            <span class="logo-bracket">/&gt;</span>
        </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#home" class="nav-link active" data-section="home">Home</a></li>
            <li><a href="#about" class="nav-link" data-section="about">About</a></li>
            <li><a href="#experience" class="nav-link" data-section="experience">Experience</a></li>
            <li><a href="#internship" class="nav-link" data-section="internship">Internship</a></li>
            <li><a href="#certification" class="nav-link" data-section="certification">Certification</a></li>
            <li><a href="#skills" class="nav-link" data-section="skills">Skills</a></li>
            <li><a href="#projects" class="nav-link" data-section="projects">Projects</a></li>
            <li><a href="#contact" class="nav-link" data-section="contact">Contact</a></li>
        </ul>
        <div class="nav-toggle" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>Designed & Built by <span class="highlight">SADAM ALAMSYAH</span> &copy; {{ date('Y') }}</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" title="Kembali ke atas">
        <i class='bx bx-chevron-up'></i>
    </button>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <div class="toast-icon">
            <i class='bx bx-check'></i>
        </div>
        <span class="toast-message"></span>
    </div>

    <!-- Project Modal -->
    <div class="project-modal" id="projectModal">
        <div class="modal-overlay" id="modalOverlay"></div>
        <div class="modal-content">
            <button class="modal-close" id="modalClose">
                <i class='bx bx-x'></i>
            </button>
            <div class="modal-body" id="modalBody"></div>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>