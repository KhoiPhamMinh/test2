<!DOCTYPE html>
<html>
<head>
	<title>ATN store</title>

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
require_once ("./header.php");
require_once("./db.php");
	?>
<div class="advert"></div>
<?php require_once("./left.php");?>



<div style="position: absolute; top:450px; left:300px; width:800px; height:400px">
<?php 
		$sql = "Select * from product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?>
			<div class="product">
				<div class="name"><?=$pros[$i][1]?></div>
				<div class="image">
					<a href="./productdetail.php?pid=<?=$pros[$i][0]?>">
						<img src="<?=$pros[$i][2]?>" alt="" width="100%" height="100%">
					</a>
				</div>
				<div class="price"><?=$pros[$i][3]?></div>
			</div>
			<?php
		}
		?>
		</div>

<?php 
-		require_once("./right.php");?>		
				
<?php require_once("./bottom.php");?>
</body>
</html>

