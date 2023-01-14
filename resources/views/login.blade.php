<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user . . .</title>

    <style>
    .form_section {
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

    .form_section .form {
        position: relative;
        width: 380px;
        padding: 40px 0;
        background: whitesmoke;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: sans-serif;
    }

    .form .close {
        position: absolute;
        top: 0;
        right: 0;
        background: whitesmoke;
        width: 38px;
        height: 35px;
        font-size: 14px;
        color: gray;
        font-family: sans-serif;
        text-align: center;
        line-height: 35px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .form .close:hover {
        background: red;
        color: white;
    }

    .form h1 {
        font-size: 1.5rem;
        color: #192876;
        font-family: sans-serif;
        letter-spacing: 0.4px;
        margin-bottom: 50px;
    }

    .form input {
        width: 85%;
        font-size: 16px;
        font-family: sans-serif;
        letter-spacing: 0.4px;
        padding: 8px 15px;
        margin-bottom: 20px;
        outline: none;
        border: 0;
        box-sizing:border-box;
        caret-color: deepskyblue;
        border-radius: 4px;
        border: 1.5px solid darkgray;
    }

    .form input:focus {
        border: 1.7px solid #192876;
    }

    .form .pass_note {
        width: 85%;
        display: flex;
        margin-bottom: 10px;
        font-size: 13px;
        color: gray;
    }

    .form .forgot_pass {
        width: 85%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: right;
        margin-bottom: 20px;
        margin-top: -10px;
        margin-bottom: 5px;
    }

    .forgot_pass a {
        color: #177391;
        font-size: 16px;
        text-decoration: none;
        letter-spacing: 0.2px;
    }

    .form .save_info {
        width: 85%;
        display: flex;
        flex-direction: row;
        align-items: center;
        text-align: left;
        margin-bottom: 20px;
        /*	border:2px solid black;*/
    }

    .save_info input[type="checkbox"] {
        width: 18px;
        height: 18px;
        outline: none;
        transform: translateY(50%);
        accent-color: #192876;
    }

    .save_info .content {
        margin-left: 12px;
        font-size: 14px;
        cursor: pointer;
        letter-spacing: 0.3px;
    }

    input[type="submit"] {
        background: #192876;
        outline: none;
        border: 0;
        border-radius: 4px;
        font-size: 16px;
        color: white;
        letter-spacing: 0.5px;
        cursor: pointer;
        padding: 10px 20px;
        margin-bottom: 10px;
        font-family: sans-serif;
        text-transform: capitalize;
    }
    </style>
</head>

<body>

    <div class="form_section">
        <!------ Register form ------>
        
        <form class="form" action="{{url('login')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
           @csrf  
            <h1>Login Now</h1>
            <span class="close" onclick="hide()">X</span>
            <input type="email" name="email" placeholder="Email" autofocus required>
            <input type="password" name="pass" placeholder="Password" required>

            <div class="save_info">
                <input type="checkbox" name="saveInfo" id="check">
                <label class="content" for="check">Remember me</label>
            </div>

            <input type="submit" class="submit" value="login" name="logIn">
        </form>

</body>

</html>