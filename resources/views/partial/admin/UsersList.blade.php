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
  <table class="table align-items-center" id="user_list">
    <thead>
      <tr>
        <th scope="col">ردیف</th>
        <th scope="col">نام و نام خانوادگی</th>
        <th scope="col">ایمیل</th>
        <th scope="col">سطح دسترسی</th>
        <th scope="col">شماره تماس</th>
        <th scope="col">عملیات</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

</div>

    <script>
        axios({
            method: "get",
            url: '{{route('UserListData')}}',
            headers: {"Content-Type": "multipart/form-data"},
            timeout: 10000,    // 10 seconds timeout

        })
            .then(function (response) {
                console.log(response)
                let data = response.data
                let table = document.querySelector('#user_list tbody')
                let i = 1
                let role = ''
                data.map(function (val){
                    if (val.user_role == '1'){
                        role = 'ادمین'
                    }
                    if (data.user_role == '2'){
                        role = 'کاربر'

                    }
                    let tr =`
                    <tr data-id='${val.id}'>
                        <td>${i}</td>
                        <td>${val.name}</td>
                        <td>${val.email}</td>
                        <td>${role}</td>
                        <td>${val.phone}</td>
                        <td class="icon_box d-print-none" >
                            <i class="h5 bi bi-trash" title="حذف آیتم" data-bs-toggle="modal" data-bs-target="#deletebox" onclick="_delete_item(this)"></i>
                        </td>
                    </tr>
            `
                    table.innerHTML += tr;
                    i++
                })
            })
            .catch(function (response) {

            });
    </script>

@endsection
