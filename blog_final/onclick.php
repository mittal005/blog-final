<!DOCTYPE html>
<html>
<body>

<p>This example uses the addEventListener() method to attach a "click" event to a p element.</p>

<!-- <p id="demo">Click me.</p> -->
<input type="text" id="demo">

<script>
document.getElementById("demo").addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
}
</script>

</body>
</html>
