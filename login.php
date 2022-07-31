<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="css/css.css">
    </head>



    <body>
        <main class="container">
            <div class="row center div">
                <form action="login.php"  method="post" class="row center div">
                    <div class="col-md-12 m-2">
                        <input class="form-control" type="text" name="userName" id="userName" reqired placeholder="User Name">
                    </div>
                    <div class="col-md-12 m-2">
                        <input class="form-control" type="text" name="password" id="password" reqired placeholder="Password">
                    </div>
                    <div class="col-md-12 m-2">
                        <input type="submit" name="formBtn" id="fromBtm" value="Login" class="btn btn-primary" >
                    </div>
                </form> 
            </div>
        </main>

        <?php
                if (isset($_POST["formBtn"])){
                    require_once "config/user.php";
                    $userName = $_POST['userName'];
                    $passW = $_POST['password'];
                }
            
        ?>
    </body>
</html>