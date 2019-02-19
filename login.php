<?php
// core configuration
//include_once "config/core.php";

// set page title
$page_title = "Register";

// include login checker
//include_once "login_checker.php";

// include classes
include_once 'config/database.php';
include_once 'objects/user.php';
//include_once "libs/php/utils.php";

// include page header HTML
//include_once "layout_head.php";

if($_POST){

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    $user->firstname=$_POST['firstname'];
    $user->lastname=$_POST['lastname'];
    $user->email=$_POST['email'];

    // create the user
if($user->create()){

    echo "<div class='alert alert-info'>";
        echo "Successfully registered. <a href='{$home_url}login'>Please login</a>.";
    echo "</div>";
    }else{
    echo "<div class='alert alert-danger' role='alert'>Unable to register. Please try again.</div>";
}
}
?>
<form action='register.php' method='post' id='register'>

    <table class='table table-responsive'>

        <tr>
            <td class='width-30-percent'>Firstname</td>
            <td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>

        <tr>
            <td>Lastname</td>
            <td><input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
 <tr>
            <td>Email</td>
            <td><input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
        <td></td>
            <td>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span> Register
                </button>
            </td>
        </tr>

    </table>
</form>

