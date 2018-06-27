@section('content')
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Edit Post-KONI</title>

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
                        <h1>Edit Post</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Post</span>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

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


                <a href="#" class="form-google-button">batal</a>

            </div>

        </form>

    </div>

</body>

</html>
