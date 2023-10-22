<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <!-- Add your CSS and other meta tags here -->
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
        <h1>Project 1</h1>
        <p>Description: A web application that does...</p>
      </header>

    <main>
        <!-- Add your project content here -->
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Project 1</td>
                    <td>A web application that does...</td>
                    <td><img src="/images/project_1.jpg" alt="Project 1 Image" width="200"></td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer>
        &copy; 2023 Your Name
    </footer>

    </div>
</body>
</html>
