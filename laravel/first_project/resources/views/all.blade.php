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
        <div class="container">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="/user/{{ $user->user_id }}">Details</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>