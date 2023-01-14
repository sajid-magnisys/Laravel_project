<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user . . .</title>
    <style>
    .form_section{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 5;
    }

    </style>

</head>
<body>

  <div class="form_section">
    <h1>Welcome to Laravel</h1>
    <a href="{{url('logout')}}" style="display:block">Logout</a>
  </div>

</body>
</html>