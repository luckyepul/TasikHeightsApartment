<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Aduan Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        input[type="text"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="submit_aduan.php" method="POST">
        <h1>Submit Aduan</h1>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="no_unit">No. Unit:</label>
        <input type="text" id="no_unit" name="no_unit" required>

        <label for="tajuk_aduan">Tajuk Aduan:</label>
        <input type="text" id="tajuk_aduan" name="tajuk_aduan" required>

        <label for="no_tel">No. Tel:</label>
        <input type="tel" id="no_tel" name="no_tel" required>

        <label for="aduan">Aduan:</label>
        <textarea id="aduan" name="aduan" required></textarea>

        <input type="submit" value="Submit Aduan">
    </form>
</body>
</html>