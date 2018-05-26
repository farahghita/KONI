<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Daftar-KONI</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-register.css">

</head>

    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="{{ route('register_action') }}">
				{{ csrf_field() }}
            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Buat akun baru</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Nama</span>
                            <input type="text" name="name">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>


                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Saya setuju dengan <a href="#">syarat dan ketentuan</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Daftar</button>
                    </div>

                </div>

                <a href="#" class="form-log-in-with-existing">Sudah punya akun? Masuk disini &rarr;</a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-subtitle">Masuk dengan</span>
                </div>

                <a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>

            </div>

        </form>

    </div>

</body>

</html>
