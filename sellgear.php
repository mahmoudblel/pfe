<?php
session_start();
include 'init.php';
include 'includes/header.php';?>

<h1 class="mt-5">let's see your instrument</h1>
<div class="image-upload mt-4 ">

  <label for="file-input">
 <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjEyOHB4IiBoZWlnaHQ9IjEyOHB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6Izk5OTk5OTsiIGQ9Ik01MTIsMGgtNDB2MTZoMjR2MzJoMTZWMHogTTQzMiwwaC00MHYxNmg0MFYweiBNMzUyLDBoLTQwdjE2aDQwVjB6IE0yNzIsMGgtNDB2MTZoNDBWMHogTTE5MiwwaC00MCAgdjE2aDQwVjB6IE0xMTIsMEg3MnYxNmg0MFYweiBNMzIsMEgwdjE2aDMyVjB6IE0xNiw0OEgwdjQwaDE2VjQ4eiBNMTYsMTI4SDB2NDBoMTZWMTI4eiBNMTYsMjA4SDB2NDBoMTZWMjA4eiBNMTYsMjg4SDB2NDBoMTZWMjg4eiAgIE0xNiwzNjhIMHY0MGgxNlYzNjh6IE0xNiw0NDhIMHY0MGgxNlY0NDh6IE01Niw0OTZIMTZ2MTZoNDBWNDk2eiBNMTM2LDQ5Nkg5NnYxNmg0MFY0OTZ6IE0yMTYsNDk2aC00MHYxNmg0MFY0OTZ6IE0yOTYsNDk2aC00MHYxNiAgaDQwVjQ5NnogTTM3Niw0OTZoLTQwdjE2aDQwVjQ5NnogTTQ1Niw0OTZoLTQwdjE2aDQwVjQ5NnogTTUxMiw0ODhoLTE2djhsMCwwdjE2aDE2VjQ4OHogTTUxMiw0MDhoLTE2djQwaDE2VjQwOHogTTUxMiwzMjhoLTE2djQwICBoMTZWMzI4eiBNNTEyLDI0OGgtMTZ2NDBoMTZWMjQ4eiBNNTEyLDE2OGgtMTZ2NDBoMTZWMTY4eiBNNTEyLDg4aC0xNnY0MGgxNlY4OHoiLz4KPGc+Cgk8cmVjdCB4PSIyNDQiIHk9IjE3NS45NzYiIHN0eWxlPSJmaWxsOiNFMjFCMUI7IiB3aWR0aD0iMjQiIGhlaWdodD0iMTYwLjA4Ii8+Cgk8cmVjdCB4PSIxNzUuOTc2IiB5PSIyNDQiIHN0eWxlPSJmaWxsOiNFMjFCMUI7IiB3aWR0aD0iMTYwLjA4IiBoZWlnaHQ9IjI0Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />

  </label>

  <input id="file-input" type="file" />
</div>

<form class="sellform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "POST">
	<input class = "form-control" type="text" name="user" placeholder="product Name" autocomplete="off"/><br/>
	<input class = "form-control" type="text" name="user" placeholder="year of purchase" autocomplete="off"/><br/>
	<input class = "form-control" type="text" name="user" placeholder="color" autocomplete="off"/><br/>
	<input class = "form-control" type="text" name="user" placeholder="condition" autocomplete="off"/><br/>
	<input class = "form-control" type="text" name="user" placeholder="price" autocomplete="off"/><br/>
	<input class = "form-control" type="text" name="user" placeholder="phone number" autocomplete="off"/><br/>
	
</form>
<div class="textthing">
<label for="story">Tell us about your instrument:</label>

<textarea id="story" name="story"
          rows="13" cols="80">
describe it as specifically as possible...
</textarea>

</div>
<form class="sellpageform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "POST">
	
	<input class = "btn btn-primary btn-block" type="submit" value="save and list" />
</form>

<?php include 'includes/footer.php';?>