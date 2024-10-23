<?php
include_once 'config/Database.php';
include_once 'class/Loan.php'; // Asegúrate de que la ruta y el nombre del archivo sean correctos

// Inicializa la conexión a la base de datos
$database = new Database();
$db = $database->getConnection();

// Crea una instancia de la clase Loan
$loan = new Loan($db);

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Asigna valores a la instancia de Loan
    $loan->book_id = $_POST['book_id'];
    $loan->user_id = $_POST['user_id'];
    $loan->loan_date = $_POST['loan_date'];

    // Llama al método addLoan() para agregar el préstamo
    if ($loan->addLoan()) {
        echo "Préstamo agregado exitosamente.";
    } else {
        echo "Error al agregar el préstamo.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Préstamo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2>Agregar Préstamo</h2>
    <form action="devoluciones.php" method="POST">
        <label for="book_id">ID del Libro:</label>
        <input type="text" id="book_id" name="book_id" required><br><br>

        <label for="user_id">ID del Usuario:</label>
        <input type="text" id="user_id" name="user_id" required><br><br>

        <label for="loan_date">Fecha de Préstamo:</label>
        <input type="date" id="loan_date" name="loan_date" required><br><br>

        <label for="loan_date">Fecha de Devolucion:</label>
        <input type="date" id="loan_date" name="loan_date" required><br><br>

        <button type="submit">Registrar Préstamo</button>
    </form>
</body>
</html>


