<?php
session_start();

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

$paymentStatus = isset($_GET['status']) ? $_GET['status'] : 'Payment Failed!';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            width:500px;
            margin-left:400px;
        }
        .container {
            margin-top: 50px;
        }
        .success {
            color: green;
            font-size: 18px;
        }
        .error {
            color: red;
            font-size: 18px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .form-control-plaintext {
            border: none;
            background-color: #f8f9fa;
            padding: 10px;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
        h2{
            padding:50px;
            margin-top:-150px;
            color:wheat;
        }
        .loog{
            margin-left:-412px;
        }
    </style>
</head>
<body>
    <div class="container">
<a class="navbar-brand loog" href="home.php"><img src="img/LOGOA.png" alt=""width="120px" height="120px"></a><br>

        <h2 class="text-center">Payment Confirmation</h2>
        <div class="card p-4 form-container">
            <?php if ($data): ?>
                <form id="confirmation-form">
                    <h4>Latest Registration Information</h4>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['nom']); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['prenom']); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="region" class="form-label">Region:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['region']); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['ville']); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="salle" class="form-label">Salle:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['salle']); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="date_naissance" class="form-label">Date Naissance:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['date_naissance']); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['email']); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number:</label>
                        <div class="form-control-plaintext"><?php echo htmlspecialchars($data['phone_number']); ?></div>
                    </div>

                    <div class="mt-3">
                        <?php if ($paymentStatus == 'success'): ?>
                            <p class="success">Already Paid!</p>
                        <?php else: ?>
                            <p class="error">Payment Failed! Please try again.</p>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="btn btn-primary no-print" onclick="printForm()">Print Form</button>
                </form>
            <?php else: ?>
                <p>No data found.</p>
            <?php endif; ?>
        </div>
    </div>

    <script>
        function printForm() {
            window.print();
        }
    </script>
</body>
</html>
