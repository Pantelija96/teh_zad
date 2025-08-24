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
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="#" method="POST" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="mb-3">
        <input type="file" name="csv_file" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Upload CSV</button>
</form>

{{--<h3>Records</h3>--}}
{{--<table class="table table-bordered">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>Field1</th>--}}
{{--        <th>Field2</th>--}}
{{--        <th>Field3</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @forelse($records as $record)--}}
{{--        <tr>--}}
{{--            <td>{{ $record->field1 }}</td>--}}
{{--            <td>{{ $record->field2 }}</td>--}}
{{--            <td>{{ $record->field3 }}</td>--}}
{{--        </tr>--}}
{{--    @empty--}}
{{--        <tr><td colspan="3">No records found</td></tr>--}}
{{--    @endforelse--}}
{{--    </tbody>--}}
{{--</table>--}}

<a href="#" class="btn btn-success">Download PDF</a>

</body>
</html>
