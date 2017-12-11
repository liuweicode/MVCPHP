<!DOCTYPE HTML>
<html>
	<head>
		<title>测试</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<body>
	<h2>{#$aa#}</h2>
    <table>
        {#foreach from=$model_list item=vo#}
		<tr>
			<td>{#$vo.name#}</td>
			<td>{#$vo.address_zh#}</td>
			<td>
				<a href="?do=City&cmd=edit&id={#$vo.id#}"><i class="fa fa-pencil"></i></a>
			</td>
		</tr>
        {#/foreach#}
	</table>
	</body>
	<script type="text/javascript">
		//alert($("#test").html())
	</script>
</html>