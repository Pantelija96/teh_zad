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
        <?php echo(session('success'))?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{route('upload.csv')}}" method="POST" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="mb-3">
        <input type="file" name="csv_file" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Upload CSV</button>
</form>
<form action="{{ route('export.pdf') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Export PDF</button>
</form>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Ticket Type</th>
        <th>Node</th>
        <th>Created At</th>
        <th>Session ID</th>
        <th>Success</th>
        <th>CDR apn</th>
        <th>Location Network</th>
        <th>Feature</th>
        <th>Account Status</th>
        <th>Subscriber IMSI</th>
        <th>Tariff ID</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($tickets))
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->ticket_type_enum?->desciption() ?? '-' }}</td>
                <td>{{ $ticket->node }}</td>
                <td>{{ $ticket->ticketCreationTimestamp }}</td>
                <td>{{ $ticket->sessionId }}</td>
                <td>{{ $ticket->success ? 'Yes' : 'No' }}</td>
                <td>{{ $ticket->crceCdrs->apn ?? '-' }}</td>
                <td>{{ $ticket->crceCdrs->locationNetwork ?? '-' }}</td>
                <td>{{ $ticket->crceCdrs->feature ?? '-' }}</td>
                <td>{{ $ticket->crceConfs->accountStatus ?? '-' }}</td>
                <td>{{ $ticket->crceConfs->subscriberImsi ?? '-' }}</td>
                <td>{{ $ticket->crceConfs->tariffId ?? '-' }}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

<div class="d-flex justify-content-center mt-3">
    {{ $tickets->links('pagination::bootstrap-5') }}
</div>

</body>
</html>
