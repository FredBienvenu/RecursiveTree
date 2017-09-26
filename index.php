<?php
$max_step = 6;

function drawBranch($step=0)
{
	global $max_step;
	
	echo '<div class="branch">';
	if($step<$max_step)
	{
		for($i=0;$i<4;++$i)
		{
			drawBranch($step+1);
		}
	}
	echo '</div>';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Recursive Tree</title>
		<link rel="stylesheet" type="text/css" href="index.css" media="all"/>

		<style type="text/css">
		</style>
	</head>
	<body>
		<div class="world">
<?php drawBranch(); ?>
		</div>
	</body>
</html>