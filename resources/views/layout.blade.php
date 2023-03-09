<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
<div id="app">
    <header class="h-15vh bg-emerald-300 border-4 flex flex-row justify-between content-center">
        <img src="{{asset("images/logo.png")}}" alt="logo">
        <h1 class="text-orange-600 text-2xl">Tabla de los alunos</h1>
        @guest <!--si no estas autenticado-->
        <div>
            <form action="login" method="POST">
                @method('post')
                @csrf
                <input type="text" name="email" placeholder="email" id="">
                <input type="text" name="password" placeholder="password" id="">
            </form>
            <a href="register">Registrarse</a>
        </div>
        @endguest

        @auth <!-- si estas autenticado-->
        Conectado como {{auth()->user()->name}}

        <form action="logout" method="POST">
            @csrf
            <input type="submit" value="Logout">
        </form>
        @endauth


    </header>
    <nav class="h-10vh bg-emerald-500 flex fles-row justify-start">
        <a class="w-1/12 bg-gray-800 text-white" href="{{route('alumnos.index')}}">Alumnos</a>
    </nav>
    <main>
        @yield("contenido")
    </main>
    <footer class="h-10vh bg-blue-500 flex fles-row justify-start">
        @coopyright pero copia lo que quieras...
    </footer>
</div>
</body>
</html>

