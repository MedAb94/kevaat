<?php
require_once 'php_action/db_connect.php';

session_start();

if (isset($_SESSION['userId'])) {
    header('location: http://localhost/kevaat/admin/index.html');
}

$errors = array();

if ($_POST) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        if ($username == "") {
            $errors[] = "Nom d'utilisateur obligatoire";
        }

        if ($password == "") {
            $errors[] = "Le mot de passe est obligatoire";
        }
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $connect->query($sql);

        if ($result->num_rows == 1) {
            $password = md5($password);
            // exists
            $mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $mainResult = $connect->query($mainSql);

            if ($mainResult->num_rows == 1) {
                $value = $mainResult->fetch_assoc();
                $user_id = $value['user_id'];

                // set session
                $_SESSION['userId'] = $user_id;

                header('location: http://localhost/kevaat/admin/index.php');
            } else {

                $errors[] = "Incorrect username/password combination";
            } // /else
        } else {
            $errors[] = "Le nom d'utilisateur n'existe pas";
        } // /else
    } // /else not empty username // password

} // /if $_POST
?>

<!DOCTYPE html>
<head>
    <title>Kevaat - Admin</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap theme-->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap-theme.min.css">
    <!-- font awesome -->

    <!-- custom css -->
    <link rel="stylesheet" href="custom/css/custom.css">

    <!-- jquery -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- jquery ui -->


    <!-- bootstrap js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">


    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4">
            <h3 class="text-white bg-primary rounded-top mt-5 w-100 mb-0 text-center">vous devez vous connecter</h3>

            <div class=" align-content-center border border-primary">
                <div class="messages">
                    <?php if ($errors) {
                        foreach ($errors as $key => $value) {
                            echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									' . $value . '</div>';
                        }
                    } ?>
                </div>

                <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
                    <div class="form-group">
                        <div class="m-4">
                            <label for="username" class="control-label font-weight-bold">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                   autocomplete="off"/>
                        </div>
                    </div>
                    <div class="form-group m-4">
                        <label for="password" class="col-sm-2 control-label font-weight-bold">Password</label>

                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                               autocomplete="off"/>
                    </div>
                    <div class="form-group align-content-center text-center">
                        <button type="submit" class="btn btn-primary"> Connecter
                        </button>
                    </div>
                </form>
            </div>


        </div>
        <div class="col-md-4"></div>

    </div>

</div>
<!-- container -->
</body>
</html>






	