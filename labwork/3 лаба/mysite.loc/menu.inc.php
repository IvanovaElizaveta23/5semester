		
		<?php
        echo "<h2>Навигация по сайту</h2>";

		 echo "<ul>";	
		foreach($left_menu_2 as $list)
		{ echo "<li>";	
			echo "<a href='{$list['href']}'> {$list['link']} </a>";	
			echo "</li>";		}
			echo "<ul>";	
		?>


			