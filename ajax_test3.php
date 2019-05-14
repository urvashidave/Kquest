<!DOCTYPE html>
<html>

<body>

<h2>Request JSON using the script tag</h2>
<p>The PHP file returns a call to a function that will handle the JSON data.</p>

<p id="demo"></p>

<script>
function myFunc(myObj) {
  document.getElementById("demo").innerHTML = myObj.name;
}
</script>

<script src="http://www.market-focus.com/brad/ajax_data2.php?uid=55555"></script>

</body>
</html>