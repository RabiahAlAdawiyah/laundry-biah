<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coiny&family=Gaegu:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #FFE7CC; 
            margin:0; 
            padding:0;
            height:3869px;
        }
        nav {
            position: absolute; 
            width: 1365px;
            height: 90px; 
            left: 0px; top: 0px; 
            background: #D9D9D9; 
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        nav button {
            background-color: #FFE7CC; 
            border:none; 
            border-radius:15px; 
            position: absolute;
            width: 125px;
            height: 35px;
            left: 1210px;
            top: 30px; 
            background: #FFE7CC; 
            box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25); 
            border-radius: 20px; 
            font-family: 'Coiny', cursive; 
            text-decoration: none;
        }
        nav button a {
            font-style: normal; 
            font-weight: 350; 
            font-size: 20px; 
            line-height: 35px; 
            text-align: center; 
            color: #A6A2A2; 
            text-decoration: none;
        }
        .content {
            position: absolute; 
            width: 500px; 
            height: 500px; 
            left: 430px; 
            top: 100px; 
            background: url(logo.png);
            filter: drop-shadow(1px 1px 1px grey);
        }
        .content input {
            position: absolute; 
            width: 550px; 
            height: 30px; 
            left: -30px; 
            top: 400px; 
            background: #BDCDD6; 
            box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25); 
            border-radius: 10px; 
            border:none;
            text-align: center; 
            font-size: 20px;
            color: white; 
            font-family: 'Gaegu', cursive;
        }
        .content button {
            position: absolute; 
            width: 100px; 
            height: 30px; 
            left: 185px; 
            top: 450px; 
            background: #BDCDD6; 
            box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25); 
            border-radius: 20px; 
            border: none; 
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 35px; 
            text-align: center; 
            color: #FFFFFF; 
            border: 1px solid #F8CBA6; 
            font-family: 'Coiny', cursive; 
            text-decoration: none;
        }
        h3{
            position: absolute;
            width: 888px;
            height: 50px;
            left: -200px;
            top: 800px;
            font-family: 'Coiny';
            font-style: normal;
            font-weight: 400;
            font-size: 30px;
            border: none;
            line-height: 53px;
            text-align: center;
            color: #A7727D;
            filter: drop-shadow(1px 1px 1px grey);
        }
    </style>
</head>
<body>
    <nav>
        <button> <a href="/login">Login</a></button>
    </nav>
    <div class="content">
        <input type="search" placeholder="Masukkan Nomor Order Kamu....">
        <button>Cari</button>
        <h3>Mengapa Memilih Laundry Kami?</h3>
    </div>
    <img src="laundry.png" style="position: absolute; width: 50\50px; height: 350px; left: -30px; top: 950px; filter: drop-shadow(1px 1px 1px grey); ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>