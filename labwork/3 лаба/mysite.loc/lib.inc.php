<?php
	
	function drawTable($cols,$rows,$color){
		for ($tr = 1; $tr <= $rows; $tr++)
				{
					echo '<tr>';

					for($td = 1; $td <= $cols; $td++)
					{
						$background = 'white';
						if($tr == 1 || $td == 1)
							$background = $color;
						echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
					}
					echo "</tr>";
				}
	}
	
    function drawMenu(){

    
    echo "<ul>";	
   foreach($left_menu_2 as $list)
   { echo "<li>";	
       echo "<a href='{$list['href']}'> {$list['link']} </a>";	
       echo "</li>";		
    }
       echo "<ul>";	
    }
	
?>