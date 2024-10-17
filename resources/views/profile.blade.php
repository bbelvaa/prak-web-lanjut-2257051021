<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8c1c1; /* Pink Background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .profile-container:hover {
            transform: translateY(-10px); 
        }
        h1 {
            color: #ff6b6b;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #333;
            font-size: 16px;
            margin: 10px 0;
        }
        p span {
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px;
            background-color: #ff6b6b;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }
        a:hover {
            background-color: #ff4757;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>Profile User</h1>
        <p><span>Nama:</span> {{ $user->nama }}</p>
        <p><span>NPM:</span> {{ $user->npm }}</p>
        <p><span>Kelas:</span> {{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</p>
        <a href="/user/create">Kembali</a>
    </div>
</body>