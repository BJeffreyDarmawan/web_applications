<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- for later references -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown" >
                            <a class="text-dark nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/all">All</a>
                                <a class="dropdown-item" href="/form">New</a>
                                <a class="dropdown-item" href="https://www.tesla.com/model3">Xenia</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    <div class="container" style="padding-top: 12px;">
    <form method="post" action="/request">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" style="width:30%;" name="uname">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" style="width:30%;" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" style="width:30%;" name="password">
        </div>
        <button class="btn" type="submit">Submit</button>            
    </form>
    </div>
</body>


</html>