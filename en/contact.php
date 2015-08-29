<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArtGalleries | Contact Us</title>
    <meta name="keywords" content="Art, Gallery, Exhibition, Tehran">
    <meta name="description" content="How to contact with ArtGalleries | North Motahhari Ave, Darya Blvd, Sa'adat Abad | +98 21 88562615">
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
                    <a href="../fa/contact.php"><i class="icon icon-faaa-02"></i></a>
                    <a href="../fa/contact.php"><p class="language"><span>•&nbsp;</span>Fa / En<span>&nbsp;•</span></p></a>
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
            <div id="contact">
                <h2 class="en">Contact us</h2>
                <p>.......................</p>
                <h3 class='en'>Please fill out the form below and we will get in touch with you;</h3>
                <form action="http://formspree.io/formspree@farmah.33mail.com" method="POST">
                    Name:<br>
                    <input type="text" name="firstname">
                    <br>
                    <br>
                    E-mail:<br>
                    <input type="email" name="email">
                    <br>
                    <br>
                    Phone:<br>
                    <input type="text" name="phone">
                    <br>
                    <br>
                    Message:<br>
                    <textarea name="message" rows="10" cols="30"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="Send">
                    <input type="text" name="_gotcha" style="display:none" />
                    <input type="hidden" name="_next" value="thanks.php" />
                </form>
            </div>
            <div id="meet">
                <p>..........................................................</p>
                <h3><span class="fa fa-map-marker fa-fw"></span>
                    Unit 6, NO 15, North Motahhari Ave, Darya Blvd, Sa'adat Abad.
                </h3>
                <h3 class="margintop"><span class="fa fa-phone fa-fw"></span>
                    +98 21 88562615
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