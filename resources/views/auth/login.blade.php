<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if (session('status'))
        <div style="color: green;">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email:</label>
            <input type="email" name="email" required autofocus value="{{ old('email') }}">
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>

        <div>
            <a href="{{ route('register') }}">Register</a> | 
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </form>
</body>
</html>
