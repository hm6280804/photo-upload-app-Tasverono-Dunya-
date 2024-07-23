<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

        body {
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .header, .footer {
            padding: 15px 0;
            transition: background-color 1s, background-image 1s;
        }

        .header {
            height: 100px; /* Adjust height as needed */
        }


        .main-content {
            flex: 1;
            padding-top: 120px; /* Adjust to avoid overlap with header */
            padding-bottom: 80px; /* Adjust to avoid overlap with footer */
        }

        .header .logo {
            max-height: 50px;
        }

        .header .animated-text {
            font-family: 'Dancing Script', cursive;
            font-size: 48px; /* Increased size */
            color: #FF6F61;
            animation: colorChange 5s infinite, fadeIn 3s infinite;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }

        @keyframes colorChange {
            0% { color: #FF6F61; }
            25% { color: #6B5B95; }
            50% { color: #88B04B; }
            75% { color: #F7CAC9; }
            100% { color: #FF6F61; }
        }

         .home-icon {
            margin-left: 20px;
            font-size: 24px;
            color: #FF6F61;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .home-icon:hover {
            transform: scale(1.1);
        }

        .footer {
            position: fixed;
            width: 100%;
            bottom: 0;
            background-color: #fff;
            border-top: 1px solid #ddd;
        }

        .footer .contact-info {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            color: #f1e9e9;
        }

        .footer .contact-info i {
            color: #73f913;
            margin-right: 5px;
        }

        .footer .contact-info a {
            color: #fbefee;
            text-decoration: none;
        }

        .footer .contact-info a:hover {
            text-decoration: underline;
        }

        @yield('style')

    </style>
</head>
<body>

<header class="header d-flex justify-content-between align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo">
        <div class="animated-text">tasverono dunya</div>
        <a href="{{ route('pic.home') }}" class="home-icon text-white"><i class="fas fa-home"></i>Home</a>
    </div>
</header>

<div class="main-content">
    @yield('main')
</div>

<footer class="footer text-center mt-4">
    <div class="container">
        <div class="col-md-12">
            &copy; 2024 Image Upload Website. All rights reserved.
        </div>
        <div class="contact-info col-md-12">
            <div>
                <i class="fas fa-user"></i> Muhammad Hanif
            </div>
            <div>
                <i class="fas fa-phone"></i> +923433087542
            </div>
            <div>
                <i class="fas fa-envelope"></i> <a href="mailto:hm6280804@gmail.com">hm6280804@gmail.com</a>
            </div>
            <div>
                <i class="fas fa-briefcase"></i> PHP Laravel Developer
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const gradients = [
        'linear-gradient(to right, #ff7e5f, #feb47b)',
        'linear-gradient(to right, #ff9966, #ff5e62)',
        'linear-gradient(to right, #00c6ff, #0072ff)',
        'linear-gradient(to right, #f7971e, #ffd200)'
    ];
    let currentGradientIndex = 0;

    function changeBackgroundGradient() {
        currentGradientIndex = (currentGradientIndex + 1) % gradients.length;
        document.querySelector('.header').style.backgroundImage = gradients[currentGradientIndex];
        document.querySelector('.footer').style.backgroundImage = gradients[currentGradientIndex];
    }

    setInterval(changeBackgroundGradient, 5000);
    // Set initial gradient
    document.querySelector('.header').style.backgroundImage = gradients[currentGradientIndex];
    document.querySelector('.footer').style.backgroundImage = gradients[currentGradientIndex];
</script>
</body>
</html> 



