<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
  <div class="about-container">
    <p class="topic">Web Programming Sesi 1</p>
    <h1 class="header">About Me</h1>

    <div class="images">
      <div class="polaroid">
        <img src="{{ asset('images/3.png') }}" alt="Sacha smiling">
      </div>
      <div class="polaroid">
        <img src="{{ asset('images/2.png') }}" alt="Sacha with coffee">
      </div>
    </div>

    <h2 class="sub-header">Winsen</h2>

    <p class="bio">
      Hi, I'm Winsen! Computer Science student at Binus University.
    </p>

    <p class="social">IG: @winsen_olando</p>
  </div>
</body>
</html>
