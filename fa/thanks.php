<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>آرت‌گالریز | برنامه‌ی گالری‌های تهران</title>
    <meta name="keywords" content="برنامه, گالری, نمایشگاه, هنر, تهران">
    <meta name="description" content="آگاهی از برنامه‌ی گالری‌ها و نمایشگاه‌های هنری در تهران">
    <meta name="author" content="مهدی فرنگ">
    <link rel="icon" href="../img/fav-ArtGalleries.gif" type="image/gif" sizes="16x16">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="side">
        <div id="header">
            <div id="logo">
                <img src="../img/logo.png" alt="">
            </div>
        </div>
        <div id="motto">
            <p>Art and Exhibitions in Tehran</p>
        </div>
        <div id="menu">
            <div class="wrapper" dir="rtl">
                <div class="menu-item" style="float:right !important;">
                    <a href="../fa/"><i class="icon icon-pet68"></i></a>
                    <a href="../fa/"><p><span>•&nbsp;</span>خانه<span>&nbsp;•</span></p></a>
                </div>
                <div class="menu-item" style="float:right !important;">
                    <a href="postcard.php"><i class="icon icon-postcard3"></i></a>
                    <a href="postcard.php"><p><span>•&nbsp;</span>ارسال کارت‌پستال<span>&nbsp;•</span></p></a>
                </div>
                <div class="menu-item" style="float:right !important;">
                    <a href="contact.php"><i class="icon icon-phone378-1"></i></a>
                    <a href="contact.php"><p><span>•&nbsp;</span>ارتباط با ما<span>&nbsp;•</span></p></a>
                </div>
                <div class="menu-item" style="float:right !important;">
                    <a href="../en/thanks.php"><i class="icon icon-ennn-01"></i></a>
                    <a href="../en/thanks.php"><p class="language"><span>•&nbsp;</span>Fa / En<span>&nbsp;•</span></p></a>
                </div>
            </div>
        </div>
        <div id="date">
            <p style="direction:rtl; text-align:left;">
                <?php 
                    require_once dirname(__FILE__) . '/jdatetime.class.php';
                    echo jDateTime::date('j F');
                ?>
            </p>
        </div>
        <div id="follow">
            <p>Follow Us On<a href="https://twitter.com/artgalleriesir" target="_blank"><span class="fa fa-twitter fa-fw"></span></a></p>
        </div>
        <div id="copyright">
            <p>© 2015 artgalleries.ir All Rights Reserved</p>
        </div>
    </div>
    <div id="content">
        <div class="wrapper" dir="rtl">
            <div id="thanks" style="font-family:'Raleway','lightexpanded'; margin-top:10%; line-height:130%">
                با تشکر، درخواست شما ثبت گردید. آرت‌گالریز به‌زودی به آن رسیدگی می‌کند و نتیجه را به اطلاع شما می‌رساند.
            <br>
            <br>
            <a href="index.php" style="text-decoration:none; color:#784d5b;">
                <span>•&nbsp;</span>بازگشت<span>&nbsp;•</span>
            </a>
            </div>
        </div>
    </div>
</body>
</html>