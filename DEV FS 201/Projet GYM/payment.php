<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <style>
        body {
            background: black;
        }
        .back {
            color: white;
            margin-left: 30px;
            margin-top: -20px;
        }
        .logo {
            margin-top: 15px;
        }
        .forma {
            margin-top: -175px;
            padding: 50px;
            color: white;
        }
        .formm {
            width: 900px;
            margin-left: 100px;
        }
        .success {
            color: green;
            font-size: 18px;
        }
        .error {
            color: red;
            font-size: 18px;
        }
        .data-table th, .data-table td {
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="nav-container">
    <a href="home.php" class="nav-link brand-link logo">
        <img src="img/LOGOA.png" alt="" width="120px" height="120px">
    </a><br>
    <a href="inscription.php" class="nav-link back-link back">Back to Inscription <--</a>
</div>
<div class="container mt-5">

    <h2 class="text-center forma">Payment Page</h2>
    <div class="row justify-content-center formm">
        <div class="col-md-6">
            <div class="card p-4">
                <h4>Prix d'inscription</h4>
                <hr>
                <div id="cart-items">
                    100 DH
                </div>
                <hr>

                <?php
                // Database connection
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "GymDatabase";

                try {
                    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                    exit();
                }

                // Fetch the latest entry from UserInformation
                $sql = "SELECT * FROM UserInformation ORDER BY id DESC LIMIT 1";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                ?>

                <form id="payment-form">
                    <div class="mb-3">
                        <label for="card-number" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="card-number" placeholder="XXXX-XXXX-XXXX-XXXX" required>
                    </div>
                    <div class="mb-3">
                        <label for="card-expiry" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="card-expiry" placeholder="MM/YY" required>
                    </div>
                    <div class="mb-3">
                        <label for="card-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="card-cvv" placeholder="CVV" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit Payment</button>
                </form>
                <div id="payment-status" class="mt-3"></div>
            </div>
        </div>
    </div>
</div>
<br>
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

const paymentForm = document.getElementById('payment-form');
const paymentStatus = document.getElementById('payment-status');

paymentForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const cardNumber = document.getElementById('card-number').value;
    const cardExpiry = document.getElementById('card-expiry').value;
    const cardCVV = document.getElementById('card-cvv').value;

    if (validateCard(cardNumber, cardExpiry, cardCVV)) {
        window.location.href = 'payment-confirmation.php?status=success';
    } else {
        window.location.href = 'payment-confirmation.php?status=failed';
    }
});

function validateCard(cardNumber, cardExpiry, cardCVV) {
    const cardNumberRegex = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
    const cardExpiryRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
    const cardCVVRegex = /^\d{3}$/;

    return cardNumberRegex.test(cardNumber) && cardExpiryRegex.test(cardExpiry) && cardCVVRegex.test(cardCVV);
}
});

</script>
</body>
</html>
