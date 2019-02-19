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


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>thingy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<form action='register.php' method='post' id='register'>

    <table class='table table-responsive'>

        <tr>
            <td class='width-30-percent'>Firstname</td>
            <td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], "ENT_QUOTES") : "";  ?>" /></td>
        </tr>

        <tr>
            <td>Lastname</td>
            <td><input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], "ENT_QUOTES") : "";  ?>" /></td>
        </tr>
 <tr>
            <td>Email</td>
            <td><input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], "ENT_QUOTES") : "";  ?>" /></td>
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

<div class="timeline relative clearfix">
<div class="greystuff"></div><div class="bluestuff" style="height: 4279.33px;"></div>
<!-- year START -->
<div class="row">

<!-- left START -->
<div class="col-md-6 timeline-left">

</div>
<!-- left END -->
<!-- right START -->
<div class="col-md-6 timeline-right">
	<div class="timeline_item timeline_first active" data-height="0">
	<div class="timeline_inner clearfix">
	<span class="timeline_month">December</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/caltex.jpg">
	<div class="space_default"></div>
	<strong class="txt-large txt_blu">First 14 pick up points</strong><br>open at Caltex
	</div>
	</div>
</div>
<!-- right END -->
</div><div class="space_large"></div>
<!-- year END -->
<!-- year START -->
<div class="row">
<div class="timeline_year"><span>2015</span></div>
<!-- right START -->
<div class="col-md-6 timeline-left">
<div class="space_timeline"></div>
	<div class="timeline_item active" data-height="151">
	<div class="timeline_inner">
	<span class="timeline_month">January</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/launch.jpg">
	<div class="space_default"></div>
	<strong class="txt-large txt_blu">Official launch of Pargo</strong>
	<br>First parcel sent and collected
	</div>
	</div>
</div>
<!-- right END -->
<!-- left START -->
<div class="col-md-6 timeline-right">
<div class="space_timeline"></div><div class="space_timeline"></div><div class="space_timeline"></div><div class="space_large"></div><div class="space_medium"></div>
	<div class="timeline_item active" data-height="421">
	<div class="timeline_inner">
	<span class="timeline_month">September</span>
	<div class="row">
		<div class="col-md-5"><img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/logos/OneDayOnly-logo.jpg"></div>
		<div class="col-md-7"><div class="space_medium"></div><strong class="txt-large txt_blu">Click &amp; Collect</strong><br>launched with One Day Only</div>
	</div>
	</div>
	</div>
</div>
<!-- left END -->
</div><div class="space_large"></div>
<!-- year END -->
<!-- year START -->
<div class="row">
<div class="timeline_year"><span>2016</span></div>
<!-- right START -->
<div class="col-md-6 timeline-left">
<div class="space_medium"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="744.650146484375">
	<div class="timeline_inner">
	<span class="timeline_month">February</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/pups_500.jpg">
	<div class="space_default"></div>
	<strong class="txt-large txt_blu">500</strong><br>Pargo points!
	</div>
	</div>
</div>
<!-- right END -->
<!-- left START -->
<div class="col-md-6 timeline-right">
	<div class="space_large"></div><div class="space_large"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="834.650146484375">
	<div class="timeline_inner">
	<span class="timeline_month">September</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/clicks.jpg">
	<div class="space_default"></div>
	<strong class="txt-large txt_blu">Clicks</strong><br>added to the network
	</div>
	</div>
</div>
<!-- left END -->
</div><div class="space_large"></div>
<!-- year END -->
<!-- year START -->
<div class="row">
<div class="timeline_year"><span>2017</span></div>
<!-- right START -->
<div class="col-md-6 timeline-left">
<div class="space_medium"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="1398.916748046875">
	<div class="timeline_inner clearfix">
	<span class="timeline_month">February</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/saad.jpg" class="goleft">
	<div class="space_small"></div><div class="space_medium"></div>
	Series A investment closed with<br>
	<strong class="txt-large txt_blu">SAAD Investment Holdings</strong>
	</div>
	</div>
	<div class="space_medium"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="1682.916748046875">
	<div class="timeline_inner">
	<span class="timeline_month">September</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/tfg_omni_channel.gif">
	<div class="space_default"></div>
	<strong class="txt-large txt_blu">Launch Omni Channel</strong><br>Powered by Pargo solution with TFG
	</div>
	</div>
</div>
<!-- right END -->
<!-- left START -->
<div class="col-md-6 timeline-right">
<div class="space_timeline"></div><div class="space_large"></div><div class="space_medium"></div>
	<div class="timeline_item active" data-height="1488.916748046875">
	<div class="timeline_inner">
	<span class="timeline_month">June</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/office.jpg">
	<div class="space_default"></div>
	<strong class="txt-large txt_blu">Office move</strong><br>
	Moved into new offices in Woodstock, Cape Town
	</div>
	</div>
</div>
<!-- left END -->
</div><div class="space_large"></div>
<!-- year END -->
<!-- year START -->
<div class="row">
<div class="timeline_year"><span>2018</span></div>
<!-- right START -->
<div class="col-md-6 timeline-left">
<div class="space_timeline"></div><div class="space_large"></div><div class="space_medium"></div>
	<div class="timeline_item active" data-height="2315.166748046875">
	<div class="timeline_inner">
	<span class="timeline_month">March</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/lewis.gif">
	<div class="space_default"></div>
	Lewis added to the network
	</div>
	</div>
	<div class="space_medium"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="2584.833251953125">
	<div class="timeline_inner">
	<span class="timeline_month">June</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/fnb_awards.jpg">
	<div class="space_default"></div>
	Pargo one of nine finalists at the prestigious<br><strong class="txt-large txt_blu">FNB Business Innovation Awards</strong>
	</div>
	</div>
	<div class="space_medium"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="3142.283447265625">
	<div class="timeline_inner clearfix">
	<span class="timeline_month">November</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/2000.jpg">
	<div class="space_default"></div>
	<p><strong class="txt-large txt_blu">2000 pick up points</strong> reached</p>
	</div>
	</div>
</div>
<!-- right END -->
<!-- left START -->
<div class="col-md-6 timeline-right">
<div class="space_timeline"></div>
	<div class="timeline_item active" data-height="2225.166748046875">
	<div class="timeline_inner clearfix">
	<span class="timeline_month">February</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/p2p.gif" class="goleft">
	<div class="space_medium"></div>
	<strong class="txt-large txt_blu">Launch of Point to Point</strong>
	<p>Users can now send via the Pargo website</p>
	</div>
	</div>
	<div class="space_medium"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="2468.166748046875">
	<div class="timeline_inner clearfix">
	<span class="timeline_month">April</span>
	<div style="background-image:url(https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/map3.gif);" class="time_round goleft"></div>
	<div class="space_medium"></div>
	<strong class="txt-large txt_blu">1500 pick up points</strong>
	<p>reached</p>
	</div>
	</div>
	<div class="space_medium"></div><div class="space_large"></div>
	<div class="timeline_item active" data-height="2711.166748046875">
	<div class="timeline_inner">
	<span class="timeline_month">October</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/endeavour.jpg">
	<div class="space_default"></div>
	Pargo attended the <strong class="txt-large txt_blu">Endeavor International Selection Panel (ISP)</strong> held in Buenos Aires, Argentina<br>
	</div>
	</div>
	
	
</div>
<!-- left END -->
</div><div class="space_large"></div>
<!-- year END -->
<!-- year START -->
<div class="row">
<div class="timeline_year"><span>2019</span></div>
<!-- right START -->
<div class="col-md-6 timeline-left">
<div class="space_timeline"></div>
	<!-- <div class="space_large"></div><div class="space_medium"></div><div class="timeline_item" data-height="">
	<div class="timeline_inner">
	<span class="timeline_month">March</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/lewis.gif" />
	<div class="space_default"></div>
	Lewis added to the network
	</div>
	</div>-->

</div>
<!-- right END -->
<!-- left START -->
<div class="col-md-6 timeline-right">
<div class="space_timeline"></div>
	<div class="timeline_item active" data-height="3552.216552734375">
	<div class="timeline_inner">
	<span class="timeline_month">January</span>
	<img src="https://pargo.co.za/wp-content/themes/pargo/assets/img/timeline/mascot.gif">
	<div class="space_default"></div>
	Pargo's <strong class="txt-large txt_blu">brand mascot</strong> joins the team<br>
	</div>
	</div>
</div>
<!-- left END -->
</div>
<!-- year END -->
<div class="space_default"></div>
</div>
    
</body>
</html>


