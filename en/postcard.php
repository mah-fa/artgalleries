<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArtGalleries | PostCard</title>
    <meta name="keywords" content="Art, Gallery, Exhibition, Tehran">
    <meta name="description" content="Invite your friends to art and exhibitions in tehran via postcard">
    <meta name="author" content="Mahdi Farang">
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
            <div class="wrapper">
                <div class="menu-item">
                    <a href="../en/"><i class="icon icon-pet68"></i></a>
                    <a href="../en/"><p><span>•&nbsp;</span>Home<span>&nbsp;•</span></p></a>
                </div>
                <div class="menu-item">
                    <a href="postcard.php"><i class="icon icon-postcard3"></i></a>
                    <a href="postcard.php"><p><span>•&nbsp;</span>Send PostCard<span>&nbsp;•</span></p></a>
                </div>
                <div class="menu-item">
                    <a href="contact.php"><i class="icon icon-phone378-1"></i></a>
                    <a href="contact.php"><p><span>•&nbsp;</span>Contact Us<span>&nbsp;•</span></p></a>
                </div>
                <div class="menu-item">
                    <a href="../fa/postcard.php"><i class="icon icon-faaa-02"></i></a>
                    <a href="../fa/postcard.php"><p class="language"><span>•&nbsp;</span>Fa / En<span>&nbsp;•</span></p></a>
                </div>
            </div>
        </div>
        <div id="date">
            <p><?php echo date("F j")?></p>
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
            <div id="postcard">
                <h2>Postcard</h2>
                <p>......................</p>
                <h3>Send postcard of art axhibitions to your friends and invite them to the gallery.</h3>
                <form action="http://formspree.io/formspree@farmah.33mail.com" method="POST">
                   
                    Art Exhibition<span>*</span>:<br>
                    <select name="item">
                        <option value="item01">Be With U</option>
                        <option value="item02">Nothin to You</option>
                        <option value="item03">Blue Sky</option>
                        <option value="item04">Nothing to Show</option>
                        <option value="item05">Me and My Songs</option>
                        <option value="item06">To The End oF Night</option>
                        <option value="item07">Seems Like Sun</option>
                        <option value="item08">Green Fowers</option>
                        <option value="item09">Its About Love</option>
                        <option value="item10">Mixed Mind</option>
                    </select>
                    <br>
                    <br>
                    From:<br>
                    <input type="text" name="from" placeholder="your name as sender (optinal)">
                    <br>
                    <br>
                    To<span>*</span>:<br>
                    <input type="email" name="to" placeholder="recipient name">
                    <br>
                    <br>
                    Postal Code:<br>
                    <input type="text" name="postalcode" placeholder="recipient postal code (optinal)">
                    <br>
                    <br>
                    Adress<span>*</span>:<br>
                    <textarea name="address" rows="10" cols="30" placeholder="recipient address"></textarea>
                    <br>
                    <br>
                    Message:<br>
                    <textarea name="postcard_message" rows="10" cols="30" placeholder="write a message on your postcard"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="Send">
                    <input type="text" name="_gotcha" style="display:none" />
                    <input type="hidden" name="_next" value="thanks.php" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>