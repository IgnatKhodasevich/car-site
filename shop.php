
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<link rel="shortcut icon" href="img/car.png" type="image/png">
<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Orbitron:400,500' rel='stylesheet' type='text/css'>


    <meta charset="utf-8">
 <!-- Отключение режима совместимости для браузеров IE-->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- Подключение мобильной верстки (приравнивание ширины экрана мобильного устройства устройства к ширине в пикселях) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Подключение базовых стилей -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <!--Подключение функционала JS (навигация, модальные окна и т.д.  -->
  <link href="css/bootstrap.css" rel="stylesheet">  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <style type="text/css">


#header {
  width: auto;
  /*background-color: rgba(0, 123, 186, 1);*/
  /*background-color: rgba(41, 43, 39, 0.7);*/
  /*background-color: #ECEFF1;*/
  background-color: white;
}

/*.img-responsive {
  max-width: 100%;
  display: block; 
  margin: 40px 20px;
  margin-left: auto;
  margin-right: auto;}*/

h1 {
  
  font-family: "Lobster", cursive;
  text-align: left;
  margin-left: 55px;
}

.footer {
  /*background-color: rgba(0, 123, 186, 1);*/
 /*background-color: #ECEFF1;*/
 background-color: white;

 
}
.fooCon {
  list-style: none;
  margin-left: 130px;

}
#careers {
  
  margin-bottom: -5px;

}  
#partners {
  margin-bottom: -5px;
  font-size: small;

}

.container {
  margin-bottom: 400px;
  width: auto;


  
}
@media (max-width: 768px) {
  .container {
  margin-bottom: 0px;
  margin-left: 0px;

}
}

#contacts {
  width: auto;
}
#mainText {
  ;
}

.navbar-toggle {
  border-color: black;
}
.icon-bar {
  background-color: black;
}

.thumbnail {
  
  height: 250px;
  width: 250px;
  width: auto;
}
.prod {
  margin-top: -1px;
}
.pic {
  margin-top: 20px;
  margin-bottom: 5px;
  height: 82px;
  width: 100px;
}
a {
  color: black;
    text-decoration: none;
}
#underlogo {
  text-align: left;
  margin-left: 185px;
  margin-top: -20px;
  font-family: "Lobster", cursive;
}
#phones {
  padding-top: 20px;
  font-family: "Lobster", cursive;
    
}
#phoneImage {
  padding-top: 30px;
  margin-left: -70px;

}
#callBack {
  text-align: left;
  padding-top: 40px;
  margin-left: -230px;
  font-family: "Lobster", cursive;
  font-size: 20px;
  text-decoration: none;
  color: black;


}
@media (max-width:768px ) {
    #callBack {
        padding-left: 250px;

    }
}
#myNavbar {
  margin-left: 75px;
}
#copyright {
  margin-left: 20px;
}
#modalD {
width: 350px;
}

#infotab {
  width: 435px;
  margin-left: 120px;
}

#listAgr {
  height: 30px;
  width: 330px;

}
#EngineCapacity{
            padding-left: 90px;
        }
#enginecapacity{
            margin-left: 25px;
        }
#labelModel {
    padding-left: 45px;
}
#model{
            margin-left: 20px;
        }
#engineType{
            width: 330px;
        }
#clientName{
            width: 330px;
        }
#clientPhone{
            width: 330px;
        }
        #addInfo{
            width: 330px;
            height: 50px;
        }
#getPrice{
    width: 330px;
    font-family: "Lobster", cursive;
    font-size: 20px;
    text-decoration: none;
    color: black;

}
        #selectBrand {
                width: 150px;
                float: left;
                margin-right: 27px;

        }
        #selectModel{
            width: 150px;
        }
#brandLabel {

}
</style>
 <title>Продажа агрегатов и запчастей</title>
</head>

<body>

<div class="row text-center" id="header"> 
    <div class="col-md-6">
    <h1><a href="index.html">
      AutoMartService
    </h1>

    </div>
    <div class="col-md-3" id="phones">
    <h4>+375 29 502 17 02</h4>
    <h4>+375 44 502 17 02</h4>
    </div>

    <div class="col-md-1">
    <img class="image-responsive" src="img/phone.png" alt="Responsive image" style="height: 80px" align="left" id="phoneImage">
    </div>
    <div class="col-md-2">
    <a href="#modal" role="button" class="btn btn-link" data-toggle="modal" data-target="#modal" id="callBack">Обратный звонок</a>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
    <!--<p id="underlogo">Центр ремонта и восстановления агрегатов</p>-->
</div>
</div>
</div>
<div class="container">
<nav class="navbar navbar-primary">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand  visible-xs visible-sm" href="#">Меню</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id="tog">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="#">О нас</a></li>
      <li><a href="index.html">Ремонт агрегатов</a></li>
      <li><a href="#">Продажа агрегатов и запчастей</a></li>
      <li><a href="#">Выезд и доставка</a></li>
      <li><a href="#">Программа взаимозачёта</a></li> 
      <li><a href="#">Сотрудничество</a></li>
      <li><a href="#">Контакты</a></li> 
    </ul>
    </div>
  </div>
</nav>
<div class="row">
<div class="col-md-9">
    <form method="post" action="" title="Расскажите нам о своем автомобиле">
      <br><label>Какой агрегат Вас интересует?</label><br>
      <select name="Agregat" id="listAgr">
        <option value="Генератор">Генератор</option>
        <option value="Стартер">Стартер</option>
        <option value="Турбокомпрессор">Турбокомпрессор</option>
        <option value="Мотор отопителя">Мотор отопителя</option>
        <option value="Мотор стеклоомывателя">Мотор стеклоомывателя</option>
        <option value="Электрокомпрессор">Электрокомпрессор</option>
        <option value="Мотор лебедки">Мотор лебедки</option>
        <option value="Другое">Другое</option>
      </select>
      <br><br>
      <div>
          <div><input type="checkbox" name="New" value="Новый"> Новый</div><br>
          <div><input type="checkbox" name="Repaired" value="Восстановленный"> Восстановленный</div><br>
          <div><input type="checkbox" name="Old" value="Бывший в использовании"> Бывший в использовании (б/у)</div><br>
          <div>
              <label id="brandLabel">Марка автомобиля</label><br>
              <select class="form-control" name="brand" id="selectBrand" onchange="selectModel()">

                 <?php
                 $host = "127.0.0.1:3306";
                 $db_name = "cars";
                 $login = "root";
                 $password="root";
                 $connect = mysqli_connect($host, $login, $password);
                 //if ($connect){
                 //    echo "Connected<br>";
                 //}
                 $select_db=mysqli_select_db($connect,$db_name);
                 //if ($select_db){
                 //    echo "Selected<br>";
                 //}
                 $query="SELECT brand_name, brand_id FROM brands";
                 $result = mysqli_query($connect, $query);
                 $myrow = mysqli_fetch_array($result);
                 //if ($result){
                 //    echo "ok";
                 //}else {
                 //    echo "ERROR";
                 //}

                 do//открываем цикл
                 {
                     $f=$myrow ["0"];// - 1-ю записи из массива
                     $d=$myrow ["1"];

                     printf ("<option value='%s'>%s</option>",$d,$f);//тут скрипт находит %s и вставляет в него переменную f, потом вторую %s и т.д.
                 }
                 while($myrow = mysqli_fetch_array($result));//здесь мы переходим на слудующую запись в базе


                 ?>
              </select><br><br>

              <div name="selectModel">

              </div>


              </script>
              <script>
                  function selectModel() {

                      var id_brand = $('select[name="brand"]').val();

                      if (!id_brand){
                          $('div[name="selectModel"]').html('');
                      }else{
                          $.ajax({
                                    type: "POST",
                                    url: "ajax.base.php",
                                    data: {action: 'showModelForInsert', id_brand: id_brand},
                                    cache: false,
                                    success: function (responce) {$('div[name="selectModel"]').html(responce);}

                                    });
                          };
                      }


              </script>



<br>

              <label>Год выпуска</label><label id="EngineCapacity">Объем двигателя</label><br>
              <input type="text" name="Year" placeholder=""><input type="text" name="EngineCapacity" id="enginecapacity" placeholder=""><br>
              <label>Тип двигателя</label><br>
              <select class="form-control" name="EngineType" id="engineType">
                  <option value="Бензиновый">Бензиновый</option>
                  <option value="Дизельный">Дизельный</option>
              </select><br>
              <label>Как Вас зовут?</label><br>
              <input type="text" name="ClientName" id="clientName"><br>
              <label>Ваш номер телефона</label><br>
              <input type="text" name="ClientPhone" id="clientPhone"><br>
              <label>Дополнительная информация</label><br>
              <textarea name="AdditionalInfo" id="addInfo"></textarea>
              <br><button type="submit" class="btn btn-default" id="getPrice">Узнать стоимость!</button>


</div>
      </div>

    </form>
        </div>
        </div> 

    </div>

  </div>
</div>
</div>
</div>

<div class="navbar-fixed-bottom row-fluid hidden-xs">
<div class="footer" id="footers">
<div class="row">
  <div class="col-md-8" id="copyright">
    <h6 class="text-left">&copy; 2016 AutoMartService</h6>
  </div>
  <div class="col-md-1">
        <ul class="fooCon">
          <li id="careers" class="text-right"><button type="button" style="color: #000000" class="btn btn-link"><small>Вакансии</small></button></li>
        </ul>
  </div>
  <div class="col-md-2" align="left">
        <ul class="fooCon">
    <li id="partners" class="text-left"><button type="button" style="color: #000000" class="btn btn-link"><small>Партнерам</small></button></li>
        </ul>
  </div>
</div>
</div>
</div>
<div class="modal" id="modal">
<div class="modal-dialog" id="modalD">
<div class="modal-content" id="modalC">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4>Закажите обратный звонок</h4>
</div>
<div class="modal-body">
<fieldset>
<form method="post" action="/mail.php" id="contactUs" name="form1" 
  title="Связаться с нами">                
            <input type="text" id="nameUser" name="UserName" size="43" maxlength="60" required="UserName" placeholder="Ваше имя*"></input>
            <br><br>
            <input type="email" id="mailUser" name="e-mail" size="43" maxlength="60" placeholder="Ваш e-mail"></input>
            <br><br>
            <input type="text" id="phoneUser" name="UserPhone" size="43" required="UserPhone" placeholder="+375-29-1234567" pattern="\+375\(29|33|44|25|17\)\-\([0-9]{7,7})"></input><br><br>
            <textarea name="message" size="40" cols="42" rows="5" placeholder="Введите ваше сообщение..."></textarea><br><br>
            <button type="submit" class="btn btn-default" id="sendMessage" name="send">Отправить</button>
    </form>
    </fieldset>
    </div>
</div>
</div>
</div>
</div>
</body>


</html>