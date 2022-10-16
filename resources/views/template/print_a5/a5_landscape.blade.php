<!DOCTYPE html>
<html>
	<head> 
        <meta charset="utf-8" />
        <title>@yield('title')</title>

        <!-- Normalize or reset CSS with your favorite library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

        <!-- Load paper.css for happy printing -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
        
        <style>@page { size: A5 landscape }</style>

	</head>
	<body class="A5 landscape"> 
        @yield('content') 
 
	</body>
</html>
