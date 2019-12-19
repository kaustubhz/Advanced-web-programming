<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" indent="yes" encoding="UTF-8" />
	<xsl:template match="/">
		<!-- TODO: Auto-generated template -->
		<html>
			<head>
				<title>Rendering via XML</title>				
			</head>
			<body>
				<table border="1">
				<thead>
					<tr>
						<th>Name</th>
						<th>Qty</th>
						<th>Rate</th>						
					</tr>
				</thead>
				<tbody>
				<xsl:for-each select="purchases/purchase">
					<tr>
						<td><xsl:value-of select="name"/></td>
						<td><xsl:value-of select="qty"/></td>
						<td><xsl:value-of select="rate"/></td>
					</tr>
					</xsl:for-each>
				</tbody>				
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>