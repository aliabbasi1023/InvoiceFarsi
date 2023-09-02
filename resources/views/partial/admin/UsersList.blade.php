@extends('layouts.NewPanel.NewPanel')
@section('content')

<div class="col-12">
  <div class=" mb-5">
    <div class="col-12 pb-2 px-1 color-s2" id="header-t">
      <h4 class="">لیست کاربران</h4>
    </div>
  </div>

  <div class="col-12 py-2" id="btn-border-4">
    <i class="h2 px-2 bi bi-search collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></i>
  </div>

  <div id="collapseTwo" class="accordion-collapse collapse col-12" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body col-12">
      <h6 class=" color-s py-3">جستجو</h6>
      <div class="row">
        <div class="col-5 d-flex justify-content-center">
          <select class="form-select text-secondary color-v2 slc16 pe-5" aria-label="Default select example">
            <option selected disabled>جستجو مشابه فیلد</option>
            <option value="1">نام مشتری</option>
            <option value="2">کد مشتری</option>
            <option value="3">دسته بندی</option>
          </select>
        </div>
        <div class="col-5 px-1 d-flex justify-content-center">
          <input type="text" class="col-6 form-control color-v2 slc1 pe-2" placeholder="کلمه کلیدی">
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-secondary color-s2 text-white slc16 col-12" id="sub">ثبت</button>
        </div>
      </div>
    </div>
  </div>

  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body">

      <h6 class="color-s py-3">فرم تعریف دسته بندی جدید</h6>
      <div class=" row">
        <div class="col-5 d-flex justify-content-center">
          <input type="text" class="col-6 form-control color-v2 slc12 pe-2" placeholder="نام دسته بندی">
        </div>
        <div class="col-5 d-flex justify-content-center px-1">
          <select class="form-select text-secondary color-v2 slc16 pe-5" aria-label="Default select example">
            <option selected disabled>نام و نام خانوادگی</option>
            <option value="1">شماره تماس </option>
            <option value="2">نقش کاربری</option>
          </select>
        </div>
        <div class="col-2 bg-danger">
          <button type="submit" class="btn btn-secondary text-white color-s2 slc16 col-12 h-75" id="sub_3">ثبت</button>
        </div>
      </div>

    </div>
  </div>


  <div id="collapseOne" class="d-flex justify-content-between accordion-collapse collapse f-vaziri" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body py-3">

    </div>
  </div>
</div>
<!-- table******************************************* -->
<div class="py-5">
  <table class="table align-items-center" id="table-m-3">
    <thead>
      <tr>
        <th scope="col">ردیف</th>
        <th scope="col">نام</th>
        <th scope="col">نام خانوادگی</th>
        <th scope="col">ایمیل</th>
        <th scope="col">سطح دسترسی</th>
        <th scope="col">شماره تماس</th>
        <th scope="col">امضاء</th>
        <th scope="col">عملیات</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>رنجبری</td>
        <td>ranjbari_davoud@yahoo.com</td>
        <td>غیرفعال</td>
        <td>0919 291 2686</td>
        <td>......</td>
        <td>......</td>
        <td class="icon_box">
          <i class="px-2 bi bi-pencil-square"></i>
          <i class="px-2 bi bi-x-circle"></i>
          <i class="px-2 h4 bi bi-person-plus-fill"></i>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>عباسی</td>
        <td>ali.abbasi1023@gmail.com</td>
        <td>web developer</td>
        <td>09364916247</td>
        <td>......</td>
        <td>......</td>
        <td class="icon_box">
          <i class="px-2 bi bi-pencil-square"></i>
          <i class="px-2 bi bi-x-circle"></i>
          <i class="px-2 h4  bi bi-person-plus-fill"></i>
        </td>

      </tr>
      <tr>
        <td>3</td>
        <td>میرزاجانی</td>
        <td>na30m9170@gmail.com</td>
        <td>غیر فعال</td>
        <td>09392087671</td>
        <td>......</td>
        <td>......</td>
        <td class="icon_box">
          <i class="px-2 bi bi-pencil-square"></i>
          <i class="px-2 bi bi-x-circle"></i>
          <i class="px-2 h4 bi bi-person-plus-fill"></i>
        </td>
      </tr>
    </tbody>
  </table>

</div>

































@endsection