<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title> 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">  
    <style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Open+Sans);
html { width: 100%; height:100%; overflow:hidden; }
body { 
 width: 100%;
 height:100%;
 font-family: 'Open Sans', sans-serif;
 background: #092756;
 background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
 background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
 background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
 
input { 
 width: 100%; 
 margin-bottom: 10px; 
 background: rgba(0,0,0,0.3);
 border: none;
 outline: none;
 padding: 10px;
 font-size: 13px;
 color: #fff;
 text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
 border: 1px solid rgba(0,0,0,0.3);
 border-radius: 4px;
 box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
 -webkit-transition: box-shadow .5s ease;
 -moz-transition: box-shadow .5s ease;
 -o-transition: box-shadow .5s ease;
 -ms-transition: box-shadow .5s ease;
 transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
 
    </style>
  </head>
 
  <body>
 
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<center>
<p><img src="assets/img/logo_sigap.jpg" width="261" height="60"></p>
<p><h3>IT MANAGEMENT SYSTEM</h3></p>
</center>
</div>
<div class="modal-body">
<form method="post" action="page/auth.php" class="form col-md-12 center-block">
<div class="form-group">
<input type="text" class="form-control input-lg" placeholder="NPK" name="username">
</div>
<div class="form-group">
<input type="password" class="form-control input-lg" placeholder="Password" name="password">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
</div>
</form>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
  </body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>