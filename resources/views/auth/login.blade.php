<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/auth/style.css">
    <script src="/auth/script.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="{{route('authenticate')}}" method="POST">
        @csrf
      <input type="email" name="email" placeholder="Email"/>
      <input type="password" name="password" placeholder="Password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>