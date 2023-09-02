@extends('layouts.NewPanel.NewPanel')
@section('content')

<div class="row">
  <div class="col-12 row">
    <div class="header-1 border-bottom mb-5">
      <h4 class="py-1">فرم تعریف کاربر</h4>
    </div>



    <div class="col-12 d-flex py-2" id="sub">
      <div class="col-6 p-1 ">
        <input type="text" class="form-control" placeholder="نام و نام خانوادگی" id="name">
      </div>

      <div class="col-6 p-1">
        <input type="text" class="form-control" placeholder="شماره تماس" id="number">
      </div>
    </div>

    <div class=" col-12 d-flex py-2" id="bdr">

      <div class="col-6 p-1 ">
        <input type="text" class="form-control" placeholder="نام کاربری" id="user_name">
      </div>

      <div class="col-6 p-1">
        <input type="text" class="form-control" placeholder="پسورد" id="password">
      </div>

    </div>
    <div class="col-12 d-flex py-2" id="bdr">

      <div class="col-6 p-1 ">
        <input type="text" class="form-control" placeholder="تکرار پسورد" id="repeat_pass">
      </div>

      <div class="col-6 p-1">
        <input type="text" class="form-control" placeholder="شرکت" id="company">
      </div>

    </div>

    <div class="col-12 d-flex py-2" id="sub">
      <div class="col-6 p-1">
        <select class="form-select text-secondary" aria-label="Default select example" id="access_level">
          <option selected disabled>سطح دسترسی</option>
          <option value="1">.....</option>
          <option value="2">....</option>
        </select>
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

  }
</script>



@endsection