<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grand Horizon | Register</title>
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

        .register-container {
            background: #ffffff;
            width: 450px;
            padding: 40px 35px;
            border-radius: 20px;
            box-shadow: 0 25px 45px rgba(0,0,0,0.25);
            animation: slideUp 0.6s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h2 {
            font-size: 26px;
            font-weight: 700;
            color: #2c3e50;
            letter-spacing: 1px;
        }

        .register-header p {
            font-size: 13px;
            color: #7f8c8d;
            margin-top: 4px;
            letter-spacing: 0.5px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: 600;
            color: #34495e;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
            background: #fafafa;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #1abc9c;
            background: #ffffff;
            box-shadow: 0 0 0 2px rgba(26,188,156,0.15);
        }

        .register-btn {
            width: 100%;
            padding: 13px;
            margin-top: 10px;
            background: linear-gradient(135deg, #1abc9c, #16a085);
            border: none;
            color: white;
            border-radius: 14px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 10px 22px rgba(26,188,156,0.45);
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(26,188,156,0.6);
        }

        .register-footer {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: #7f8c8d;
        }

        .register-footer a {
            color: #1abc9c;
            font-weight: 600;
            text-decoration: none;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .register-container {
                width: 90%;
                padding: 30px 25px;
            }
        }
    </style>
</head>

<body>

<div class="register-container">

    <div class="register-header">
        <h2>Grand Horizon</h2>
        <p>Hotel Management Registration</p>
    </div>

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter full name" required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="name@hotel.com" required>
        </div>

        <div class="form-group">
            <label>Role</label>
            <select name="role" required>

                <option value="user">user</option>

                <option value="">Select role</option>
                <option value="admin">Admin</option>
                
                <option value="receptionist">Receptionist</option>
            </select>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="********" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="********" required>
        </div>

        <button type="submit" class="register-btn">Create Account</button>
    </form>

    <div class="register-footer">
        Already have an account?
        <a href="{{ route('login') }}">Login</a>
    </div>

</div>

</body>
</html>
