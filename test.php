<?php

$human = 500;
$date = 31;
$gaofdate = 5;
?>
<section id="main" role="main">
<hgroup class="thin" id="main-title" >
				
</hgroup>

<div class="with-padding">
<!--<h4 class="green underline"><?php //echo $this->model->getLabels("grouptime");?></h4>-->

<div class="columns">
        	<div class="twelve-columns  no-margin-bottom ">
        	
<table class="table responsive-table responsive-table-on dataTable">
<tbody>
	<?php for($h=1;$h<=$human;$h++){
	echo "<tr>";
	for ($d=1;$d<=$date;$d++){
		for($g=1;$g<=$gaofdate;$g++){
		?>
		<td><input type="checkbox" 
		id="<?php echo $h?>_<?php echo $d;?>_<?php echo $g;?>" 
		class="<?php echo $h?>_<?php echo $d;?>_<?php echo $g;?>" 
		name="human[<?php echo $h?>][<?php echo $d;?>][<?php echo $g;?>]" /><?=$h.$d.$g;?>
		</td>
		<?php 
		}
	}
	echo "</tr>";
	}?>
</tbody>
</table>
</div>
</div>
</div>
