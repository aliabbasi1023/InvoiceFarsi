<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <!-- style  -->
    <link rel="stylesheet" href="LoginAsset/style/style.css">
    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="LoginAsset/cdn-file/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="LoginAsset/cdn-file/bootstrap.min.css.css">
    <!-- bootstrap icon -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="asset/cdn-file/bootstrap2-icons.css"> -->

</head>

<body onkeyup="_keyCode(event)">
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-9 col-md-7 col-lg-4 py-5" id="log_in">

                    <div class="col-12" id="icon_box">
                        <figure class="col-12 d-flex justify-content-center">
                            <img src="LoginAsset/img/logo-farsi-1402.png" class="col-5 p-0 m-0" alt="">
                        </figure>
                    </div>

                    <div class="col-12 d-flex justify-content-center align-items-center mb-5" id="welcome_box">
                        <h3>
                            به صنایع غذایی فارسی خوش آمدید
                        </h3>
                    </div>


                    <div class="col-12 row" id="input_box">
                        <form method="POST" action="{{ route('login') }}" id="form">
                            @csrf
                            <div class="d-flex col-12 justify-content-center mb-3">
                                <input name="email" value="{{ old('email') }}" required autocomplete="email" type="text" class="col-8 px-2 inp" placeholder="نام کاربری" id="user_login">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="d-flex col-12 justify-content-center">
                                <div class="col-8" id="parent_eye">
                                    <span id="show_pass" onclick="_show_pass(this)" data-show="off">
                                        <i class="bi bi-eye-fill"></i>
                                    </span>
                                    <input type="password" name="password" required autocomplete="current-password" class="col-12 px-2 inp" type="password" placeholder="رمز عبور" id="pass_login">
                                </div>
                            </div>
                    </div>


                    <div class="col-12 d-flex justify-content-center my-4" id="more_box">
                        <div class="col-8 row">
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <input type="checkbox" id="remember_login" name="remember" value="" class="ms-2">
                                <label for="remember">به خاطر بسپار</label>
                            </div>


                            <div class="col-6 d-flex justify-content-end">
                                <a href="">
                                    رمز عبور خود را فراموش کرده اید؟
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 d-flex justify-content-center my-5" id="btn_box">
                        <button class="col-8 d-flex justify-content-center align-items-center" onmouseup="_btn_up(this)" onmousedown="_btn_down(this)">
                            ورود به پنل کاربری
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    // ***********************send*******************************

    function _send(s) {

        let _user = document.getElementById('user_login').value
        console.log(_user);
        let _pass = document.getElementById('pass_login').value
        console.log(_pass);

        if ((_user == '' || _user == null) || (_pass == '' || _user == null)) {
            alert('نام کاربری یا رمز عبور وارد نشده است.')

        } else {
            Document.getElementById('form').submit();

        }

    }

    function _keyCode(e) {
        let key = e.keyCode || e.which
        if (key == 13) {
            _send()
        }
        // **************************************btn send***************
    }

    function _btn_up(s) {
        s.style.transform = 'scale(1)'

    }

    function _btn_down(s) {
        s.style.transform = 'scale(0.9)'


    }

    // *************************show pass**************
    function _show_pass(s) {
        let status = s.getAttribute('data-show')

        if (status == 'off') {
            s.setAttribute('data-show', 'on')
            s.children[0].remove()
            s.innerHTML = '<i class="bi bi-eye-slash-fill"></i>'

            document.getElementById('pass_login').type = "text"

        } else {
            s.setAttribute('data-show', 'off')
            s.children[0].remove()
            s.innerHTML = '<i class="bi bi-eye-fill"></i>'


            document.getElementById('pass_login').type = "password"
        }
    }
    // **************************************inp border*******************
    let _inps = document.getElementsByClassName('inp')


    function _reset() {
        for (let y = 0; y < _inps.length; y++) {
            _inps[y].style.border = '1px solid rgb(194, 193, 193)'

        }


    }
    for (let x = 0; x < _inps.length; x++) {
        _inps[x].onfocus = function() {
            _reset()

            this.style.border = '1px solid black'
        }

    }
</script>

</html>