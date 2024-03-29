 <?php $this->view('inc/header', $data); ?>
 <section class="grey section">
     <div class="container">
         <div class="row">
             <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                 <div class="blog-wrapper">
                     <div class="row second-bread">
                         <div class="col-md-6 text-left">
                             <h1>Page Not Found</h1>
                         </div>
                         <div class="col-md-6 text-right">
                             <div class="bread">
                                 <ol class="breadcrumb">
                                     <li><a href="#">Home</a></li>
                                     <li class="active">404</li>
                                 </ol>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="blog-wrapper">
                     <div class="blog-desc notfound text-center">
                         <h3>404</h3>
                         <p class="lead">The page you are looking for no longer exists. Perhaps you can return<br>
                             back to the
                             site's homepage and see if you can find what you are looking for. Or, you can try
                             finding<br> it with
                             the information below.</p>
                         <a href="<?= ROOT ?>" class="btn btn-default">Back to homepage</a>
                         <hr class="invis">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php $this->view('inc/footer-ref', $data); ?>