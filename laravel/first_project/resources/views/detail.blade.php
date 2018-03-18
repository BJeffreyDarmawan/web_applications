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
            <h2>User Details</h2>
            <table class="table" >
                @foreach($mes as $me)
                <tr>
                    <th style="border-top:none !important; width: 25%">User ID</th>
                    <td style="border-top:none !important; ">: {{ $me->user_id }}</td>
                </tr>
                <tr>
                    <th style="border-top:none !important; width: 25%">Name</th>
                    <td style="border-top:none !important;">: {{ $me->name }}</td>
                </tr>
                <tr>
                    <th style="border-top:none !important; width: 25%">Email</th>
                    <td style="border-top:none !important;">: {{ $me->email }}</td>
                </tr>
                @endforeach <!-- need foreach to iterate result-->
                <tr>
                    <button class="button" href="/edit">Edit</button>
                </tr>
            </table>
        </div>
    </body>
</html>