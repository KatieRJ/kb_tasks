<?php
$title = "JavaScript Events and form validation";
include "header.php"
?>
<h2> A simple button to display date </h2>
<button onclick="this.innerHTML = Date()"> Click to display the date </button>

<h2> Make a button and a place holder as paragraph for the date </h2>
<button onclick="getElementById('p1').innerHTML = Date()"> Click to display the date </button>
<p id="p1"> </p>

<h2> Change the background colour </h2>
<form>
    <input type="color" id="background" onchange="changeColor()">
</form>

<h2> Change the font colour </h2>
<form>
    <input type="color" id="b1" onchange="changeFcolor()">
</form>

<h2>On Mouse Over & On Mouse Out </h2>

<span onmouseover="this.style.color='blue';
                    this.style.backgroundColor='yellow';
                    this.style.fontSize='2em';" onmouseout="
                    this.style.color='red';
                    this.style.backgroundColor='purple';
                    this.style.fontSize='1.1em';"> Some text </span>






<?php
include "footer.php"
?>