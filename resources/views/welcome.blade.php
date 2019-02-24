<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->

</head>

<body class="gradient">
    
    @if(session('success_msg'))
    <div class="alert alert-success fade in alert-dismissible show text-center">                
        {{ session('success_msg') }}
    </div>
    @endif
    
    <form action="{{ route('pollsubmit') }}" method="post" id="recaptcha_frm" name="recaptcha_frm">
        @csrf
        <section class="container mt-2 mb-2">
            <div class="container-fluid">

                <div class="title m-b-md">
                    <a href="https://github.com/developer-ashok/laravel-recaptcha" style="color: #fff">
                        <h3>
                        <center>Laravel + Google reCaptcha Example              </center> 
                    </h3>
                    </a>
                </div>

                <div class="row flex-xl-nowrap">

                    <div class="card mr-3">
                        <a href="https://www.officialtrailers.in/post/avengers-endgame" target="_blank">
                            <img class="card-img-top" src="{{ asset('css/1.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Avengers Endgame</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <label class="btn btn-danger">
                                <input type="radio" name="radio" id="radio" value="1" {{ (old( 'radio')==1 ) ? 'checked' : '' }} class="form-control" /> I Like This
                            </label>
                        </div>
                    </div>

                    <div class="card mr-3">
                        <a href="https://www.officialtrailers.in/post/men-in-black-international" target="_blank">
                            <img class="card-img-top" src="{{ asset('css/2.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Men in Black: International</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <label class="btn btn-danger">
                                <input type="radio" name="radio" id="radio" value="2" {{ (old( 'radio')==2 ) ? 'checked' : '' }} class="form-control" /> I Like This
                            </label>
                        </div>
                    </div>

                    <div class="card mr-3">
                        <a href="https://www.officialtrailers.in/post/captain-marvel-official-trailer" target="_blank">
                            <img class="card-img-top" src="{{ asset('css/3.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Captain Marvel</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <label class="btn btn-danger">
                                <input type="radio" name="radio" id="radio" value="3" {{ (old( 'radio')==3 ) ? 'checked' : '' }} class="form-control" /> I Like This
                            </label>
                        </div>
                    </div>
                </div>
                @if ($errors->has('radio'))
                <div class="alert alert-danger mt-3" role="alert" style="width: 40%">
                    <strong>{{ $errors->first('radio') }}</strong>
                </div>
                @endif

                <div class="row mt-4">

                    <div class="col-sm-4">
                        <div class="g-recaptcha" data-sitekey="{{ env('G_RECAPTCHA_KEY') }}"></div>
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-success" style="height: 95%; width: 100%; font-size: 45px; font-weight: bold;" />
                    </div>

                </div>
                @if ($errors->has('g-recaptcha-response'))
                <div class="alert alert-danger mt-3" style="width: 40%" role="alert">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </div>
                @endif
        </section>
    </form>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>