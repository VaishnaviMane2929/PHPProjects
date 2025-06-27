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
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .card {
      max-width: 360px;
      width: 90%;
      padding: 25px;
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.05);
      border: 2px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(12px);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .logo {
      width: 100px;
      border-radius: 15px;
      border: 2px solid white;
      margin-bottom: 15px;
      padding: 5px;
      background-color: white;
    }

    h1 {
      margin: 10px 0 5px;
      font-size: 24px;
    }

    .title {
      font-size: 14px;
      color: #ddd;
      margin-bottom: 20px;
    }

    .top-icons {
      display: flex;
      justify-content: space-around;
      margin-bottom: 25px;
      flex-wrap: wrap;
    }

    .top-icons div {
      text-align: center;
      font-size: 13px;
      margin-bottom: 10px;
      color: #ccc;
    }

    .top-icons i {
      display: block;
      font-size: 18px;
      margin-bottom: 5px;
      color: #00ffe5;
    }

    .btn {
      display: block;
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
      font-size: 15px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .btn i {
      margin-right: 8px;
    }

    .btn:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

    @media screen and (max-width: 480px) {
      .card {
        padding: 20px;
      }

      .btn {
        font-size: 14px;
        padding: 10px;
      }

      .top-icons i {
        font-size: 16px;
      }

      h1 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="card">
    <!-- Logo -->
    <img src="https://i.pinimg.com/736x/95/81/65/958165e044f80ef639441b5ae5a118d0.jpg" alt="Logo" class="logo">

    <!-- Title -->
    <h1>Biz Visiting Card</h1>
    <p class="title">CEO</p>

    <!-- Top Icons -->
    <div class="top-icons">
      <div><i class="fas fa-share-alt"></i>Share</div>
      <div><i class="fas fa-phone-alt"></i>Call</div>
      <div><i class="fas fa-calendar-alt"></i>Brochure</div>
    </div>

    <!-- Buttons -->
    <a href="#" class="btn"><i class="fas fa-envelope"></i>Mail</a>
    <a href="#" class="btn"><i class="fas fa-globe"></i>Website</a>
    <a href="#" class="btn"><i class="fas fa-info-circle"></i>About</a>
    <a href="#" class="btn"><i class="fas fa-briefcase"></i>Portfolio</a>
  </div>

</body>
</html>
