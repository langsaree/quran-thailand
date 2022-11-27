<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran-th</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="{{ URL::to('css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  
<body>

<div class="topnav fixed-top"> 
<a class="active" href="{{ route('homepage') }}">Quran.th</a>
<ul> 
<li class="list active">
<a  href="{{ route('tafseer_home') }}">
  <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
  <span class="text">ตัฟซีร</span>
</a>
</li>
<li class="list active"> 
<a href="{{ route('login') }}">
  <span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
  <span class="text">เข้าสู่ระบบ</span>
</a>
</li> 
</a>
<li class="list active">
<a href="{{ route('register') }}">
  <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
  <span class="text">สมัคร</span>
</li>
</a>
</a>
<div class="indicator"></div>
</ul> 
<script>
  let list = document.querySelectorAll('.list');
  function setActiveClass(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
  }
  list.forEach((item) =>
  item.addEventListener('mouseover' , setActiveClass))
</script>


  

<div class="search-container">
  <form action="{{ route('web.find') }}" method="GET" class="search-bar">
    <input type="text" placeholder="ค้นหา.." name="query" value="{{ request()->input('query') }}">
    <button type="submit"><ion-icon name="search-outline"></ion-icon</button>
  </form>
  </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<br>
<div style = background-color:#9be2cd; class=" row text-center ">

<!-- Header -->
<header class="masthead  text-white text-center">

<div style = background-color:#9be2cd;>
  <h1 class="jumbotron-heading"></h1>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <br>
    <br>
      <img src="{{ URL::to('img/logo-lg-w.png') }}">
      <br><br>
      <h2 class="text-capitalize lead">พระมหาคัมภีร์อัลกุรอาน</h2>
      <div class="col-md-3"></div>
    </div>

  </div>
</div>
</div>
</header>
</div>

@yield('content')

</div>

<style>footer {
text-align: center;
padding: 3px;
background-color:#9be2cd;
color: white;
}</style>
<body>

<footer>
<p>Quran.th<br>
<p>suraiya1707@gmail.com<p></p>
</footer>

</body>
<div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</div>
</html>
</body>
</html>

            
           
