<nav class="navbar navbar-findcond navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('img/logo.png') }}" height="60px" width="60px"/></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">All<span class="sr-only">(current)</span></a></li>
                <li><a href="/main">Main<span class="sr-only">Main</span></a></li>
                <li><a href="/appendix">Appendix<span class="sr-only">(current)</span></a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li><a href="/logout">Log Out<span class="sr-only"></span></a></li>
                @endif

                <!--<li>
                    <a href="/dashboard/messages" ><i class="fa fa-fw fa-bell-o"></i>Messages <span class="badge" style="background-color: red">Something</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Name <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('/')}}">Change Password</a></li>
                        <li><a href="/SignOut">Sign Out</a></li>
                    </ul>
                </li>-->

            </ul>
            <form class="navbar-form pull-right" role="search">
                <a href="{{ url('/search')}}" class="btn btn-primary" style="background-color: white!important;">Search</a>
            </form>
        </div>
    </div>
</nav>