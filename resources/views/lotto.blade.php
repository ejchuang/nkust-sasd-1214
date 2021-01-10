
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
   
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>莊宜潔</title>
    <style>
      body{
        font-family:微軟正黑體;
      
      }
h1{
  background-color: #ffffcc;
}

.header1 {
    width: 100%;
    height: 68px;
    background: #ffe401;
    float: left;
}
.header_tl {
    float: left;
}
img {
    vertical-align: middle;
    width: 320px;
    padding-left: 20px;
}
    .navbar{
      background-color: #2d2d30;
      color: white;
    }
            .navbar-brand,.nav-link{
              color:white;
              font-weight: 800;
    font-size: 22px;
            }
            .navbar-nav a{
              color: white;
            }
           
            
  
  footer {
    background-color:#364c8e;
    color:white;
    padding: 5px;
  }
  .number-container {
  display: block;
}
.number-item {
  border-radius: 30px;
  height: 60px;
  width: 60px;
  display: inline-block;
  position: relative;
  text-align: center;
  margin-right: 10px;
  background-color: #ffbf11;
  color:black;
  font-weight: 800px;
}
.number-item:last-child {
  margin-right: 0;
}
.number-item span {
  position: relative;
  display: inline-block;
  font-family: "Exo 2", sans-serif;
  color: #21201f;
  line-height: 1.4;
  font-weight: 100;
  font-size: 42px;
}
.btn-generate {
  border-radius: 22px;
  border: 1px solid tomato;
  display: inline-block;
  position: relative;
  margin-top: 30px;
  background: transparent;
  font-family: "Exo 2", sans-serif;
  color: tomato;
  font-weight: 100;
  font-size: 22px;
  padding: 9px 15px;
  outline: none;
  cursor: pointer;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
    </style>
 <script type="text/javascript">
  function check()      {
  // 檢查Username欄是否為空白
    if(document.reg.title.value == "") {
       alert("記得先輸入內容再發佈呦!");return false;
   }
  // 上列檢查都通過才送出表單
    else 
      document.reg.submit();
  }

  </script>
  </head>
  <body>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">莊宜潔(J108212113)</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">HOME</a></li>
        <li><a href="/lotto/">樂透</a></li>
        @guest
        <li><a href="/login/">登入</a></li>
        <li><a href="/register/">註冊</a></li>
        @endguest 
        @auth
        <li><a href="/mylogout/">登出</a></li>
        @endauth 
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:80px">


<div class="container" style="margin-bottom:20px" >
<div class="header1">
        <div class="header_tl">
            <a href="#" onclick="window.parent.location.href='index_new.aspx';">
                <img src="https://www.nkust.edu.tw/var/file/0/1000/img/513/182513897.png"></a>
        </div>
    
       
    </div>
        <div class="number-container">
        
        <h1>{{ $today }} 第{{$times}}期</h1>   
        <h2><span style="color:#CC0000">開獎結果</span> 由小到大 : </h2> 
        @foreach ($numbers as $item)
        <div class="number-item">
        <span>{{ $item }}</span>
        </div>
        @endforeach
        <h1>特別號</h1>
        <div class="number-item"><span style="color: red;"><strong>{{$lucky_number}}</strong></span></div>
        </div>
  <div class="text-center">
  <button class="btn-generate" value="refresh" onclick="location.reload()">Lucky Number</button>
  </div>
    </div><!-- /.container -->
    

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <p>Made By EJ (學習用)</p> 
</footer>
</div>





</div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>