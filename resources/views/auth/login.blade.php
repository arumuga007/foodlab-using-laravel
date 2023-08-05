<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}"></link>
    </head>
    <body>
    <div class="box">
        <h2>Login</h2>
        <form method="POST" action="/authenticate">
            <div class="input_box">
                <input type="text" name="email" placeholder="Email Id" required>
            </div>
            <div class="input_box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="links" style="text-align: right;"><a href="#">Forgot Password?</a></div>
            <button type="submit">Login</button>
            <div class="links">Don't have an account? <a href="/register">Sign Up</a></div>
            <div class="links">Need help? <a href="/contact">Contact Us</a></div>
            @csrf
        </form>
    </div>
    </body>
</html>


