

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mimar Sinem Kök - Web Site Yönetim Paneli Giriş</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Core JS files -->
    <script src="../global_assets/js/main/jquery.min.js"></script>
    <script src="../global_assets/js/main/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="../assets/js/app.js"></script>
    <!-- /theme JS files -->
</head>

<body>


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">
            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
                <?php
                session_start();


                try {

                    $dsn = 'mysql:host=94.73.147.156;dbname=u0198406_db947;charset=utf8';
                    $user = 'u0198406_web';
                    $password = 'IPwl59G3CUou33L';

                    try {
                        $db = new PDO($dsn, $user, $password);
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch (PDOException $e) {
                        echo 'Connection failed: ' . $e->getMessage();
                    }
                } catch (PDOException $e) {
                    echo "Connection failed : ". $e->getMessage();
                }


                if(isset($_SESSION['login']))
                {
                    if($_SESSION['login'] == 1)
                    {
                        header("Location: ../default.php?page=panel");
                    }

                }

                $Password = isset($_POST['password']) ? $_POST['password'] : '';
                $Email = isset($_POST['email']) ? $_POST['email'] : '';
                $Result="";
                $MControl="";
                $PControl="";


                if($_POST)
                {
                    if(!$Email)
                    {
                        $Result=1;
                    }
                    else
                    {
                        if(!$Password)
                        {
                            $Result=2;
                        }
                        else
                        {
                            $EmailControl = $db->prepare("SELECT * FROM user_table where email='$Email'");
                            $EmailControl->execute();

                            if ($EmailControl->rowCount())
                            {
                                $PasswordControl = $db->prepare("SELECT * FROM user_table where password='$Password'");
                                $PasswordControl->execute();

                                if ($PasswordControl->rowCount())
                                {
                                    $cek = $db->query("select * from user_table where email = '$Email' && password = '$Password' ",PDO::FETCH_ASSOC);
                                    $cek->execute();
                                    $data = $cek->fetch();

                                    if($cek->rowCount())
                                    {
                                        $_SESSION['id'] = $data['id'];
                                        $_SESSION['name'] = $data['name'];
                                        $_SESSION['surname'] = $data['surname'];
                                        $_SESSION['role'] = $data['role'];
                                        $_SESSION['login'] = 1;
                                        $Result=3;


                                    }
                                }
                                else
                                {
                                    $PControl=2;
                                }
                            }
                            else
                            {
                                $MControl=1;
                            }




                        }
                    }
                }

                ?>



                <!-- Login form -->
                <form class="login-form" method="post" >
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Hesabınıza Giriş Yapın</h5>
                                <span class="d-block text-muted">magecode site yönetim paneli</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Mail" value="<?php echo $Email?>">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Şifre" value="<?php echo $Password?>">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="User_Login" id="User_Login" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                            <?php
                            if($Result==1)
                            {
                                echo "<div class=\"alert alert-danger alert-dismissible\">mail adresi girmelisiniz.</div>";


                            }

                            if($Result==2)
                            {
                                echo "<div class=\"alert alert-danger alert-dismissible\">şifre girmelisiniz.</div>";
                            }

                            if($Result ==3)
                            {
                                header( "refresh:7;url=../default.php?page=panel" );
                                echo "<div class=\"alert alert-success alert-success\">
                                      <div class=\"row justify-content-center\">
                                          <div class=\"col-3\">
                                                <div class=\"pace-demo text-center\">
                                                    <div class=\"theme_xbox_sm\" style=\"margin-left: -50px\">
                                                        <div class=\"pace_progress\" data-progress-text=\"60%\" data-progress=\"60\"></div>
                                                        <div class=\"pace_activity\">
                                                    </div>
                                                </div>
                                             </div>
                                         </div>
                                          <div class=\"col-12\">
                                          Giriş Başarılı. Yönlendiriliyorsunuz...
                                          </div>
                                      </div>
                                      </div>
                                      ";
                            }

                            if($MControl==1)
                            {
                                echo "<div class=\"alert alert-danger alert-dismissible\">Mail Adresi Hatalı.</div>";
                            }

                            if($PControl==2)
                            {
                                echo "<div class=\"alert alert-danger alert-dismissible\">Şifre Hatalı.</div>";
                            }


                            ?>
                            <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                        </div>
                    </div>
                </form>
                <!-- /login form -->






            </div>
            <!-- /content area -->
        </div>
        <!-- /inner content -->
    </div>
    <!-- /main content -->

</div>
<!-- /page content -->


<style>

    .pace-demo
    {
        background-color:#dcf3e8;

    }

    .theme_xbox .pace_activity,
    .theme_xbox .pace_activity:after,
    .theme_xbox .pace_activity:before,
    .theme_xbox_lg .pace_activity,
    .theme_xbox_lg .pace_activity:after,
    .theme_xbox_lg .pace_activity:before,
    .theme_xbox_sm .pace_activity,
    .theme_xbox_sm .pace_activity:after,
    .theme_xbox_sm .pace_activity:before
    {
        border:1px solid transparent;
        border-top-color:#0a3320;
        border-radius:50%;
    }

</style>
</body>
</html>