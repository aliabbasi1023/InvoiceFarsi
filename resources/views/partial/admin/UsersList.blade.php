@extends('layouts.NewPanel.NewPanel')
@section('content')

<div class="col-12">
  <div class=" mb-5">
    <div class="col-12 pb-2 px-1 color-s2" id="header-t">
      <h4 class="text-secondary">لیست کاربران</h4>
    </div>
  </div>

  <div class="col-12 py-2" id="btn-border-4">
    <i class="h2 px-2 bi bi-search collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></i>
  </div>

  <div id="collapseTwo" class="accordion-collapse collapse col-12" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body col-12">
      <h6 class="color-s2 mt-3">جستجو</h6>
      <div class="row col-12 mt-2">
        <div class="col-5">
          <select class="form-select text-secondary py-2 px-4" aria-label="Default select example">
            <option selected disabled>جستجو مشابه فیلد</option>
            <option value="1">نام مشتری</option>
            <option value="2">کد مشتری</option>
            <option value="3">دسته بندی</option>
          </select>
        </div>
        <div class="col-5 px-2">
          <input type="text" class="form-control text-secondary py-2 px-2" placeholder="کلمه کلیدی">
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-secondary mb-3 submit-2 col-12">ثبت</button>
        </div>
      </div>
    </div>
  </div>




  <div id=" collapseTwo" class="d-flex justify-content-between accordion-collapse collapse f-vaziri" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
          <i class="h5 px-1 bi bi-pencil-square"></i>
          <i class="h5 px-1 bi bi-x-circle"></i>
          <i class="h5 px-1 h4 bi bi-person-plus-fill"></i>
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
          <i class="h5 px-1 bi bi-pencil-square"></i>
          <i class="h5 px-1 bi bi-x-circle"></i>
          <i class="h5 px-1 bi bi-person-plus-fill"></i>
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
          <i class="h5 px-1 bi bi-pencil-square"></i>
          <i class="h5 px-1 bi bi-x-circle"></i>
          <i class="h5 px-1 h4 bi bi-person-plus-fill"></i>
        </td>
      </tr>
    </tbody>
  </table>

</div>

@endsection