<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset("/") }}img/logo.png">
    <style>
        body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #4CAF50;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #4CAF50;
      box-shadow: none;
    }
  </style>
</head>

<body>
    <div class="section"></div>
    <main>
        <center>
            <a href="{{ url("/") }}"><img class="responsive-img" style="width: 250px;" src="{{ asset("/") }}img/logoLogin.png" /></a>
            <div class="section"></div>

            <h5 class="indigo-text">Please, login into your account</h5>
            <div class="section"></div>

            <div class="container">
                <div 
                    class="z-depth-1 grey lighten-4 row" 
                    style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;min-width:40%">

                    <form class="col s12" method="post" action="{{ route('login') }}">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='user' id='user' required />
                                <label for='user'>Enter your user</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' required />
                                <label for='password'>Enter your password</label>
                            </div>
                        </div>
                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='ingresar' value="ingresar" class='col s12 btn btn-large waves-effect indigo'>Login</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>