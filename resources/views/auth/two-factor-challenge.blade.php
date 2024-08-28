<!-- resources/views/auth/two-factor-challenge.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Factor Authentication Challenge</title>
</head>
<body>
    <h1>Two-Factor Authentication Challenge</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/two-factor-challenge') }}">
        @csrf

        <div>
            <label>Authentication Code:</label>
            <input type="text" name="code" autofocus autocomplete="one-time-code">
        </div>

        <div>
            <label>Or Recovery Code:</label>
            <input type="text" name="recovery_code" autocomplete="one-time-code">
        </div>

        <div>
            <button type="submit">Verify</button>
        </div>
    </form>
</body>
</html>
