<!DOCTYPE html>
<html>
<title>ร้านขายยาราชพฤกษ์</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400&display=swap" rel="stylesheet">
<style>
body,h1 {font-family: "Mitr", sans-serif !important;}
body, html {height: 100%}
.bgimg,body{
    background-image: url('{{ url('/') }}/storage/2.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
 
}
.a{
    font-size: 40px;
    font-weight: 70;
}

</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
  <img src="{{ url('/') }}/storage/1.jpg" style="text-center;margin-top:35px"width="75"><br>
  </div>
  <div class="w3-display-middle">
    <a href="{{ route('login') }}" class="btn btn-primary" role="button">ล็อคอิน</a>
  </div>
</div>

</body>
</html>
