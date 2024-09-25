<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
<link rel="stylesheet" href="{{ asset('login/style.css') }}">
</head>
<body>
@include('layouts.header')

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">회원가입</h2>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                  
                  

                  <!-- EMAIL -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <span class="text-danger">*</span>이메일주소 (네이버로!)</label>
                      <x-text-input type="email" id="email" class="form-control form-control-lg" name="email" :value="old('email')" required placeholder="jin03192@naver.com" />
                      <label class="form-label" for="email" :value="__('Email')">
                      <x-input-error :messages="$errors->get('email')" class="text-danger fw-bold" />
                  </div>
                  
                  <!-- NAME -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <span class="text-danger">*</span>배틀넷 아이디</label>
                      <x-text-input type="text" id="starcraft_name" class="form-control form-control-lg" name="starcraft_name" :value="old('starcraft_name')" required autofocus placeholder="3040-Zombie" />
                      <label class="form-label" for="starcraft_name" :value="__('starcraft_name')">
                      <x-input-error :messages="$errors->get('starcraft_name')" class="text-danger fw-bold" />
                  </div>
                  
                  <!-- PASSWORD -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <span class="text-danger">*</span>비밀번호</label>
                      <x-text-input type="password" id="password" class="form-control form-control-lg" name="password" required placeholder="비밀번호" />
                      <label class="form-label" for="password" type="password" :value="__('Password')">
                      <x-input-error :messages="$errors->get('password')" class="text-danger fw-bold" />
                  </div>
                  
                  <!-- PASSWORD_REPEAT -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <span class="text-danger">*</span>비밀번호 재확인</label>
                      <x-text-input type="password" id="password_confirmation" class="form-control form-control-lg"  name="password_confirmation" required placeholder="비밀번호 재확인" />
                      <label class="form-label" for="password_confirmation" type="password" :value="__('Confirm Password')">
                      <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger fw-bold" />
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                     <x-primary-button class="btn btn-primary btn-lg">
                      {{ __('생성하기') }}
                    </x-primary-button>
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
