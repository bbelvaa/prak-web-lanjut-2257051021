<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
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
        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:focus, select:focus {
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
        .error-message {
            color: red;
            margin-bottom: 20px;
        }

        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    font-size: 14px;
}

table th {
    background-color: #ff6b6b; /* Pink background for headers */
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

table tr {
    border-bottom: 1px solid #dddddd;
}

table tr:nth-of-type(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1; /* Light hover effect */
}

table td a {
    padding: 6px 12px;
    background-color: #ff6b6b;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-size: 13px;
    transition: background-color 0.3s ease;
}

table td a:hover {
    background-color: #ff4757; /* Darker pink on hover */
}

table td {
    color: #333;
}

.table-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}
    </style>
</head>
<body>
    @yield('content')
    
    </body>
</html>