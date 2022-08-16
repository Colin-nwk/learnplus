 <div id="wrapper">
     <div class="topbar">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 text-left">
                     <p><i class="fa fa-graduation-cap"></i> Best learning management template for ever.</p>
                 </div>
                 <div class="col-md-6 text-right">
                     <ul class="list-inline">
                         <li>
                             <a class="social" href="#"><i class="fa fa-facebook"></i></a>
                             <a class="social" href="#"><i class="fa fa-twitter"></i></a>
                             <a class="social" href="#"><i class="fa fa-google-plus"></i></a>
                             <a class="social" href="#"><i class="fa fa-linkedin"></i></a>
                         </li>

                         <?php if (!Auth::logged_in()) : ?>
                         <li class="dropdown">
                             <a class="dropdown-toggle" href="<?= ROOT ?>/login"><i class="fa fa-lock"></i>
                                 Login
                             </a>
                         </li>
                         <?php endif; ?>
                         <!-- <li class="dropdown">
                             <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i>
                                 Login & Register</a>
                             <div class="dropdown-menu">
                                 <form method="post">
                                     <div class="form-title">
                                         <h4>Login Area</h4>
                                         <hr>
                                     </div>
                                     <input class="form-control" type="text" name="username" placeholder="User Name">
                                     <div class="formpassword">
                                         <input class="form-control" type="password" name="password"
                                             placeholder="******">
                                     </div>
                                     <div class="clearfix"></div>
                                     <button type="submit" class="btn btn-block btn-primary">Login</button>
                                     <hr>
                                     <h4><a href="#">Create an Account</a></h4>
                                 </form>
                             </div>
                         </li> -->
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <header class="header">
         <div class="container">
             <div class="hovermenu ttmenu">
                 <div class="navbar navbar-default" role="navigation">
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                             data-target=".navbar-collapse">
                             <span class="sr-only">Toggle navigation</span>
                             <span class="fa fa-bars"></span>
                         </button>
                         <div class="logo">
                             <a class="navbar-brand" href="<?= ROOT; ?>"><img
                                     src="<?= ROOT ?>/front/images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png" alt=""></a>
                         </div>
                     </div>
                     <div class="navbar-collapse collapse">
                         <ul class="nav navbar-nav">

                             <li><a href="<?= ROOT; ?>">Home</a></li>
                             <li><a href="page-about">About</a></li>
                             <li><a href="page-about">Course</a></li>
                             <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown"
                                     class="dropdown-toggle">Features <b class="fa fa-angle-down"></b></a>
                                 <ul class="dropdown-menu">
                                     <li>
                                         <div class="ttmenu-content">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="box">
                                                         <ul>
                                                             <li>
                                                                 <a href="page-services">Our Services</a>
                                                             </li>
                                                             <li>
                                                                 <a href="page-contact">Contact Us</a>
                                                             </li>
                                                             <li>
                                                                 <a href="page-pricing">Pricing Tables</a>
                                                             </li>
                                                             <li>
                                                                 <a href="page-shortcodes">Shortcodes</a>
                                                             </li>

                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="box">
                                                         <ul>
                                                             <li>
                                                                 <a href="page-shop">Shop Layout</a>
                                                             </li>
                                                             <li>
                                                                 <a href="page-shop-single">Shop Single</a>
                                                             </li>
                                                             <li>
                                                                 <a href="page-shop-single-alt">Shop Single
                                                                     Alt</a>
                                                             </li>
                                                             <li>
                                                                 <a href="page-shop-cart">Shopping Cart</a>
                                                             </li>

                                                         </ul>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </li>
                             <li><a href="forums">Community</a></li>
                             <li><a href="blog">Blog</a></li>
                             <li><a href="page-contact">Contact</a></li>
                         </ul>


                         <ul class="nav navbar-nav navbar-right">

                             <?php if (!Auth::logged_in()) : ?>
                             <li>
                                 <a class="btn btn-primary" href="<?= ROOT; ?>/signup">
                                     <i class="fa fa-sign-in"></i>
                                     Signup Now</a>
                             </li>
                             <?php else : ?>
                             <li>
                                 <a class="btn btn-primary" href="<?= ROOT; ?>/logout">
                                     <i class="fa fa-logout"></i>
                                     Logout
                                 </a>
                             </li>
                             <?php endif; ?>


                             <!-- <li><a href="<?= ROOT; ?>/login">login</a></li> -->

                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </header>