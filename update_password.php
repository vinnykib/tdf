<html>
<head>
    <title>Technical discussion forum || Update Password</title>
    <link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<script>

    function validatePost() {
        var x = document.forms["myForm"]["name"].value;
        if (x == "")
        {
            alert("Name must be filled out");
            return false;
        }


        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            alert("Not a valid e-mail address");
            return false;
        }
        var z = document.forms["myForm"]["contact"].value;
        if (z == "")
        {
            alert("Contact Number must be filled out");
            return false;
        }
        var p = document.forms["myForm"]["username"].value;
        if (p == "")
        {
            alert("Username must be filled out");
            return false;
        }
</script>
<body>
<?php
include 'connect.php';
include 'nvgbar.php';
//$name=$_SESSION['username'];
$query = mysqli_query($connection,"SELECT * FROM users WHERE username='$name'");
$row=mysqli_fetch_array($query);
  // Did the user submit the form?
    if(isset($_POST['submit'])){
        // Process the form
         
        $op = $_POST['op'];
        $cp = $_POST['cp'];
        $np = $_POST['np'];
         
         if($np=="" || $cp=="" || $op=="")
            {
            $err="<font color='red'>Fill all the fileds first</font>";  
            }
            else
            {
        $op=sha1($op);   

        $sql=mysqli_query($connection,"select * from users where password='$op'");
        $r=mysqli_num_rows($sql);
        if($r==true)
        {
            if(strlen($_POST['cp']) < 8)
            {
                $err="<font color='red'>New  password should atleast be eight characters </font>";
            }

            elseif($np==$cp)
            {
            $np=sha1($np);
            $sql=mysqli_query($connection,"update users set password='$np' where username='$name'");
            
            $err="<font color='green'><h3>Password updated successfully</h3></font>";
            }
            else
            {
            $err="<font color='red'>New  password not matched with Confirm Password </font>";
            }
        }

        else
        {

        $err="<font color='red'>Wrong Old Password </font>";

        }
        }

            }
        ?>
<br><br>
<h1 style="text-align: left; font-size: 25px; margin-left: 8%;">Update Password</h1>
<div>
<form method="post" action="update_password.php" class="signup" name="myForm" onsubmit="return validatePost()">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><?php echo @$err;?></div>
    </div>
        <fieldset class="account-info">
            <label>
                Old Password
                <input type="password" name="op" value="">
            </label>

            <label>
                New Password
                <input type="password" name="np" value="">
            </label>

            <label>
                Confirm Password
                <input type="password" name="cp" value="">
            </label>

        </fieldset>
        <fieldset class="account-action">
            <input class="btn" type="submit" name="submit" value="Update">
        </fieldset>

</form>
</div>
<br><br>
<?php include 'footer.php'; ?>



</body>
</html>
