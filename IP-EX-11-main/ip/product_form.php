<!DOCTYPE html>
<html>
<head>
	<title>Product Form</title>
	<style>
		*{
			box-sizing: border-box;
			text-align: center;
		}
		html,body{
			width:100%;
			height:100%;
		}
		form{
			border: 2px solid black;
			margin:auto;
			width:60%;
			height:70%;
			border-radius: 20px;
		}
		table{
			margin: auto;
			width:80%;
			height:50%;
			font-size: larger;
		}
		tr{
			margin-top: 10px;
		}
		.input{
			width:200px;
			font-size: large;
		}
		.btn{
			width:150px;
			height:50px;
			border-radius: 10px;
			margin-top: 20px;
			color: black;
		}
		.btn:hover{
			background-color: red;
			color:white;
		}
	</style>
</head>
<body>
	<form action="insert_product.php" method="post">
	<h1>Add a New Product</h1>
		<table>
			<tr>
				<td><label for="name">Product Name:</label></td>
				<td><input type="text" name="name" id="name" class="input"></td>
			</tr>
			<tr>
				<td><label for="description">Product Description:</label></td>
				<td><textarea name="description" id="description" class="input"></textarea></td>
			</tr>
			<tr>
				<td><label for="price">Product Price:</label></td>
				<td><input type="text" name="price" id="price" class="input"></td>
			</tr>
	</table>
		<input type="submit" value="Add Product" class="btn">
	</form>
</body>
</html>
