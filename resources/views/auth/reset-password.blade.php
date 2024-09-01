<!DOCTYPE html>
<html lang="ko">
<head>
@include('layouts.head')
<link rel="stylesheet" href="{{ asset('login/style.css') }}">
<script src="{{ asset('/js/terms/form.js') }}" defer></script>
</head>
<body>
@include('layouts.header')

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">비밀번호 재설정</h2>
              
              <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div data-mdb-input-init class="form-outline mb-4">
                    <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email', $request->email)" required autofocus placeholder="이메일" readonly />
                    <x-input-error :messages="$errors->get('email')" class="text-danger fw-bold" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" :value="old('password')" required autofocus placeholder="비밀번호" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger fw-bold" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <x-text-input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" :value="old('password_confirmation')" required autofocus placeholder="비밀번호 재설정" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger fw-bold" />
                </div>
    
               
  
              <div class="text-center text-lg-start mt-4 pt-2">
                  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">찾기</button>
              </div>
            
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.footer')
</body>
</html>








