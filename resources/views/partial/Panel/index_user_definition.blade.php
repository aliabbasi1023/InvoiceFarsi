@extends('layouts.NewPanel.NewPanel')
@section('content')

<div class="col-12">
  <div class=" mb-5">
    <div class="col-12 pb-2 px-1 color-s border-bottom" id="header-t">
      <h4 class="text-secondary">لیست فاکتورها</h4>
    </div>
  </div>

  <div class="col-12 py-2 border-bottom">
    <i class="h2 px-1 bi bi-search collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></i>
    <i class="h2  bi bi-printer"></i>
    <i class="h2 px-1 bi bi-file-x"></i>
  </div>

  <div id="collapseTwo" class="accordion-collapse collapse col-12" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body">

      <div class="accordion-body col-12">

        <h6 class=" color-s py-3">جستجو</h6>
        <div class="row col-12">

          <div class="col-6 row px-2" id="data_picker">
            <label for="inputEmail4" class="form-label text-secondary px-1">از تاریخ</label>
            <input type="text" id="pcal1" class="pdate col-11">
          </div>

          <div class="col-6 row" id="data_picker">
            <label for="inputEmail4" class="form-label text-secondary px-1">تا تاریخ</label>
            <input type="text" id="pcal2" class="pdate col-11">
          </div>
        </div>

        <div class="col-12 row">

          <div class="col-5 mt-4">
            <select class="px-2 col-12" id="country" style="width: 100%;">
              <option value="" disabled>Select your country</option>
              <option value="US">United States of America</option>
              <option value="KE">Kenya</option>
              <option value="UK">United Kingdom</option>
              <option value="IN">India</option>
              <option value="CN">China</option>
              <option value="CA">Canada</option>
              <option value="ZA">South Africa</option>
              <option value="ir">iran</option>
              <option value="rq">iraq</option>
            </select>
          </div>

          <div class="col-6 justify-content-end row mt-4">
            <button type="submit" class="btn btn-secondary text-white color-s slc1 col-3" id="sub_3" onclick="save()">ثبت</button>
          </div>

        </div>

      </div>
    </div>

    <div id="collapseTwo" class="d-flex justify-content-between accordion-collapse collapse f-vaziri" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body py-3">

      </div>
    </div>
  </div>
  <!-- table******************************************* -->
  <div class="py-5">
    <table class="table" id="table-m-3">
      <thead>
        <tr>
          <th scope="col">ردیف</th>
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
          <td>1</td>
          <td>رنجبری</td>
          <td>ranjbari_davoud@yahoo.com</td>
          <td>غیرفعال</td>
          <td>0919 291 2686</td>
          <td>......</td>
          <td>......</td>
          <td>......</td>
          <td class="icon_box">
            <i class="h5 px-1 bi bi-chat-text"></i>
            <i class="h5 px-1 bi bi-bookmark-check-fill"></i>
            <i class="h5 px-1 bi bi-person-plus-fill"></i>
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
          <td>......</td>
          <td class="icon_box">
            <i class="h5 px-1 bi bi-chat-text"></i>
            <i class="h5 px-1 bi bi-bookmark-check-fill"></i>
            <i class="h5 px-1  bi bi-person-plus-fill"></i>
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
          <td>......</td>
          <td class="icon_box">
            <i class="h5 px-1 bi bi-chat-text"></i>
            <i class="h5 px-1 bi bi-bookmark-check-fill"></i>
            <i class="h5 px-1 bi bi-person-plus-fill"></i>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    var objCal1 = new AMIB.persianCalendar('pcal1');
    var objCal1 = new AMIB.persianCalendar('pcal2');
  </script>


  @endsection