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
        @if(\Illuminate\Support\Facades\Auth::check())
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/admin/dashboard">Dashboard<span class="sr-only">(current)</span></a></li>
                    <li><a href="/main">Main<span class="sr-only">Main</span></a></li>
                    <li><a href="/appendix">Appendix<span class="sr-only">(current)</span></a></li>
                    <li><a href="/logout">Log Out<span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        @else
            <form class="navbar-form" role="search">
                <a href="{{ url('/')}}" class="btn btn-primary">Login</a>
            </form>
        @endif
    </div>
</nav>