<html>
	<head>
		<title><?php echo $title;?></title>
	</head>
	<body>
		<table>
			<tr>
			<?php
			foreach( $label as $item){
			    echo '<th>'.$item.'</th>';			   
			} 
			unset($item);
			?>			
			</tr>
			<?php 
			foreach($query as $item){
			    echo '<tr>';
			    foreach($item as $i){
			        echo '<td>'.$i.'</td>';
			    }
			    echo '</tr>';
			}
			unset($item);
			?>
		</table>
	</body>
</html>
