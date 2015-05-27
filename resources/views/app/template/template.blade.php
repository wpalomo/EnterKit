<!DOCTYPE html>
<html>
<head>
	<title>EnterKit | </title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="shortcut icon" href="{{asset('img/logo.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/enterkit.css')}}"/>
</head>
<body>
<div id="main-container">
    <div id="header-container">
        <div id="header">
            <div id="logo-container"><img id="logo" src="{{asset('img/logo.png')}}"/></div>
            <div id="user-container">{{Auth::user()->name}} | <?php $empre =\DB::table('empresas')->where('id', Auth::user()->empresa_id)->first(); ?> {{ $empre->razonSocial }} Enterkit, S.A.</div>
        </div>
    </div>
    
    <div id="top-menu-container">
        <div id="top-menu">
            <a href=""><div id="selected-module" class="module">Ventas</div></a>
            <a href=""><div class="module">Compras</div></a>
            <a href=""><div class="module">Producción</div></a>
            <a href=""><div class="module">Recursos humanos</div></a>
            <a href=""><div class="module">Contabilidad</div></a>
            <a href=""><div class="module">Configuración</div></a>
        </div>
    </div>

   </div>
</body>
</html>