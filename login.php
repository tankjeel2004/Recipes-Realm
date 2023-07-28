 <div class="wrapper">
    <h2>Login</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Enter your Username" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login Now">
      </div>
      <div class="text">
        <h3>Not have an account? <a href="signup.php">Register Now</a></h3>
      </div>
    </form>
  </div>

  <style type="text/css">
     
     @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #F7F1E5;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #898121;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #E7B10A;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #E7B10A;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #4C4B16;
  letter-spacing: 1px;
  border: none;
  background: #E7B10A;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #F7F1E5;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #E7B10A;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

  </style>









