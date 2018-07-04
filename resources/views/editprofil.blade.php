@section('content')
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Edit Profil-KONI</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-register.css">

</head>

    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="{{ route('register') }}">
				{{ csrf_field() }}
            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Edit Profil</h1>
                    </div>

                         <div class="avatar">
                            <img src="cover/joko.jpg" class="img-thumbnail img-profile">
                        </div>
                    <br>
                    <br>
                    <br>
                    

                    <div class="form-row">
                        <label>
                            <span>Nama</span>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                          </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Pekerjaan</span>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </label>
                    </div>

                    <div class="form-row">
                      <label>
                      <span> Alamat</span>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </label>
                    </div>

                    <div class="form-row">
                      <label>
                      <span> Tempat Tanggal Lahir</span>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </label>
                    </div>


                    <div class="form-row">
                        <button type="submit">{{ __('ubah') }}</button>
                    </div>

                </div>


            </div>

            <div class="form-sign-in-with-social">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                

                <a href="#" class="form-google-button">batal</a>

            </div>

        </form>

    </div>

</body>

</html>
