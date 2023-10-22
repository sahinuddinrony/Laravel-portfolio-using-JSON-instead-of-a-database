<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Projects</title>
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

    <h1>Projects</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Photo</th>
                <th>View Project</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $project)
                <tr>
                    <td>{{ $project['id'] }}</td>
                    <td>{{ $project['title'] }}</td>
                    <td>{{ $project['description'] }}</td>
                    <td>
                        @if (isset($project['image']))
                            <img src="{{ asset($project['image']) }}" alt="Project Image" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('project.details', ['id' => $project['id']]) }}" class="btn btn-primary">View Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>

</html>
