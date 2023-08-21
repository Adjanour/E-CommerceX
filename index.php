<?php
require_once("./connection.php");
$select_query = "SELECT * FROM products;";
$result = mysqli_query($conn, $select_query);
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Select Product</title>
	<meta charset="UTF-8">
	</head>
	<body>
		<h1>Make your Order Here<h1>
	<form>
		<div>
			<label>Product</label>
			<select>
				<?php
					while($row = mysqli_fetch_assoc($result))
					{
						$p_name = $row["name"];
						?>
						<option value="<?php echo $p_name?>"><?php echo $p_name ?></option>
						<?php
					}
				?>
			</select>
		</div>
	</form>
	<input type="submit" value="Order" name="order">
	</body>
</html>
