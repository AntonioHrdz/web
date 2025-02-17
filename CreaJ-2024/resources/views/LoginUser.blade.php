<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Inicio de Sesión</title>
    <link rel="shortcut icon" href="{{ asset('imgs/MiCarritoUser.png') }}" type="image/x-icon">
</head>

<body>

<form action="#" method="get">
    <section class="pl-5 pt-7">
        <div class="login">
            <div class="flex items-center">
                <div class="title">
                    <h1 class="font-bold">Iniciar Sesión</h1>
                </div>
                <div class="icon">
                    <img class="w-4 ml-2 pt-1 " src="{{ asset('imgs/usuario.png') }}" alt="User Icon">
                </div>
            </div>
            <h3 class="text-xs font-bold">¡Bienvenidos a MiniShop!</h3>
        </div>

        <div class="w-72 h-96 mt-28 mx-auto">
            <div class="text-center">
                <h1 class="text-6xl font-bold">Mini<span class="text-purple-400 font-bold">Shop</span></h1>
            </div>

            <div class="flex flex-col mt-6">
                <div class="flex justify-center pt-6">
                    <input class="border rounded w-80 h-9 pl-5 text-sm border-gray-400" type="email" name="email" id="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="flex justify-center mt-2 pt-2">
                    <input class="border rounded w-80 h-9 pl-5 text-sm border-gray-400" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                </div>

                <div class=" flex justify-end">
                    <h3 class="text-xs font-bold">&nbsp;</h3>
                </div>
            </div>

            <div class="flex justify-center mt-5">
                <button class="w-72 h-12 font-bold btn overflow-hidden relative bg-purple-400 text-white py-2 px-4 rounded-xl">Iniciar Sesión</button>
            </div>

            <div class="mt-11">
                <h3 class="text-center text-sm">¿Aún no se ha registrado? <a href="./clientes/create" class="text-blue-950 font-bold">Crear Cuenta</a></h3>
            </div>
        </div>
    </section>
</form>


</body>

</html>
