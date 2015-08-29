<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>آرت‌گالریز | ارتباط با ما</title>
    <meta name="keywords" content="برنامه, گالری, نمایشگاه, هنر, تهران">
    <meta name="description" content="راه‌های ارتباط با آرت‌گالریز | سعادت‌آباد، بلوار دریا، خیابان مطهری شمالی | 88562615">
    <meta name="author" content="مهدی فرنگ">
    <link rel="icon" href="../img/fav-ArtGalleries.gif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="../css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/hover.css" media="all">
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
                    <a href="../en/contact.php"><i class="icon icon-ennn-01"></i></a>
                    <a href="../en/contact.php"><p class="language"><span>•&nbsp;</span>Fa / En<span>&nbsp;•</span></p></a>
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
            <div id="contact" class="">
                <h2 class="">تماس با ما</h2>
                <p>.......................</p>
                <h3 class=''>لطفا فرم زیر پر کنید:</h3>
                <form action="http://formspree.io/formspree@farmah.33mail.com" method="POST" class="">
                    نام:<br>
                    <input type="text" name="firstname" class="fa-margin-top">
                    <br>
                    <br>
                    پست الکترونیک:<br>
                    <input type="email" name="email" class="fa-margin-top">
                    <br>
                    <br>
                    تلفن:<br>
                    <input type="text" name="phone" class="fa-margin-top">
                    <br>
                    <br>
                    متن پیام:<br>
                    <textarea name="message" rows="10" cols="30" class="fa-margin-top"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="ارسال">
                    <input type="text" name="_gotcha" style="display:none" />
                    <input type="hidden" name="_next" value="thanks.php" />
                </form>
            </div>
            <div id="meet" class="">
                <p>..........................................................</p>
                <h3><span class="fa fa-map-marker fa-fw"></span>
                    سعادت‌آباد، بلوار دریا، خیابان مطهری شمالی، پلاک 15، واحد 6
                </h3>
                <h3 class="margintop"><span class="fa fa-phone fa-fw"></span>
                    88562615 (021)
                </h3>
                <h3 class="margintop"><span class="fa fa-envelope fa-fw"></span>
                    info@artgalleries.ir
                </h3>   
                
            </div>
        </div>
    </div>
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Organization",
          "name" : "ArtGalleries",
          "url" : "http://artgalleries.ir",
          "logo" : "http://artgalleries.ir/logo.png",
          "contactPoint" : [{
            "@type" : "ContactPoint",
            "telephone" : "+98-21-885-62615",
            "contactType" : "customer service"
          }],
          "sameAs" : [
            "http://www.twitter.com/artgalleriesir"
          ]
        }
    </script>
</body>
</html>