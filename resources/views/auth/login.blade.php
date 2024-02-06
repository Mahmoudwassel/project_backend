<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="http://127.0.0.1:8000/register">
                <input type="hidden" name="_token" value="MBhT4sy68wZ074fP1oY6aZIw1WtNe6jKYQxaJro5" autocomplete="off">
                @csrf
                <h1>Create Account</h1>
                <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="name" required="required" autofocus="autofocus" autocomplete="name"  placeholder="Name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required" autocomplete="username"  placeholder="Email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password"  placeholder="Password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required="required" autocomplete="new-password" placeholder="password_configration">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="http://127.0.0.1:8000/login">
                <input type="hidden" name="_token" value="MBhT4sy68wZ074fP1oY6aZIw1WtNe6jKYQxaJro5" autocomplete="off">
                @csrf
                <h1>Sign In</h1>
                <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="username"  placeholder="Email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="current-password"  placeholder="Password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                <a href="http://127.0.0.1:8000/forgot-password">Forgot your password?</a>
                
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="JS/login.js"></script>
    <script src="JS/bootstrap.bundle.min.js"></script>
</body>

</html>