<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
<link rel="stylesheet" href="{{ asset('login/style.css') }}">
</head>
<body>
@include('layouts.header')
  <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div data-mdb-input-init class="form-outline mb-4">
                {{-- <input type="email" id="email" class="form-control form-control-lg" placeholder="이메일주소" /> --}}
                <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus placeholder="이메일주소" />
                <x-input-error :messages="$errors->get('email')" class="text-danger fw-bold" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
                {{-- <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="비밀번호" /> --}}
                <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required placeholder="비밀번호" />
                <x-input-error :messages="$errors->get('password')" class="text-danger fw-bold" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    자동 로그인
                </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('비밀번호를 잊어버리셨나요?') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">로그인</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">계정을 가지고 있지 않으신가요? <a href="/terms"
                    class="link-danger">계정 생성</a></p>
            </div>

            </form>
        </div>
        </div>
    </div>
  </section>    
  @include('layouts.footer')
</body>
</html>

