<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhoneBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="bavbar-expand-lg navbar bg-dark navbar-dark">
        <a href="" class="navbar-brand">PhoneBook</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('vcard.create')}}" class="nav-link">Insert</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>