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
  <link rel="stylesheet" href="{{ asset('css/cart-modal.css') }}">

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  
</head>
<body>
  <header>
    <div class="header">
      <div class="header-top-content">
        <div class="container">
          <div class="header-line">
            <a href="/" class="logo-link" draggable="false">
              <div class="name-logo">
                <div class="logo">
                  <img class="logo-image" src="{{ asset('images/vectors/logo-small.svg')}}" alt="Logo" loading="lazy" draggable="false">
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
              <div class="shop-button-container">
                <a class="shop-button head-button" href="#" id="shopIcon" draggable="false">
                  <img src="images/ui-icons/shopping-cart.svg" alt="shop-icon" loading="lazy" draggable="false">
                  <div class="cart-item-count"></div> 
                </a>
                @include('partials.cart-modal')
              </div>
              
              <div class="header-buttons-container">
                <a class="log-button head-button" href="#" draggable="false">Log in</a>
                <a class="reg-button head-button" href="#" draggable="false">Register</a>
              </div>
            </div>

          </div>  
        </div>
      </div>

      <div class="header-bottom-content">
        <div class="nav-container">
          <div class="nav">
            <a href="#" class="nav-item is-current" draggable="false">HOME</a>
            <a href="#" class="nav-item" draggable="false">SHOP</a>
            <a href="#" class="nav-item" draggable="false">GUARANTEE</a>
            <a href="#" class="nav-item" draggable="false">ABOUT US</a>
            <a href="#" class="nav-item" draggable="false">CONTACT US</a>
            <a href="#" class="nav-item" draggable="false">FAQ</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main-content">
    <h1 class="visually-hidden">Game Sense</h1>
    <section class="top">
      <div class="top-container">
        <div class="top-container-content">
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
              <img class="platforms-logo" src="{{ asset('images/vectors/ps5-logo.png')}}" alt="ps-logo" loading="lazy" draggable="false">
              <img class="platforms-logo" src="{{ asset('images/vectors/xbox-logo.png')}}" alt="xbox-logo" loading="lazy" draggable="false">
              <img class="platforms-logo" src="{{ asset('images/vectors/windows-logo.png')}}" alt="windows-logo" loading="lazy" draggable="false">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="actual">
      <div class="actual-container">
        <ul class="actual_list">
          <li class="actual_item">
            <img src="images/games/need-for-speed-unbound-base.png" alt="actual-game" class="actual_img">
            <p class="actual_name">Need For Speed : Unbound</p>
          </li>
          <li class="actual_item">
            <img src="images/games/elden-ring-shadow-of-the-erdtree.png" alt="actual-game" class="actual_img">
            <p class="actual_name">Elden Ring : Shadow of the Erdtree</p>
          </li>
          <li class="actual_item">
            <img src="images/games/ea-sports-fc-2025.png" alt="actual-game" class="actual_img">
            <p class="actual_name">EA SPORTS FC 2025</p>
          </li>
          
        </ul>
      </div>
    </section> -->

    <section class="actual">
      <div class="actual-container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/need-for-speed-unbound-base.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    Need For Speed : Unbound
                  </div>
                  <div class="actual-game-price">
                    19,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/elden-ring-shadow-of-the-erdtree.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    Elden Ring : Shadow of the Erdtree
                  </div>
                  <div class="actual-game-price">
                    29,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/ea-sports-fc-2025.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    EA SPORTS FC 2025
                  </div>
                  <div class="actual-game-price">
                    49,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/need-for-speed-unbound-base.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    Need For Speed : Unbound
                  </div>
                  <div class="actual-game-price">
                    19,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/elden-ring-shadow-of-the-erdtree.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    Elden Ring : Shadow of the Erdtree
                  </div>
                  <div class="actual-game-price">
                    29,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/ea-sports-fc-2025.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    EA SPORTS FC 2025
                  </div>
                  <div class="actual-game-price">
                    49,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/need-for-speed-unbound-base.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    Need For Speed : Unbound
                  </div>
                  <div class="actual-game-price">
                    19,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/elden-ring-shadow-of-the-erdtree.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    Elden Ring : Shadow of the Erdtree
                  </div>
                  <div class="actual-game-price">
                    29,99$ 
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="actual-banner-container">
                <img src="images/games/ea-sports-fc-2025.png" alt="actual-game" class="actual_img" draggable="false">
              </div>
              <div class="actual-game-info">
                <div class="actual-icons">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>

                <div class="actual-game-bottom">
                  <div class="actual-game-name">
                    EA SPORTS FC 2025
                  </div>
                  <div class="actual-game-price">
                    49,99$ 
                  </div>
                </div>
              </div>
            </div>

            
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section class="top-offers">
      <div class="top-offers-name">
        <div class="top-offers-website-name">
          <span class="left-name">GAME</span><div class="bottom-website-name"><span class="blue-name">S</span><span class="white-name">ENSE</span></div>
        </div>
      </div>

      <div class="top-offers-container">
        <div class="nav-category-container">
          <div class="nav-category">
            <a href="#" class="nav-item-category is-current-category">NEW</a>
            <a href="#" class="nav-item-category">SALES</a>
            <a href="#" class="nav-item-category">POPULAR</a>
            <a href="#" class="nav-item-category">RELESEASES</a>
            <a href="#" class="nav-item-category">PRE-ORDERS</a>
          </div>
        </div>
      </div>

      <div class="container-cards">
        <ul class="offer-cards">
          <li class="card">
            <div class="card-banner"><img class="card-img" src="images/games/game-library/cyberpunk-2077-PL.svg" alt="offer-game" draggable="false"></div>

            <div class="card-top">
              <div class="dlc-tag-container"><a href="#" class="dlc-tag">+ DLC</a></div>
              <div class="card-platforms">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
              </div>
            </div>

            <div class="card-bottoom">
              <div class="card-inner-top">
                <div class="card-title">Cyberpunk: Phantom Liberty</div>
                <a class="favourite" href="#">
                  <img src="images/ui-icons/favourite.svg" alt="" class="favourite-img" loading="lazy" draggable="false">
                  <img src="images/ui-icons/heart-favourite.svg" alt="" class="heart-favourite" loading="lazy" draggable="false">
                </a>
            
              </div>

              <div class="card-inner-bottom">
                <div class="card-bottom-container">
                  <div class="rating-tag">
                    <div class="rating-star">
                      <img src="images/vectors/star.svg" alt="" class="rating-star-svg" loading="lazy" draggable="false">
                    </div>
                    <div class="rating-number">
                      4.5
                    </div>
                  </div>
                  <div class="card-button-action">
                    <div class="card-price">49,99$</div>
                    <button class="card-button">ADD TO CART</button>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="card">
            <div class="card-banner"><img class="card-img" src="images/games/game-library/sea-of-thieves-base.svg" alt="offer-game" draggable="false"></div>

            <div class="card-top">
              <div class="dlc-tag-container"><a href="#" class="dlc-tag"></a></div>
              <div class="card-platforms">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
              </div>
            </div>

            <div class="card-bottoom">
              <div class="card-inner-top">
                <div class="card-title">Sea of Thieves</div>
                <a class="favourite" href="#">
                  <img src="images/ui-icons/favourite.svg" alt="" class="favourite-img" loading="lazy" draggable="false">
                  <img src="images/ui-icons/heart-favourite.svg" alt="" class="heart-favourite" loading="lazy" draggable="false">
                </a>
            
              </div>

              <div class="card-inner-bottom">
                <div class="card-bottom-container">
                  <div class="rating-tag">
                    <div class="rating-star">
                      <img src="images/vectors/star.svg" alt="" class="rating-star-svg" loading="lazy" draggable="false">
                    </div>
                    <div class="rating-number">
                      4.6
                    </div>
                  </div>
                  <div class="card-button-action">
                    <div class="card-price">39,99$</div>
                    <button class="card-button">ADD TO CART</button>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="card">
            <div class="card-banner"><img class="card-img" src="images/games/game-library/cyberpunk-2077-PL.svg" alt="offer-game" draggable="false"></div>

            <div class="card-top">
              <div class="dlc-tag-container"><a href="#" class="dlc-tag">+ DLC</a></div>
              <div class="card-platforms">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
              </div>
            </div>

            <div class="card-bottoom">
              <div class="card-inner-top">
                <div class="card-title">Cyberpunk: Phantom Liberty</div>
                <a class="favourite" href="#">
                  <img src="images/ui-icons/favourite.svg" alt="" class="favourite-img" loading="lazy" draggable="false">
                  <img src="images/ui-icons/heart-favourite.svg" alt="" class="heart-favourite" loading="lazy" draggable="false">
                </a>
            
              </div>

              <div class="card-inner-bottom">
                <div class="card-bottom-container">
                  <div class="rating-tag">
                    <div class="rating-star">
                      <img src="images/vectors/star.svg" alt="" class="rating-star-svg" loading="lazy" draggable="false">
                    </div>
                    <div class="rating-number">
                      4.5
                    </div>
                  </div>
                  <div class="card-button-action">
                    <div class="card-price">49,99$</div>
                    <a href="/" class="card-button">ADD TO CART</a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="card">
            <div class="card-banner"><img class="card-img" src="images/games/game-library/cyberpunk-2077-PL.svg" alt="offer-game" draggable="false"></div>

            <div class="card-top">
              <div class="dlc-tag-container"><a href="#" class="dlc-tag">+ DLC</a></div>
              <div class="card-platforms">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
              </div>
            </div>

            <div class="card-bottoom">
              <div class="card-inner-top">
                <div class="card-title">Cyberpunk: Phantom Liberty</div>
                <a class="favourite" href="#">
                  <img src="images/ui-icons/favourite.svg" alt="" class="favourite-img" loading="lazy" draggable="false">
                  <img src="images/ui-icons/heart-favourite.svg" alt="" class="heart-favourite" loading="lazy" draggable="false">
                </a>
            
              </div>

              <div class="card-inner-bottom">
                <div class="card-bottom-container">
                  <div class="rating-tag">
                    <div class="rating-star">
                      <img src="images/vectors/star.svg" alt="" class="rating-star-svg" loading="lazy" draggable="false">
                    </div>
                    <div class="rating-number">
                      4.5
                    </div>
                  </div>
                  <div class="card-button-action">
                    <div class="card-price">49,99$</div>
                    <a href="/" class="card-button">ADD TO CART</a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="card">
            <div class="card-banner"><img class="card-img" src="images/games/game-library/cyberpunk-2077-PL.svg" alt="offer-game" draggable="false"></div>

            <div class="card-top">
              <div class="dlc-tag-container"><a href="#" class="dlc-tag">+ DLC</a></div>
              <div class="card-platforms">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
              </div>
            </div>

            <div class="card-bottoom">
              <div class="card-inner-top">
                <div class="card-title">Cyberpunk: Phantom Liberty</div>
                <a class="favourite" href="#">
                  <img src="images/ui-icons/favourite.svg" alt="" class="favourite-img" loading="lazy" draggable="false">
                  <img src="images/ui-icons/heart-favourite.svg" alt="" class="heart-favourite" loading="lazy" draggable="false">
                </a>
            
              </div>

              <div class="card-inner-bottom">
                <div class="card-bottom-container">
                  <div class="rating-tag">
                    <div class="rating-star">
                      <img src="images/vectors/star.svg" alt="" class="rating-star-svg" loading="lazy" draggable="false">
                    </div>
                    <div class="rating-number">
                      4.5
                    </div>
                  </div>
                  <div class="card-button-action">
                    <div class="card-price">49,99$</div>
                    <a href="/" class="card-button">ADD TO CART</a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="card card-not-active">
            <div class="card-img"><img class="" src="images/games/game-library/NBA-2K23.png" alt="offer-game" draggable="false"></div>
            <div class="card-bottoom">
              <div class="card-inner-top">
                <div class="card-title">NBA 2K23</div>
                <div class="card-platforms">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/windows.png')}}" alt="Logo windows" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/xbox.png')}}" alt="Logo Xbox" loading="lazy" draggable="false">
                  <img class="small-platforms-logo" src="{{ asset('images/small-platforms-logo/playstation.png')}}" alt="Logo Playstation" loading="lazy" draggable="false">
                </div>
              </div>
              <div class="card-info-not-ative"><span class="text-sold-out">THIS PRODUCT IS SOLD OUT</span></div>
              <div class="card-button-action">
                <button class="notify-button" onclick="window.location.href='/';">NOTIFY ME</button>
              </div>
            </div>
          </li>

          
        </div>
      </ul>
    </section>

    <section class="subscribe-banner">
      <div class="subscribe-container">
        <div class="subscribe-inner">

          <div class="sub-left">
            <div class="follow-text">
              FOLLOW US ON
            </div>

            <div class="sub-center">
              <div class="sub-title">
                <span class="red-text">Y</span>OUTUBE
              </div>

              <div class="sub-button-container">
                <a href="https://www.youtube.com/@o7d670" class="sub-button" target="_blank">
                WATCH
                </a>
              </div>
            </div>
          </div>

          <img src="images/banners/dota.png" alt="sub-banner" class="sub-banner" draggable="false">
        </div>
      </div>
    </section>

  </main>

  <footer class="footer">
    <div class="container-footer">
      <div class="footer-inner">
        <ul class="footer-contact">
          <li class="footer-contact-title">
            CONTACT US
          </li>
          <li class="footer-contact-item"> 
            <img class="email-logo" src="{{ asset('images/contact-icons/mail.svg')}}" alt="E-mail icon" loading="lazy" draggable="false">
            <a class="contact-item-text" href="mailto:supportgamesense@gmail.com">supportgamesense@gmail.com</a>
          </li>
        </ul>

        <ul class="footer-navigation">
          <li class="footer-navigation-title">NAVIGATION</li>
          <li class="footer-navigation-item">
            <a href="/" class="footer-navigation-link">Bonus program</a>
          </li>
          <li class="footer-navigation-item">
            <a href="/" class="footer-navigation-link">Purchase and delivery</a>
          </li>
          <li class="footer-navigation-item">
            <a href="/" class="footer-navigation-link">Where to buy</a>
          </li>
          <li class="footer-navigation-item-last">
            <a href="/" class="footer-navigation-link">Feedback</a>
          </li>
        </ul>

        <ul class="footer-social-list">
          <li class="footer-social-title">STAY TUNED</li>
          <div class="footer-social-icons">
            <li class="footer-social-item"><a href="#" class="footer-social-link"><img src="{{ asset('images/social-links/discord.svg')}}" alt="Discord" loading="lazy" draggable="false"></a></li>
            <li class="footer-social-item"><a href="#" class="footer-social-link"><img src="{{ asset('images/social-links/twitch.svg')}}" alt="Twitch" loading="lazy" draggable="false"></a></li>
            <li class="footer-social-item"><a href="#" class="footer-social-link"><img src="{{ asset('images/social-links/telegram.svg')}}" alt="Telegram" loading="lazy" draggable="false"></a></li>
            <li class="footer-social-item"><a href="#" class="footer-social-link"><img src="{{ asset('images/social-links/github.svg')}}" alt="GitHub" loading="lazy" draggable="false"></a></li>
            <li class="footer-social-item"><a href="#" class="footer-social-link"><img src="{{ asset('images/social-links/twitter.svg')}}" alt="Twitter" loading="lazy" draggable="false"></a></li>
          </div>
        </ul>
      </div>

      <div class="footer-bottom">
        <p class="footer-copy">Game Sense 2024</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    let cartButtons = document.querySelectorAll('.card-button');

    document.getElementById('shopIcon').addEventListener('click', function() {
      let shopCart = document.querySelector('.cart-modal');

      if(shopCart.classList.contains('hidden')){
        shopCart.classList.remove('hidden');
        shopCart.classList.add('visible');
      } else{
        shopCart.classList.remove('visible');
        shopCart.classList.add('hidden');
      }
    });

    document.getElementById('closeCart').addEventListener('click', function() {
      let shopCart = document.querySelector('.cart-modal');
      
      shopCart.classList.remove('visible');
      shopCart.classList.add('hidden');
    });

    var swiper = new Swiper(".mySwiper",{
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      mousewheel: {
        invert: true,
      },
      autoplay: {
        delay: 4000, // 4s
        disableOnInteraction: false, 
      },
      breakpoints: {
        576: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1400: {
          slidesPerView: 3,
        },
        1900: {
          slidesPerView: 4,
        },
        2350:{
          slidesPerView: 5,
        },
        2560: {
          slidesPerView: 5,
        },
        3000: {
          slidesPerView: 6,
        },
        3700: {
          slidesPerView: 7,
        },
        5500: {
          slidesPerView: 8,
        },
        7680: {
          slidesPerView: 9,
        }
      }

    })
  </script>
</body>
</html>