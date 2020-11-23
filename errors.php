<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) {
  	  echo"<p style=color:black;>"; echo $error ; echo"</p>";
	}
  	 ?>
  </div>
<?php  endif ?>