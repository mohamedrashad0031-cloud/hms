<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grand Horizon | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: #ffffff;
            width: 420px;
            padding: 40px 35px;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container h2 {
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .login-container p {
            text-align: center;
            font-size: 13px;
            color: #7f8c8d;
            margin-bottom: 30px;
            letter-spacing: 0.5px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
            color: #34495e;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        .form-group input:focus {
            border-color: #1abc9c;
            box-shadow: 0 0 0 2px rgba(26,188,156,0.15);
        }

        .login-btn {
            width: 100%;
            padding: 13px;
            margin-top: 10px;
            background: linear-gradient(135deg, #1abc9c, #16a085);
            border: none;
            color: white;
            border-radius: 12px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 8px 18px rgba(26,188,156,0.4);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(26,188,156,0.6);
        }

        .login-footer {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: #7f8c8d;
        }

        .login-footer a {
            color: #1abc9c;
            font-weight: 600;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 30px 25px;
            }
        }
    </style>
</head>

<body>

<div class="login-container">
    <h2>Grand Horizon</h2>
    <p>Hotel Management Login</p>

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="login-footer">
        New user?
        <a href="{{ route('register') }}">Register</a>
    </div>
</div>

</body>
</html>
