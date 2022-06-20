<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="sm:justify-start sm:pt-0">
            <div class="row" style="color: white">
                <div class="col-4">Ricardo Urvina</div>
                <div class="col-4">TestHeinsohn</div>
                <div class="col-4">{{now()->format('j F, Y')}}</div>
            </div>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a>Backend (PHP)</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            1. Implementar la función sumarArreglo para calcular la suma de los elementos de un array numérico:
                            function sumarArreglo($arreglo) {}
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $arregloA = [1, 4, 3, 0];
                            $resp= {{$sumArreglo1}}

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $arregloB = [1, 2, [5, 8], 4];
                            $resp= {{$sumArreglo2}}

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $arregloC = [0, [6, 2], null, 7, 1];
                            $resp= {{$sumArreglo3}}

                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="mt-2 dark:text-white dark:text-gray-400 text-sm">

                        2. ¿Cuál es la salida del siguiente código?:
                        $i=0; while ($i=1) echo ++$i;
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            SALIDA= {{\App\Http\Controllers\HeinsohnController::questionWhile()}}
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">

                        <div class="ml-4 text-lg leading-7 font-semibold">3. ¿Qué función en PHP utilizaría para quitar todos los espacios de un string?</div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm mw-25">
                            Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new
                            package releases and tutorials.
                            SALIDA= {{\App\Http\Controllers\HeinsohnController::deleteSpaces()}}
                        </div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a>FrontEnd</a></div>
                    </div>

                    <div id="nombre">
                        <span>Nombre: </span>
                        <input id="nombre_fruta" class="texto" type="text">
                        <button type="button" id="agregar"
                                class="agregar">Agregar
                        </button>
                    </div>
                    <div id="listado_frutas">
                        <ul id="listas">

                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a>Base de datos</a></div>

                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            1. Escribir una sentencia SQL que retorne la siguiente información FIRST_NAME, LAST_NAME y SALARY de la tabla Worker.

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $resp= {{$sql1}}
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            2. Escribir una sentencia SQL que permita insertar 1 registro en la tabla Bonus con la siguiente información: WORKER_REF_ID = 3, BONUS_DATE = 2020-01-01
                            01:01:01 y BONUS_AMOUNT = 10000
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $resp= {{$sql2}}
                        </div>
                    </div>
                </div>

                <div class="p-6">

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            3. Obtener el total de BONUS_AMOUNT por cada trabajador de la tabla Worker
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $resp= {{$sql3}}
                        </div>
                    </div>
                </div>
                <div class="p-6">


                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Obtener la cantidad de trabajadores (Worker) según su cargo (Worker Title) por cada departamento.
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $resp= {{$sql4}}
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Obtener la cantidad de trabajadores (Worker) según su cargo (Worker Title) por cada departamento.
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            $resp= {{$sql4}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a>Laravel</a></div>

                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            1. Explique ¿qué es Laravel? en sus propias palabras


                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Laravel es un framework de desarrollo del lenguaje PHP la cual a la fecha {{now()}} esta en la versión 9, es un framework escalable y mantenible
                            Se adapta a varios frameworks de frontEnd con facilidad como Vue, React, Angular, se basa en MVC Modelo Vista Controlador
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            2. ¿Para qué sirven las migraciones y cuál es el comando para crear una migración?
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Las migraciones sirven para alterar la base de datos donde se puede crear o modifcar tablas, para crear una migración el comando es php artisan
                            make:migrate NombreMigracion
                        </div>
                    </div>
                </div>

                <div class="p-6">

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            3. ¿Qué arquitectura utiliza Laravel?

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            La arquitectura que usa laravel es MVC modelo vista controlador
                        </div>
                    </div>
                </div>
                <div class="p-6">


                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            4. ¿Qué es un Trait?, ¿para qué se utiliza? y dar un ejemplo.

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Es una especie de clases abstractas que ayudan a reutilizar codigo y a separar funcionalidad del resto de clases
                            Ejemplo: un trait para uso de Jobs donde el trait tiene las funciones de dispatch, dispatchNow, ajaxDispatch. Este trait lo podemos hacer use en cada
                            modelo necesario y asi evitar re escribirlo
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            5. Explique en sus propias palabras para qué sirve: php artisan queue:work

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Este comando crea una instancia de la aplicacion y empieza a ejecutar todos los jobs guardados.
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            5. Explique en sus propias palabras para qué sirve: php artisan queue:work

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Este comando crea una instancia de la aplicacion y empieza a ejecutar todos los jobs guardados.
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            6. Explique en sus propias palabras para qué sirve: php artisan schedule:run


                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Este comando crea ejecuta todas las tyareas programadas y determina si se deben ejecutar o no
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            7. Explique en sus propias palabras para qué sirve un Middleware; dar un ejemplo.


                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Un middleware proprociona un enlance entre dos partes, pasando datos de un lado a otro, en laravel este filtra las peticciones http
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            8. Explique en sus propias palabras una buena práctica de Laravel.


                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Mantener modularizado los componentes del MVC es decir no asignar responsabilidades a clases que no corresponden por ejemplo no realizar consultas
                            cruzadas
                            directo en los controladores, si no hacerlo esto en el modelo.
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Tenemos un modelo llamado Cliente el cual tiene una relación de muchos a muchos con la tabla Productos.
                            Al llamar la relación de Clientes hacia productos de la siguiente manera, que tipo de dato nos retorna.
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            B:Collection
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            10. ¿Para qué sirve el archivo .env?

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Este archivo sirve para definir las variables de entorno que usara nuestra aplicacion
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            11. ¿En qué consiste el concepto de Soft Delete?

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Sirve para cuando se elimine un reigstro este quede almacenado en la base de datos con la fecha de eliminacion, sin embargo este registro no se mostrara
                            en el modelo indicado.
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            12. ¿En qué consiste el mergeBindings?, de un ejemplo real
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

                            Suponiendo que tenemos la primera consulta asi:
                            <br>

                            $sub = Abc::where('type', 1)->groupBy(..);
                            <br>
                            luego, cuando lo convertimos a sql:
                            <br>
                            $sub->toSql();
                            <br>
                            esto devolverá una cadena de consulta algo como esto:
                            <br>
                            SELECT * FROM abc where abc.type = ? GROUp BY ...

                            <br>
                            Entonces, cuando usamos esa subconsulta en otra consulta como lo hace en
                            <br>
                            $count = DB::table( DB::raw("({$sub->toSql()}) as sub") )
                            ->mergeBindings($sub->getQuery())
                            ->count();
                            <br>
                            ha convertido la primera subconsulta en cadena sql, PERO la segunda consulta no sabe nada sobre el enlace de su primera subconsulta, que en este ejemplo
                            es el valor1
                            <br>
                            por lo tanto, debemos fusionar el enlace de la primera subconsulta con la última consulta para que la última consulta cuando se ejecute sepa el valor 1y
                            la vincule a la cláusula where en reemplazo de "?", y su consulta final ejecutada será algo como esto
                            <br>
                            (SELECT count(*) from abc where type = 1 GROUP BY ...) as sub
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            13. ¿Explique para qué se utiliza la directiva include en archivos Blade?

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Esta directiva se usa para inyectar un blade dentro de otro.
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            14. Transcriba las consultas SQL de la prueba de Base de Datos utilizando Eloquent ORM

                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        @foreach($sql5[0] as $item)
                                                            <br>
                                                        Siguiente consulta <br>
                                                            {{$item}}
                                                        @endforeach
/****************************************/
                            @foreach($sql5[1] as $item)
                                <br>
                                nombre= {{$item->first_name}}
                                bonus amount={{$item->bonuses->sum('bonus_amount')}}
                            @endforeach
/****************************************/
                            @foreach($sql5[2] as $item)
                                @foreach($item as $it)
                                    <br>
                                    nombre= {{$it->worker_title}}
                                    cantidad= {{$item->count()}}

                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Caso práctico. Actualmente el aplicativo tiene la siguiente función:
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            public function generateReport($dateRange, $reportType=null) {}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#agregar").click(function () {
            $("ul#listas").append(function (n) {
                id = $("#nombre_fruta").val();
                return '<li id="id">' + $("#nombre_fruta").val() + ' ' + '<button type="button" id="delete">Borrar</button></li>'
            });
        });
    });

</script>
