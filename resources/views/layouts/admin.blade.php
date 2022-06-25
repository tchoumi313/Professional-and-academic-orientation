<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="d-block container bg-white p-2">
        <center class="d-block card shadow-lg p-3 m-3">

            <H3>Welcome to Admin Panel</H3>

            <a class="btn btn-outline-info text-dark p-2 m-2" href="
            {{ route('universites.index') }}"> See And Modify Universities</a>
            <br>
            <a class="btn  btn-outline-info text-dark p-2 m-2" href="
            {{ route('facultes.index') }}"> See And Modify Faculties</a>
            <br>
            <a class="btn  btn-outline-info text-dark p-2 m-2" href="
            {{ route('filieres.index') }}"> See And Modify Options</a>
        </center>

    </div>
</body>

</html>
