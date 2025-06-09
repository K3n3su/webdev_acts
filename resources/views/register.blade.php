<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        <br>
       
        <label for="course">Course:</label>
<input type="text" id="course" name="course" required>
<br>
<label for="age">Age:</label>
<input type="number" id="age" name="age" required>
<br>
<label for="address">Address:</label>
<input type="text" id="address" name="address" required>
<br>
 <button type="submit">Sign Up</button>

    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
</body>
</html>
