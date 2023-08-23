<header class="col-12 row m-0 p-0">

    <div class="col-2 d-flex justify-content-start align-items-center" id="icon_toggle">
        <div class="mx-1 px-1 d-lg-none" data-t="off">
            <i class="bi bi-list col-12"></i>
        </div>
    </div>

    <div class="col-10 d-flex justify-content-end align-items-center" id="icon_box">
        <div class="mx-1 icon-d" data-click="off">
            <i class="bi bi-headset col-12  "></i>
        </div>

        <div class="mx-1 icon-d" data-click="off">
            <i class="bi bi-bell col-12 "></i>
        </div>

        <div class="mx-1 icon-d dropdown" data-click="off">
            <i class="bi bi-person-circle col-12 " role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <!--  -->
            <ul class="dropdown-menu mt-3 p-0 overflow-hidden pe-2 m-0 p-0" aria-labelledby="dropdownMenuLink">
                <li class="row justify-content-center">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="col-9 d-flex justify-content-start align-items-center px-2">
                        <span>
                            علی عباسی
                        </span>
                    </div>

                </li>
                <li class="row justify-content-center">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="col-9 d-flex justify-content-start align-items-center px-2">
                        <span>
                            سمت
                        </span>
                    </div>

                </li>
                <li class="row justify-content-center">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <div class="col-9 d-flex justify-content-start align-items-center px-2">
                        <span>
                            پنل کاربری
                        </span>
                    </div>

                </li>
                <li class="row justify-content-center">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-gear-fill"></i>
                    </div>
                    <div class="col-9 d-flex justify-content-start align-items-center px-2">
                        <span>
                            تنظیمات
                        </span>
                    </div>

                </li>
                <li class="row justify-content-center">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-box-arrow-right"></i>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="col-9 d-flex justify-content-start align-items-center px-2">
                        <span onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            خروج
                        </span>
                    </div>

                </li>
            </ul>
        </div>
    </div>

</header>
