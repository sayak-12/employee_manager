<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to the {{ $greeting }} Company</h1>
    <p>Click the button below to view the list of Employees.</p>

    <a href="{{ route('employee.index') }}" class="btn mt-4 inline-block">
      All Employee
    </a>
  </body>
</html>
