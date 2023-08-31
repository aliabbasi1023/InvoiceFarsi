<div class=" d-none d-lg-flex col-lg-2 ps-4 align-items-start" id="main_menu">
    <div class="row col-12">
        <div class="col-12 mt-1 p-0 m-0" id="logo_farsi">
            <div class="col-12 row justify-content-center p-0 m-0">
                <div class="col-4 m-0 p-0">
                    <img class="col-12" src="/NewPanel/assets/img/logo-farsi-1402.png" alt="">
                </div>
                <figcaption class="col-8 p-0 m-0 d-flex justify-content-start align-items-center">گروه صنایع غذایی فارسی
                </figcaption>
            </div>
        </div>

        <div class="line_box col-12">
            <span class="line_text">جستجو</span>
        </div>

        <div class="col-12 d-flex my-2 p-0 m-0" id="search_box">
            <div class="col-12 row justify-content-end position-relative">
                <input type="search" name="" id="inp_search" class="col-11 px-3" placeholder="جستجو کنید">
            </div>
        </div>

        <div class="line_box col-12 mb-1">
            <span class="line_text">فهرست</span>
        </div>
        <div class="col-12 d-flex align-items-start pb-4 p-0 m-0" id="menu_box">
            <!-- ********* -->
            <!-- note: id parent bayad ba data-bs-parent item ha yeki bashe  -->
            <div class="accordion accordion-flush col-12 ps-1" id="menu_box_inner">


                <!-- item asli -->
                <div class="accordion-item col-12 my-2">
                    <span class="accordion-header col-12">
                        <button class="collapsed col-12 d-flex p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" data-click="off">
                            <a href="" class="col-12 d-flex justify-content-start align-items-center pe-2">
                                مدیریت کاربران
                            </a>
                        </button>
                    </span>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#menu_box_inner">
                        <div class="accordion-body p-0">
                            <!-- sub -->
                            <div class="col-12">
                                <div class="accordion col-12" id="menu_box_inner_sub1">

                                    <!-- item start-->
                                    <div class="accordion-item my-2 col-12">
                                        <span class="accordion-header col-12">
                                            <button class="collapsed col-12 d-flex p-0" data-bs-target="#flush-collapseOne11" aria-expanded="false" aria-controls="flush-collapseOne11" data-click-lvl1="off">
                                                <a href="{{route('UsersList')}}" class="col-12 d-flex justify-content-start align-items-center pe-3">
                                                    فهرست کاربران
                                                </a>
                                            </button>
                                        </span>
                                        <div id="flush-collapseOne11" class="accordion-collapse collapse" data-bs-parent="#menu_box_inner_sub1">
                                        </div>
                                    </div>

                                    <div class="accordion-item my-2 col-12">
                                        <span class="accordion-header col-12">
                                            <button class="collapsed col-12 d-flex p-0" aria-expanded="false" aria-controls="flush-collapseTwo4" data-click-lvl1="off">
                                                <a href="{{route('UsersAddForm')}}" class="col-12 d-flex justify-content-start align-items-center pe-3">
                                                    فرم تعریف کاربران

                                                </a>

                                            </button>
                                        </span>
                                        <div id="flush-collapseTwo4" class="accordion-collapse collapse" data-bs-parent="#menu_box_inner_sub1">
                                            <!-- <div class="accordion-body">
                                              <ul class="col-12">
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                              </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- item end -->

                                </div>
                            </div>
                            <!-- sub -->
                        </div>
                    </div>
                </div>
                <!-- item asli -->
                <div class="accordion-item col-12 my-2">
                    <span class="accordion-header col-12">
                        <button class="collapsed col-12 d-flex p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" data-click="off">
                            <a href="" class="col-12 d-flex justify-content-start align-items-center pe-2">
                                مدیریت فاکتور ها
                            </a>
                        </button>
                    </span>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#menu_box_inner">
                        <div class="accordion-body p-0">
                            <!-- sub -->
                            <div class="col-12">
                                <div class="accordion col-12" id="menu_box_inner_sub2">

                                    <!-- item start-->
                                    <div class="accordion-item my-2 col-12">
                                        <span class="accordion-header col-12">
                                            <button class="collapsed col-12 d-flex p-0" data-bs-target="#flush-collapseOne11" aria-expanded="false" aria-controls="flush-collapseOne11" data-click-lvl1="off">
                                                <a href="{{route('factorsList')}}" class="col-12 d-flex justify-content-start align-items-center pe-3">
                                                    فهرست فاکتور ها
                                                </a>
                                            </button>
                                        </span>
                                        <div id="flush-collapseOne11" class="accordion-collapse collapse" data-bs-parent="#menu_box_inner_sub2">
                                        </div>
                                    </div>

                                    <!-- item start-->

                                    <div class="accordion-item my-2 col-12">
                                        <span class="accordion-header col-12">
                                            <button class="collapsed col-12 d-flex p-0" aria-expanded="false" aria-controls="flush-collapseTwo4" data-click-lvl1="off">
                                                <a href="{{route('FactorsDetails')}}" class="col-12 d-flex justify-content-start align-items-center pe-3">
                                                    جزئیات فاکتور

                                                </a>

                                            </button>
                                        </span>
                                        <div id="flush-collapseTwo4" class="accordion-collapse collapse" data-bs-parent="#menu_box_inner_sub2">
                                            <!-- <div class="accordion-body">
                                              <ul class="col-12">
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                                <li class="col-12 my-2 pe-4">زیر منو فروش دو</li>
                                              </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- item end -->


                                    <!-- item start-->

                                    <div class="accordion-item my-2 col-12">
                                        <span class="accordion-header col-12">
                                            <button class="collapsed col-12 d-flex p-0" data-bs-target="#flush-collapseOne33" aria-expanded="false" aria-controls="flush-collapseOne33" data-click-lvl1="off">
                                                <a href="{{route('FactorsComment')}}" class="col-12 d-flex justify-content-start align-items-center pe-3">
                                                    کامنت گذاری فاکتور ها
                                                </a>
                                            </button>
                                        </span>
                                        <div id="flush-collapseOne33" class="accordion-collapse collapse" data-bs-parent="#menu_box_inner_sub2">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- sub -->
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
</div>