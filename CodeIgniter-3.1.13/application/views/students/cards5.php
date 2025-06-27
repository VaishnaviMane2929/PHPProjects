<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Biz Visiting Card</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #000000;
      color: white;
      display: flex;
      justify-content: center;
      padding: 30px 10px;
    }

    .card-container {
      width: 100%;
      max-width: 400px;
      background-color: #1e1e1e;
      border-radius: 25px;
      padding: 20px;
      text-align: center;
      position: relative;
    }

    .logo {
      width: 100px;
      margin: 10px auto;
      display: block;
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid white;
      margin-top: -60px;
      background-color: black;
    }

    h1 {
      font-size: 22px;
      margin: 10px 0 5px;
    }

    .subtitle {
      font-size: 14px;
      color: #ccc;
      margin-bottom: 20px;
    }

    .icon-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
      margin: 20px 0;
    }

    .icon-box {
      background-color: #111;
      border-radius: 50%;
      width: 55px;
      height: 55px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
    }

    .icon-box i {
      color: white;
      font-size: 18px;
    }

    .icon-label {
      font-size: 12px;
      margin-top: 5px;
    }

    .icon-item {
      text-align: center;
    }

    .portfolio-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #176B64;
      color: white;
      text-decoration: none;
      font-size: 16px;
      border-radius: 10px;
      transition: background 0.3s;
    }

    .portfolio-btn:hover {
      background-color: #129e91;
    }

    @media (max-width: 480px) {
      .icon-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }
  </style>
</head>
<body>

  <div class="card-container">
    <!-- Logo -->
    <img src="https://i.pinimg.com/736x/95/81/65/958165e044f80ef639441b5ae5a118d0.jpg" alt="Biz Logo" class="logo"/>

    <!-- Profile Image -->
    <img src="https://i.pinimg.com/736x/4d/7c/d9/4d7cd91c7f3425391c1a17c3ede7233e.jpg" alt="Profile" class="profile-pic" />

    <!-- Title -->
    <h1>Biz Visiting Card</h1>
    <div class="subtitle">ADMIN | Biz Visiting Card</div>

    <!-- Icon Grid -->
    <div class="icon-grid">
      <div class="icon-item">
        <div class="icon-box"><i class="fas fa-phone"></i></div>
        <div class="icon-label">Mobile</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fas fa-sms"></i></div>
        <div class="icon-label">SMS</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fab fa-telegram-plane"></i></div>
        <div class="icon-label">Telegram</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fas fa-envelope"></i></div>
        <div class="icon-label">Email</div>
      </div>

      <div class="icon-item">
        <div class="icon-box"><i class="fab fa-whatsapp"></i></div>
        <div class="icon-label">WhatsApp</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fab fa-facebook-f"></i></div>
        <div class="icon-label">Facebook</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fab fa-instagram"></i></div>
        <div class="icon-label">Instagram</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fas fa-globe"></i></div>
        <div class="icon-label">Website</div>
      </div>

      <div class="icon-item">
        <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
        <div class="icon-label">Location</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fab fa-google-pay"></i></div>
        <div class="icon-label">Pay Online</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fab fa-youtube"></i></div>
        <div class="icon-label">YouTube</div>
      </div>
      <div class="icon-item">
        <div class="icon-box"><i class="fas fa-file-pdf"></i></div>
        <div class="icon-label">PDF Doc</div>
      </div>
    </div>

    <!-- Portfolio Button -->
    <a href="#" class="portfolio-btn"><i class="fas fa-briefcase"></i> Portfolio</a>
  </div>

</body>
</html>
