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
    <!-- Loading Screen -->
    <div class="loader" id="loader">
        <div class="loader-content">
            <div class="loader-hex">
                <div class="hex-spin"></div>
            </div>
            <div class="loader-bar">
                <div class="loader-progress" id="loaderProgress"></div>
            </div>
            <span class="loader-text" id="loaderText">Loading...</span>
        </div>
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