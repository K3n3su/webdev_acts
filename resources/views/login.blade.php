<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        input {
            margin-bottom: 10px;
            padding: 6px;
            width: 250px;
        }
        button {
            padding: 8px 16px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #333;
        }
        .signup-link {
            margin-top: 20px;
            display: inline-block;
            padding: 8px 16px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }
        .signup-link:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>

    <!-- Sign-Up Redirect -->
    <div>
        <a href="{{ route('register') }}" class="signup-link">
            Don’t have an account? Sign Up
        </a>
    </div>
</body>
</html>
