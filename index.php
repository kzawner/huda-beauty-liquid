<!DOCTYPE html>
<html lang="ru">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <title>Набор матовых помад Huda Beauty</title>
  <!-- Favicon -->
  <link rel="icon" href="images/1798.png" type="image/png">
  <link rel="shortcut icon" href="images/1798.png" type="image/png">

  <!-- OG -->
  <meta property="og:url" content="index.html" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Набор матовых помад Huda Beauty" />
  <meta property="og:image" content="images/1798.png" />
  <meta property="og:site_name" content="Набор матовых помад Huda Beauty" />
  <meta property="og:description" content="Набор матовых помад Huda Beauty" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width">

  <!-- CSS -->
  <link rel="stylesheet" href="images/styles.css" type="text/css" media="screen">
  <link type="text/css" rel="stylesheet" href="images/slick.css">
  <link type="text/css" rel="stylesheet" href="images/style.css">

  <!-- JS -->
  <script src="images/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="images/ab.min.js"></script>
  <script type="text/javascript" src="images/timer.js"></script>
  <script type="text/javascript" src="images/slick.min.js"></script>
  <script type="text/javascript" src="images/script.js"></script>
  <script type="text/javascript">
    $jsonData = {
      "product": {
        "id": 1798,
        "name": "Набор матовых помад Huda Beauty",
        "title": "Набор матовых помад Huda Beauty",
        "short_description": "Набор матовых помад Huda Beauty",
        "full_description": "Набор матовых помад Huda Beauty"
      },
    };
  </script>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
  <link rel="icon" href="favicon.html" type="image/x-icon">

  <?php
  include __DIR__ . '/include/all_codes.php';
  ?>
</head>

<body>

  <script type="text/javascript">
    var ad1_notify = new Object(),
      price, currency, delivery_price;

    for (key in $jsonData.prices) {
      if ($jsonData.prices[key].active) {
        price = $jsonData.prices[key].price;
        currency = $jsonData.prices[key].currency;
        delivery_price = $jsonData.prices[key].price + $jsonData.prices[key].delivery_price;
      }
    }

    ad1_notify.params = {
      city: "",
      landDir: "huda_beauty_1",
      sex: "",
      multiply: "" || 0,
      no_price: "" || false,
      delay: ("" * 1000) || 12000,
      price: price || 0,
      currency: currency || "руб.",
      delivery_price: delivery_price,
      geoKey: "UA" || "RU",
      zdorov: "" || false
    };
  </script>

  <script type="text/javascript" src="images/func45c4.js?9"></script>

  <script>
    var formIsSubmitted = false;
  </script>

  <section class="top-line">
    <div class="wrap clearfix">
      <span>Официальный интернет-магазин косметики</span>
      <a class="right scrollTo" href="#zakaz">Принимаем заявки 24/7</a>
    </div>
  </section>

  <section class="block-1">
    <div class="back-sl-1">
      <div class="wrap">
        <div class="container">
          <img class="logo" src="images/logo.png" alt="">
          <h1>Коллекция из 16 оттенков матовых жидких помад <span>со&nbsp;скидкой 50%</span></h1>
          <a class="button-m but-white scrollTo" href="#about">Узнать больше</a>
        </div>
      </div>
    </div>
  </section>

  <section class="dop">
    Акция продлится до <span class="m1-date"><?php $datetime = new DateTime('tomorrow'); print $datetime->format("Y.m.d"); ?></span>. Обращайте внимание на новые&nbsp;цены.
  </section>

  <section class="block-2">
    <div class="wrap" id="about">
      <img class="tov-1" src="images/tov-1.jpg" alt="">
      <div class="container">
        <h2 class="title">Huda Beauty Liquid Matte Full&nbsp;Collection</h2>
        <div class="about">
          <p>Роскошный набор из 16 самых популярных матовых оттенков от известного бьюти-блогера.</p>
          <p>Набор матовых жидких губных помад Huda Beauty Liquid Matte Lipstick – это яркий пример тщательного подхода к качеству, стилю и комфорту. Матовые помады не сушат губы, отличаются особой стойкостью, делают губы нежными и бархатными.</p>
        </div>
        <a class="button-m scrollTo" href="#zakaz">Заказать сейчас</a>
      </div>
      <div class="lips clearfix">
        <h3 class="sub-title"><span>Коллекция оттенков</span></h3>
        <img src="images/lips-1.jpg" alt="">
        <img src="images/lips-2.jpg" alt="">
        <img src="images/lips-3.jpg" alt="">
        <img src="images/lips-4.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="block-3">
    <div class="wrap">
      <div class="slogan">Ваш самый<br/>смелый образ</div>
    </div>
  </section>

  <section class="block-4">
    <div class="wrap">
      <h2 class="title">Видеообзор от Huda Beauty</h2>
      <div class="video-container">
        <div class="youtube" id="rPLMR-qc2aI"></div>
      </div>
    </div>
  </section>

  <section class="dop">
    Акция продлится до <span class="m1-date">21.02.2018</span>. Обращайте внимание на новые&nbsp;цены.
  </section>

  <section class="block-5">
    <div class="wrap">
      <img class="tov-2" src="images/tov-2.jpg" alt="">
      <div class="container">
        <h2 class="title" id="zakaz">Коллекция из 16 оттенков матовых жидких помад <span>со&nbsp;скидкой 50%</span></h2>
        <div class="order">
          <p>Специально для ценителей необычных, ярких, соблазнительных губ в нашем магазине представлен полный набор De Luxe оттенков линейки Huda Beauty</p>
          <div class="cost">
            Цена:
            <span class="old-cost"><span class="price_land_s2">5980</span> <span class="price_land_curr">руб.</span></span> /
            <span class="new-cost"><span class="price_land_s1">2990</span> <span class="price_land_curr">руб.</span></span>
          </div>

          <form class="orderformcdn" action="order-success.php"" method="post">
            <input class="field" type="text" name="name" placeholder="Введите Ф.И.О" required="">
            <input class="field" type="tel" name="phone" placeholder="Введите телефон" required="">
            <button class="button-m">Заказать со скидкой</button>

            <div style="display:none;">
              <input type="text" name="product_name" id="product-name">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="dop">
    До конца акции:&nbsp; <span class="timer" id="timer">&nbsp;<span>0 д</span> : <span class="hours">00</span> : <span class="minutes">00</span> : <span class="seconds">00</span></span>
  </section>

  <section class="block-6">
    <div class="wrap">
      <h2 class="title">Как мы работаем?</h2>
      <ul class="delivery clearfix">
        <li>
          <span>1</span>
          <p>Оставляете заявку на сайте</p>
        </li>
        <li>
          <span>2</span>
          <p>Менеджер перезванивает в течение 15 мин</p>
        </li>
        <li>
          <span>3</span>
          <p>Отправляем ваш заказ в тот же день</p>
        </li>
        <li>
          <span>4</span>
          <p>Оплачиваете заказ при получении</p>
        </li>
      </ul>
      <div class="img-cont">
        <img src="images/ph-1.jpg" alt="палетка Huda Beauty">
        <img src="images/ph-4.jpg" alt="палетка Huda Beauty">
        <img src="images/ph-3.jpg" alt="палетка Huda Beauty">
        <img src="images/ph-2.jpg" alt="палетка Huda Beauty">
      </div>
      <div class="review">
        <h3 class="sub-title"><span>Отзывы покупателей</span></h3>
        <div class="rev-cont">
          <div class="rev-item">
            <img src="images/rev-1.jpg" alt="">
            <p><span class="dark">#Repost @daryastrazheva</span> Я влюбилась! Обычно не люблю красить губы помадой, но теперь я буду делать это чаще, влюбилась в этот набор, в качество помады! Она оооочень стойкая!! Спасибо за быструю доставку, неделя и она уже у меня!</p>
          </div>
          <div class="rev-item">
            <img src="images/rev-2.jpg" alt="">
            <p><span class="dark">#Repost @krasilnikova_vi</span> Хочу сказать спасибо за проделанную работу, общение с клиентами 10/10, я не пожалела, что приобрела помады именно у вас! Особенно хочу подчеркнуть стойкость, это бомба! Я нанесла её в 8 утра, сняла в 8 вечера только мицелляркой. Это просто волшебство какое-то)</p>
          </div>
          <div class="rev-item">
            <img src="images/rev-3.jpg" alt="">
            <p><span class="dark">#Repost @liza_tender</span> Ура! Успела купить набор со скидочкой) Помады не стягивают губы и очень долго держатся) Темные оттенки использую только по особым мероприятиям) Кстати, цвета подошли мне и маме) И все это в красивой фирменной коробочке. Я довольна покупкой на все 100%! </p>
          </div>
        </div>
      </div>
      <a class="button-m scrollTo" href="#zakaz">Заказать сейчас</a>
    </div>
  </section>

  <section class="dop dark-bg">
    Косметика представленная в нашем интернет-магазине полностью сертифицирована
  </section>

  <section class="copyright">
    <div style="font-size: 1em; color: #999; text-align: center; ">shopgodzilla.com.ua ©<?php print date("Y") ?> | Все права защищены</div>
  </section>

  <link rel="stylesheet" href="images/stylec4ca.css?1">
  <script src="images/scriptc81e.js?2"></script>

  <script>
  // ask politely form.js to load even if not from root path of the url.
  (function () {
    var getUrl = window.location;
    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
    Object.defineProperty(document, "referrer", {get : function(){ return baseUrl; }});
    console.debug(`document referrer set to $baseUrl`);
  })();

  // set product name in the order form to the current url and page title.
  (function () {
    $('#product-name').val(document.title + " (" + window.location.href + ")");
  })();
  </script>
  <script src="https://b24go.com/form/v3/b24-iunab6.bitrix24.ru/form.js"></script>
  <script src="success-page.js"></script>

</body>

</html>
