<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
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
        form {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            transition: transform 0.3s ease;
        }
        form:hover {
            transform: translateY(-10px); /* Floating effect */
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:focus {
            border-color: #ff6b6b; /* Pink accent */
            outline: none;
            box-shadow: 0 0 8px rgba(255, 107, 107, 0.5); /* Soft pink glow */
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #ff6b6b; /* Pink Button */
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #ff4757; /* Darker pink on hover */
            transform: scale(1.05);
        }
        div {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" placeholder="Masukkan nama">
    </div>
    <div>
        <label for="npm">NPM:</label>
        <input type="text" name="npm" id="npm" placeholder="Masukkan NPM">
    </div>
    <div>
        <label for="id_kelas">Kelas:</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
