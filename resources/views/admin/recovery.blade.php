<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recupero Credenziali :: Amministrazione :: Laravel-Italia.it</title>

        <link href="{{ url('assets') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ url('assets') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            #logo {
                margin-top: 50px;
                margin-bottom: 40px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="logo">
                    <img src="{{ url('images/logo.png') }}" alt="" />
                </div>
            </div>

            @if(Session::has('message'))
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('message') }}
                        </div>
                    </div>
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ $errors->first() }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recupero Credenziali</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{ url('admin/recovery') }}">
                                {{ csrf_field() }}

                                <p>Non ricordi la tua password? Nessun problema. Inserisci il tuo indirizzo email, ti verrà inviato un link per sceglierne una nuova.</p>

                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Indirizzo Email" name="email" type="text">
                                    </div>

                                    <hr>

                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Recupera Password">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
