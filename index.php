<!DOCTYPE html>

<html lang="">

<head>
<title>My Personal Website</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<!--start of navigation of the website -->
<?php include 'topNav.php';?>

<!-- End of the top navigator-->

<div class="bgded overlay" style="background-image:url('images/jamWel.jpg'); background-position:top;">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading" style="font-family:bi;">Hi, I'm Jamicah Bernandino</h3>
      <p>Welcome to my simple website. Please feel free to browse.</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80 elements elements-four">
        <li class="one_quarter">
          <article><a href="pages/AboutMe.php"><i class="fas fa-info"></i></a>
            <h6 class="heading">About me</h6>
            <p> </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="pages/gallery.php"><i class="fas fa-camera"></i></a>
            <h6 class="heading">Gallery</h6>
            <p> </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-calendar-plus"></i></a>
            <h6 class="heading">Extras</h6>
            <p> </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-phone"></i></a>
            <h6 class="heading">Contact Me</h6>
            <p></p>
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <section class="group shout">
      <figure class="one_half first"><img src="images/demo/546x356.png" alt="">
        <figcaption class="heading"><a href="#">Accumsan placerat</a></figcaption>
      </figure>
      <figure class="one_half"><img src="images/demo/546x356.png" alt="">
        <figcaption class="heading"><a href="#">Scelerisque etiam</a></figcaption>
      </figure>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
  <section id="services" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Quis leo hendrerit lectus morbi</p>
      <h6 class="heading font-x2">Justo mauris tempus pharetra</h6>
    </div>
    <ul class="nospace group elements elements-three">
      <li class="one_third">
        <article><a href="#"><i class="fas fa-hourglass-half"></i></a>
          <h6 class="heading">Sociis natoque penatibus</h6>
          <p>Interdum at congue semper purus nullam quis odio id justo accumsan ullamcorper maecenas vel arcu nulla tincidunt elit ornare.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-paw"></i></a>
          <h6 class="heading">Magnis parturient montes</h6>
          <p>Urna proin venenatis eros viverra ultrices fringilla lectus urna consequat erat eget scelerisque ligula felis nec neque nam.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-sliders-h"></i></a>
          <h6 class="heading">Nascetur ridiculus aenean</h6>
          <p>Vitae ipsum vitae velit porttitor aliquam in quam aliquam ullamcorper sem a auctor dapibus nisi nunc vehicula nunc quis mattis.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-tty"></i></a>
          <h6 class="heading">Ullamcorper neque phasellus</h6>
          <p>Pede turpis at elit nunc at urna sed ligula vivamus vel erat at diam imperdiet pharetra quisque justo turpis mattis ut vitae.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-table"></i></a>
          <h6 class="heading">Aliquet lacus nulla erat</h6>
          <p>Tortor aenean leo ipsum elementum non cursus eu interdum ut risus proin risus nibh viverra eget lobortis feugiat egestas in nisl.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-hand-holding-usd"></i></a>
          <h6 class="heading">Aliquam volutpat curabitur</h6>
          <p>Fusce dignissim neque vitae justo aenean ac urna et leo posuere pretium nunc bibendum enim quis imperdiet elementum dui dolor.</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>



<!--footer start-->
<?php include 'pages/footer.php';?>
<!--End footer-->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up`"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>