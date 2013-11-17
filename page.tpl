<html>
	<head>
		<title>{title}</title>
	</head>
	<body>
		<h1>{subtitle}</h1>

		<p>{looptitle}</p>
		{LOOP:people}
			<b>{name}</b> {surname}<br />
		{ENDLOOP}

		<br /><br />
		<i>{footer}</i>
	</body>
</html>
