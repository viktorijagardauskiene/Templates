<form class="form-inline" action="" method="POST"> <!--action tuscias tam kad griztume atgal ten pat -->
	<select name="t" class="form-control">
		<?php 
			foreach ($templates as $template) {
				echo '<option value="'. $template. '">' . $template . '</option>';
			}
		?>
	</select>
	<button class="btn btn-default" type="submit">Keisti</button>
</form>