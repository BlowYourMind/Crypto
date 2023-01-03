<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<section class="px-6 py-40">
    <main class="max-w-lg mx-auto bg-gray-100 border border-gray-300 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl mt-700">Log in</h1>

        <form method="POST" action="/login" class="mt-10">
            @csrf
            <div class="mb-3 ">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                    email
                </label>
                <input class="border border-gray-400 p-2 w-full mb-4" type="text" name="email" id="email" value="{{old('email')}}"
                       required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3 ">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>

                <input class="border border-gray-400 p-2 w-full mb-8" type="password" name="password" id="password" value="{{old('password')}}"
                       required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">submit</button>
            </div>
        </form>
    </main>
</section>
</body>
</html>
