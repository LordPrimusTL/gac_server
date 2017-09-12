<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> {{$title}}: GAC Hymn Server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="_token" content="{!! csrf_token() !!}" />
    <link href="{{ asset('css/paper.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
</head>
<body>
    <div class="naveee">
        <nav class="navbar navbar-findcond navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" height="60px" width="60px"/></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">All<span class="sr-only">(current)</span></a></li>
                        <li><a href="/main">Main<span class="sr-only">Main</span></a></li>
                        <li><a href="/appendix">Appendix<span class="sr-only">(current)</span></a></li>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li><a href="/logout">Log Out<span class="sr-only"></span></a></li>
                    @endif

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            @include('partials._message')
            {{Form::open()}}
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="name" id="name" placeholder="Name" required/>
                    </div>

                    <br/>
                    <br/>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="3" name="nfeedback" id="nfeedback" placeholder="Comment/Suggestions/Complaints" required></textarea>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <br/><br/>

                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-send"></span>&nbsp; Submit</button>
                    </div>
                </div>
            {{Form::close()}}
        </div>
        <div class="col-lg-4">

        </div>

    </div>
</body>
<script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
