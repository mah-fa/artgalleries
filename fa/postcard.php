<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>آرت‌گالریز | ارسال کارت‌پستال</title>
    <meta name="keywords" content="برنامه, گالری, نمایشگاه, هنر, تهران">
    <meta name="description" content="ارسال کارت‌پستالِ گالری‌ها و نمایشگاه‌های هنری به دوستان">
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
            <div class="wrapper">
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
                    <a href="../en/postcard.php"><i class="icon icon-ennn-01"></i></a>
                    <a href="../en/postcard.php"><p class="language"><span>•&nbsp;</span>Fa / En<span>&nbsp;•</span></p></a>
                </div>
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
        <div class="wrapper">
            <div id="postcard" dir="rtl">
                <h2>کارت‌پستال</h2>
                <p>......................</p>
                <h3>با ارسال کارت‌پستال، دوستانِ‌تان را به نمایشگاه‌ها و گالری‌های هنری دعوت کنید.</h3>
                <form action="http://formspree.io/formspree@farmah.33mail.com" method="POST">
                   
                    نمایشگاه<span>*</span>:<br>
                    <select name="item">
                        <option value="item01">هیچ‌چیز برای نمایش</option>
                        <option value="item02">تلخ چای</option>
                        <option value="item03">خورشید در کرانه</option>
                        <option value="item04">سیمای زنی در جمع</option>
                        <option value="item05">من و اهنگ‌هایم</option>
                        <option value="item06">تاریکی‌های شهر</option>
                        <option value="item07">سنگی بر گوری</option>
                        <option value="item08">گل‌های سبز</option>
                        <option value="item09">مهر و ماه</option>
                        <option value="item10">مستور و مست</option>
                    </select>
                    <br>
                    <br>
                    فرستنده:<br>
                    <input style="font-size:12px; padding-top:-5px !important;" type="text" name="from" placeholder="نام شما (اختیاری)" class="fa-margin-top">
                    <br>
                    <br>
                    گیرنده<span>*</span>:<br>
                    <input style="font-size:12px; padding-top:-5px !important;" type="email" name="to" placeholder="نام گیرنده" class="fa-margin-top">
                    <br>
                    <br>
                    کدپستی:<br>
                    <input style="font-size:12px; padding-top:-5px !important;" type="text" name="postalcode" placeholder="کد پستی گیرنده (اختیاری)" class="fa-margin-top">
                    <br>
                    <br>
                    نشانی<span>*</span>:<br>
                    <textarea style="font-size:12px; padding-top:-5px !important;" name="address" rows="10" cols="30" placeholder="نشانی گیرنده" class="fa-margin-top"></textarea>
                    <br>
                    <br>
                    متن پیام:<br>
                    <textarea style="font-size:12px; padding-top:-5px !important;" name="postcard_message" rows="10" cols="30" placeholder="متن پیام دلخواه شما جهت درج در کارت‌پستال" class="fa-margin-top"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="تایید">
                    <input type="text" name="_gotcha" style="display:none" />
                    <input type="hidden" name="_next" value="thanks.php" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>