<!doctype html>
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
           
          
            .tableth th {
    background-color: #374C8F;
    color: white !important;
    font-weight: 600;
    font-size: 20px;
    text-align: center;
}
.carousel-inner img {
   
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  footer {
    background-color:#364c8e;
    color:white;
    padding: 5px;
  }
th{
  text-align: center;
}
  .toTop {
    display: none;
    position: fixed;
    bottom: 1.5em;
    width: 46px;
    height: 46px;
    border: 0;
    background: rgba(0,0,0,.6);
    border-radius: 8px;
    cursor: pointer;
    z-index: 999;
    right: 1.5em;
    color: white;
    
}

.toTop i {
    color: rgba(0,0,0,0);
}
::-webkit-scrollbar {
    width: 8px;
    height: 4px;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
}
::-webkit-scrollbar-thumb {
    background: #286090;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
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

<div class="logo">
<h1 style="margin:0;"><a href="/" title="國立高雄科技大學"><img alt="國立高雄科技大學 校徽 LOGO" height="" src="https://www.nkust.edu.tw/var/file/0/1000/img/513/182513897.png" width="400"> </a></h1>
</div>

</div>
</div>
<div class="container" style="margin-top:20px">
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://www.nkust.edu.tw/var/file/0/1000/randimg/mobileadv_658_1619868_27526.jpg" alt="New York" width="1200" height="700">    
      </div>
      <div class="item">
        <img src="https://www.nkust.edu.tw/var/file/0/1000/randimg/mobileadv_1464_8180706_27519.jpg" alt="Chicago" width="1200" height="700">           
      </div>   
      <div class="item">
        <img src="https://www.nkust.edu.tw/var/file/0/1000/randimg/mobileadv_1912_900483_07708.jpg" alt="Los Angeles" width="1200" height="700">         
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div class="container" style="margin-top:20px">
  <!-- 只有登入者才有權限 -->
@auth
<form method='GET' action="/insert/" style="margin-bottom:20px"  onsubmit='check();return false;'id='reg' name='reg'>
@csrf
最新消息 : <input type=text size=40 name=title >
<input type=submit value="發佈" class="btn btn-success">
</form>
@endauth
<div class="table-responsive">
<table class="table table-striped table-hover"> 
    <tr class="tableth">
      <th width="100px" >編號</th><th>最新消息</th><th width="150px">張貼時間</th>@auth<th width="100px">編輯</th> @endauth 
    </tr>
    @foreach ($titles as $item)
    <tr>
      <td> <strong>{{$item->id}}</strong> </td>
      <td> {{$item->title}} </td>
      <td> {{$item->created_at}} </td>
      @auth
      <td>
      
      <a href={{'delete/' .$item->id}} ><button onClick="return confirm('你確定要刪除[{{$item->title}}]嗎?')"  class="btn btn-danger">刪除</button></a>
      </td>
      @endauth 
    </tr>
   @endforeach
</table>
</div>

<a href="#">
<button class="toTop" title="回到頂部" style="display: inline-block;">
  <span style="font-size:20px"><strong>^</strong></span>
      
  </button></a>
 
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