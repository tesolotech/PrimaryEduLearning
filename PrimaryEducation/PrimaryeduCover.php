<?php
session_start();
  require"dbconnect/dbcon.php";
?>

<!-- *************************************************NORMAL USER******************************************* -->
<?php
    if(isset($_POST['submit']))
    {
        $username=$_POST['email'];
        $password=$_POST['password'];
        
        $query="select * from Primaryedu WHERE username='$username' AND password='$password'";
        
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
            //valid
            $_SESSION['username']=$username;
            header('location:Index@Primaryedu.php');
        }
        else
        {
            //invallid
            echo '<script type="text/javaScript">alert("invallid credentials")</script>';
        }
    }
  
?>
<!-- *************************************************Teacher login******************************************* -->
<?php
    if(isset($_POST['submittech']))
    {
        $scode=$_POST['scode'];
        $username=$_POST['email'];
        $password=$_POST['password'];
        
        $query="select * from teacher WHERE scode='$scode' AND email='$username' AND password='$password'";
        
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
            //valid
            $_SESSION['email']=$username;
            header('location:Index@Primaryedu-2.php');
        }
        else
        {
            //invallid
            echo '<script type="text/javaScript">alert("invallid credentials")</script>';
        }
    }
  
?>
<!-- *************************************************LOGIN OF ADMINISTRATOR******************************************* -->
<?php
    if(isset($_POST['submitad']))
    {
        $username=$_POST['email'];
        $password=$_POST['password'];
        
        $query="select * from Admin WHERE username='$username' AND password='$password'";
        
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
            //valid
            $_SESSION['username']=$username;
            header('location:PrimaryeduShowDataToAdmin.php');
        }
        else
        {
            //invallid
            echo '<script type="text/javaScript">alert("invallid credentials")</script>';
        }
    }
  
?>

<!-- *************************************************NORMAL USER REGISTRATION****************************************** -->

<?php
    if(isset($_POST['submitbtt']))
    {
      // echo '<script type="text/javascript">alert("sing up button clicked")</script>';
      $username=$_POST['username'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];
      $date=$_POST['date'];
      $mobile=$_POST['mobile'];

      
      if($password==$cpassword)
      {
        $query="select * from Primaryedu WHERE username='$username'";
        $query_run=mysqli_query($con,$query);
        
        if(mysqli_num_rows($query_run)>0)
        {
          //there is already a user with the same username
          echo '<script type="text/javaScript">alert(user already exits....try another user")</script>';
        }else
        {
          $query="insert into Primaryedu values('$username','$password','$cpassword','$date',$mobile)";
          $query_run=mysqli_query($con,$query);
        }
          
          if($query_run)
          {
            echo '<script type="text/javaScript">alert("You are successfully registerd. Check email for userid and login after")</script>';
          }
          else
          {
            echo '<script type="text/javaScript">alert("error")</script>';
          }
        
      } 
      else
      {
        echo '<script type="text/javaScript">alert("password and confirm password doest matched")</script>';
      }
      
    }
  ?>
<!-- *************************************************sCHOOL REGISTRATION****************************************** -->
  <?php
    if(isset($_POST['submitbtn']))
    {
      // echo '<script type="text/javascript">alert("sing up button clicked")</script>';
      $scode=$_POST['scode'];
      $sname=$_POST['sname'];
      $nooft=$_POST['nooft'];
      $date=$_POST['date'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $add=$_POST['address'];
      $pin=$_POST['pincode'];
      
      if($scode!=$pin)
      {
        $query="select * from SCHOOL WHERE sname='$sname'";
        $query_run=mysqli_query($con,$query);
        
        if(mysqli_num_rows($query_run)>0)
        {
          //there is already a user with the same username
          echo '<script type="text/javaScript">alert(user already exits....try another user")</script>';
        }else
        {
          $query="insert into SCHOOL values('$scode','$sname','$nooft','$date','$email',$mobile,'$add',$pin)";
          $query_run=mysqli_query($con,$query);
        }
          
          if($query_run)
          {
            echo '<script type="text/javaScript">alert("You are successfully registerd.")</script>';
          }
          else
          {
            echo '<script type="text/javaScript">alert("error")</script>';
          }
        
      } 
      else
      {
        echo '<script type="text/javaScript">alert("password and confirm password doest matched")</script>';
      }
      
    }
  ?>
  <!-- *************************************************TEACHER REGISTRATION******************************************* -->
  <?php
    if(isset($_POST['submitbt']))
    {
      // echo '<script type="text/javascript">alert("sing up button clicked")</script>';
      $scode=$_POST['scode'];
      $sname=$_POST['tname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];
      $dob=$_POST['date'];
      $mobile=$_POST['mobile'];
      
      if($password==$cpassword)
      {
        $query="select * from teacher WHERE tname='$sname'";
        $query_run=mysqli_query($con,$query);
        
        if(mysqli_num_rows($query_run)>0)
        {
          //there is already a user with the same username
          echo '<script type="text/javaScript">alert(user already exits....try another user")</script>';
        }else
        {
          $query="insert into teacher values('$scode','$sname','$email','$password','$cpassword',$dob,'$mobile')";
          $query_run=mysqli_query($con,$query);
        }
          
          if($query_run)
          {
            echo '<script type="text/javaScript">alert("You are successfully registerd.")</script>';
          }
          else
          {
            echo '<script type="text/javaScript">alert("school code does not exits, firstly registerd our school. thank you")</script>';
          }
        
      } 
      else
      {
        echo '<script type="text/javaScript">alert("password and confirm password doest matched")</script>';
      }
      
    }
  ?>

<!-- *************************************************END OF ALL PHP****************************************** -->


<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style@PrimaryeduCover.css">
 
</head>
<body style="background: linear-gradient(to top right, #ADFF2F, #FAEBD7);">
<!--  <video autoplay loop muted poster id="background"><source src="Login Application/Videos/bk5.mp4" type="video/mp4"></video> -->
  <div class="container-fluid" id="nav">
    <div class="row">
      <div class="col-lg-12">
      <ul class="navbar-nav navbar-right">
      <img src="Images/vk2.jpg" height="40px" width="40px" data-target="#myModalvk" data-toggle="modal" style="border-radius: 50%" />
      <img src="Images/ssir.jpg" height="40px" width="40px" data-target="#myModalims" data-toggle="modal" style="border-radius: 50%" />
    <!--  </ul>
      <ul class="nav navbar-nav navbar-right">  -->
      <button style="border-radius: 50%; height: 50px; width: 60px;" id="btn9">Student</button>
      <button style="border-radius: 50%; height: 50px; width: 60px;" id="btn10">Teacher</button>
      <button style="border-radius: 50%; height: 50px; width: 50px;" id="btn7">Admin</button>
      <button type="button" class="dropdown-toggle" data-toggle="dropdown" style="border-radius: 50%; height: 50px; width: 65px;">
      Register
    </button>
    <div class="dropdown-menu" style="margin-right: 10px;">
      <a class="dropdown-item" href="#" id="btn3">School Register|</a>
      <a class="dropdown-item" href="#" id="btn2">Teacher Register|</a>
      <a class="dropdown-item" href="#" id="btn4">Parents/Student_Reg</a>
    </div>  <!--
      <button style="border-radius: 50%; height:50px; width: 65px;" id="btn3">Ragister</button>
      <button style="border-radius: 50%; height:50px; width: 65px;" id="btn2">Ragister</button>   -->
     <!-- <img src="Images/login.jpg" height="50px" width="50px" id="btn1"  style="border-radius: 50%" />  
       <img src="Images/signup.jpeg" height="50px" width="50px" id="btn2"  style="border-radius: 50%" />  -->
  <!--  <button type="button" class="btn-lg btn-primary" id="btn1"><span class="glyphicon glyphicon-user" />Login</button>
      <button type="button" class="btn-lg btn-danger" id="btn2" ><span class="glyphicon glyphicon-log-in" />SignUp</button>  -->
      </ul>

      <!-- *************************************** modal for login start here ******************************** -->
  <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Father/Student_Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="#">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email" required />
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password" required />
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="">Remember me</label>
            </div>
              <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#btn9").click(function(){
        $("#myModal").modal();
    });
});
</script> <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
<!-- **************************************************************************** -->

    <!-- *************************************** modal for teacher login******************************** -->
  <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModalteacher" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Teacher_Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="#">
          <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> School Code</label>
              <input type="number" class="form-control" id="usrname" name="scode" placeholder="Enter school code" required />
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email" required />
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password" required />
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="">Remember me</label>
            </div>
              <button type="submit" name="submittech" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#btn10").click(function(){
        $("#myModalteacher").modal();
    });
});
</script> <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
  <!-- ********************************************************************************** -->

     <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModaladmin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Admin_Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="#">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email" required />
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password" required />
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="">Remember me</label>
            </div>
              <button type="submit" name="submitad" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#btn7").click(function(){
        $("#myModaladmin").modal();
    });
});
</script> <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>



<!-- **************************************************************************** -->

      <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="#">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="username" placeholder="Enter email" required />
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password" required />
            </div>
            <div class="form-group">
              <label for="repsw"><span class="glyphicon glyphicon-eye-open"></span> ConformPassword</label>
              <input type="password" class="form-control" id="repsw" name="cpassword" placeholder="Enter Conform password" required />
            </div>
            <div class="form-group">
              <label for="mob"><span class="glyphicon glyphicon-calendar"></span> Date Of Birth</label>
              <input type="date" class="form-control" id="mob" name="date" placeholder="Enter Date of Birth" required />
            </div>
            <div class="form-group">
              <label for="mob"><span class="glyphicon glyphicon-phone"></span> Mobile No</label>
              <input type="text" class="form-control" id="mob" name="mobile" placeholder="+91 00 00 00 00 00" required />
            </div>
            
              <button type="submit" name="submitbtt" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#btn4").click(function(){
        $("#myModal4").modal();
    });
});
</script> <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>


<!--*****************************************modal for login end here ******************************************** -->
<!-- *************************************** modal for login start here ******************************** -->
  <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Teacher Registration</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="#">
            <div class="form-group">
              <label for="scode"><span class="glyphicon glyphicon-user"></span> School Code</label>
              <input type="text" class="form-control" id="scode" name="scode" placeholder="Enter school code here" required />
            </div>
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user"></span> Name of teacher</label>
              <input type="text" class="form-control" id="name" name="tname" placeholder="Enter name" required />
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" required />
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password" required />
            </div>
            <div class="form-group">
              <label for="repsw"><span class="glyphicon glyphicon-eye-open"></span> ConformPassword</label>
              <input type="password" class="form-control" id="repsw" name="cpassword" placeholder="Enter Conform password" required />
            </div>
            <div class="form-group">
              <label for="mob"><span class="glyphicon glyphicon-calendar"></span> Date Of Birth</label>
              <input type="date" class="form-control" id="mob" name="date" placeholder="Enter Date of Birth" required />
            </div>
            <div class="form-group">
              <label for="mob"><span class="glyphicon glyphicon-phone"></span> Mobile No</label>
              <input type="text" class="form-control" id="mob" name="mobile" placeholder="+91 00 00 00 00 00" required />
            </div>
            
              <button type="submit" name="submitbt" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#btn2").click(function(){
        $("#myModal2").modal();
    });
});
</script> <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>

  <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Register School</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="#">
            <div class="form-group">
              <label for="scode"><span class="glyphicon glyphicon-education"></span> School Code</label>
              <input type="text" class="form-control" id="scode" name="scode" placeholder="Enter school code" required />
            </div>
            <div class="form-group">
              <label for="sname"><span class="glyphicon glyphicon-blackboard"></span> School Name</label>
              <input type="teXT" class="form-control" id="sname" name="sname" placeholder="Enter School Name" required />
            </div>
            <div class="form-group">
              <label for="nooft"><span class="glyphicon glyphicon-list-alt"></span> No. of teacher</label>
              <input type="text" class="form-control" id="teacher" name="nooft" placeholder="No. Of teacher" required />
            </div>
            <div class="form-group">
              <label for="date"><span class="glyphicon glyphicon-calendar"></span> Date of Registration</label>
              <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date of Reg." required />
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-inbox"></span> Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email here" required />
            </div>
             <div class="form-group">
              <label for="mob"><span class="glyphicon glyphicon-phone-alt"></span> Mobile</label>
              <input type="text" class="form-control" id="mob" name="mobile" placeholder="+91 00 00 00 00 00" required />
            </div>
             <div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-home"></span> Address</label>
              <input type="text" class="form-control" id="add" name="address" placeholder="Address Here" required />
            </div>
             <div class="form-group">
              <label for="pin"><span class="glyphicon glyphicon-random"></span> Pin_Code</label>
              <input type="text" class="form-control" id="pin" name="pincode" placeholder=" 00 00 00" required />
            </div>
            
              <button type="submit" name="submitbtn" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#btn3").click(function(){
        $("#myModal3").modal();
    });
});
</script> <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>



      </div>
    </div>
  </div>

<div class="container">
 <!-- <img src="Login Application/Images/vk2.jpg" height="50px" width="50px" data-target="#myModal" data-toggle="modal"/> -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open modal</button> -->
  <div class="modal fade" id="myModalims">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Supervised by</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        
        <div class="modal-body"><div class="ims" style="text-align: center; padding-top: 5px; background-color: none;">
      <img src="Images/ssir.jpg" height="200px" width="300px" />
      <p style="font-size: 24px;text-shadow: 5px 5px 10px red;color:blue;">Dr. Sheelesh Kr. Sharma<br>Assistant Professor<br>Contact:-81 78 88 79 96<br>(IMS)<BR>‘A’ Grade Institute by NAAC<br> Ghaziabad Lal Quan-201002</p><br><p style="font-size: 25px;"><a href="https://www.ims-ghaziabad.ac.in/">https://www.ims-ghaziabad.ac.in/</a></p><br>
      </div>
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<div class="container">
  <div class="modal fade" id="myModalvk">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Designe & Developed By</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        
        <div class="modal-body"><div class="Details">
      <img src="Images/vk2.jpg" height="200" width="250" id="img" style="border-radius: 50%">
      <p id="text">Vikash Kumar<br>Master Of Computer Application<br>From IMS Ghaziabad<br>Contact:-<span class="glyphicon glyphicon-phone"></span>7542010041</p>
       
        
      <div class="icon">
        <a href="https://www.facebook.com/kumar.vikash.142892" class="fa fa-facebook"></a>
        <a href="https://www.twitter.com/@megasoft/" class="fa fa-twitter"></a>
        <a href="https://www.google.com/gmail/" class="fa fa-google"></a>
        <a href="https://www.linkedin.com/in/vikash-kumar-742b62151" class="fa fa-linkedin"></a>
      </div>
      
      </div>
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>



<div class="container-fluid" style="padding-bottom: 3px;padding-top: 1px;">
  <div class="row">
    <div class="col-lg-4">
  <!--    <div class="Details">
      <img src="Images/vk2.jpg" height="200" width="250" id="img" style="border-radius: 50%">
      <p id="text">Vikash Kumar<br>Master Of Computer Application<br>From IMS Ghaziabad<br>Contact:-<span class="glyphicon glyphicon-phone"></span>7542010041</p>
       
        
      <div class="icon">
        <a href="https://www.facebook.com/kumar.vikash.142892" class="fa fa-facebook"></a>
        <a href="https://www.twitter.com/@megasoft/" class="fa fa-twitter"></a>
        <a href="https://www.google.com/gmail/" class="fa fa-google"></a>
        <a href="https://www.linkedin.com/in/vikash-kumar-742b62151" class="fa fa-linkedin"></a>
      </div>
      
      </div>  -->
    </div>
    <div class="col-lg-4">
      <p id="p1">Primary Education Learning Resource</p>
      <p id="p2">Virtual Learning<br>Teacher-Student Center</p>
      <p id="p3">प्राथमिक शिक्षा उत्तर प्रदेश</p>
      <p id="p4">पढ़ेगा इंडिया तभी तो बढ़े इंडिया</p>
      <p id="p5">सब पढ़े सब बढ़े</p>



    </div>
<!-- ********************************************Middle div closed here*************************************************** -->
  <div class="col-lg-4">
  <!--    <div class="ims" style="text-align: center; padding-top: 5px; background-color: none;">
      <img src="Images/imsp.jpg" height="200px" width="400px" />
      <p style="font-size: 24px;text-shadow: 5px 5px 10px red;color:blue;">Institute of Management Studies<br>(IMS)<BR>‘A’ Grade Institute by NAAC<br> Ghaziabad Lal Quan-201002</p><br><p style="font-size: 25px;"><a href="https://www.ims-ghaziabad.ac.in/">https://www.ims-ghaziabad.ac.in/</a></p><br>
      </div>
    </div>
  </div>  -->
</div> 
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <p id="footer">About Us</p>
      <p id="footer">The Edu@kids Website is a program service of IMS Education Foundation, a publicly supported nonprofit organization, 501(c)(3). The website opened in February of 2018 as a free public service and social enterprise supported by the IMS family. On March 1, 2018, the IMS family donated their full interest in Edu@kids to the IMS Education Foundation.

</p>
    </div>
  </div>
</div> 
</body>
</html>