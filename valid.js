function leaved() {
	var a = confirm("Are you sure you want to go to Home? Your post will not be saved. :(");
	if (a === true){
		window.location="index.php";
	}
	else{
		alert("Completed.");
	}
	//window.location="index.php";
}

function leaved2(){
	var b = confirm("Are you sure you want to go to Submission? Your post will not be saved. :(");
	if (b === true){
		window.location="submissions.php";
	}
	else{
		alert("Completed.");
	}
}
function leaved3(){
	var c = confirm("Are you sure you want to go to About? Your post will not be saved. :(");
	if (c === true){
		window.location="about.php";
	}
	else{
		alert("Completed.");
	}
}
function leaved4(){
	var d = confirm("Are you sure you want to go to Contact? Your post will not be saved. :(");
	if (d === true){
		window.location="contact.php";
	}
	else{
		alert("Completed.");
	}
}
function leaved5(){
	var e = confirm("Are you sure you want to go to Rate? Your post will not be saved. :(");
	if (e === true){
		window.location="rate.php";
	}
	else{
		alert("Completed.");
	}
}