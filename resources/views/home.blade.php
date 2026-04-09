<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Checker Loup</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #111827;
            color: #F5B8C5;
            font-family: Arial, sans-serif;
        }

        .alaa-box {
            max-width: 900px;
            margin: 60px auto;
            background-color: #1f2937;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
        }

        h1 {
            margin-top: 0;
            font-size: 40px;
            color: #ffffff;
        }

        .alaa-text {
            color: #9ca3af;
            margin-bottom: 25px;
        }

        textarea {
            width: 100%;
            min-height: 220px;
            border-radius: 12px;
            border: 1px solid #374151;
            background-color: #111827;
            color: #f9fafb;
            padding: 16px;
            font-size: 15px;
            resize: vertical;
            box-sizing: border-box;
        }

        textarea::placeholder {
            color: #6b7280;
        }

        .alaa-actions {
            margin-top: 20px;
            display: flex;
            gap: 12px;
        }

        button, .hidri-bttn {
            border: none;
            border-radius: 10px;
            padding: 12px 18px;
            font-size: 15px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        button {
            background-color: #ec4899;
            color: white;
        }

        .hidri-bttn {
            background-color: #374151;
            color: white;
        }

        button:hover, .hidri-bttn:hover {
            opacity: 0.9;
        }

        .hidr-tag {
            display: inline-block;
            margin-bottom: 18px;
            font-size: 13px;
            padding: 6px 10px;
            border-radius: 999px;
            background-color: #0f172a;
            color: #93c5fd;
            border: 1px solid #1e3a8a;
        }
    </style>
</head>
<body>
<div class="alaa-box">
    <div class="hidr-tag">student project</div>
    <h1>Inquiry checker</h1>
    <p class="alaa-text">
        Please paste the customer message to get analyzed.
    </p>

    <form action="{{ route('analyze') }}" method="POST">
        @csrf
        <textarea
            name="original_text"
            id="original_text"
            placeholder="Put the message here..."
            required
        ></textarea>

        <div class="alaa-actions">
            <button type="submit">Analyze message</button>
            <a class="hidri-bttn" href="{{ route('history') }}">Saved messages</a>
        </div>
    </form>
</div>
</body>
</html>
