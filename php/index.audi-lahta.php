<?include("_init.php");?>
<!DOCTYPE html>
<html>
<head>
  <title><?=$config['title'];?></title>
  <!--add meta-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate">
  <!--normalize-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha256-l85OmPOjvil/SOvVt3HnSSjzF1TUMyT9eV0c2BzEGzU=" crossorigin="anonymous" />
  <!--jquery-->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstraphelper.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!--less-->
  <link rel="stylesheet" type="text/css" href="style.css?v=3.05" />
  <!--fancybox-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/css/jquery.fancybox.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/js/jquery.fancybox.min.js"></script>
  <!--fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!--matchHeight-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
  <!--scrollto-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
  <!--Maskedinput-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-P9SX5TH');</script>
  <!-- End Google Tag Manager -->
  </head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9SX5TH";
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <section id="cover">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 nopadding">
          <img src="img/cover.jpg?v=3.05" class="hidden-xs" />
          <img src="img/cover_sm.jpg?v=3.05" class="visible-xs" />
          <div id="contact" class="hidden-xs"><a href="tel:+78126047652"><span class="tel">+7 (812) 604-76-52</span></a><br><span class="address">Торфяная дорога, д. 8</span></div>
        </div>
      </div>
    </div>
  </section>
  <section id="form">
    <div class="container">
      <div class="row">
        <form name="form">
          <div class="col-xs-12 text-center mt0 header">
            Регистрация на тест-драйв Audi
          </div>
          <div class="col-xs-12 mt">
            <label>Имя:*</label>
            <input type="text" name="name" required autofocus="autofocus">
          </div>
          <div class="col-xs-12 mt">
            <label>Фамилия:</label>
            <input type="text" name="family">
          </div>
          <div class="col-xs-12 mt">
            <label>Интересующая модель Audi</label>
            <input type="text" name="model" required>
          </div>
          <div class="col-xs-12 mt">
            <label>Телефон:*</label>
            <input type="text" name="tel" class="phone" required>
          </div>
          <div class="col-xs-12 mt">
            <label>E-mail:</label>
            <input type="email" name="email">
          </div>
          <div class="col-xs-12 mt">
            <label>Комментарий:</label>
            <input type="text" name="comment">
          </div>
          <div class="col-xs-12 mt"><input type="submit" name="submit" value="ОТПРАВИТЬ"></div>
          <div class="col-xs-12 mt">
            <input type="checkbox" name="agreement" required checked>
            Настоящим даю согласие на обработку моих вышеуказанных персональных данных Оператору:
          </div>
        </form>
      </div>
    </div>
  </section>
  <section id="overflow">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p class="subheader text-center">
            Регистрация завершена.<br>Свяжитесь по телефону +7 812 331 80 60 для уточнения свободных мест. Спасибо
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="disclaimer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12" id="disclaimer-text">
          <p>ООО "Максимум Приморский" (195299 г. Санкт-Петербург, улица Руставели д. 53, лит. А, пом. 201) (далее – Оператор) с целями: обработки моего запроса, направленного через сайт www.audi-lahta-promo.ru, и коммуникации со мной в целях, связанных с обработкой и выполнением моего запроса с помощью различных средств связи, а именно посредством: интернет; сообщений на адрес электронной почты; коротких текстовых сообщений (SMS) и мультимедийных сообщений (MMS) на номер телефона; а также посредством использования информационно-коммуникационных сервисов, таких как Viber, WhatsApp и тому подобных; телефонных звонков. Я разрешаю совершать со своими персональными данными следующие действия: сбор, систематизацию, накопление, хранение (в электронном виде и на бумажном носителе), уточнение (обновление, изменение), использование, распространение (в том числе передачу) моих персональных данных третьим лицам, с которыми у Оператора имеются действующие договоры, в рамках которых Оператор поручает обработку персональных данных в вышеуказанных целях, включая трансграничную передачу персональных данных, обезличивание, блокирование, уничтожение, с использованием средств автоматизации и без использования таких средств. Настоящее согласие на обработку моих персональных данных действует до момента выполнения моего запроса и может быть отозвано мною ранее в соответствии со статьей 9 Федерального закона от 27.07.2006 года №152-ФЗ «О персональных данных» посредством направления соответствующего письменного заявления по почтовому адресу Оператора, указанного в настоящем согласии, или в электронной форме посредством направления запроса на электронный адрес hotline@audi.ru. ООО "Максимум Приморский" ведет деятельность на территории Российской Федерации в соответствии с законодательством Российской Федерации. Предлагаемые Оператором в заявленных в настоящем согласии целях товары/услуги/работы доступны к получению на территории Российской Федерации. Мониторинг потребительского поведения лиц, находящихся за пределами Российской Федерации, Оператором не ведется.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="contacts">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="header mt">Ауди Центр Лахта</div>
          <div class="subheader">Торфяная дорога, д. 8, <a href="tel:+78126047652" style="text-decoration:none;">+7 (812) 604-76-52</a><br>www.audi-lahta.ru</div>
        </div>
      </div>
    </div>
  </section>
  <div id="success">
    <div class="tab">
      <div>
        <b>Спасибо, ваш запрос отправлен.</b><br>
        В ближайшее время мы свяжемся с вами для подтверждения записи и выбора удобного времени прохождения тест-драйва<br>
        <button class="btn-close">OK</button>
      </div>
    </div>
  </div>
  <div id="preloader">
    <div class="tab">
      <div>
        <p class="text-center">ИДЁТ ОТПРАВКА</p>
        <span class="fa-stack fa-spin fa-2x">
          <i class="fas fa-fw fa-circle fa-stack-2x"></i>
          <i class="fas fa-fw fa-spinner fa-stack-1x fa-inverse"></i>
        </span>
      </div>
    </div>
  </div>
  <script src="script.js?v=2"></script>
</body>
</html>