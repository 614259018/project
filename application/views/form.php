<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

<div id="container"  align="center">
	<form action="http://localhost/se/index.php/works/show" method="POST">
	<h1>ประวัติการทำงาน</h1>
	<div id="body"  align="center">
		<form action="" method="post">
		<table style="width:50%" border="0">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td>ประเภทงาน :</td>
		<td>
			<input type="text" name="gory" placeholder="<<ประเภทงาน>>">
        </td>
    </tr>
   <tr>
       <td>
    <input type="submit" name="submit" value="บันทึก">
      </td>
   </tr>

	</table>
    </form>
</div>

</body>
</html>