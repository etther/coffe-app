<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] min-h-screen font-[Montserrat] ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 ">
            @if ($errors->has('id_e'))
                <div class="alert-danger error">
                    <p>{{ $errors->first('id_e') }}</p>
                </div>
            @endif


            <a href="#"
                class="flex items-center mb-6 text-2xl font-semibold animate-ease-in animate-fade-down animate-once ">
                <img class="w-8 h-8 mr-2" src="/image/logo.svg" alt="logo">
                Caffein.
            </a>
            <div
                class="w-full bg-gradient-to-t from-[#a6c1ee] to-[#fbc2eb] rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 animate-ease-in animate-fade-up animate-once ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight ">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="id_e" class="block mb-2 text-sm font-medium ">Your ID</label>
                            <input type="id_e" name="id_e" id="id_e"
                                class="bg-gray-50 border border-gray-300  sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="eXXXXXX" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium ">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border mb-5 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-400 dark:hover:bg-purple-500 dark:focus:ring-purple-600">Sign
                            in</button>
                        <p class="text-sm font-medium">
                            Not a employe? Come back to home here : <a href="/"
                                class="font-bold text-primary-600 hover:underline dark:text-primary-500">Home</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
