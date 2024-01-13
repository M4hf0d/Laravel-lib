<!DOCTYPE html>
<html>
<head>
    <title>📚 Esi Librairie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    /* CSS */
body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

.container {
    width: 80%;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px #ccc;
}

.login-container {
    float: right;
    width: 25%;
}

.login-container form .form-group {
    margin-bottom: 10px;
}

.login-container form .form-group label {
    display: block;
}

.login-container form .form-group input {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
}

.login-container form button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

.container::after {
    content: "";
    display: table;
    clear: both;
}

header {
    color: #fff;
    padding: 10px;
    text-align: left;
    margin-bottom: 20px;
}

header a {
    background-color: #007bff;
padding: 10px;
    color: #fff;
    margin: 0 10px;
}
.book-details {
    display: none;
}
</style></head>
<body>
       <header>
        <nav>
        <img src="{{ asset('images/esi.png') }}" alt="ESI logo" style="height: 60px;transform: rotate(-45deg);">
              <a href="/">Home</a>
            <a href="{{ route('books.search') }}">Search</a>
        </nav>
    </header>
<div class="container">
<div class="login-container">

        <!-- Login Form -->
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    @yield('content')
</div>

   
</body>
</html>