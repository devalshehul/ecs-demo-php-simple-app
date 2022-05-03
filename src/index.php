<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #0000FF;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Welcome to Octank Media and Entertainment Inc</h1>
                <h2>We are world leaders in providing content rich experience </h2>
                <p>Octank Media and Entertainment has been the industry leader in entertaiment industry with a wide variety of content and premium streaming services.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>

	    </div>
	    <div class="hero-unit">
		<h2>About Octank Media</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar venenatis fermentum. Suspendisse potenti. Donec id nisi posuere, suscipit est ut, vehicula dui. Donec magna tortor, gravida ut enim a, vulputate elementum lacus. Praesent aliquam viverra sapien, et porta leo aliquam et. Nulla ut lectus id sapien tristique mattis id in metus. Maecenas tristique mattis tortor, vel feugiat est aliquam eu. Suspendisse sed metus accumsan, sodales quam ut, vulputate sem. Nunc aliquet ligula ante, nec consectetur ipsum maximus vitae.

Donec hendrerit sem vitae magna ullamcorper ornare. Aliquam feugiat sit amet lacus ut lacinia. In viverra eleifend libero, quis ullamcorper leo egestas a. Nam quam urna, mattis id erat id, tempus fermentum ligula. Suspendisse pharetra malesuada interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ut nisi placerat, condimentum urna ut, molestie dolor. Proin dapibus tincidunt enim. Maecenas ut porttitor mi.

Donec id dolor a est pharetra venenatis a vitae dolor. Proin varius mattis ultrices. Aliquam ut velit nibh. Integer ipsum tellus, maximus nec augue venenatis, malesuada lobortis neque. Quisque iaculis diam et ligula imperdiet semper ut scelerisque elit. Nullam malesuada arcu vitae vulputate efficitur. Suspendisse semper efficitur facilisis. Aliquam quis nulla at erat vestibulum condimentum. Duis porta diam lacinia ipsum varius commodo.

Aliquam aliquam suscipit tempus. Integer finibus lacus tincidunt ipsum luctus luctus. Proin ut nibh vel odio molestie vestibulum. Aliquam et finibus est, imperdiet rhoncus orci. Nam fermentum congue accumsan. Morbi a magna pharetra, sodales odio ut, eleifend arcu. In dolor dolor, sagittis sit amet dictum id, finibus vitae sem. Vestibulum iaculis rhoncus risus, eget tempor felis ultrices nec. Cras eget dui lectus. Pellentesque at ligula nunc.

Fusce iaculis ipsum dolor, at rutrum turpis condimentum ac. Cras ultricies cursus hendrerit. In hac habitasse platea dictumst. Donec a libero id sapien ultricies finibus quis vitae purus. Mauris est mi, pharetra et lacus a, mattis tincidunt odio. Etiam auctor ipsum diam, sit amet pharetra turpis ullamcorper id. Nulla gravida mollis mauris, ac pulvinar enim euismod ac. Quisque laoreet sapien tristique enim cursus tincidunt. Integer a elit in mauris congue congue sit amet sit amet nunc. Vivamus vitae tempor ex.</p>
	    </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
