<?php 
if(isset($_POST['submit'])){
    $email=$_POST["mail"];
    $password=$_POST["password"];
    
    $conn=mysqli_connect("localhost","root","","work");
    $query=mysqli_query($conn,"SELECT * FROM info WHERE email='$email'");
    //$res=mysqli_query($conn,$sql);
    $data=mysqli_fetch_array($query);
    
    if($password==$data["password"]){
        ?>
        <script>
            alert("Log in Successful");
            window.location.href = "studenthome.html";
        </script>

        <?php
        //header("Location:studenthome.html");
    }
    else{
        ?>
        <script>
            alert("Login failed!!");
            window.location.href = "student.html";
        </script>
        <?php
        //header("Location:student.html");
    }
}


?>