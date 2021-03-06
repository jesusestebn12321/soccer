<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<title>@yield('title')</title>
	<meta name="HyperlinksChanged" content="false">
	<meta name="LinksUpToDate" content="false">
	<meta name="ScaleCrop" content="false">
	<meta name="ShareDoc" content="false">
	@yield('style')
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Times New Roman"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		.comment{ display:none;  }
		table {
			width: 60% !important;
			margin-left: 1cm !important;
			margin-right: 1cm !important;
			margin-top: 2cm !important;
			margin-bottom: 2cm !important;
			/*margin-top: 5%;*/
			/*min-height: 96% !important;*/
		} 
		
		td{
			/*darle uniformidad a los bordes tablas*/
			border:  1px solid black!important;
		}

		.reporte-campo-texto {
			word-break: break-all !important;
			text-align: left !important;
			font: 11px monospace !important;
		} 		

		.columna-invisible {
			border-color: transparent !important;
		}

		.contenido-invisible {
			color: transparent !important;
		}

		.titulo-header-reporte {
			font-size: 11px;
		}

		

	@page {
        margin: 0cm .6cm;
        font-family: Arial;
    }
    html{
    	
    }
    body {
        margin: 3cm 3cm 2cm 3cm;
    }

    header {
		font: 25px monospace !important;
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: auto;
        line-height: 30px;
		margin-bottom: 15px !important;

    }
    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        line-height: 35px;
		font:15px monospace !important;
    }

	th, td{
		border:2px solid black !important;
	}
	.p{
		font: 19px monospace !important;
    	background: #ffffff;
    	border: none; padding: 0in;
    	page-break-inside: auto;
    	widows: 0;
    	orphans: 0;
		background: transparent;
    	page-break-after: auto;
		text-transform: uppercase;
 
    }.table {
		width: 120% !important;
		min-width: 100% !important;
		height: 70% !important;
		min-height: 70% !important;
		margin-left: -1cm !important;
		margin-right: 1cm !important;
		margin-top: 1cm !important;
		margin-bottom: 2cm !important;
		position: all ;
	}
	.td,.th{
		border:  1px solid black !important;
		outline: 1px solid black !important;
		width:.3cm !important;
		height:.4cm !important;
		min-height: 10px !important;
		padding: 1px;
		margin:1px;
		background: #ffffff !important;
	}h4{
		text-transform: uppercase;
		font: 21px monospace !important;
		font-weight: bold;
	}h3{
		text-transform: uppercase;
		font: 19px monospace !important;
		font-weight: bold;
	}
	.font{
		word-break: break-all !important;
		background: transparent;
		color:#000000 !important;
		text-align: left !important;
		font: 17px monospace !important;
		padding: 10px;
	}
	span{
		color:#000000 !important;
		background: #ffffff !important;
		font-variant: normal;
		text-decoration: none;
		font-style: normal

	}
	
	@media print {
	  	.nueva-pagina {
	    	page-break-before: always;
	  }
	}

	.nueva-pagina {
		margin-top: 8cm !important;
		position: absolute !important;
	}
	</style>
	@yield('style_inline')
</head>
<body>
	@yield('content')
</body>
</html>