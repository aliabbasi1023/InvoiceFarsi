@extends('layout.NewPanel.NewPanel')
@section('content')


<div class="modal fade" id="deletebox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">حذف</h1>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
      </div>
      <div class="modal-body">
        از حذف آیتم مطمئن هستید؟
        <div id="info"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خیر</button>
        <button type="button" class="btn btn-primary" id="confirm" data-bs-dismiss="modal">حذف شود</button>
      </div>
    </div>
  </div>
</div>
{{--alert end--}}




<div class="col-12">
  <div class=" mb-5">
    <div class="col-12 pb-2 px-1 color-s" id="header-t">
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
          <select class="form-select text-secondary color-v slc1 pe-5" aria-label="Default select example">
            <option selected disabled>جستجو مشابه فیلد</option>
            <option value="1">نام مشتری</option>
            <option value="2">کد مشتری</option>
            <option value="3">دسته بندی</option>
          </select>
        </div>
        <div class="col-5 px-1 d-flex justify-content-center">
          <input type="text" class="col-6 form-control color-v slc1 pe-2" placeholder="کلمه کلیدی">
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-secondary color-s text-white slc1 col-12" id="sub">ثبت</button>
        </div>
      </div>
    </div>
  </div>

  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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


  <div id="collapseOne" class="d-flex justify-content-between accordion-collapse collapse f-vaziri" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body py-3">

    </div>
  </div>
</div>

<form id="form" method="get" action="{{route('Newusers_permission_List')}}">
  <input type="hidden" name="id_user" id="id_user" value="">
</form>


<!-- table******************************************* -->
<div class="row align-content-center p-0 m-0">
  <table id="usersTable" class="table m-0 p-0">
    <thead>
      <tr>
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
    </tbody>
  </table>
</div>
<!-- {{--pagination start--}} -->
<nav id="pg1" aria-label="Page navigation example" class="d-flex justify-content-center col-12 p-0 m-0 my-5">
  <ul id="ppp" class="pagination p-0 m-0 d-flex align-items-center">
  </ul>
</nav>
{{--pagination end--}}




<script>
  axios({
      method: "get",
      url: '{{route('
      usersList ')}}',
      headers: {
        "Content-Type": "multipart/form-data"
      },
      timeout: 10000, // 10 seconds timeout

    })
    .then(function(response) {
      let table = document.querySelector('#usersTable>tbody');
      let list = response.data.data;
      makePaginate(response.data.meta)
      // console.log(response)
      list.map(function(val) {
        table.innerHTML += `
            <tr data-id='${val.id}'>
                <td>${val.fname}</td>
                <td>${val.lname}</td>
                <td>${val.email}</td>
                <td>غیرفعال</td>
                <td>${val.phone}</td>
                <td>......</td>
                <td class="icon_box d-flex justify-content-center align-items-center">
                    <i class="bi bi-pencil-square" title=' ویرایش کاربر'></i>
                    <i class="mx-3 bi bi-trash3-fill" title='حذف کاربر' onclick="_delete_item(this)" data-bs-toggle="modal" data-bs-target="#deletebox"></i>
                    <i class="mt-2 h5 bi bi-person-fill-gear" title='دسترسی های کاربر' onclick="GoToper(${val.id})"></i>
                </td>
            </tr>
                    `

      })
    })
    .catch(function(response) {
      //handle error
      // console.log(response.data.data);
    })

  // ***************************************** making pagination number
  function makePaginate(val) {
    let num = val.last_page;
    let current_page = val.current_page;
    let paginate = document.getElementById('ppp');
    for (p = 1; p <= num; p++) {
      let li = `
                    <li class="page-item"><a class="page-link"  onclick="_pagination(this)">${p}</a></li>
                    `;
      paginate.innerHTML += li;

    }
    //     *************color
    let p_children = paginate.children
    // console.log(p_children)
    for (let p = 0; p < p_children.length; p++) {
      let item = p_children[p].children[0]
      let text = item.innerHTML
      if (text == current_page) {
        item.style.color = 'red'
        item.style.border = '2px solid red'

      }
    }
  }


  // **************************************   pagination onclick
  function _pagination(s) {
    let num = s.innerText;
    let url = "http://172.21.5.25/api/Users/NewUsers/List?page=";
    let urlmix = url + num;
    console.log(urlmix)

    axios({
        method: "get",
        url: urlmix,
        headers: {
          "Content-Type": "multipart/form-data"
        },
        timeout: 10000, // 10 seconds timeout

      })

      .then(function(response) {
        let table = document.querySelector('#usersTable>tbody');
        let list = response.data.data;

        /* خالی کردن تگ ها*/
        let paginate = document.getElementById('ppp');
        paginate.innerHTML = '';
        makePaginate(response.data.meta)
        table.innerHTML = ''
        // console.log(response)
        list.map(function(val) {
          table.innerHTML += `
            <tr data-id='${val.id}'>
                <td>${val.fname}</td>
                <td>${val.lname}</td>
                <td>${val.email}</td>
                <td>غیرفعال</td>
                <td>${val.phone}</td>
                <td>......</td>
                <td class="icon_box d-flex justify-content-center align-items-center">
                    <i class="bi bi-pencil-square" title=' ویرایش کاربر'></i>
                    <i class="mx-3 bi bi-trash3-fill" title='حذف کاربر' onclick="_delete_item(this)" data-bs-toggle="modal" data-bs-target="#deletebox"></i>
                    <i class="mt-2 h5 bi bi-person-fill-gear" title='دسترسی های کاربر' onclick="GoToper(${val.id})" ></i>
                </td>
            </tr>
                    `

        })
      })

  }
  // ************************************** confirm and delete item
  let yes = document.getElementById('confirm');

  function _delete_item(s) {
    // alert('ok')
    yes.onclick = function() {

      let _id_tr = s.parentElement.parentElement.getAttribute('data-id')
      const array = {
        'id_remove': _id_tr,
      }
      axios({
          method: "post",
          url: '{{route('
          NewUsers_delete ')}}',
          data: array,
          headers: {
            "Content-Type": "multipart/form-data"
          },
          timeout: 10000, // 10 seconds timeout

        })
        .then(function(response) {
          console.log(response)
          let _children = s.parentElement.parentElement.children
          for (let c = 0; c < _children.length; c++) {

            _children[c].style.padding = '0px'
            _children[c].style.height = '0px'
            _children[c].style.margin = '0px'
            _children[c].style.fontSize = '0px'
            _children[c].style.border = 'none'
          }
          // console.log(_children)
          s.parentElement.parentElement.style.height = '0px'
          s.parentElement.remove()
        })
        .catch(function(response) {
          //handle error
          // console.log(response);
        });
    }
  }
</script>

<script>
  function GoToper(id) {
    let input = document.getElementById('id_user').value = id;
    document.getElementById('form').submit();
  }
</script>

@endsection