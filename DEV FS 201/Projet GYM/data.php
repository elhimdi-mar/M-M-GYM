<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $region = $_POST['region'];
    $ville = $_POST['ville'];
    $salle = $_POST['salle'];
    $date_naissance = $_POST['date'];
    $email = $_POST['email'];
    $phone_number = $_POST['number'];

    $sql = "INSERT INTO UserInformation (nom, prenom, region, ville, salle, date_naissance, email, phone_number)
            VALUES (:nom, :prenom, :region, :ville, :salle, :date_naissance, :email, :phone_number)";

    try {
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':salle', $salle);
        $stmt->bindParam(':date_naissance', $date_naissance);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);

        if ($stmt->execute()) {
            header("Location: payment.php");
            exit();
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
}
?>
