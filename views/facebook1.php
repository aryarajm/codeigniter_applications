<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facebook-log in or signup</title>
<link rel="stylesheet" href="style.css" type="text/css">
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
         <img src="networkimg.jpg" width="537px" height="195px">
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
