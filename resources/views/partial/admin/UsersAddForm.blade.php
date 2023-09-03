@extends('layouts.NewPanel.NewPanel')
@section('content')

<div class="bdr-form container-fluid row container-xxl py-4 mx-auto">
  <div class="col-12 row">
    <div class="header-3 border-bottom mb-5">
      <h4 class="py-2 px-3">فرم تعریف کاربر</h4>
    </div>



    <div class="col-12 d-flex py-2">
      <form method="POST" action="{{ route('register') }}" class="col-12 row">
        <div class=" col-6 p-1 ">
          <label for="name" class="col-md-4 col-form-label text-md-end text-dark">{{ __("نام و نام خانوادگی") }}</label>
          <input type=" text" class="form-control input_1 px-2" placeholder="نام و نام خانوادگی" id="name">
        </div>

        <div class="col-6 p-1">
          <label for="name" class="col-md-4 col-form-label text-md-end text-dark">شماره تماس</label>
          <input type="text" class="form-control input_1 px-2" placeholder="شماره تماس" id="number">
        </div>
    </div>

    <div class="col-12 d-flex py-2" id="bdr">

      <div class="col-6 p-1 ">
        <label for="email" class="col-md-4 col-form-label text-md-end text-dark">{{ __('آدرس ایمیل') }}</label>
        <input type="text" class="form-control input_1 px-2" placeholder="آدرس ایمیل" id="user_name">
      </div>

      <div class="col-6 p-1">
        <label for="password" class="col-md-4 col-form-label text-md-end text-dark">{{ __("رمز عبور") }}</label>
        <input type="text" class="form-control input_1 px-2" placeholder="رمز عبور" id="password">
      </div>

    </div>
    <div class="col-12 d-flex py-2" id="bdr">

      <div class="col-6 p-1 ">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end text-dark">{{ __('تکرار رمز عبور') }}</label>
        <input type="text" class="form-control input_1 px-2" placeholder="تکرار رمز عبور" id=" repeat_pass">
      </div>

      <div class="col-6 p-1">
        <label for="name" class="col-md-4 col-form-label text-md-end text-dark">شرکت</label>
        <input type="text" class="form-control input_1 px-2" placeholder="شرکت" id="access_level">
      </div>

    </div>

    <div class="col-12 d-flex py-2">
      <div class="col-6 p-1">
        <select class="form-select text-secondary input_1 px-4" aria-label="Default select example">
          <option selected disabled>سطح دسترسی</option>
          <option value="1">.....</option>
          <option value="2">....</option>
        </select>
      </div>

    </div>




    <div class="col-12 py-5">
      <div class="col-12  d-flex justify-content-center">
        <div class="p-1 ">
          <button type="submit" class="btn btn-secondary mb-3 submit-2">ثبت</button>
          <!-- <button  type="submit" class="btn btn-secondary bg-secondary ">ثبت</button> -->
        </div>
      </div>
    </div>

    </form>
  </div>
</div>
</div>

<script>
  function save() {

    let name = document.getElementById("name")
    let number = document.getElementById("number")
    let user_name = document.getElementById("user_name")
    let password = document.getElementById("password")
    let repeat_pass = document.getElementById("repeat_pass")
    let company = document.getElementById("company")
    let access_level = document.getElementById("access_level")

    let array = {

    }
  }
</script>
@endsection