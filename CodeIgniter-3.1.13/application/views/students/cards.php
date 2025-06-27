<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BigOsoftwares</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #1c1c1c;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        .card {
            background-color: #2d2d2d;
            padding: 25px;
            border-radius: 15px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        h1 {
            font-size: 24px;
            margin: 0;
        }

        .orange {
            color: orange;
        }

        .highlight {
            color: white;
        }

        .tagline {
            font-size: 12px;
            color: #aaa;
            margin-bottom: 10px;
        }

        h2 {
            margin-top: 10px;
            font-size: 18px;
        }

        .buttons button,
        .share-btn {
            background-color: black;
            color: white;
            border: none;
            padding: 8px 14px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .icons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .icons div {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
        }

        .icons i {
            background-color: black;
            padding: 10px;
            border-radius: 50%;
            font-size: 16px;
            margin-bottom: 5px;
        }

        @media(max-width: 500px) {
            .icons {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><span class="highlight">Big</span><span class="orange">O</span><span class="highlight">softwares</span></h1>
        <p class="tagline">We build future..!</p>
        <h2>BigOsoftwares Pvt. Ltd.</h2>

        <div class="buttons">
            <button>📁 Portfolio</button>
            <button>ℹ️ About Us</button>
        </div>

        <button class="share-btn">🔗 Share</button>

        <div class="icons">
            <div><i class="fas fa-phone"></i><p>Mobile</p></div>
            <div><i class="fas fa-sms"></i><p>SMS</p></div>
            <div><i class="fab fa-telegram"></i><p>Telegram</p></div>
            <div><i class="fas fa-envelope"></i><p>Email</p></div>

            <div><i class="fab fa-whatsapp"></i><p>WhatsApp</p></div>
            <div><i class="fab fa-facebook"></i><p>Facebook</p></div>
            <div><i class="fab fa-instagram"></i><p>Instagram</p></div>
            <div><i class="fas fa-globe"></i><p>Website</p></div>

            <div><i class="fas fa-map-marker-alt"></i><p>Location</p></div>
            <div><i class="fab fa-google-pay"></i><p>Pay Online</p></div>
            <div><i class="fab fa-youtube"></i><p>YouTube</p></div>
            <div><i class="fas fa-file-pdf"></i><p>PDF Doc</p></div>
        </div>
    </div>
</body>
</html>
