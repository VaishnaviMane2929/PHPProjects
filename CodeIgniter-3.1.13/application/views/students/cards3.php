<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biz Visiting Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .card {
            max-width: 400px;
            margin: auto;
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .logo {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid orange;
            margin-bottom: 15px;
        }

        .action-top {
            display: flex;
            justify-content: space-around;
            margin: 15px 0;
        }

        .action-top div {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
            color: #555;
        }

        .action-top i {
            font-size: 18px;
            margin-bottom: 5px;
            color: #007bff;
        }

        h2 {
            margin: 10px 0 5px;
            font-size: 20px;
            color: #222;
        }

        .title {
            font-size: 14px;
            color: #666;
        }

        .save-contact {
            padding: 6px 14px;
            border: 1px solid #999;
            border-radius: 20px;
            font-size: 13px;
            background: none;
            margin-top: 8px;
            cursor: pointer;
        }

        .quick-links {
            margin-top: 15px;
        }

        .quick-links button {
            border: none;
            background: #eee;
            color: #333;
            padding: 8px 12px;
            margin: 5px;
            border-radius: 8px;
            font-size: 13px;
            cursor: pointer;
        }

        .info-buttons {
            margin-top: 10px;
        }

        .info-buttons button {
            border: none;
            background: #d89c00;
            color: #fff;
            padding: 10px 18px;
            margin: 5px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .social-row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .social-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
            margin: 10px;
        }

        .social-icon i {
            font-size: 20px;
            padding: 12px;
            border-radius: 50%;
            color: white;
            margin-bottom: 5px;
        }

        .youtube i { background: #FF0000; }
        .telegram i { background: #0088cc; }
        .portfolio i { background: #ff9800; }
        .payment i { background: #03a9f4; }
        .whatsapp i { background: #25d366; }
        .facebook i { background: #3b5998; }
        .instagram i { background: radial-gradient(circle at 30% 30%, #feda75, #d62976, #962fbf); }
    </style>
</head>
<body>

<div class="card">
    <img src="https://i.pinimg.com/736x/95/81/65/958165e044f80ef639441b5ae5a118d0.jpg" alt="Logo" class="logo">

    <div class="action-top">
        <div><i class="fas fa-share-alt"></i>Share Card</div>
        <div><i class="fas fa-phone-alt"></i>Call Now</div>
        <div><i class="fas fa-file-alt"></i>Business Brochure</div>
    </div>

    <h2>Biz Visiting Card</h2>
    <div class="title">CEO</div>
    <button class="save-contact"><i class="fas fa-address-book"></i> Save Contact</button>

    <div class="quick-links">
        <button><i class="fas fa-envelope"></i> Email</button>
        <button><i class="fas fa-globe"></i> Website</button>
        <button><i class="fas fa-map-marker-alt"></i> Direction</button>
    </div>

    <div class="info-buttons">
        <button>About Us</button>
        <button>Basic Info</button>
    </div>

    <div class="social-row">
        <div class="social-icon youtube">
            <i class="fab fa-youtube"></i>
            Youtube
        </div>
        <div class="social-icon telegram">
            <i class="fab fa-telegram-plane"></i>
            Telegram
        </div>
        <div class="social-icon portfolio">
            <i class="fas fa-briefcase"></i>
            Portfolio
        </div>
        <div class="social-icon payment">
            <i class="fas fa-credit-card"></i>
            Payment
        </div>
        <div class="social-icon whatsapp">
            <i class="fab fa-whatsapp"></i>
            WhatsApp
        </div>
        <div class="social-icon facebook">
            <i class="fab fa-facebook-f"></i>
            Facebook
        </div>
        <div class="social-icon instagram">
            <i class="fab fa-instagram"></i>
            Instagram
        </div>
    </div>
</div>

</body>
</html>
