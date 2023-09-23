@extends('layouts.NewPanel.NewPanel')
@section('content')

<div class="bdr-form container-fluid row container-xxl py-4 mx-auto">
  <div class="col-12 row">
    <div class="header-3 border-bottom mb-5">
      <h4 class="py-2 px-3">فرم تعریف کاربر</h4>
    </div>
      <div id="alertmsg" class="col-12 my-2" style="height: 45px"></div>


    <div class="col-12 d-flex py-2">

      <div class="col-12 row">
        <div class=" col-6 p-1">
          <label for="full_name" class="col-md-4 col-form-label text-md-end text-dark">نام و نام خانوادگی</label>
          <input type="text" class="form-control input_1 px-2" name="full_name" value="{{ old('name') }}" required autocomplete="name" placeholder="نام و نام خانوادگی" id="full_name">
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="col-6 p-1">
          <label for="phone" class="col-md-4 col-form-label text-md-end text-dark">شماره تماس</label>
          <input type="text" class="form-control input_1 px-2" placeholder="شماره تماس" id="phone">
        </div>

    <div class="col-12 d-flex py-2" id="bdr">

      <div class="col-6 p-1">
        <label for="email" class="col-md-4 col-form-label text-md-end text-dark">ایمیل (نام کاربری)</label>
        <input type="text" class="form-control input_1 px-2" placeholder="آدرس ایمیل" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="col-6 p-1">
        <label for="password" class="col-md-4 col-form-label text-md-end text-dark">کلمه عبور</label>
        <input type="password" class="form-control input_1 px-2" placeholder="رمز عبور" id="password" name="password" required autocomplete="new-password">
      </div>

    </div>
    <div class="col-12 d-flex py-2" id="bdr">

      <div class="col-6 p-1">
        <label for="repeat_pass" class="col-md-4 col-form-label text-md-end text-dark">تکرار رمز عبور</label>
        <input type="password" class="form-control input_1 px-2" placeholder="تکرار رمز عبور" id="repeat_pass" name="repeat_pass" required autocomplete="new-password">
      </div>

      <div class="col-6 p-1">
          <label for="user_role" class="col-md-4 col-form-label text-md-end text-dark">نقش کاربر</label>
          <select class="form-select text-secondary input_1 px-4" aria-label="Default select example" id="user_role">
              <option selected disabled>انتخاب</option>
              <option value="1">ادمین</option>
              <option value="2">کاربر معمولی</option>
          </select>
      </div>

    </div>

    <div class="col-12 d-flex py-2">
      <div class="col-6 p-1">
          <label for="company" class="col-md-4 col-form-label text-md-end text-dark">شرکت</label>
          <input type="text" class="form-control input_1 px-2" placeholder="شرکت" id="company">
      </div>
    </div>

    <div class="col-12 py-5">
      <div class="col-12  d-flex justify-content-center">
        <div class="p-1 ">
          <button type="submit" class="btn btn-secondary mb-3 submit-2" onclick="save()">ثبت</button>
          <!-- <button  type="submit" class="btn btn-secondary bg-secondary ">ثبت</button> -->
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
</div>

<script>
  function save() {
    let full_name = document.getElementById("full_name").value
    let phone = document.getElementById("phone").value
    let email = document.getElementById("email").value
    let password = document.getElementById("password").value
    let repeat_pass = document.getElementById("repeat_pass").value
    let company = document.getElementById("company").value
    let user_role = document.getElementById("user_role").value

    const data = {
        'name':full_name,
        'phone':phone,
        'email':email,
        'password':password,
        'repeat_pass':repeat_pass,
        'company':company,
        'user_role':user_role,
    }
      // console.log(data.user_role)

      axios({
          method: "post",
          url: '{{route('UserAdd')}}',
          headers: {"Content-Type": "multipart/form-data"},
          data: data,
          timeout: 10000,    // 10 seconds timeout

      })
          .then(function (response) {
              console.log(response)
              if (response.data == 'error_pass'){
                  document.getElementById('alertmsg').innerHTML ='رمز عبور و تکرار آن یکسان نیست'
              }
              if (response.data == 'error'){
                  document.getElementById('alertmsg').innerHTML ='کاربر جدید با موفقیت ثبت شد'
              }
              if (response.data == 'ok'){
                  document.getElementById('alertmsg').innerHTML ='خطا در انجام عملیات'
              }

          })
          .catch(function (response) {

          });

  }
</script>
@endsection
