<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Elegant Login Form</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="/css/login.css">

    
    
    
  </head>

  <body>

    <form class="login" method="POST">
    {{ csrf_field() }}
  <fieldset>
    
    <legend class="legend">Login</legend>
    
    <div class="input">
      <input type="text" placeholder="Email" name="email" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
    <div class="input">
      <input type="password" placeholder="Password" name="password" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    
    <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
    
  </fieldset>
  
  <div class="feedback">
    login successful <br />
    redirecting...
  </div>
  
</form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="/js/index.js"></script>

    
    
    
  </body>
</html>
