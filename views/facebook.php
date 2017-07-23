<html>
<head>
<title>Facebook-log in or signup</title>
<style type="text/css">
  
  @charset "utf-8";
/* CSS Document */

.fb-header,
.fb-body {
    background-color: #3b5998;
    padding: 10px 200px 5px;
    width: calc(100% - 391px);
    height: auto;
    overflow: hidden;
}

.login-fields {
    width: 390px;
    height: 65px;
    float: right;
}

.input-text {
    width:99px;
}
body{
    width: 100%;
    margin: 0;

}
.login-label{
    color: white;
    font-weight: normal;
    font-size: 12px;
}
.fbhead{
     float: left;
     color: white;
     font-size: 34px;
    font-weight: bold;
    margin-top: 17px;
}
.fb-body{
    background-color: #e9ebee;
}

.column {
    width: 50%;
    float: left;
}
.contentleft{
     font-size: 20px;
     color: #0e385f;
     margin-top:40px;
}
.lefthead{
    color: #1d2129;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 36px;
    font-weight: bold;
    margin: 25px auto 10px 66px;
}
.create-account-table input[type="text"],
.create-account-table input[type="password"] {
  padding: 10px;
}
.leftsubhead{
   color: #1d2129;
   font-size: 18px;
   font-weight: normal;
    margin: 10px auto 10px 66px;
}
.create-account-table{
    margin-left: 59px;
}
.birthday{
    margin-top: 5px;
}
.dob-td {
    width: 65px;
    float: left;
    text-align: left;
    display: block;
}
.dob-td select {
    width: 60px;
}
.content-bottom{
    font-size:10px;

}
.login-button{
  background: linear-gradient(#79bc64, #578843);
  border: 0;
  margin-top: 10px;
  margin-bottom: 20px;
  padding: 10px 20px;
  font-size: 16px;
  color: white;
  font-weight: bold;
}
.log-button{
  background-color:#4267b2;
  color:#FFF;
  font-weight:bold;
  width: 50px;
}
.mob{
    width: 189%;
}
.pwd{
   width: 189%;
}
.dob{
  text-decoration:none;
  font-size: 12px;
  font-color:#365899;
}
</style>
</head>
<body>
	<header class="fb-header">
      <span class="fbhead"> 
          facebook
      </span>
    	<div class="login-fields">
        	<table>
            	<tr>
                  <td class="login-label"> Email or Phone </td>
                  <td class="login-label"> Password</td>
            	</tr>
           		<tr>
                  <td class="input-text">
                    <input type="text" id="t1" class="input-text">
                   </td>
                   <td>
                     <input type="password" id="p1" class="input-text">
                   </td>
                   <td>
                     <input class="log-button"  type="log-button" value="Log In" style="border: 1px solid rgb(66, 103, 178)">
                   </td>
                 </tr>
            </table>
        </div>
    </header>
    <div class="fb-body">
      <div class="column">
         <h3 class="contentleft"> Facebook helps you connect and share with the people in your life</h3>
         <img src="../application/asset/image/networkimg.jpg" width="537px" height="195px">
      </div>
      <div class="column">
        <h5 class="lefthead"> Create a new account </h5>
        <h6  class="leftsubhead"> It's free and always will be</h6>
          <table  class="create-account-table"> 
            <tr>
              <td><input type="text" name=" fname" placeholder="firstname"></td>
              <td><input type="text" name="surname"  placeholder="surname"></td>
            </tr>
            <tr>
              <td><input class="mob" type="text" name=" mob" placeholder="mobile number or emailaddress"></td>
            </tr>
            <tr>
              <td><input  class="pwd"  type="password" name=" password" placeholder="New password"></td>
            </tr>
            <tr>
              <td><h6 class="birthday"> Birthday</h6></td>
            </tr>
            <tr>
              <td class="dob-td">
                 <select   name="day"  >
                    <option value="day">Day</option>
                    <option value="1">1</option>
                     <option value="2">2</option>
                 </select>
              </td>
              <td class="dob-td">
                 <select   name="Month" >
                    <option value="Month">Month</option>
                    <option value="1">JAN</option>
                    <option value="2">FEB</option>
                 </select>
              </td>
              <td class="dob-td">
                <select name="Year" >
                  <option value="Year">Year</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                </select>
              </td>
              <td class="dob"> <a href="">Why do i need to provide my date of birth?</a></td>
            </tr>
            <tr>
               <td><input type="radio" name="gender" value="female" >Female
                <input type="radio" name="gender" value="male">Male
                </td>
            </tr>
            <tr >
              <td class="content-bottom">
                By clicking Create Account, you agree to our <a href="" style="color: #365899; text-decoration: none ">Terms </a> and confirm that you have read our <a href="">Data Policy</a>, including our <a href=""> Cookie Use Policy</a>. You may receive SMS message notifications from Facebook and can opt out at any time.
              </td>
            </tr> 
            <tr>
              <td>
                <input class="login-button" type="button" value="Create an account" >
              </td>
            </tr>
           </table>
         </div>
 
    </div>
</body>
</html>
