<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSV Import & PDF Export</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h1 class="mb-4">CSV Import & PDF Export</h1>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{route('uploadcsv')}}" method="POST" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="mb-3">
        <input type="file" name="csv_file" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Upload CSV</button>
</form>
<a href="#" class="btn btn-success">Download PDF</a>

</body>
</html>
