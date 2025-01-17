<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Basic Reset and Body Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f8fa;
        }

        /* Page Centering */
        .page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Login Form Styling */
        .login-form {
            width: 400px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling Within the Form */
        .login-form__content__header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Input and Label Styling */
        .form-control {
            margin-bottom: 15px;
        }

        .form-control__label {
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            display: block;
        }

        .form-control__input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Button Styling */
        .form-btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Button Hover Effect */
        .form-btn:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="page login-page">
        <div class="login-form">
            <!-- Form Setup for Login -->
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf <!-- CSRF Token for Security -->
                <div class="login-form__content">
                    <div class="login-form__content__header">
                        Log In
                    </div>
                    <div class="login-form__content__body">
                        <!-- Email Input Field -->
                        <div class="form-control">
                            <label class="form-control__label">Email Address</label>
                            <input class="form-control__input" type="email" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Password Input Field -->
                        <div class="form-control">
                            <label class="form-control__label">Password</label>
                            <input class="form-control__input" type="password" placeholder="Enter your password" name="password" required>
                            @error('password')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- Login Button -->
                    <div class="login-form__content__login">
                        <button type="submit" class="btn primary-btn form-btn">LOGIN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
