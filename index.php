<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Home </title>
    <link rel="icon" type="image/x-icon" href="public/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <style>
        .border{
            
          border: 5px solid #FFF;
          background: #F5821F;          
        }
         body.maintanence > .maintanence-content {
            
            min-height: 107vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 205px;
        }
        a{
          color: #fff;
        }
    </style>

</head>
<body class="maintanence text-center">
    
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="img/3SISLogo.svg" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text" style="font-size:50em">
                    <!-- <a href="index.html" class="nav-link" > Journey Towards Excellence </a> -->
                    <a href="index.html" class="nav-link" > JTE </a>
                </li>
            </ul>
           
        </header>
    </div>

    <div class="container-fluid maintanence-content">


<?php
if(isset($_GET['project_name']) && $_GET['project_name'] != ''){
      
    if($_GET['project_name'] == 'Payroll'){

      
    function execInBackground($cmd) {

    // echo substr(php_uname(), 0, 7);die;

    //  Windows NT DESKTOP-RLUTBIV 10.0 build 22621 (Windows 10) AMD64

      if (substr(php_uname(), 0, 7) == "Windows"){
          popen("start /B ". $cmd, "r");
        
          // pclose(popen("start /B ". $cmd, "r"));
     
        // header("Location:http://127.0.0.1:1100");


        echo '<script>
        var window = window.open("http://127.0.0.1:1100", "_blank");
        window.focus();
        </script>';


        
      }
      else {
          // exec($cmd . " > /dev/null &"); 
      }

        // exec('Payroll.bat');
        // header("Location:127.0.0.1:1100");
    }


    execInBackground('Payroll.bat');



  }

    
}
?>

       <div class="row">
  <div class="col-sm-6">
    <div class="card border">
      <div class="card-body">
        <!-- <h5 class="card-title">S&OP Pro</h5> -->
        <h4><a href="https://app1.3sispro.com/"  target="_blank" id="payroll">Payroll</a></h4>

      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-2">
    <div class="card border">
      <div class="card-body">     

        <!-- <h5 class="card-title">Fiexed Asset </h5> -->
        <h4><a href="#" target="_blank">Fiexed Asset</a></h4>
      </div>
    </div>
  </div>
   <div class="col-sm-6 mt-2">
    <div class="card border">
      <div class="card-body">
        <!-- <h5 class="card-title">Payroll</h5> -->
        <h4><a href="#" target="_blank">S&OP Pro</a></h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-2">
    <div class="card border">
      <div class="card-body">
        <!-- <h5 class="card-title">Sales Force Automation</h5> -->
        <!-- <SFA.bat -->
        <h4><a href="#" target="_blank">Sales Force Automation</a></h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-2">
    <div class="card border">
      <div class="card-body">
        <!-- <h5 class="card-title">Sales Force Automation</h5> -->
        <h4><a href="https://app.powerbi.com" target="_blank" >BI</a></h4>
      </div>
    </div>
  </div>
   <div class="col-sm-6 mt-2">
    <div class="card border">
      <div class="card-body">
        <!-- <h5 class="card-title">Sales Force Automation</h5> -->
        <h4><a href="#"  target="_blank" >AR/AP</a></h4>
      </div>
    </div>
  </div>

  <div class="col-sm-6 mt-2">
    <div class="card border bg-success">
      <div class="card-body">
        <!-- <h5 class="card-title">Sales Force Automation</h5> -->
        <h4><a href="#" target="_blank" >Tutorial</a></h4>
      </div>
    </div>
  </div>
</div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script>
      // $('#payroll').on("click",function(e){
      //   e.preventDefault();
      //   window.location.href = window.location.href+'?project_name=Payroll';
      // });
</script>
</body>
</html>