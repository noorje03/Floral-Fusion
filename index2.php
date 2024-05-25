<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/comfirm.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Items</title>
    <link rel="stylesheet" href="./style2.css">
</head>

<body>

    <h2>Selected Items</h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody id="selectedItems">

            </tbody>
        </table>
        <div id="totalPrice">Total Price: $0</div>
        <button id="buyButton">Buy</button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Complete Your Purchase</h2>
            <p id="totalPriceModal"></p>
            <form id="purchaseForm" action="pay.php" method="post">
                <input type="hidden" id="forcard" value="" name="forcard" />
                <label for="name">User Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required><br><br>
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required><br><br>
                <label for="payment">Payment Method:</label>
                <select id="payment" name="payment" required>
                    <option value="credit">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash">Cash on Delivery</option>
                </select><br><br>
                <button type="submit">Confirm Purchase</button>
            </form>
        </div>
    </div>

    <div id="modalDone" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModalThankYou()">&times;</span>
            <h2>Thank you for your trust!</h2>
            <p>We are processing your payment</p>
            <p>please wait</p>
            <button id="doneButton" onclick="closeModalThankYou()">DONE</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>