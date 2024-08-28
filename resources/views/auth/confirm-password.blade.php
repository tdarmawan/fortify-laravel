<div>
        <h2>Confirm Your Password</h2>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <input type="password" name="password" placeholder="Password" required autofocus>
            <button type="submit">Confirm Password</button>
        </form>
    </div>