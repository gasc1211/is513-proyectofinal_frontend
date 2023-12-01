<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>🏘️ Apartamentos</title>
</head>

<body>

    <!-- NavBar -->
    <div class="bg-cover" style="background-image: url({{ Vite::asset('resources/img/background.jpg')}}); height: 100vh;">
        <div class="min-h-full">
            <nav>
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-baseline">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="#" class="bg-black text-white rounded-md px-3 py-2 text-lg font-semibold"
                                    aria-current="page">🏘️
                                    Apartamentos</a>
                                <a href="#"
                                    class="text-gray-800 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Dueños</a>
                                <a href="#"
                                    class="text-gray-800 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Inquilinos</a>
                                <a href="#"
                                    class="text-gray-800 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Cuotas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Formulario -->
    <div>
        <h1 class="text-2xl font-bold px-8 py-4">Agregar Apartamentos</h1>
        <form action="">
            <div class="space-y-4 m-8">
                <label for="area" class="block text-md font-medium leading-6 text-gray-900">Área</label>
                <div
                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="area"
                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                </div>
                <label for="precioxmetro" class="block text-md font-medium leading-6 text-gray-900">Precio por
                    Metro</label>
                <div
                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="precioxmetro"
                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                </div>
                <div class="sm:col-span-3">
                    <label for="dueno" class="block text-sm font-medium leading-6 text-gray-900">Dueño</label>
                    <div class="mt-2">
                        <select id="dueno" name="dueno"
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>John Smith</option>
                            <option>Carl Sagan</option>
                            <option>Joe Rogan</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">Save</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Tabla -->
    <div class="my-8">
        <h1 class="text-2xl font-bold px-8 py-4">Apartamentos Disponibles</h1>
        <table class="px-8 min-w-full min-h-full m-auto w-1/2">
            <thead>
                <tr class="border-slate-500">
                    <th class=" text-md border-slate-500 p-2">Código</th>
                    <th class="text-md border-slate-500 p-2">Área</th>
                    <th class="text-md border-slate-500 p-2">Precio</th>
                    <th class="text-md border-slate-500 p-2">Alquilar</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td class="p-2 border-slate-300">001</td>
                    <td class="p-2 border-slate-300">100 m</td>
                    <td class="p-2 border-slate-300">$ 2000.00</td>
                    <td class="p-2"><a href="#" class="bg-black text-white p-2 rounded-md">Alquilar</a></td>
                </tr>
                <tr>
                    <td class="p-2 border-slate-300">002</td>
                    <td class="p-2 border-slate-300">120 m</td>
                    <td class="p-2 border-slate-300">$ 5000.00</td>
                    <td class="p-2"><a href="#" class="bg-black text-white p-2 rounded-md">Alquilar</a></td>
                </tr>
                @foreach ($apartments as $apartment)
                <tr>
                    <td class="p-2 border-slate-300">{{$apartment['numApartamento']}}</td>
                    <td class="p-2 border-slate-300">{{$apartment['area']}} m2</td>
                    <td class="p-2 border-slate-300">{{$apartment['area'] * $apartment['precioXmetro']}}</td>
                    <td class="p-2"><a href="#" class="bg-black text-white p-2 rounded-md">Alquilar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
