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
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('비밀번호 찾기 서비스 입니다. 본인의 이메일주소를 입력해주세요. 메일이 오지 않았을 때에는 스팸함을 확인해주세요. 그 외 문의사항은 info@bbalmu.com으로 보내주시길 바랍니다.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
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
              <h2 class="text-uppercase text-center mb-5">비밀번호 찾기</h2>
              <p> {{ __('비밀번호 찾기 서비스 입니다. 본인의 이메일주소를 입력해주세요. 메일이 오지 않았을 때에는 스팸함을 확인해주세요. 그 외 문의사항은 info@bbalmu.com으로 보내주시길 바랍니다.') }}</p>
              <!-- Session Status -->
              <x-auth-session-status class="mb-4" :status="session('status')" />
              
              <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div data-mdb-input-init class="form-outline mb-4">
                    {{-- <input type="email" id="email" class="form-control form-control-lg" placeholder="이메일주소" /> --}}
                    <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus placeholder="이메일주소" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger fw-bold" />
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




