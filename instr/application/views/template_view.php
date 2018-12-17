<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Expert Сервис</title>
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/mdb.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
              <a href="/" class="nav-link">Главная</a>
            </li>
            <li class="nav-item">
             <a href="/about" class="nav-link">О компании</a>
            </li>
            <li class="nav-item">
              <a href="/contact" class="nav-link">Контакты</a>
            </li>
            <li class="nav-item">
             <a href="/master" class="nav-link">Выезд/Доставка</a>
            </li>
            <li class="nav-item">
             <a href="/diagnostic" class="nav-link">Диагностика</a>
            </li>
            <li class="nav-item">
             <a href="/time" class="nav-link">Срочный ремонт</a>
            </li>
            <li class="nav-item">
             <a href="/warranty" class="nav-link">Гарантия</a>
            </li>
          </ul>     
          <ul class="navbar-nav ">
           <li class="nav-item">
             <a class="nav-link" href="tel:89517855444">
                <i>+7 (951) 785-54-44</i>
              </a>
            </li>
          </ul>   
        </div>
      </div>
    </nav>
   <div class="views mx-auto" style="padding-top: 63px; background: url(/img/head/8.jpg) no-repeat ">
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="wow fadeIn row">
            <div class="col-md-6 mb-4 white-text text-center text-md-left"><br>
              <h1 class="display-4 font-weight-bold">Expert Сервис</h1>
              <hr class="hr-light">
              <p><h2><strong>Быстрый ремонт компьютерной техники, телефонов и ноутбуков</strong></h2></p>
              <a class="btn  btn-lg" href="tel:89517855444">+7 (951) 785-54-44</a>
            </div>
            <div class="col-md-6 col-xl-5 mb-4"><br>
              <div class="card">
                <div class="card-body">
                  <form action="/b0.php" method="POST" type="POST" target="_blank">
                    <h3 class="dark-grey-text text-center"> <strong>Заказать ремонт</strong></h3>
                  <hr>
                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>  
                    <input type="hidden" class="form-control"  name="admin_email" value="Urvantsev12321@gmail.com">
                    <input type="text" class="form-control" name="Name" placeholder="Имя">               
                  </div>
                  <div class="md-form">
                    <i class="fa fa-phone prefix grey-text"></i> 
                    <input type="hidden" class="form-control" name="form_subject" value="Заявка на ремонт">   
                    <input type="text" class="form-control" name="Phone"  placeholder="Телефон">                  
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary">Отправить</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar-expand-lg" style="background: #fcfafa">
    <div class="container flex-center">
      <div>
         <ul class="nav">
           <li class="nav">
              <a href="/phone" class="nav-link black-text">Ремонт телефона</a>
            </li>
            <li class="nav">
             <a href="/computer" class="nav-link black-text">Ремонт компьютера</a>
            </li>
            <li class="nav">
              <a href="/notebook" class="nav-link black-text">Ремонт ноутбуков</a>
            </li>
          </ul>     
        </div>
      </div>
    </nav>

  </header>
  
  <?php include 'application/views/'.$content_view; ?>

  <footer class="page-footer text-center font-small mt-2 wow fadeIn">
    <div class="views mx-auto" style="margin-bottom: 63px; background: url(/img/head/3.jpg) no-repeat">
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="col-md-10 mb-10 white-text text-center"><br><br><br>
              <center><h2 class="display-6 font-weight-bold text-center">Обращайтесь! Мы работаем круглосуточно и без выходных.</h2></center><br><br>
              <center><a class="btn btn-lg center" href="tel:89517855444">+7 (951) 785-54-44</a></center><br><br>
            </div>         
      </div>
    </div>
    <nav class="navbar-expand-lg" style=" margin-top: -40px; padding-bottom: -40px; background: #fff">
    <div class="container flex-center">
      <div>
         <ul class="nav">
           <li class="nav">
              <a href="/phone" class="nav-link black-text">Ремонт телефона</a>
            </li>
            <li class="nav">
             <a href="/computer" class="nav-link black-text">Ремонт компьютера</a>
            </li>
            <li class="nav">
              <a href="/note" class="nav-link black-text">Ремонт ноутбуков</a>
            </li>
          </ul>     
        </div>
      </div>
    </nav>
  </footer>

  


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <script src="/js/script.js"></script>
</body>

</html>
