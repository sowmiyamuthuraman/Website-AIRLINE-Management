<!DOCTYPE html>
<html>
	<head>
		<title>jQuery Boilerplate</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="../dist/jquery.table2excel.min.js"></script>
	</head>
	<body>

<?php
include 'db1.php';
$q=mysql_query("SELECT * FROM employee");
echo "		<table class='table2exce' data-tableName='Test Table 1'>";

while($row=mysql_fetch_array($q)){?>
<tr>
<td><?php $row['ename']?></td>
</tr>

<?php }?>
</table>
<script type="text/javascript">
			$(function() {
				$(".table2excel").table2excel({
					exclude: ".noExl",
					name: "Excel Document Name",
					filename: "employee",
					fileext: ".xls",
					exclude_img: true,
					exclude_links: true,
					exclude_inputs: true
				});
			});
		</script>
	</body>
</html>

