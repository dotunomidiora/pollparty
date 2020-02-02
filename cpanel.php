<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PollParty Control Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>PollParty</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="nomination.html"><span class="subFont"><strong>Nomination's List</strong></span></a></li>
            <li><a href="changePassword.php"><span class="subFont"><strong>Change Password</strong></span></a></li>
<li><a href=""><span class="">Modify Users</span></a></li>
            <li><a href=""><span class=""><strong>Feedback Report</strong></span></a></li> 
          
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2>
            <p class="normalFont">This is Administration Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $PDP=0;
              $APC=0;
              $CPP=0;
              $ADC=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //PDP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='PDP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $PDP++;
                  }

                  $pdp_value= $PDP*10;

                  echo "<strong>People's Democratic Party (PDP)</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$pdp_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$pdp_value."%'>
                      <span class='sr-only'>PDP</span>
                    </div>
                  </div>
                  ";
                }

                // All People's Congress
                $sql ="SELECT * FROM tbl_users WHERE voted_for='APC'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $APC++;
                  }


                  $apc_value= $APC*10;

                  echo "<strong>All People's Congress</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$apc_value."%'>
                      <span class='sr-only'>PDP</span>
                    </div>
                  </div>
                  ";
                }

                // CPP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='CPP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $CPP++;
                  }


                  $ccp_value= $CPP*10;

                  echo "<strong>Citizens Popular Party</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ccp_value."%'>
                      <span class='sr-only'>PDP</span>
                    </div>
                  </div>
                  ";
                }

                // ADC
                $sql ="SELECT * FROM tbl_users WHERE voted_for='ADC'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $ADC++;
                  }


                  $adc_value= $ADC*10;

                  echo "<strong>African Democratic Congress</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$adc_value."%'>
                      <span class='sr-only'>ADC</span>
                    </div>
                  </div>
                  ";
                }

               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT * FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $total++;
                  }


                  $tptal= $total*10;

                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or apclude individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
