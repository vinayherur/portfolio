<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vinay Herur::Home</title>
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="menu mobile-only">
            <ul>
                <li class='expander'><i class="fa fa-bars" aria-hidden="true"></i></li>
                <li class="logo"><strong>Vinay</strong>Herur</li>
            </ul>
        </nav>
        <nav class="menu main-menu">
            <ul>
                <li class="menu-item"><a href='/blog.php'>BLOG</a></li>
                <li class="menu-item"><a href='/work.php'>WORK</a></li>
                <li class="logo"><strong>Vinay</strong>Herur</li>
                <li class="menu-item"><a href='/about.php'>ABOUT</a></li>
                <li class="menu-item"><a href='/contact.php'>CONTACT</a></li>
            </ul>

        </nav>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script>
            $('.expander').click(function(e){
                $('.main-menu').toggleClass('active');
            });
        </script>
    </body>
</html>
    