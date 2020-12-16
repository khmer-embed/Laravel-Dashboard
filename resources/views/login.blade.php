<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Progress bar</title>
	<style type="text/css">
		*{
	margin: 0;
	padding: 0;
	font-family: ubuntu;
}
body{
	background: #ecf0f1;
	overflow-x: hidden;
	background-image: url("https://purelifi.com/wp-content/uploads/2019/02/AdobeStock_118793641.jpeg");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;

}
.container{
	width: 360px;
	height: 400px;
	margin: 10% auto;
	background: #fff;
	border-bottom-right-radius:40px;
	position: relative;
	overflow: hidden;  
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
h3{
	text-align: center;
	margin-bottom:50px;
	color: #777;
}
.container form {
	width: 280px;
	position:absolute;
	top: 100px;
	left: 30px;
}
form input{
	width: 100%;
	padding: 10px 5px;
	margin: 5px 0;
	border: 0;
	outline: none;
	border-bottom: 1px solid #999;
	background: transparent;
}
::placeholder{
	color: #777;
}
.btn-box{
	width: 100%;
	text-align: center;
	margin: 30px auto;
}
form button{
	width: 110px;
	height: 35px;
	background: #e96443;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #904e95, #e96443);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #904e95, #e96443); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	color: #fff;
	outline: none;
	border:0;
	font-weight: 600;
	border-radius: 30px;
}
#Form2{
	left: 400px;
}
#Form3{
	left: -400px;
}
.step-row{
	width: 360px;
	height: 40px;
	margin: 5 auto;
	display: flex;
	align-items: center;
	border-bottom: 2px solid #ecf0f1;
	position: relative;
}
.step-col{
	width: 120px;
	text-align: center;
	color: #fff;
	position: relative;
}
#progress{
	position: absolute;
	height: 100%;
	width: 120px;
	background: #e96443;  /* fallback for old browsers */	
	background: -webkit-linear-gradient(to right, #904e95, #e96443);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #904e95, #e96443); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	transition: 1s;
}
#progress::after{
	content: '';
	height: 0;
	width: 0;
	border-top: 20px solid transparent;
	border-bottom: 20px solid transparent;
	position: absolute;
	right: -20px;
	top: 0;
	border-left: 20px solid #e96443;	
}
	</style>
</head>
<body>
	<div class="container">
		<form id="Form1">
			<h3>CREATE ACCOUNT</h3>
			<input type="text" placeholder="Email" required>
			<input type="password" placeholder="Password" required>
			<input type="password" placeholder="Confirm password" required>

			<div class="btn-box">
				<button type="button" id="Next1">Next</button>
			</div>
		</form>

		<form id="Form2">
			<h3>SOCIAL LINK</h3>
			<input type="text" placeholder="Medium">
			<input type="text" placeholder="Github">
			<input type="text" placeholder="Linkedin">

			<div class="btn-box">
				<button type="button" id="Back1">Back</button>
				<button type="button" id="Next2">Next</button>
			</div>
		</form>

		<form id="Form3">
			<h3>PERSONAL</h3>
			<input type="text" placeholder="First Name" required>
			<input type="text" placeholder="Github" required>
			<input type="text" placeholder="Mobile No." required>

			<div class="btn-box">
				<button type="button" id="Back2">Back</button>
				<button type="Submit">Submit</button>
			</div>
		</form>

		<div class="step-row">
			<div id="progress"></div>
			<div class="step-col"><small>step1</small></div>
			<div class="step-col"><small>step2</small></div>
			<div class="step-col"><small>step3</small></div>
		</div>	
	</div>

<script type="text/javascript">
	var Form1 = document.getElementById("Form1");
	var Form2 = document.getElementById("Form2");
	var Form3 = document.getElementById("Form3");

	var progress = document.getElementById("progress")

	var Next1 = document.getElementById("Next1");
	var Next2 = document.getElementById("Next2");
	var Back1 = document.getElementById("Back1");
	var Back2 = document.getElementById("Back2");

	Next1.onclick=function(){
		Form1.style.left = "-450px";
		Form2.style.left = "40px";
		progress.style.width="240px";
	}

	Back1.onclick=function(){
		Form1.style.left = "40px";
		Form2.style.left = "450px";
		progress.style.width="120px";
	}

	Next2.onclick=function(){
		Form2.style.left = "-450px";
		Form3.style.left = "40px";
		progress.style.width="360px";
	}
	Back2.onclick=function(){
		Form2.style.left = " 40px";
		Form3.style.left = "450px";
		progress.style.width="240px";
	}
</script>

</body>
</html>