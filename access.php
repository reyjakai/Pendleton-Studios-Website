<!DOCTYPE html>

<html>
<head>
    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta name="Author" content="Adam Weaver" />
    <meta name="Description" content="A chronicle of my skills with computing, or (more likely) lack thereof." />
    <meta name="Keywords" content="HTML, C#, C++, Computer Science, Pendleton Studios" />

    <!-- Title and other header information -->
    <title>Access | Pendleton Studios</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/access.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    

<?php 

$is_loaded = FALSE;
$is_saved = FALSE;
$logged_in = FALSE;

// Makes sure you can login to the server.
$link = mysql_connect('pendletonstudioscom.ipagemysql.com', 'reyjakai', 'gay_butts');
$mysql_db = 'ebaytest';
@mysql_select_db($mysql_db) or die ("Unable to connect to Database.");

// Checks to see if the form was submitted.
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // Something posted.

    if ( isset( $_POST['load'] ) ){
        
        // Set loading info.
        $is_loaded = TRUE;
        $is_saved = FALSE;
        
    } else {

        // Set saving info.
        $is_loaded = FALSE;
        $is_saved = TRUE;
    } 

    // User info
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    // Pull username from database.
    $query = mysql_query("SELECT username FROM users WHERE username = '$username'");
    $pass_retrieve = mysql_query("SELECT pass FROM users WHERE username = '$username'");
    $pass_check = mysql_result($pass_retrieve, 0);
}

// Creating default radio button variables.
// Didn't dynamically allocate names, as some rando on the internet said it was a bad idea.
// I'll have to check later to see if it works. It would make much cleaner code having a for/foreach.
$radio1 = 'u';
$radio2 = 'u';
$radio3 = 'u';
$radio4 = 'u';
$radio5 = 'u';
$radio6 = 'u';
$radio7 = 'u';
$radio8 = 'u';
$radio9 = 'u';
$radio10 = 'u';
$radio11 = 'u';
$radio12 = 'u';
$radio13 = 'u';
$radio14 = 'u';
$radio15 = 'u';
$radio16 = 'u';
$radio17 = 'u';
$radio18 = 'u';
$radio19 = 'u';
$radio20 = 'u';

// Set variables created above to their proper values.
if($is_loaded) {

    if(mysql_num_rows($query) > 0) {

        $logged_in = TRUE;	// Setting us as logged in.
        
        // Pulls the radio1 variable from the SQL database, converts it into char, and assigns it.
        $query = mysql_query("SELECT radio1 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio1 = $check;
        
        $query = mysql_query("SELECT radio2 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio2 = $check;
        
        $query = mysql_query("SELECT radio3 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio3 = $check;
        
        $query = mysql_query("SELECT radio4 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio4 = $check;
        
        $query = mysql_query("SELECT radio5 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio5 = $check;
        
        $query = mysql_query("SELECT radio6 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio6 = $check;
        
        $query = mysql_query("SELECT radio7 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio7 = $check;
        
        $query = mysql_query("SELECT radio8 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio8 = $check;
            
        $query = mysql_query("SELECT radio9 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio9 = $check;
            
        $query = mysql_query("SELECT radio10 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio10 = $check;
            
        $query = mysql_query("SELECT radio11 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio11 = $check;
            
        $query = mysql_query("SELECT radio12 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio12 = $check;
            
        $query = mysql_query("SELECT radio13 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio13 = $check;
            
        $query = mysql_query("SELECT radio14 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio14 = $check;
            
        $query = mysql_query("SELECT radio15 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio15 = $check;
            
        $query = mysql_query("SELECT radio16 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio16 = $check;

        $query = mysql_query("SELECT radio17 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio17 = $check;

        $query = mysql_query("SELECT radio18 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio18 = $check;

        $query = mysql_query("SELECT radio19 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio19 = $check;

        $query = mysql_query("SELECT radio20 FROM users WHERE username = '$username'");
        $check = mysql_fetch_array($query);
        $radio20 = $check;

        // Close connection
        mysql_close($link);
        
    } else {
        echo "User '$username' NOT found.";
        // Close connection
        mysql_close($link);
    }

} else if($is_saved) {

    $radio1 = substr($_POST['optradio1'], 0, 1);
    $radio2 = substr($_POST['optradio2'], 0, 1);
    $radio3 = substr($_POST['optradio3'], 0, 1);
    $radio4 = substr($_POST['optradio4'], 0, 1);
    $radio5 = substr($_POST['optradio5'], 0, 1);
    $radio6 = substr($_POST['optradio6'], 0, 1);
    $radio7 = substr($_POST['optradio7'], 0, 1);
    $radio8 = substr($_POST['optradio8'], 0, 1);
    $radio9 = substr($_POST['optradio9'], 0, 1);
    $radio10 = substr($_POST['optradio10'], 0, 1);
    $radio11 = substr($_POST['optradio11'], 0, 1);
    $radio12 = substr($_POST['optradio12'], 0, 1);
    $radio13 = substr($_POST['optradio13'], 0, 1);
    $radio14 = substr($_POST['optradio14'], 0, 1);
    $radio15 = substr($_POST['optradio15'], 0, 1);
    $radio16 = substr($_POST['optradio16'], 0, 1);
    $radio17 = substr($_POST['optradio17'], 0, 1);
    $radio18 = substr($_POST['optradio18'], 0, 1);
    $radio19 = substr($_POST['optradio19'], 0, 1);
    $radio20 = substr($_POST['optradio20'], 0, 1);

    // If the user is found, this will update their information.
    if(mysql_num_rows($query) > 0) {
        // Password check.
        if($password != $pass_check) {
            
            echo ("Password incorrect.");

            // Close connection
            mysql_close($link);

            ?>
            <script type="text/javascript">
            window.location.href = "http://pendletonstudios.com/access.php";
            </script>
            <?php

        }
        echo "Information updated for user: $username";

        $logged_in = FALSE;	// Setting us as logged in.
        
        // Updates user account if user already exists.
        $sql = "UPDATE users SET 
        radio1 = '$radio1', 
        radio2 = '$radio2', 
        radio3 = '$radio3',
        radio4 = '$radio4', 
        radio5 = '$radio5',
        radio6 = '$radio6', 
        radio7 = '$radio7', 
        radio8 = '$radio8', 
        radio9 = '$radio9', 
        radio10 = '$radio10', 
        radio11 = '$radio11', 
        radio12 = '$radio12', 
        radio13 = '$radio13', 
        radio14 = '$radio14', 
        radio15 = '$radio15', 
        radio16 = '$radio16',
        radio17 = '$radio17', 
        radio18 = '$radio18', 
        radio19 = '$radio19', 
        radio20 = '$radio20'
        WHERE username = '$username'";

        if(mysql_query($sql)) {
            echo "Records updated successfully.";
        } else {
            echo "ERROR: Could not execute $sql. " . mysql_error($link);
        }

        // Close connection
        mysql_close($link);

        ?>
        <script type="text/javascript">
            window.location.href = "http://pendletonstudios.com/access.php";
        </script>
        <?php

    } else {
        echo "$username not found. Creating account...";

        $sql = "INSERT INTO users (username, pass, radio1, radio2, radio3, radio4, radio5, radio6, radio7, radio8, radio9, radio10, radio11, radio12, radio13, radio14, radio15, radio16, radio17, radio18, radio19, radio20) 
            VALUES ('$username', '$password',
            '$radio1', '$radio2', '$radio3', '$radio4', '$radio5', '$radio6', '$radio7', '$radio8',
            '$radio9', '$radio10', '$radio11', '$radio12', '$radio13', '$radio14', '$radio15', '$radio16',
            '$radio17', '$radio18', '$radio19', '$radio20')";

        if(mysql_query($sql)) {
            echo "Records inserted successfully.";
        } else {
            echo "ERROR: Could not execute $sql. " . mysql_error($link);
        }

        // Close connection
        mysql_close($link);

        ?>
        <script type="text/javascript">
            window.location.href = "http://pendletonstudios.com/access.php";
        </script>
        <?php

    }
}

?>

<!-- Navigation Menu -->

  <nav class="navbar navbar-light">
    <div class="container-fluid">
      
      <!-- Logo -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="home.html" class="navbar-brand">Pendleton Studios</a>
      </div>
      
      <!-- Left Menu Items -->
      <div class="collapse navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Work Projects<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="bransen.php">Bransen's Thing</a></li>
              <li class="active"><a href="access.php">eBay Access Tracker</a></li>
            </ul>
          </li>

          <li><a href="music.html">Music</a></li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Games<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="ceruleandawn.html">Cerulean Dawn</a></li>
              <li><a href="http://store.steampowered.com/agecheck/app/791020/" target="_blank">Drumpf: Rise Up, Libertonia!</a></li>
              <li><a href="pottermafia.html">Potter Mafia</a></li>
            </ul>
          </li>
        </ul>
        
        <!-- Right Menu Items -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="resume.html">Resume</a></li>
        </ul>
        
      </div>
    </div>
  </nav>

    <!-- This is an aesthetic spacer. -->
    <div><br /><br /><br /><br /></div>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-7" id="dead-space"></div>
        <div class="col-lg-5" id="login">
            <?php if($logged_in) : ?>
		        Showing account: <?php echo $username; ?>
            <?php else : ?>
                Showing account: None
            <?php endif; ?>
        </div>
    </div>

  <form action="" method="post" onsubmit="target_popup(this)">
    <div class="row" id="row">
        <div class="col-lg-7" id="dead-space"></div>
        <div class="col-lg-2" id="username">
             <input class="form-control" type="text" name="username" autocomplete="off" placeholder="Username"></input>
        </div>
        <div class="col-lg-2 button-header" id="update-button">
            <button class="btn btn-default" type="submit" name="save" onclick="myFunction()">
                 Save
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7" id="dead-space"></div>
        <div class="col-lg-2" id="username">
             <input class="form-control" type="password" autocomplete="off" name="password" placeholder="Password"></input>
        </div>
        <div class="col-lg-2 button-header" id="update-button">
        <button class="btn btn-default" type="submit" name="load">
          Load
        </button>
      </div>
    </div>

  <div class="row" id="row-header">
    <div class="header text-center col-lg-3" id="dead-space"></div>
    <div class="header col-lg-9" id="header">
      eBay Access Tracker
    </div>
  </div>

  </br>

  <div class="row" id="row-header">
    <div class="col-lg-3" id="deadSpace"></div>
    <div class="col-lg-2 button-header" id="fullAccess">
      <p>Full Access</p>
    </div>
    <div class="col-lg-2 button-header" id="partial-access">
      <p>Partial Access</p>
    </div>
    <div class="col-lg-2 button-header" id="no-access">
      <p>No Access</p>
    </div>
    <div class="col-lg-2 button-header" id="unknown-access">
      <p>What Is This?</p>
    </div>
  </div>
  
    <div class="row" id="row1">
      <div class="col-lg-3 left-side" id="header">
        <p>Avaya ID: </p>
      </div>
	  
      <?php if($radio1["radio1"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio1["radio1"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio1["radio1"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio1["radio1"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio1" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row2">
      <div class="col-lg-3 left-side" id="header">
        <p>ADManager: </p>
      </div>
      <?php if($radio2["radio2"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio2["radio2"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio2["radio2"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio2["radio2"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio2" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row3">
      <div class="col-lg-3 left-side" id="header">
        <p>Bitlocker: </p>
      </div>
	  
      <?php if($radio3["radio3"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio3["radio3"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio3["radio3"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio3["radio3"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio3" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row4">
      <div class="col-lg-3 left-side" id="header">
        <p>DLManager: </p>
      </div>
	  
      <?php if($radio4["radio4"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio4["radio4"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio4["radio4"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio4["radio4"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio4" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row5">
      <div class="col-lg-3 left-side" id="header">
        <p>Loginhelp: </p>
      </div>
	  
      <?php if($radio5["radio5"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio5["radio5"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio5["radio5"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio5["radio5"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio5" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row6">
      <div class="col-lg-3 left-side" id="header">
        <p>Login HelpDesk (TPA): </p>
      </div>
	  
      <?php if($radio6["radio6"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio6["radio6"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio6["radio6"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio6["radio6"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio6" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row7">
      <div class="col-lg-3 left-side" id="header">
        <p>Login HelpDesk (Corp): </p>
      </div>
	  
      <?php if($radio7["radio7"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio7["radio7"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio7["radio7"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio7["radio7"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio7" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row8">
      <div class="col-lg-3 left-side" id="header">
        <p>Exchange Server: </p>
      </div>
	  
      <?php if($radio8["radio8"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio8["radio8"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio8["radio8"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio8["radio8"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio8" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row9">
      <div class="col-lg-3 left-side" id="header">
        <p>HDAP (RSA): </p>
      </div>
	  
      <?php if($radio9["radio9"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio9["radio9"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio9["radio9"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio9["radio9"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio9" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row10">
      <div class="col-lg-3 left-side" id="header">
        <p>Sailpoint: </p>
      </div>
	  
      <?php if($radio10["radio10"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio10["radio10"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio10["radio10"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio10["radio10"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio10" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row11">
      <div class="col-lg-3 left-side" id="header">
        <p>PeopleX: </p>
      </div>
	  
      <?php if($radio11["radio11"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio11["radio11"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio11["radio11"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio11["radio11"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio11" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row12">
      <div class="col-lg-3 left-side" id="header">
        <p>SmartIT: </p>
      </div>
	  
      <?php if($radio12["radio12"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio12["radio12"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio12["radio12"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio12["radio12"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio12" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row13">
      <div class="col-lg-3 left-side" id="header">
        <p>ITSM Chat Console: </p>
      </div>
	  
      <?php if($radio13["radio13"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio13["radio13"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio13["radio13"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio13["radio13"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio13" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row14">
      <div class="col-lg-3 left-side" id="header">
        <p>Splunk: </p>
      </div>
	  
      <?php if($radio14["radio14"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio14["radio14"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio14["radio14"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio14["radio14"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio14" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row15">
      <div class="col-lg-3 left-side" id="header">
        <p>Slack: </p>
      </div>
	  
      <?php if($radio15["radio15"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio15["radio15"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio15["radio15"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio15["radio15"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio15" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row16">
      <div class="col-lg-3 left-side" id="header">
        <p>YubiKey Admin: </p>
      </div>
	  
      <?php if($radio16["radio16"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio16["radio16"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio16["radio16"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio16["radio16"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio16" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row17">
      <div class="col-lg-3 left-side" id="header">
        <p>Filer Admin: </p>
      </div>
	  
      <?php if($radio17["radio17"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio17["radio17"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio17["radio17"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio17["radio17"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio17" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row18">
      <div class="col-lg-3 left-side" id="header">
        <p>Google Admin: </p>
      </div>
	  
      <?php if($radio18["radio18"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio18["radio18"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio18["radio18"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio18["radio18"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio18" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row19">
      <div class="col-lg-3 left-side" id="header">
        <p>Office 365 Admin: </p>
      </div>
	  
      <?php if($radio19["radio19"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio19["radio19"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio19["radio19"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio19["radio19"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio19" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>

    <div class="row" id="row20">
      <div class="col-lg-3 left-side" id="header">
        <p>eBay Asset Management Console (ITSM): </p>
      </div>
	  
      <?php if($radio20["radio20"] == 'f') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="full" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="full"/>
        </div>
      <?php endif; ?>

      <?php if($radio20["radio20"] == 'p') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="partial" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="partial" />
        </div>
      <?php endif; ?>

      <?php if($radio20["radio20"] == 'n') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="none" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="none" />
        </div>
      <?php endif; ?>

      <?php if($radio20["radio20"] == 'u') : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="unknown" checked/>
        </div>
      <?php else : ?>
        <div class="col-lg-2 button">
          <input type="radio" name="optradio20" value="unknown"/>
        </div>
      <?php endif; ?>
    </div>


  </form>
</div>

</body>

</html>