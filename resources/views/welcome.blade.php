<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
</head>
<body>
@include('layout.nav')
<section class="subscription bg-white ">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscription-wrapper " style="margin-top: 6rem; margin-left: 2.2rem">
                    <div class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
                        <h3 class="flex-fill text-5xl">Subscribe to our newsletter</h3>
                        <form action="{{ route('subscribe') }}" method="POST" >

                            @csrf
                            <div class="col-lg-7 my-md-2 my-2">
                                <input type="email" style="width: 35%" class="form-control px-4 border-0 w-100 text-center text-md-left" id="email" placeholder="Your Email" name="email">
                                @error('email')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-lg-5 my-md-2 my-2">
                                <button type="submit" class="btn btn-primary btn-lg border-0 w-100">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
