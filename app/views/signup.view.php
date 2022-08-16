<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= APPNAME; ?> | <?= $title; ?></title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= ROOT; ?>/back/css/app.min.css">
    <!-- <link rel="stylesheet" href="<?= ROOT; ?>/back/bundles/bootstrap-social/bootstrap-social.css"> -->
    <link rel="stylesheet" href="<?= ROOT; ?>/back/bundles/jquery-selectric/selectric.css">
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
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Signup</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="firstname">First Name</label>
                                            <input id="firstname" type="text"
                                                class="form-control <?= !empty($errors['firstname']) ? 'border-danger' : ""; ?>"
                                                name="firstname" value="<?= set_value('firstname'); ?>" required
                                                autofocus />

                                            <?php if (!empty($errors['firstname'])) : ?>
                                            <small class="text-danger">
                                                <?= $errors['firstname'] ?>
                                            </small>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="lastname">Last Name</label>
                                            <input id="lastname" type="text"
                                                class="form-control <?= !empty($errors['lastname']) ? 'border-danger' : ""; ?>"
                                                name="lastname" value="<?= set_value('lastname'); ?>" required />

                                            <?php if (!empty($errors['firstname'])) : ?>
                                            <small class="text-danger">
                                                <?= $errors['firstname'] ?>
                                            </small>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                    <!-- <div class="row"> -->

                                    <div class="form-group ">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control <?= !empty($errors['email']) ? 'border-danger' : ""; ?>"
                                            name="email" value="<?= set_value('email'); ?>" required />
                                        <?php if (!empty($errors['email'])) : ?>
                                        <small class="text-danger">
                                            <?= $errors['email'] ?>
                                        </small>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="form-group col-6 ">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control" name="username"
                                                required> 
                                            <div class="invalid-feedback">
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                    <div class="row">
                                        <div class="form-group col-6">
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
                                        <div class="form-group col-6">
                                            <label for="confirm_password" class="d-block">Password Confirmation</label>
                                            <input id="confirm_password" type="password" class="form-control"
                                                name="confirm_password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input <?= set_value('terms') ? 'checked' : ''; ?> type="checkbox"
                                                name="terms" class="custom-control-input" id="terms" required>
                                            <label class="custom-control-label" for="terms">I agree with the terms and
                                                conditions</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Create Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="mb-2 text-muted text-center">
                                Already Registered? <a href="<?= ROOT; ?>/login">Login</a>
                            </div>
                            <div class="mb-4 text-muted text-center">
                                <a href="<?= ROOT; ?>/">Back To Home</a>
                            </div>
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
    <script src="<?= ROOT; ?>/back/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>