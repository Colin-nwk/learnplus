<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= APPNAME; ?> | <?= $title; ?></title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= ROOT; ?>/back/css/app.min.css">
    <link rel="stylesheet" href="<?= ROOT; ?>/back/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= ROOT; ?>/back/css/style.css">
    <link rel="stylesheet" href="<?= ROOT; ?>/back/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="<?= ROOT; ?>/back/css/custom.css">
    <link rel="shortcut icon" href="<?= ROOT ?>/front/images/favicon.ico" type="image/x-icon" />
</head>

<body>
    <!-- <div class="loader"></div> -->
    <div id="app">


        <section class="section">
            <div class="container mt-5 pt-5">

                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="#" class="needs-validation" novalidate="">

                                    <!-- </div>
                                    <div class="form-group"> -->
                                    <?php if (message()) : ?>
                                    <div class="alert alert-info text-center"><?= message('', true) ?></div>
                                    <?php endif; ?>

                                    <?php if (!empty($errors['email'])) : ?>
                                    <div class="alert alert-danger text-center">
                                        <?= $errors['email'] ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group ">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control <?= !empty($errors['email']) ? 'border-danger' : ""; ?>"
                                            name="email" value="<?= set_value('email'); ?>" required autofocus />

                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password"
                                            class="form-control pwstrength <?= !empty($errors['password']) ? 'border-danger' : ""; ?>"
                                            data-indicator="pwindicator" name="password" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                        <?php if (!empty($errors['password'])) : ?>
                                        <small class="text-danger">
                                            <?= $errors['password'] ?>
                                        </small>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="<?= ROOT; ?>/signup">Signup</a>
                        </div>
                        <div class="mt-2 text-muted text-center">
                            <a href="<?= ROOT; ?>/">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="<?= ROOT; ?>/backjs/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="<?= ROOT; ?>/back/js/scripts.js"></script>
    <!-- Custom JS File -->
    <sc ript src="<?= ROOT; ?>/back/js/custom.js"></sc>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>