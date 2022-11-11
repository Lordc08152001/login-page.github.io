<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/register.css">
  <title>Document</title>
</head>

<body>
  <div class="registration-container">
    <div class="user-img">
      <img src="./images/uploads/no_pic.png" width="100px" height="100px">
    </div>

    <div class="registration-header">
      <p>Registration</p>
      <span class="divider"></span>
    </div>
    <div class="registration-body">

      <form>
        <div class="registration-box">
          <div class="input-box">
            <label>First Name</label>
            <input type="text" placeholder="Enter Your First Name" class="input-field" required>
          </div>
          <div class="input-box">
            <label>Last Name</label>
            <input type="text" placeholder="Enter Your Last Name" class="input-field" required>
          </div>
          <div class="input-box">
            <label>Contact Number</label>
            <input type="tel" placeholder="Enter Your Contact Number" class="input-field" required>
          </div>
          <div class="input-box">
            <label>Email</label>
            <input type="email" placeholder="Enter Your Email" class="input-field" required>
          </div>
          <div class="input-box">
            <label>Username</label>
            <input type="text" placeholder="Enter Username" class="input-field" required>
          </div>
          <div class="input-box">
            <label>Password</label>
            <input type="password" placeholder="Enter Password" class="input-field" required>
          </div>
        </div>
        <button class="btn-register">Register Now</button>
      </form>
    </div>
    <div class="registration-footer">
       Already have an account? <a href="index.php"> Login</a>
    </div>
  </div>
</body>

</html>