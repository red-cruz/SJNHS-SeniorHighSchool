<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'ajaxdb'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT * 
		FROM grade";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SJNHS - Senior High School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery-2.2.3.min.js"></script> 
<link rel="icon" href="images/logo.png" sizes="16x16"> 
<style type="text/css">
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid black;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: black !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: black;
		}
		.data-table tbody td
		{
			background-color: #f4fbff;
		}
#subMenu .dropdown-menu{
	margin-left:170px;
	margin-top:-20px;
	background:lightgreen;
}
#subMenu:hover{
	opacity:1;
	transition:opacity 1s,left 1s;
}
#subMenu {
height:110px;
width:700px;
background: url(images/LOGOGO.PNG) no-repeat;
display:none;
position:fixed;
top:0;
left:0;
z-index:500;
opacity:.3;
padding:15px;
font-size:2.5em;
}
.ha {
    position: absolute;
    bottom: 20px;
    left: 110px;
	font-size:20px;
    color:white;
}
.he{
    position: absolute;
    bottom: 20px;
    left: 185px;
	font-size:20px;
    color:white;
}
.haa{
    position: absolute;
    bottom: 20px;
    left: 270px;
	font-size:20px;
    color:white;
}
.hi {
    position: absolute;
    bottom: 20px;
    left: 355px;
	font-size:20px;
    color:white;
}
.ho{
    position: absolute;
    bottom: 20px;
    left: 430px;
	font-size:20px;
    color:white;
}
	</style>
</head>

<body> 

	<!-- banner -->
	<div class="banner">
		<div class="bnr"> 

			<!-- header -->
	<div class="header">
		<div class="container">  
			<div class="navbar-right">
				<p><i class="fa fa-external-link "></i> Also visit our <a href=""><u>San Josef National High School Website</u></a></p> 
			</div>
<?php
ini_set('error_reporting',E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
session_start();
if(($_SESSION['role'] == 'teacher') or ($_SESSION['role'] == 'admin'))
{
	echo "Logged in as <i class='fa fa-user'></i> <font color='blue'>$_SESSION[name]</font> ";
}
else
{
	header("location:index.php");
}
if ($_SESSION['role'] == 'admin') : {
							echo" (Admin)";
							} 
elseif ($_SESSION['role'] == 'teacher') : {
	echo" (Teacher)";
}
?>
<?php endif; ?>
			</div>
	</div>
	<!-- //header -->
<div id="subMenu">
	<a class="ha" href="index.php">Home</a>
	<a class="he" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		<span data-letters="Pages">Offers</span><span class="caret"></span>
	</a>
	<ul class="dropdown-menu"> 
		<li><a href="academic.php">Academic</a></li>
		<li><a href="tvl.php">TVL</a></li>
	</ul>
	<a class="haa" href="gallery.php">Gallery</a>
	<a class="hi" href="about.php">About</a>
	<a class="ho" href="contact.php">Contact</a>
</div>
<script>
    $(document).ready(function() {
        var headerTop = $('#header').offset().top;
        var headerBottom = headerTop + 120; // Sub-menu should appear after this distance from top.
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop(); // Current vertical scroll position from the top
            if (scrollTop > headerBottom) { // Check to see if we have scrolled more than headerBottom
                if (($("#subMenu").is(":visible") === false)) {
                    $('#subMenu').fadeIn('slow');
                }
            } else {
                if ($("#subMenu").is(":visible")) {
                    $('#subMenu').hide();
                }
            }
        });
    });
</script>
	<!-- banner -->
	<div class="banner">
		<div class="bnr"> 
			<!-- navigation -->
			<div class="top-nav">
	<div id="header">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>  
						<h1><a href="index.php"><img id="sjlogo" src="images/logo.png" width="90px"></a></h1> 
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="navbar-right">
							<ul class="nav navbar">
								<li><a href="index.php">Home</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Program Offerings</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="academic.php">Academic</a></li>
										<li><a href="tvl.php">TVL</a></li>
									</ul>
								</li> 
								<li><a href="gallery.php">Gallery</a></li> 		
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
<?php
if ($_SESSION['role'] == 'admin')
{
	echo "<li><a  href='users.php' ><i class='fa fa-users'></i> Users</a></li>
			<li><a  class='active' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
			<span data-letters='Pages'>More</span><span class='caret'></span></a>
			<ul class='dropdown-menu'> 
				<li><a  href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal6'><i class='fa fa-comments-o'></i> Chat</a></li>
				<li><a  href='mymessage.php' ><i class='fa fa-envelope'></i> Messages</a></li>
				<li><a  href='lobby.php'><i class='fa fa-home'></i> Lobby</a></li>
				<li><a  href='grades.php' class='active'><i class='fa fa-envelope'></i> Grades</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal7'><i class='fa fa-sign-out'></i> Log Out</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal3'><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal5'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deactivate</a></li>
			</ul></li>";
}
elseif ($_SESSION['role'] == 'teacher') {
	echo"<li><a  href='grades.php' class='active'><i class='fa fa-envelope'></i> Grades</a></li>
			<li><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
			<span data-letters='Pages'>More</span><span class='caret'></span></a>
			<ul class='dropdown-menu'> 
				<li><a  href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal6'><i class='fa fa-comments-o'></i> Chat</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal7'><i class='fa fa-sign-out'></i> Log Out</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal3'><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal5'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deactivate</a></li>
			</ul></li>";
} 
						?>
							</ul>
						</div> 
						<div class="clearfix"> </div>  
					</div>
				</div>	
			</div>	
			</div>
			<!-- //nav -->
		<div class="banner-text">
				<div class="container">
					<h2><br></h2>
					<div class="sj">
						<a class="sj1" href="about.php"><span>More...</span></a>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
<!--chat-->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><i class='fa fa-comments-o'></i> Chat</font> &nbsp; &nbsp;
			<font color="lightgreen">
			<?php 
			$con = mysql_connect("localhost","root","");
			mysql_select_db("ajaxdb",$con);
			$result = mysql_query("select count(1) FROM user WHERE user_status=1");
			$row = mysql_fetch_array($result);
			$total = $row[0];
			echo "(Online: ".$total.")";
			mysql_close($con);
			?>
			</font>
			</h4>
                        </div>
                        <div class="modal-body"><br>
						<h4 style="margin-top:-3px;"><font size="2px">Conversations will restart every 100 messages.</font>
						<font size="2px" color="white">
			
			</font>
			</h4>
                <script>
					function getText() {
						var $a =	document.getElementById('text').value;
						xhr = new XMLHttpRequest();
						xhr.open('POST' , 'chatdb.php',true);
						xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
						xhr.send('chat='+$a);
						xhr.onreadystatechange=function(){
						if (xhr.responseText){
						//	document.getElementById('chatarea').innerHTML=xhr.responseText;
											}
													}
										}
						
					function setText(){
						xhr = new XMLHttpRequest();
						xhr.open('POST' , 'chatFetch.php' , true);
						xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
						xhr.send();
						xhr.onreadystatechange = function(){
						//	alert(xhr.responseText);
						document.getElementById('chatarea').innerHTML = xhr.responseText;
															}
		
										}
						setInterval("setText()",2000);
						setInterval("users()",3000);
	
					function users(){
						xhr1 = new XMLHttpRequest();
						xhr1.open('POST' , 'userFetch.php' , true);
						xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
						xhr1.send();
						xhr1.onreadystatechange = function(){
						//	alert(xhr.responseText);
						document.getElementById('loginperson').innerHTML = xhr1.responseText;
															}
									}
				</script>

							<div id="chatbox">
							<div id ="chatarea"></div>
							<div id="loginperson"></div>
							<form id="reset">
								<textarea name="message-to-send" id="text" placeholder ="Type your message here!" rows="2" col="2"></textarea>
							</form>
							</div><br>
                        </div>
                        <div class="modal-footer">
							<button id="sad" class="btn btn-secondary" form="reset" type="reset" onclick="getText()">Send</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<!-- Account modal-->
			
			<!--update-->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</font></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="send2" action="update.php">
							 <div class="form-group">
								<label>New Username:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="name" maxlength="15" placeholder="Type your new username here!" value="<?php echo $_SESSION['name']; ?>" class="form-control" required autofocus /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>New Password:</label><br>
								<div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" placeholder="Type your new password here!" class="form-control" required />
								</div>
							</div>
							</form><br>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="send2" >Update</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			<!--logout-->
		<?php
			include_once('config.php');						
			if (isset($_GET['logout'])){
				$result = mysqli_query($conn, "UPDATE user
				SET user_status = '0'
				WHERE user_email = '$_SESSION[email]';");
				session_destroy();
				echo "<script language='javascript'>window.location='index.php';</script>";
			}
		?>
			<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><i class='fa fa-sign-out'></i> Log Out</font></h4>
                        </div>
                        <div class="modal-body">
                            <form action="">
							<div class="form-group">
								<label><font size="5px">Logging out will remove some contents of this page.<br>Are you sure?</font></label>
							</div><br><br>
							<input type="submit" name="logout" class="btn btn-secondary" value="Yes">
							<input type="submit" data-dismiss="modal" class="btn btn-secondary" value="No">
							</form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
 
			<!--delete-->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deactivate</font></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="delete.php">
							 <div class="form-group">
								<label><font size="5px">Do you really want to delete your account?</font></label><br><br>
							</div>
							<button type="submit" class="btn btn-secondary" >Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
							</form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<!-- Account modal- END -->
			<!--g add-->
			<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><span class='glyphicon glyphicon-Cross' aria-hidden='true'></span> Add</font></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="send8" action="gadd.php">
							<div class="form-group">
								<label>Name:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="name" placeholder="Student name" value="" class="form-control" required autofocus /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Reading and Writing Skills:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
								<input type="number" name="rws" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Pagbasa at Pagsusuri:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
								<input type="number" name="pap" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Research in Daily Life:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-users"></i></span>
								<input type="number" name="ridl" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Statistics:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-stats"></span></span>
								<input type="number" name="stat" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Personal Development:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-comments-o"></i></span>
								<input type="number" name="pd" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Physical Science:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-flask"></i></span></span>
								<input type="number" name="ps" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>.NET Programming:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-code"></i></span>
								<input type="number" name="net" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Physical Education:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
								<input type="number" name="pe" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							</form>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="send8" > Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			
			<!--grade delete-->
			<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Delete Grade</font></h4>
                        </div>
                        <div class="modal-body">
						<div class="form-group"><br>
								<input type="text" name="id" id="idz" class="form-control" disabled />
							</div>
                            <form method="post" id="sendd" action="gdelete.php">
							<div class="form-group">
							<h4>Are you sure you want to delete this record?</h4>
								<input type="hidden" type="number" name="id" id="id1" class="form-control" />
							</div>
							</form>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="sendd">Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			
			<!--Grade update-->
			<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Grade Update</font></h4>
                        </div>
                        <div class="modal-body">
							<div class="form-group"><br>
								<input type="text" id="id" class="form-control" disabled />
							</div>
                            <form method="post" id="sendm" action="gupdate.php">
							<div class="form-group">
								<input type="hidden" type="number" name="id" id="idg" class="form-control" />
							</div>
							<div class="form-group">
								<label>Name:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" id="id0" name="name" placeholder="Type the new username here!" value="" class="form-control" required autofocus /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Reading and Writing Skills:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
								<input type="number" id="id2" name="rws" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Pagbasa at Pagsusuri:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
								<input type="number" id="id3" name="pap" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Research in Daily Life:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-users"></i></span>
								<input type="number" id="id4" name="ridl" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Statistics:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-stats"></span></span>
								<input type="number" id="id5" name="stat" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Personal Development:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-comments-o"></i></span>
								<input type="number" id="id6" name="pd" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Physical Science:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-flask"></i></span></span>
								<input type="number" id="id7" name="ps" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>.NET Programming:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-code"></i></span>
								<input type="number" id="id8" name="net" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Physical Education:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
								<input type="number" id="id9" name="pe" min="70" max="100" class="form-control" required /> <br>
								</div>
							</div>
							</form>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="sendm" >Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Account modal- END -->
<!--tbl-->
<div class="jumbotron" style="margin-bottom:-4px;">
		<div class="container">
<h3 class="sj2">Grades</h3>
<input size="40" type="text" id="name" placeholder="No item selected" disabled> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			<button class="btn btn-primary" data-toggle='modal' data-target='#myModal10'><i class='fa fa-plus'></i> Add</button>&nbsp; &nbsp;
			<button id="Button" class="btn btn-primary" data-toggle='modal' data-target='#myModal11'><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</button>&nbsp; &nbsp;
			<button id="b3" class="btn btn-primary" data-toggle='modal' data-target='#myModal12'><i class='fa fa-trash'></i> Delete</button><br><br>
			<script>
	$(document).ready(function() {
    var button = $('#Button');
    $(button).attr('disabled', 'disabled');

    $('.click').click(function() {
        if ($(button).attr('disabled')) $(button).removeAttr('disabled');
        else $(button).attr('disabled');
    });
});
 
 	$(document).ready(function() {
    var buttonz = $('#b3');
    $(buttonz).attr('disabled', 'disabled');

    $('.data-table').click(function() {
        if ($(buttonz).attr('disabled')) $(buttonz).removeAttr('disabled');
        else $(buttonz).attr('disabled');
    });
});
	</script>		
	<table id="tabled" data-role="table" data-mode="columntoggle" id="myTable" class="data-table"><br>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Reading and Writing Skills</th>
				<th>Pagbasa at Pagsusuri</th>
				<th>Research in Daily Life</th>
				<th>Statistics</th>
				<th>Personal Development</th>
				<th>Physical Science</th>
				<th>.NET Programming</th>
				<th>Physical Education</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo "<tr class='click'>
					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['rws']."</td>
					<td>".$row['pagbasa']."</td>
					<td>".$row['research']."</td>
					<td>".$row['stat']."</td>
					<td>".$row['perdev']."</td>
					<td>".$row['physics']."</td>
					<td>".$row['net']."</td>
					<td>".$row['pe']."</td>
			</tr>";
		}
		?>
		</tbody>
		<tfoot>
			
		</tfoot>
	</table>
	 <script>
    
                var table = document.getElementById('tabled');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("id").value = "ID # " + this.cells[0].innerHTML + " is selected";
                         document.getElementById("id1").value = this.cells[0].innerHTML;
                         document.getElementById("idg").value = this.cells[0].innerHTML;
                         document.getElementById("idz").value = "ID # " + this.cells[0].innerHTML + " is selected";
                         document.getElementById("name").value = "# " + this.cells[0].innerHTML + " - " + this.cells[1].innerHTML  +  " is now selected";
                         document.getElementById("id0").value = this.cells[1].innerHTML;
                         document.getElementById("id2").value = this.cells[2].innerHTML;
                         document.getElementById("id3").value = this.cells[3].innerHTML;
                         document.getElementById("id4").value = this.cells[4].innerHTML;
                         document.getElementById("id5").value = this.cells[5].innerHTML;
                         document.getElementById("id6").value = this.cells[6].innerHTML;
                         document.getElementById("id7").value = this.cells[7].innerHTML;
                         document.getElementById("id8").value = this.cells[8].innerHTML;
                         document.getElementById("id9").value = this.cells[9].innerHTML;
                    };
                }
         </script>
</div>
</div>
	<!-- footer -->
	<div class="copy-right"> 
		<div class="container">
			<p>© 2018 SJNHS - Senior High School | Developed by <a href="https://m.facebook.com/raymarkxdelacruz">Raymark E. dela Cruz</a> <br>
  </p>
		</div>
	</div>  
<!-- //footer -->

	<!--confirmpass and country-->
	<script>
function getcity(id) {
			xhr = new XMLHttpRequest();
			xhr.open('GET' , 'test.php?idd='+id, true);
			xhr.send();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status==200){
					document.getElementById("city_display").innerHTML = xhr.responseText;
					}
			
				}


}

function getEmail(emailid){

			email  = new XMLHttpRequest();
			email.open('GET' , 'test2.php?email='+emailid, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					
					document.getElementById('emailDiv').innerHTML = email.responseText;
					}
				
				}
	
	
	}

</script>
<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
<!-- scrolling -->
	<script src="js/SmoothScroll.min.js"></script> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //move-up -->   
	<!-- load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>