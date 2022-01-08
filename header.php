<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xshockey.by</title>
	<?php wp_head(); ?>
	<meta name="description" content="#">
	<meta name="keywords" content="#">
	<!-- Favicon -->
	<link rel="icon" href="#" type="image/x-icon">
 	<link rel="shortcut icon" href="#" type="image/x-icon"> 
	<!-- OG Tags -->
	<meta property="og:title" content="#">
	<meta property="og:description" content="#">
	<meta property="og:type" content="article">
	<meta property="og:image" content="#" >
	<meta property="og:site_name" content="#">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
  <header class="header">
  
    <div class="container">
      
      <div class="header__top">
        
        
        <div class="social">
          <a href="#" class="social__link">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="social__link">
            <i class="fab fa-vk"></i>
          </a>
        </div>

        <div class="searchLc">
          
          <div class="search">
            <form action="" class="searchForm">
              <input type="text" class="search__inp">
              <button class="search__btn"><i class="fas fa-search"></i></button>
            </form>
          </div>

          <div class="lc">
            <button class="lc__btn">Войти</button>
          </div>
        
        </div>
        

      </div>
    </div>
    <div class="line"></div>
    <div class="container">

      <div class="header__bottom">

        <ul class="leftMenu">
          <li class="leftMenu__item"><a href="news-post.html" class="leftMenu__link">Новости</a></li>
          <li class="leftMenu__item"><a href="" class="leftMenu__link">Истории</a></li>
          <li class="leftMenu__item"><a href="" class="leftMenu__link">Skill Up</a></li>
          <li class="leftMenu__item"><a href="" class="leftMenu__link">Форум</a></li>
          <li class="leftMenu__item"><a href="" class="leftMenu__link">Special</a></li>
        </ul>

        <a href="#" class="logo"><img src="<?php bloginfo('template_url'); ?>/public/img/logo.png" alt="xshockey"></a>
      
        <ul class="rightMenu">
          <li class="rightMenu__item"><a href="" class="rightMenu__link">Барахолка</a></li>
          <li class="rightMenu__item"><a href="" class="rightMenu__link">Челенджи</a></li>
          <li class="rightMenu__item"><a href="" class="rightMenu__link">Команды</a></li>
          <li class="rightMenu__item"><a href="challenge-page.html" class="rightMenu__link">Рассказать</a></li>
        </ul>
        
      </div>

    </div>
    <div class="drop-down">
      <nav role='navigation'>
        <div class="mob-logo">
          <a href="#" class="logo"><img src="<?php bloginfo('template_url'); ?>/public/img/logo.png" alt="xshockey"></a>
        </div>
        <ul>
          <li class="leftMenu__item"><a href="" class="leftMenu__link">Новости</a></li>
            <li class="leftMenu__item"><a href="" class="leftMenu__link">Истории</a></li>
            <li class="leftMenu__item"><a href="" class="leftMenu__link">Skill Up</a></li>
            <li class="leftMenu__item"><a href="" class="leftMenu__link">Форум</a></li>
            <li class="leftMenu__item"><a href="" class="leftMenu__link">Special</a></li>
            <li class="rightMenu__item"><a href="" class="rightMenu__link">Барахолка</a></li>
            <li class="rightMenu__item"><a href="" class="rightMenu__link">Челенджи</a></li>
            <li class="rightMenu__item"><a href="" class="rightMenu__link">Команды</a></li>
            <li class="rightMenu__item"><a href="" class="rightMenu__link">Рассказать</a></li>
        </ul>
        <div class="mob-searchlc">
          <div class="searchLc">
          
            <div class="search">
              <form action="" class="searchForm">
                <input type="text" class="search__inp">
                <button class="search__btn"><i class="fas fa-search"></i></button>
              </form>
            </div>
  
            <div class="lc">
              <button class="lc__btn">Войти</button>
            </div>
          
          </div>
        </div>
      </nav>  
      </div>
      <div class="menu">
        <a class="trigger" href="#">&equiv;</a>
        <a class="close" href="#">&times;</a>
      </div>
    </div>
  </header>