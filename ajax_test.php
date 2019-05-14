<!DOCTYPE html>
<html>
<body>

<h2>Get data as JSON from a PHP file on the server.</h2>

<-demo -> <p id="demo"></p>
<-readyState1 -> <p id="readyState1"></p>
<-status1 -> <p id="status1"></p>

<script>

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
	document.getElementById("readyState1").innerHTML = this.readyState;
	document.getElementById("status1").innerHTML = this.status;
	
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML = myObj.name;
		
    }
};
xmlhttp.open("GET", "http://www.market-focus.com/brad/ajax_data.php", true);
xmlhttp.send();

</script>

</body>
</html>