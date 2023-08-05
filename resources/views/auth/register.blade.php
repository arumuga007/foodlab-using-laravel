<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('css/styleregister.css')}}">
</head>

<body>

    <div class="box">
        <h2>Sign Up</h2>
        <form method="POST" action="/store">
            <div class="input_box">
                <input type="text" placeholder="name" name="name" required>
            </div>

            <div class="input_box">
                <input type="text" placeholder="Email Id" name="email" required>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Create Password" name="password" required>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
            </div>
            <button type="submit">Create Account</button>

            <div class="links">Already have an account? <a href="/login">Login</a></div>
            <div class="links">Need help? <a href="/contact">Contact Us</a></div>
            @csrf
        </form>
    </div>
</body>
</html>