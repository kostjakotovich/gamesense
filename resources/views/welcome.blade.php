<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage | Game Sense</title>
  <link rel="icon" sizes="16x16" href="{{ asset('images/vectors/logo-small.svg')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">
  
</head>
<body>
  <header>
    <div class="header">
      <div class="header-top-content">
        <div class="container">
          <div class="header-line">
            <a href="/" class="logo-link">
              <div class="name-logo">
                <div class="logo">
                  <img class="logo-image" src="{{ asset('images/vectors/logo-small.svg')}}" alt="Logo" loading="lazy">
                </div>

                <div class="website-name">
                  <span class="left-name">game</span><span class="right-name">sense</span>
                </div>
              </div>
            </a>

            <div class="search-input">
              <input class="search-text" placeholder="Search your favourite game" type="text">
              <div class="search-logo">
                <img class="search-logo-image" src="{{ asset('images/vectors/search-icon.png')}}" alt="Search Icon" loading="lazy" draggable="false">
              </div>
            </div>

            <div class="header-buttons">
              <a class="log-button head-button" href="#">Log in</a>
              <a class="reg-button head-button" href="#">Register</a>
            </div>
          </div>  
        </div>
      </div>

      <div class="header-bottom-content">
        <div class="nav-container">
          <div class="nav">
            <a href="#" class="nav-item is-current">HOME</a>
            <a href="#" class="nav-item">SHOP</a>
            <a href="#" class="nav-item">GUARANTEE</a>
            <a href="#" class="nav-item">ABOUT US</a>
            <a href="#" class="nav-item">CONTACT US</a>
            <a href="#" class="nav-item">FAQ</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main-content">
    <h1 class="visually-hidden">Game Sense</h1>
    <section class="top">
      <div class="top-container">
        <div class="top-inner">
          <div class="top-title">Grand Theft Auto <span class="blue-text">VI</span></div>
          <div class="top-text">The latest Rockstar Games installment promises an <span class="blue-text">expansive open world<br> with a 
            gripping storyline</span>, dynamic characters, and photorealistic graphics.<br> 
            Expect improved mechanics, extensive customization, and a robust<br> multiplayer 
            mode. Set in diverse locations like Weiss City and South<br> America-inspired areas, 
            the game offers both a single-player campaign<br> and <span class="blue-text">multiplayer adventures</span>.
          </div>
        </div>

        <div class="highlighted-buy-section">
          <div class="highlighted-price">

            <div class="buy-button">
              <a class="highlighted-button" href="#" type="button">PRE-ORDER NOW</a>
            </div>

            <div class="highlighted-discount">
              -25%
            </div>

            <div class="price-discount">
              <span class="first-price">79,99$</span> 
              <span class="second-price">99,99$</span>
            </div>
            
          </div>

          <div class="platforms"> 
            <img class="platforms-logo" src="{{ asset('images/vectors/ps5-logo.png')}}" alt="ps-logo" loading="lazy">
            <img class="platforms-logo" src="{{ asset('images/vectors/xbox-logo.png')}}" alt="xbox-logo" loading="lazy">
            <img class="platforms-logo" src="{{ asset('images/vectors/windows-logo.png')}}" alt="windows-logo" loading="lazy">
          </div>
        </div>

        <div class="top-pagination">
          <ul class="top-pagination-list">
            <li class="top-pagination-item"><button class="top-pagination-button is-current-pagination" type="button"></button></li>
            <li class="top-pagination-item"><button class="top-pagination-button" type="button"></button></li>
            <li class="top-pagination-item"><button class="top-pagination-button" type="button"></button></li>
            <li class="top-pagination-item"><button class="top-pagination-button" type="button"></button></li>
          </ul>
        </div>
        
      </div>
    </section>
  </main>

    

<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, 
  deserunt alias! 
  Voluptatum, rerum. Suscipit quidem maiores nostrum laboriosam accusamus, facere saepe 
  ex consequatur earum ipsam assumenda eligendi explicabo corporis magni?</div>

</body>
</html>