@extends('layouts.NewPanel.NewPanel')
@section('content')
<div class="col-12">
  <div class=" mb-5">
    <div class="col-12 pb-4 px-1 color-b" id="header-3">
      <h4 class="text-secondary border-bottom" id="text_1">فهرست سفارشات منو</h4>
    </div>
  </div>

  <div class="col-12">
    <div class="col-12 d-flex justify-content-start align-items-center text-dark border-bottom">
      <i class="h2 bi bi-search" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"></i>
      <i class="h2 px-1 bi bi-printer"></i>
    </div>
  </div>

  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body">

      <h6 class="color-b mt-4 px-2">فرم جستجو</h6>
      <div class=" row mt-4">
        <div class="col-5 d-flex justify-content-center px-1">
          <select class="form-select text-secondary color-k slc1 pe-5" aria-label="Default select example">
            <option selected disabled>نوع</option>
            <option value="1">شرکتی</option>
            <option value="2">فروشگاهی</option>
          </select>
        </div>
        <div class="col-5 px-2 d-flex justify-content-center">
          <input type="text" class="col-6 form-control color-v slc1 pe-2" placeholder="کلمه کلیدی">
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-secondary mb-3 submit-2 col-12">ثبت</button>
        </div>
      </div>
    </div>
  </div>


  <div id="collapseOne" class="d-flex justify-content-between accordion-collapse collapse f-vaziri" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body py-3">

    </div>
  </div>
</div>
<!--  -->
<!-- table -->

<div class="py-3">
  <table class="table" id="table-m-2">
    <thead id="thead">
      <tr class="text-white">
        <th scope="col">ردیف</th>
        <th scope="col">شماره فاکتور</th>
        <th scope="col">نام فاکتور</th>
        <th scope="col">تاریخ فاکتور</th>
        <th scope="col">وضعیت فاکتور</th>
        <th scope="col">وضعیت سامانه مودیان</th>
        <th scope="col">عملیات</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>gdfgdf</td>
        <td>hgthj</td>
        <td>hgthj</td>
        <td>hgthj</td>
        <td>ytyh</td>
        <td class="icon_box">
          <i class="h5 px-1 bi bi-plus-circle"></i>
          <i class="h5 px-1  bi bi-info-circle-fill"></i>
          <i class="h5 px-1  bi bi-trash3-fill"></i>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="col-12 row justify-content-center mx-auto mt-5" id="chatbox">
  <div class="shadow_1"></div>
  <div class="col-12 row">
    <div class="col-7 d-flex justify-content-start py-4 px-2">
      <div class="form-control a_3" id="exampleFormControlTextarea1" rows="3"></div>
    </div>
  </div>
  <div class="col-12 row justify-content-end px-2 py-2">
    <div class="col-7">
      <div class="form-control a_2" id="exampleFormControlTextarea1" rows="3"></div>
    </div>
  </div>
  <div class="col-12 row py-5 px-2" id="Textarea_1">
    <i class="bi bi-send-fill" id="icon_save"></i>
    <textarea class="form-control px-5 a_1" rows="3"></textarea>
  </div>
</div>



@endsection