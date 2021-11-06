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
	
    function drawMenu($left_menu_2)
	{   
    echo "<ul>";

   foreach ($left_menu_2 as $item)
   		{ echo "<li>";	
       		echo "<a href='{$item['href']}'> {$item['link']} </a>";	
      		 echo "</li>";		
    	}
       	  echo "<ul>";	
    }
	
?>