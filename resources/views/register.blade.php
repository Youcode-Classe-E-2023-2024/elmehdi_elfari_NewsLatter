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

<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-xl text-gray-600">Responsive Form</h2>
            <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Personal Details</p>
                        <p>Please fill out all the fields.</p>
                    </div>

                    <div>
                        @if(!empty(session('success')))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Successfully:)</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <form class="lg:col-span-2" action="{{ route('register') }}" method="post">
                            @csrf

                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Enter le username"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Password</label>
                                    <input type="text" name="password" id="password" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="*******" />
                                </div>

                                <div>
                                    <label for="remember" style="left: 5rem">
                                        <input id="remember" type="checkbox" name="remember" class="h-5 border mt-5 rounded px-4 bg-blue-500" style="margin-right: 20rem" />
                                        <span>Remember Me</span>
                                    </label>
                                </div>

                                <div class="d-flex align-items-center md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <form action="{{ route('forgot') }}" method="post">
                                            @csrf
                                            <button type="submit" class="text-1xl">forgot-password</button><br>
                                        </form>

                                        <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            {{ __('login') }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="https://www.buymeacoffee.com/dgauderman" target="_blank" class="md:absolute bottom-0 right-0 p-4 float-right">
            <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee" class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
        </a>
    </div>
</div>
<script>
    function redirectToForgotPassword() {
        // Redirect to the forgot-password page
        window.location.href = "{{ route('forgot') }}";
    }
</script>

</body>
</html>
