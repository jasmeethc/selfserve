<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <style>
        .main{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
        }
        .form{
            display:flex;
            margin-top:50px;
            justify-content:space-between;
            flex-direction:column;
            align-items:center;
            height:300px;
        }
        input{
            font-size:20px;
            width:400px;
            height:40px;
        }
        .submit{
            font-size: 20px;
        }
    </style>
    <div class="main">
        <h1>Login page</h1>
        <form method="post" class="form">
            <input type="text" placeholder="Enter your email">
            <input type="password" placeholder="Enter your password">
            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>