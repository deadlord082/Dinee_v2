<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>register</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <form method="POST" action="/add">
        @csrf
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                 <x-logo class="mx-auto h-30 w-auto" />
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Inscrivez-vous</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="#" method="POST">
                    <input type="text" hidden name="type" value="user">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Nom</label>
                    <div class="mt-2">
                    <input type="text" name="name" id="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Addresse email</label>
                    <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">mot de passe</label>
                    </div>
                    <div class="mt-2">
                    <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <p class="mt-10 text-center text-sm/6 text-gray-500">
                Vous êtes restaurateur ?
                <a href="{{ route('register_restaurant') }}" class="font-semibold mt-10 text-center text-sm/6 text-dinee">Inscrivez-vous</a>
                </p>
                <div>
                    <button type="submit" class="peer-has-checked:hidden flex w-full justify-center rounded-md bg-dinee px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-dinee-secondary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">S'inscrire</button>
                </div>
                </form>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                Vous avez déjà un compte ?
                <a href="{{ route('login') }}" class="font-semibold text-dinee hover:text-dinee-secondary">Se connecter</a>
            </p>
        </div>
    </div>
</form>


    </body>
</html>
