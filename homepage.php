<!DOCTYPE html>
<html>
<head>
    <title>Student Polling & Survey System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: background 0.3s ease, color 0.3s ease;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background: #3c5861;
            color: white;
        }

        .navbar a {
            color: white;
            margin-left: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .logo-title{
            display:flex;
            align-items:center;
        }

        .logo{
            width:65px;
            height:65px;
            margin-right:12px;
            object-fit: contain;
        }

        .theme-btn {
            margin-left: 15px;
            padding: 8px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        /* UPDATED HERO */
        .hero {
            position: relative;
            text-align: center;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column; /* IMPORTANT */
            justify-content: center;
            align-items: center;
            background: url("download.jpg") no-repeat center center;
            background-size: cover;
            overflow: hidden; /* IMPORTANT */
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 0;
        }

        .hero-content,
        .about,
        .features {
            position: relative;
            z-index: 1;
        }

        /* REDUCED SIZE */
        .hero h2 {
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .primary-btn {
            padding: 12px 25px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .primary-btn:hover {
            background: #218838;
        }

        /* NOW INSIDE HERO VISUALLY */
        .about {
            padding: 15px 10px;
            text-align: center;
            background: transparent;
            color: white;
        }

        .features {
            display: flex;
            align-items: space-between;
            justify-content: center;
            padding: 15px ;
            text-align: center;
            flex-wrap: wrap;
            background:#3c5861;
            color: white;
        }

        .features h2 {
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
        }

        /* COMPACT BOX */
        .feature-box {
            flex: 1;
            background: rgba(0,0,0,0.5);
            padding: 20px;
            margin: 20px;
            width: 400px;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #222;
            color: white;
        }

        @media(max-width:768px){
            .feature-box { width: 0%; }
            .hero h2 { font-size: 2rem; }
            .hero p { font-size: 1rem; }
        }

        body.dark {
            background: #121212;
            color: white;
        }

        body.dark .navbar {
            background: #1f2c30;
        }

        body.dark footer {
            background: #111;
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="logo-title">
        <img src="assets/images/adbu_app_logo_512x512.png" class="logo">
        <h1>Student Polling System</h1>
    </div>
    <div>
        <a href="login.php">Login</a>
        <a href="registration.php">Register</a>
        <a href="contact.php">Contact</a>
        <button onclick="toggleTheme()" class="theme-btn">🌙</button>
    </div>
</nav>

<section class="hero">
    <div class="hero-content">
        <h2>Welcome to the Student Polling & Survey Platform</h2>
        <p>Participate in academic and campus-related polls easily and securely.</p>
        <a href="registration.php">
            <button class="primary-btn">Get Started</button>
        </a>
    </div>

    <!-- ABOUT INSIDE HERO VIEW -->
    <section class="about">
        <h2>About the System</h2>
        <p>
            This platform allows students to participate in polls related to academics,
            extracurricular activities, and campus decisions.
        </p>
    </section>

    <!-- FEATURES INSIDE HERO VIEW -->
    <section class="features">
        <h2>Key Features</h2>
        <div class="feature-box">
            <h3>🔐 Secure Login</h3>
            <p>Session-based authentication system.</p>
        </div>
        <div class="feature-box">
            <h3>📊 Live Results</h3>
            <p>View poll results instantly after voting.</p>
        </div>
        <div class="feature-box">
            <h3>📱 Responsive Design</h3>
            <p>Works smoothly on mobile and desktop devices.</p>
        </div>
        <div class="feature-box">
            <h3>🌙 Dark/Light Mode</h3>
            <p>Switch between themes easily.</p>
        </div>
    </section>
</section>

<footer>
    <p>© 2026 Student Polling System | MCA Project</p>
</footer>

<script>
function toggleTheme() {
    document.body.classList.toggle("dark");
    const btn = document.querySelector(".theme-btn");

    if (document.body.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
        btn.textContent = "☀️";
    } else {
        localStorage.setItem("theme", "light");
        btn.textContent = "🌙";
    }
}

window.onload = function() {
    const savedTheme = localStorage.getItem("theme");
    const btn = document.querySelector(".theme-btn");

    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        btn.textContent = "☀️";
    }
}
</script>

</body>
</html>