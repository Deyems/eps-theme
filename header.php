<!DOCTYPE html>
  <html <?php language_attributes() ?>>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>
      <title>EPS</title>
  </head>

    <header id="home" class="header">
        <nav class="navbar">
            <div class="nav-menu">
                <figure>
                    <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/logo.png'); ?>" alt="easylogo" />
                    <span class="logo-description">Easy Professional Services</span>
                </figure>
                <ul class="navbar-menu">
                    <li class="nav-menu-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-menu-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-menu-item"><a class="nav-link" href="#services">Our Services</a></li>
                    <!-- <li class="nav-menu-item"><a class="nav-link" href="#contact">Contact Us</a></li> -->
                </ul>
            </div>
            <div class="btn-contact-us">
                <button>Contact Us
                    <span>
                        <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/Greater_than.png') ?>" alt="arrow right" />
                    </span>
                </button>
            </div>
            <div class="hamburger">
                <svg class="menu" viewBox="0 0 448 512" fill="#fff" width="50" title="bars">
                    <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
                </svg>
                <!-- <svg class="close" viewBox="0 0 448 512" fill="#fff" width="50" title="times">
                    <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" />
                </svg> -->
            </div>
        </nav>
        <div class="banner-text">
            <h1 class="banner-headline">Easy Professional Services (EPS)</h1>
            <h4 class="banner-headline-2">We leverage our experience to provide you with quality service and solutions for all your business needs.</h4>
            <div class="btn-contact-us">
                <button>Contact Us
                    <span>
                        <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/Greater_than.png') ?>" alt="arrow right" />
                    </span>
                </button>
            </div>
        </div>
    </header>