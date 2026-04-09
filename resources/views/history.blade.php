<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved messages</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #111827;
            color: #F5B8C5;
            font-family: Arial, sans-serif;
        }

        .alaa-box {
            max-width: 1100px;
            margin: 50px auto;
            background-color: #1f2937;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
        }

        h1 {
            margin-top: 0;
            font-size: 36px;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            border-radius: 12px;
        }

        th, td {
            padding: 14px;
            border: 1px solid #374151;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #111827;
            color: #93c5fd;
        }

        td {
            background-color: #1f2937;
            color: #f9fafb;
        }

        .hidri-btn {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            background-color: #2563eb;
            color: white;
            padding: 12px 18px;
            border-radius: 10px;
        }

        .hidri-btn:hover {
            opacity: 0.9;
        }

        .alaa-empty {
            background-color: #111827;
            border: 1px solid #374151;
            padding: 16px;
            border-radius: 12px;
            color: #9ca3af;
        }
    </style>
</head>
<body>
<div class="alaa-box">
    <h1>Saved messages</h1>

    @if($inquiries->isEmpty())
        <div class="alaa-empty">No saved messages yet.</div>
    @else
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Category</th>
                <th>Priority</th>
                <th>Country</th>
                <th>Summary</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->id }}</td>
                    <td>{{ $inquiry->original_text }}</td>
                    <td>{{ $inquiry->category }}</td>
                    <td>{{ $inquiry->priority }}</td>
                    <td>{{ $inquiry->country }}</td>
                    <td>{{ $inquiry->summary }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    <a class="hidri-btn" href="{{ route('home') }}">Back</a>
</div>
</body>
</html>
