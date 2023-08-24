@extends('layouts.NewPanel.NewPanel')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/NewPanel/assets/style/style.css">
</head>
<body>

  <div class="col-12" >
    <div class=" mb-5">
      <div class="col-12 pb-2 px-1 color-s" id="header-t">
        <h4 class="">لیست فاکتورها</h4>
      </div>
    </div>

    <div class="col-12 py-2" id="btn-border-4">
      <i class="h2 px-2 bi bi-search collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" ></i>
      <i class="h2 px-2 bi bi-printer"></i>
      <i class="h2 px-2 bi bi-file-x"></i>
    </div>
    
    <div id="collapseTwo" class="accordion-collapse collapse col-12" aria-labelledby="headingTwo"
    data-bs-parent="#accordionExample">
    <div class="accordion-body col-12">
      <h6 class=" color-s py-3">جستجو</h6>
      <div class="row">



      <div class="col-6 row px-2" id="data_picker">
                          <label for="inputEmail4" class="form-label text-secondary px-1">از تاریخ</label>
                          <input type="text" id="pcal1" class="pdate col-11 ">
                        </div>
                        <div class="col-6 row" id="data_picker">
                          <label for="inputEmail4" class="form-label text-secondary px-1">تا تاریخ</label>
                          <input type="text" id="pcal1" class="pdate col-11">
                        </div>

        <div class="col-2">
          <button type="submit" class="btn btn-secondary color-s text-white slc1 col-12" id="sub">ثبت</button>
        </div>
      </div>
    </div>
  </div>

  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">

      <h6 class="color-s py-3">فرم تعریف دسته بندی جدید</h6>
      <div class=" row">
        <div class="col-5 d-flex justify-content-center">
          <input type="text" class="col-6 form-control color-v slc1 pe-2" placeholder="نام دسته بندی">
        </div>
        <div class="col-5 d-flex justify-content-center px-1">
          <select class="form-select text-secondary color-v slc1 pe-5" aria-label="Default select example">
            <option selected disabled>نام و نام خانوادگی</option>
            <option value="1">شماره تماس </option>
            <option value="2">نقش کاربری</option>
          </select>
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-secondary text-white color-s slc1 col-12" id="sub">ثبت</button>
        </div>
      </div>

    </div>
  </div>


  <div id="collapseOne" class="d-flex justify-content-between accordion-collapse collapse f-vaziri"
    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body py-3">

    </div>
  </div>
</div>
      <!-- table******************************************* -->
      <div class="py-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">شماره فاکتور</th>
              <th scope="col">تاریخ فاکتور</th>
              <th scope="col">کد مشتری</th>
              <th scope="col">نام مشتری</th>
              <th scope="col">وضعیت فاکتور</th>
              <th scope="col">مبلغ فاکتور</th>
              <th scope="col">سامانه مودیان</th>
              <th scope="col">عملیات</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">داود</th>
              <td>رنجبری</td>
              <td>ranjbari_davoud@yahoo.com</td>
              <td>غیرفعال</td>
              <td>0919 291 2686</td>
              <td>......</td>
              <td>......</td>
              <td>
                <i class="bi bi-chat-text"></i>
                <i class="bi bi-bookmark-check-fill"></i>
                <i class="px-2 h4 bi bi-person-plus-fill"></i>
              </td>
            </tr>
            <tr>
              <th scope="row">علی</th>
              <td>عباسی</td>
              <td>ali.abbasi1023@gmail.com</td>
              <td>web developer</td>
              <td>09364916247</td>
              <td>......</td>
              <td>......</td>
              <td>
                <i class="bi bi-chat-text"></i>
                <i class="bi bi-bookmark-check-fill"></i>
                <i class="px-2 h4  bi bi-person-plus-fill"></i>
              </td>
             
            </tr>
            <tr>
              <th scope="row">فاطمه</th>
              <td>میرزاجانی</td>
              <td>na30m9170@gmail.com</td>
              <td>غیر فعال</td>
              <td>09392087671</td>
              <td>......</td>
              <td>......</td>
              <td>
                <i class="bi bi-chat-text"></i>
                <i class="bi bi-bookmark-check-fill"></i>
                <i class="px-2 h4 bi bi-person-plus-fill"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
     

</body>
</html>

@endsection
