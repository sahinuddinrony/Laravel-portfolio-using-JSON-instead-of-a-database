<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
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

        <header>
            <h1>Project Details</h1>
        </header>

        <main class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    @if (isset($selectedProject))
                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <td>{{ $selectedProject['title'] }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $selectedProject['description'] }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                @if (isset($selectedProject['image']))
                                    <img src="{{ asset($selectedProject['image']) }}" alt="{{ $selectedProject['title'] }}" width="200">
                                @else
                                    No Image
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td>
                                @if (isset($selectedProject['url']))
                                    <a href="{{ $selectedProject['url'] }}" target="_blank" class="btn btn-primary">View URL</a>
                                @else
                                    No URL
                                @endif
                            </td>
                        </tr>
                    </table>
                    @else
                        <p>No project selected.</p>
                    @endif
                </div>
            </div>
        </main>

        <footer class="text-center">
            &copy; 2023 Your Name
        </footer>
    </div>
</body>
</html>
