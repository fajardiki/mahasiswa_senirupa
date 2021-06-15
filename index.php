<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .jumbotron {
        height: 500px;
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        background-color: red;
    }
    img {
        height: 500px;
        width: 100%;
    }
    .header {
        height: 40px;
        background-color: orange;
        position: relative;
        left: 0;
        right: 0;
        margin-top: 3px;
        text-align: center;
        padding-top: 20px;
        font-size: 20px;
    }
    .content {
        height: 100%;
        background-color: yellow;
        margin-top: 3px;
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }
    .footer {
        height: 40px;
        background-color: orange;
        text-align: center;
        padding-top : 20px;
        margin-top: 3px;
        font-size: 20px;
    }
    a, b {
        color: white;
    }
    </style>
</head>
<body>
    <div class="jumbotron">
        <img src="img/desain web.jpg" alt="">
    </div>
    <div class="header">
        <tr class="nravbar">
            <td><a href="index.php?page=home">HOME</a>  |  </td>
            <td><a href="index.php?page=profile">PROFILE</a>  |  </td>
            <td><a href="index.php?page=program_kerja">PROGRAM KERJA</a>  |  </td>
            <td><a href="index.php?page=kontak">KONTAK</a>  |  </td>
        </tr>
    </div>
    <div class="content">
        <?php if(isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home' : 
                    include 'home.php';
                    break;
                case 'profile' : 
                    include 'profile.php';
                    break;
                case 'program_kerja' : 
                    include 'program_kerja.php';
                    break;
                case 'kontak' : 
                    include 'kontak.php';
                    break;
                default :
                    include 'home.php';
                    break;
            }
        } ?>
    </div>
    <div class="footer">
        <b>KKN UNESA MERDEKA BELAJAR</b>
    </div>
</body>
</html>