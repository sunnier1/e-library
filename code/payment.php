<?php 
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO payment (payment_method, full_name, card_number, expiration_month, expiration_year, cvv, price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiisd", $payment_method, $full_name, $card_number, $expiration_month, $expiration_year, $cvv, $price);
 
    $payment_method = $_POST['payment-method'];
    $full_name = $_POST['full-name'];
    $card_number = $_POST['card-number'];
    $expiration_month = $_POST['month'];
    $expiration_year = $_POST['year'];
    $cvv = $_POST['cvv'];
    $price = $_POST['price'];

    if ($stmt->execute()) {
        $payment_id = $stmt->insert_id;
        $update_stmt = $conn->prepare("UPDATE payment SET status = 'success' WHERE id = ?");
        $update_stmt->bind_param("i", $payment_id);
        $update_stmt->execute();

        session_start();
        $_SESSION['payment_status'] = 'paid';
        header("location: homepage.php");
        echo "Payment data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include 'top-bar.php'; ?>
 <div class="menu-page">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookpage.php">Books</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    
    </div>
 <div class="triangle21"></div>
    <div class="payment-met">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <select name="payment-method"placeholder="Payment Method">
            <option value="" disabled selected hidden>Payment Method</option>
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
        </select>
        <input name="full-name" type="text" placeholder="Enter Full Name">
        <div class="pay-dor">
            <input id="pay-dd" name="card-number" text="text"placeholder="Card Number" required>
            <input id="paydor" name="month" placeholder="MM" type="number" min="1" max="12" required>
            <input id="paydor" name="year" placeholder="YY" type="number" min="21" max="99" required>
            <input id="paydor" name="cvv" placeholder="CVV" type="number" min="100" max="999" required>
        </div>
        <select name="price" placeholder="Membership Price">
            <option value="" disabled selected hidden>Price</option>
            <option value="100000">100.000/month</option>
            <option value="2000000">2000.000/year</option>
        </select>
        <button type="submit">Submit Payment</button>
    </form>
    </div>
</body>
</html>