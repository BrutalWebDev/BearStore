
<?php
$name = $_POST['name'];
$phone = $_POST['phone1'];




$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);




$name = urldecode($name);
$phone = urldecode($phone);




$name = trim($name);
$phone = trim($phone);


if (mail("izbetpro@yandex.ru", "Заявка с сайта", "Имя: ".$name.". Телефон: ".$phone,"From: all@minecraft-store.ru\r\n")){

  echo <<<HTML
  <head>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '513596555797952');
  fbq('track', 'PageView');
  fbq('track', 'Lead');

</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=513596555797952&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
    <script>insert_event_code_here;</script>

    <div class="container text-center">
    <h3 style="text-align: center; color: #27E895;">Спасибо, заказ принят!</h3>
    <p style="text-align: center; color: #E3E6DF;">Оператор перезвонит в течении 2 минут для подтверждения заказа.</p>
    <p style="text-align: center; color: #E3E6DF;">Если этого не произошло, вы можете связаться по номеру +7 (952) 266-87-10.</p>
    <input type="button" class="btn btn-primary" value="Вернуться в магазин" onClick='location.href="https://bearspb.ru/"'>
    </div>
    </body>


HTML;
  } else { 
    echo <<<HTML
      <h3 style="text-align: center; color: red;">Ошибка, заказ не отправлен!</h3>
HTML;
  }

  ?>