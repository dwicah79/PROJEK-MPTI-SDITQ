<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            text-align: center;
        }

        .header {
            background-color: #ffaa00;
            color: white;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            font-size: 16px;
            color: #333;
        }

        .content p {
            margin: 15px 0;
        }

        .button {
            background-color: #ffaa00;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            display: inline-block;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Reset Password</h1>
        </div>
        <div class="content">
            <h4>Token permintaan restet password sudah dikirimkan,silahkan akses token melalui link dibawah ini.
            </h4>
            <br>
            <br>
            <a href="{{ route('validasi-forgot-password', ['token' => $token]) }}" class="button">Klik Disini</a>
        </div>
        <div class="footer">
            <p>Jika kamu tidak meminta reset password, abaikan email ini.</p>
        </div>
    </div>
</body>

</html>
