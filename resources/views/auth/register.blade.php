{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


{{-- !doctype html> --}}
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset("fonts/icomoon/style.css") }}>

    <link rel="stylesheet" href={{ asset("css/owl.carousel.min.css") }}>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>

    <!-- Style -->
    <link rel="stylesheet" href={{ asset("css/style.css") }}>

    <title>Register SualKu</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h4>Register to &ensp;<img src="{{ asset("assets/images/logo-dark.png") }} " alt="Logo" class="logo-image" style="max-width: 200px; margin-bottom: 20px;">
            </h4>

            <form method="POST" action="{{ route('register') }}">
             @csrf
             <div class="form-group row">
                <div class="col-md-6">
                  <x-input-label for="nama_depan" :value="__('Nama depan')" />
                  <x-text-input id="nama_depan" class="form-control" type="text" name="nama_depan" :value="old('nama_depan')" placeholder="Your-first-name" id="username" required autofocus autocomplete="nama_depan" />
                  <x-input-error :messages="$errors->get('nama_depan')" class="mt-2" />
                </div>
                <div class="col-md-6">
                  <x-input-label for="nama_belakang" :value="__('Nama belakang')" />
                  <x-text-input id="nama_belakang" class="form-control" type="text" name="nama_belakang" :value="old('nama_belakang')" placeholder="Your-last-name" id="username" required autofocus autocomplete="nama_belakang" />
                  <x-input-error :messages="$errors->get('nama_belakang')" class="mt-2" />
                </div>
              </div>
              <div class="form-group first">
                <x-input-label for="username" :value="__('Username')" />
                <x-text-input id="email" class="form-control" type="text" name="username" :value="old('username')" placeholder="your-Username   " id="username" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div class="form-group first">
                <x-input-label for="no_hp" :value="__('No Telepon')" />
                <x-text-input id="np_hp" class="form-control" type="text" name="no_hp" :value="old('no_hp')" placeholder="your-Username   " id="no_hp" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
            </div>

              <div class="form-group first">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="your-email@gmail.com" id="username" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

              <div class="form-group last mb-3">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                placeholder="Your Password" id="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-group last mb-3">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation"
                                placeholder="Your Password" id="password_confirmation"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>





              <x-primary-button class="btn btn-block btn-secondary  ">
                {{ __('Register') }}
            </x-primary-button>
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src={{ asset("js/jquery-3.3.1.min.js") }}></script>
    <script src={{ asset("js/popper.min.js") }}></script>
    <script src={{ asset("js/bootstrap.min.js") }}></script>
    <script src={{ asset("js/main.js") }}></script>
  </body>
</html>
