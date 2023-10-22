<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Work Experience</title>
</head>
<body class="d-flex justify-content-center align-items-center">

    <div class="text-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('work_experience') }}">Work Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('project') }}">Projects</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div>
    <h1>Work Experience</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Year</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $experience)
                <tr>
                    <td>{{ $experience['title'] }}</td>
                    <td>{{ $experience['company'] }}</td>
                    <td>{{ $experience['year'] }}</td>
                    <td>{{ $experience['description'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
