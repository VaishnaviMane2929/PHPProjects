<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biz Visiting Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f2f2f2;
            text-align: center;
        }

        .card {
            max-width: 400px;
            margin: 30px auto;
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .logo {
            width: 120px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            margin: 10px 0;
            color: #333;
        }

        .contact, .address {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
        }

        .connect-text {
            color: #888;
            font-size: 13px;
            margin: 20px 0 10px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-icons a {
            text-decoration: none;
            color: white;
            padding: 14px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .fa-phone { background-color: #007bff; }
        .fa-whatsapp { background-color: #25d366; }
        .fa-comment-dots { background-color: #a4c639; }
        .fa-map-marker-alt { background-color: #f44336; }
        .fa-facebook-f { background-color: #3b5998; }
        .fa-instagram { background-color: #e4405f; }
        .fa-envelope { background-color: #ff5722; }
        .fa-globe { background-color: #0077b5; }
        .fa-share-alt { background-color: #333333; }

        .about {
            text-align: left;
            padding: 0 20px;
        }

        .about h3 {
            font-size: 17px;
            margin-bottom: 10px;
            color: #444;
        }

        .about ul {
            list-style: none;
            padding: 0;
        }

        .about ul li {
            font-size: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            color: #222;
        }

        .about ul li::before {
            content: '✔️';
            color: green;
            margin-right: 10px;
            font-size: 16px;
        }

        .bottom-bar {
            height: 8px;
            background: linear-gradient(to right, #1a73e8, #ea4335, #fbbc05, #34a853);
            margin-top: 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="card">
        <img src="https://i.pinimg.com/736x/95/81/65/958165e044f80ef639441b5ae5a118d0.jpg" alt="Biz Visiting Cards Logo" class="logo" />

        <h1>Biz Visiting Card</h1>
        <div class="contact">📞 918483831050</div>
        <div class="address">
            3PRF+JHC, Nagar-Kalyan Rd, Adarsh Nagar,<br>
            Samata Nagar, Ahmednagar, Maharashtra 414001
        </div>

        <p class="connect-text">Click any icon to connect with us</p>

        <div class="social-icons">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fas fa-comment-dots"></i></a>
            <a href="#"><i class="fas fa-map-marker-alt"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fas fa-globe"></i></a>
            <a href="#"><i class="fas fa-share-alt"></i></a>
        </div>

        <div class="about">
            <h3>About Us</h3>
            <ul>
                <li><strong>Digital Business Card</strong></li>
                <li><strong>Android App Development</strong></li>
                <li><strong>Website Development</strong></li>
                <li><strong>Digital Marketing</strong></li>
            </ul>
        </div>
    </div>

    <div class="bottom-bar"></div>

</body>
</html>
