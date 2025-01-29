<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <header>
        <nav>
          <h1><a href="/">Employee Manager</a></h1>
          <a href="{{route('employee.index')}}">
            All Employee
          </a>
          <a href="{{route('employee.create')}}">
            Create New Record
          </a>
        </nav>
      </header>
    <main class="container">
        {{ $slot }}
    </main>
  </body>
</html>
