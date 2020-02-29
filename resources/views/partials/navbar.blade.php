<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Task</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{Auth()->user()->name}} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button style="background: none; border: none;" type="submit"><i class="fa fa-sign-out fa-fw"></i> Logout</button>
                    <!-- <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a> -->
                </form>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}" class="active"><i class="fa fa-list fa-fw"></i> Categories</a>
                </li>
                <li>
                    <a href="{{route('products.index')}}" class="active"><i class="fa fa-cube fa-fw"></i> Products</a>
                </li>
            </ul>
        </div>
    </div>
</nav>