<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analysis result</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #111827;
            color: #F5B8C5;
            font-family: Arial, sans-serif;
        }

        .alaa-box {
            max-width: 950px;
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

        .hidri-item {
            background-color: #111827;
            border: 1px solid #374151;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 14px;
            line-height: 1.6;
            color: #f9fafb;
        }

        .alaa-label {
            color: #93c5fd;
            font-weight: bold;
        }

        .alaa-actions {
            margin-top: 25px;
            display: flex;
            gap: 12px;
        }

        .hidri-btn {
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 10px;
            color: white;
            display: inline-block;
        }

        .hidri-btn-main {
            background-color: #ec4899;
        }

        .hidri-btn-second {
            background-color: #374151;
        }

        .hidri-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
<div class="alaa-box">
    <h1>Message analysis</h1>

    <div class="hidri-item"><span class="alaa-label">Original text:</span> {{ $inquiry->original_text }}</div>
    <div class="hidri-item"><span class="alaa-label">Category:</span> {{ $inquiry->category }}</div>
    <div class="hidri-item"><span class="alaa-label">Priority:</span> {{ $inquiry->priority }}</div>
    <div class="hidri-item"><span class="alaa-label">Country:</span> {{ $inquiry->country }}</div>
    <div class="hidri-item"><span class="alaa-label">Summary:</span> {{ $inquiry->summary }}</div>
    <div class="hidri-item"><span class="alaa-label">Suggested reply:</span> {{ $inquiry->suggested_reply }}</div>

    <div class="alaa-actions">
        <a class="hidri-btn hidri-btn-main" href="{{ route('home') }}">go back</a>
        <a class="hidri-btn hidri-btn-second" href="{{ route('history') }}">View Saved messages</a>
    </div>
</div>
</body>
</html>
