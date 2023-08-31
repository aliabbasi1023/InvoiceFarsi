@extends('layouts.NewPanel.NewPanel')
@section('content')


<div class="col-12">
  <div class=" mb-5">
    <div class="col-12 pb-4 px-1 color-b" id="header-t">
      <h4 class="text-secondary border-bottom">جزئیات فاکتور</h4>
    </div>
  </div>




  <div class="col-12 py-3 border-bottom">
    <div class="col-12 d-flex justify-content-start align-items-center text-bark" id="bdr-table">
      <i class="h2 bi bi-search" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"></i>
      <i class="h2 px-1 bi bi-arrow-left-circle"></i>
      <i class="h2 px-1 bi bi-printer"></i>
      <i class="h2 px-1 bi bi-chat-dots"></i>
    </div>
  </div>




  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body">

      <h6 class="color-b py-2 px-2">فرم جستجو</h6>
      <div class=" row">
        <div class="col-5 d-flex justify-content-center px-1">
          <select class="form-select text-secondary color-k slc1 pe-5" aria-label="Default select example">
            <option selected disabled>نوع</option>
            <option value="1">شرکتی</option>
            <option value="2">فروشگاهی</option>
          </select>
        </div>
        <div class="col-5 d-flex justify-content-center">
          <input type="text" class="col-6 form-control color-v slc1 pe-2" placeholder="کلمه کلیدی">
        </div>
        <div class="col-2 d-flex justify-content-center">
          <button type="submit" class="btn btn-info text-white color-b slc1 col-8" id="sub-4">ثبت</button>
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
  <table class="table" id='table-m-2'>
    <thead>
      <tr>
        <th scope="col">ردیف</th>
        <th scope="col">شماره فاکتور</th>
        <th scope="col">تاریخ فاکتور</th>
        <th scope="col">وضعیت فاکتور</th>
        <th scope="col">وضعیت سامانه مودیان</th>
        <th scope="col">تاریخ بارگذاری</th>
        <th scope="col">عملیات</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>gdfgdf</td>
        <td>hgthj</td>
        <td>hgthj</td>
        <td>ytyh</td>
        <td>ytyh</td>
        <td class="icon_box">
          <i class="h6 px-1 bi bi-pencil-square"></i>
          <i class="h6 px-1  bi bi-info-circle-fill"></i>
          <i class="h6 px-1  bi bi-trash3-fill"></i>
          <i class="h6 px-1 bi bi-files"></i>
          <i class="h6 px-1bi bi-arrow-left-circle"></i>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>gdfgdf</td>
        <td>hgthj</td>
        <td>hgthj</td>
        <td>ytyh</td>
        <td>ytyh</td>
        <td class="icon_box">
          <i class="h6 px-1 bi bi-pencil-square"></i>
          <i class="h6 px-1  bi bi-info-circle-fill"></i>
          <i class="h6 px-1  bi bi-trash3-fill"></i>
          <i class="h6 px-1 bi bi-files"></i>
          <i class="bi bi-arrow-left-circle"></i>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>gdfgdf</td>
        <td>hgthj</td>
        <td>hgthj</td>
        <td>ytyh</td>
        <td>ytyh</td>
        <td class="icon_box">
          <i class="h6 px-1 bi bi-pencil-square"></i>
          <i class="h6 px-1  bi bi-info-circle-fill"></i>
          <i class="h6 px-1  bi bi-trash3-fill"></i>
          <i class="h6 px-1 bi bi-files"></i>
          <i class="bi bi-arrow-left-circle"></i>
        </td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>gdfgdf</td>
        <td>hgthj</td>
        <td>hgthj</td>
        <td>ytyh</td>
        <td>ytyh</td>
        <td class="icon_box">
          <i class="h6 px-1 bi bi-pencil-square"></i>
          <i class="h6 px-1  bi bi-info-circle-fill"></i>
          <i class="h6 px-1  bi bi-trash3-fill"></i>
          <i class="h6 px-1 bi bi-files"></i>
          <i class="bi bi-arrow-left-circle"></i>
        </td>
      </tr>
    </tbody>
  </table>


  <div class="col-12  pb-4 px-1 color-b my-5" id="header-t">
    <h4 class="text-secondary">جدول اقلام فاکتور</h4>
  </div>
</div>


<table class="table" id="table-m-2">
  <thead>
    <tr>
      <th scope="col">ردیف</th>
      <th scope="col">کد قلم</th>
      <th scope="col">نام قلم</th>
      <th scope="col">تعداد قلم</th>
      <th scope="col">فی پایه</th>
      <th scope="col">مبلغ کل</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>gdfgdf</td>
      <td>hgthj</td>
      <td>hgthj</td>
      <td>ytyh</td>
      <td>ytyh</td>
      <td class="icon_box">
        <i class="h5 bi bi-check-circle"></i>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>gdfgdf</td>
      <td>hgthj</td>
      <td>hgthj</td>
      <td>ytyh</td>
      <td>ytyh</td>
      <td class="icon_box">
        <i class="h5 bi bi-check-circle"></i>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>gdfgdf</td>
      <td>hgthj</td>
      <td>hgthj</td>
      <td>ytyh</td>
      <td>ytyh</td>
      <td class="icon_box">
        <i class="h5 bi bi-check-circle"></i>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>gdfgdf</td>
      <td>hgthj</td>
      <td>hgthj</td>
      <td>ytyh</td>
      <td>ytyh</td>
      <td class="icon_box">
        <i class="h5 bi bi-check-circle"></i>
      </td>
    </tr>
  </tbody>
</table>
</div>


@endsection