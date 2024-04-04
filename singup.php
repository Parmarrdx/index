<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            border: 1px solid black;
            width: 60%;

        }
        .input{
            margin-bottom: 5px;
            padding:3px;
            margin:5px 10px;

        }
    </style>
    <?php
    if(isset($_POST['submit'])){
        $con=mysqli_connect("localhost:3306","root","","registration");
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $city=$_POST['city'];
        $gender=$_POST['gender'];
        $hobby=$_POST['hobby'];
        $password=$_POST['pass'];
        $sql="INSERT INTO student(Firstname,Lastname,Email,Mobile,City,Gender,Hobbies,Password)values('$firstname','$lastname','$email','$mobile','$city','$gender','$hobby','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo"student registrion successfully";
        }
        else{
            echo "error insert  data";
        }

 
    }

    ?>
</head>
<body>
    <div class="form">
        <h2>Student registrion</h2>
        <form  method="POST">
           <input class="input" type="text" name="firstname" placeholder="enter your first name here">
           <input class="input" type="text"name="lastname" placeholder="enter your last name here"><br>
           <input class="input" type="email" name="email" placeholder="ex=bhavesh@gmail.com">
           <input class="input" type="text" name="mobile" placeholder="enter a mobile number"><br>
           <input class="input" type="text" name="city" placeholder="enter your city here">
           <hr>
           Gender<br>
           <input type="radio" name="gender" value="Male">Male<br>
           <input type="radio" name="gender" value="Female">Female<br>
           <hr>Hobbies<br>
           <input type="checkbox" name="hobby" value="Cricket">Cricket<br>
           <input type="checkbox" name="hobby" value="Football">Footbal<br>
           <input type="checkbox" nmae="hobby" value="chess">Chess<br>
           <hr>
           <input type="password" name="pass" placeholder="Enter your password here"><br>
           <input type="submit" name="submit" value="Register">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $con=mysqli_connect("localhost:3306","");


    }
    ?>
    
    </div>
   
    
</body>
</html>