<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            max-width: 800px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Wishlist</h1>
        <form action="wishlist.php" method="POST">
            <label for="item_id">Item ID:</label>
            <input type="number" name="item_id" id="item_id" required>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="img">Image URL:</label>
            <input type="text" name="img" id="img" required>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" required>

            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" required>

            <button type="submit">Add to Wishlist</button>
        </form>

        <!-- Wishlist Display -->
        <table>
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'wishlist_display.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
