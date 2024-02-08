<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="h-screen bg-indigo-100 flex justify-center items-center">
    <div class="lg:w-2/5 md:w-1/2 w-2/3">
        @if(!empty(session('success')))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Successfully:)</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="{{ route('register') }}" method="post">
            @csrf

            <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Formregister</h1>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="username" />
                @error('username')
                <span class="invalid-feedback text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />
                @error('email')
                <span class="invalid-feedback text-danger"> {{$message}} </span>
                @enderror

            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="password" />
                @error('password')
                <span class="invalid-feedback text-danger"> {{$message}} </span>
                @enderror
            </div>

            <div class="my-4">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-gray-800">Remember Me</label>
            </div>

            <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
            <a  href="{{ route('Form-login') }}" type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans text-center">Login</a>
        </form>
    </div>
</div>
</body>
</html>
