<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css')}}">
</head>
<body>

    @if (Session('success'))
    <h1>
    {{ session('success') }}
    </h1>
    @endif
    @if (Session('error'))
    <h1>
        {{ session('error') }}
    </h1>
    @endif

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('signup.data')}}">
                @csrf
                <h1>Create Account</h1><br>
                <input type="hidden" name="role" value="student" />
                <input type="text"  name="name" placeholder="Name" />
                <input type="email"  name="email" placeholder="Email" />
                <input type="text"  name="age" placeholder="Age" min="18" max="60" />
                <select class="form-control" id="course" name="course">
                    <option selected>Select Course</option>
                    <option value="BBa">BBa</option>
                    <option value="Ba">Ba</option>
                    <option value="B.com">B.com</option>
                </select>
                <input type="password" name="password"  placeholder="Password" />
                    @error('password')
                        {{ $message }}
                    @enderror
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required />
                <br>

                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>

        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('signin.data') }}">
                @csrf
                <h1>Sign in</h1><br>
                <input type="email" name="email" placeholder="Email" />
                    @error('email')
                        {{ $message }}
                    @enderror
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit"> Sign In </button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1><br>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/login/js/script.js')}}"></script>
</body>
</html>
