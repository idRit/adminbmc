<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| CLEAN |</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- <script src="main.js"></script> -->
    <script src="js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
<body>
   <!--<div class="main-container">
        <div class="row">
            <div class="col-md-6">
                    <div class="logo-container">
                        <div class="logo">
                        </div>      
                        <h1>MUNCIPAL CORPORATION OF MUMBAI</h1>
                    </div>           
            </div>
            <div class="col-md-6">
                <div class="details-container">
                    <div class="admin-logo fas fa-user-circle fa-10x">
                         <!--<i class="fas fa-user-circle fa-10x"></i>
                    </div>
                    <div class="admin-form">
                        <form action="login.php" name="admin_form" method="get">
                            
                            <label for="for-username">Username:</label>
                            <input type="text" placeholder="Enter Username Here" id="for-username" name="username" id="username" class="username form-control">
                            <br>
                            <label for="for-password">Password:</label>
                            <input type="password" placeholder="Enter Password Here" id="for-password" name="password" id="password" class="password form-control">
                            <br>
                            <button type="submit" id="admin_btn" class="submit-btn form-control" onclick="validate_password()">Login</button>
                            <p id="error"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>-->
   <div class="split left">
  <div class="centered">
    <img src="images/logo.png" alt="Avatar woman">
    <h2>MUNCIPAL CORPORATION OF MUMBAI</h2>
  </div>
</div>

<div class="split right">
  <div class="centered">
         <div class="admin-logo fas fa-user-circle fa-10x">
                         <!--<i class="fas fa-user-circle fa-10x"></i>-->
                    </div>
                    <br>
                    <br>
      <form action="login.php" name="admin_form" method="post">
       
                            
                            <label for="for-username">Username:</label>
                            <input type="text" placeholder="Enter Username Here" id="for-username" name="username" id="username" class="username form-control">
                            <br>
                            <label for="for-password">Password:</label>
                            <input type="password" placeholder="Enter Password Here" id="for-password" name="password" id="password" class="password form-control">
                            <br>
                            <button type="submit" id="admin_btn" class="submit-btn form-control" onclick="validate_password()">Login</button>
                            <p id="error"></p>
                        </form>
  </div>
</div>
     <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
 
<script>
function validate_password()
{
    let admin_password = document.forms["admin_form"]["password"].value;
    let admin_username = document.forms["admin_form"]["username"].value;
    let err = document.getElementById('error');
    alert("please Enter the credentials -> username :" + admin_username + " password : "+admin_password);
    if(admin_username == "" || admin_password == "")
    {
        alert("please Enter the credentials -> username :" + admin_username + "password : "+admin_password);
    }
    else if(admin_password.length <= 5){
        alert("length of password should be greater than 8 characters");
    }
    
}   
</script>
</body>
</html>
