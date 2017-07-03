<form action=""> <!--action tuscias tam kad griztume atgal ten pat -->
	<select name="t" class="form-control">
		<?php 
			foreach ($templates as $template) {
				echo '<option value="'. $template. '">' . $template . '</option>';
			}
		?>
	</select>
	<button type="submit">Keisti</button>
</form>