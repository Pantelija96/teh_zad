<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tickets PDF</title>
    <style>
        table { width: 100%; border-collapse: collapse; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 2px; text-align: left; }
        th { background-color: #eee; }
        body { font-family: sans-serif; }
    </style>
</head>
<body>
<h3>Tickets Export</h3>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Ticket Type</th>
        <th>Node</th>
        <th>Created At</th>
        <th>Session ID</th>
        <th>Success</th>
        <th>CDR Feature</th>
        <th>Traffic Type</th>
        <th>Subscriber IMSI</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->ticket_type_enum?->desciption() ?? '-' }}</td>
            <td>{{ $ticket->node }}</td>
            <td>{{ $ticket->ticketCreationTimestamp }}</td>
            <td>{{ $ticket->sessionId }}</td>
            <td>{{ $ticket->success ? 'Yes' : 'No' }}</td>
            <td>{{ $ticket->cdr->feature ?? '-' }}</td>
            <td>{{ $ticket->cdr_traffic_enum?->description() ?? '-' }}</td>
            <td>{{ $ticket->cdr->subscriberImsi ?? '-' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
