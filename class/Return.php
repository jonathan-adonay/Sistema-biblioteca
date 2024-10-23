<?php
class Return {
    private $conn;
    private $loanTable = 'loans'; // Nombre de la tabla en la base de datos

    public $loan_id;
    public $return_date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addReturn() {
        // Verifica si los atributos están definidos
        if (isset($this->loan_id) && isset($this->return_date)) {
            // Actualiza la fecha de devolución en la tabla de préstamos
            $query = "UPDATE " . $this->loanTable . " SET return_date = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            if ($stmt === false) {
                // Error en la preparación de la declaración
                die('Error en la preparación de la declaración: ' . $this->conn->error);
            }
            $stmt->bind_param("si", $this->return_date, $this->loan_id);
            
            if ($stmt->execute()) {
                // Verificar si la actualización fue exitosa
                return $stmt->affected_rows > 0;
            } else {
                // Error en la ejecución de la declaración
                die('Error en la ejecución de la declaración: ' . $stmt->error);
            }
        }
        return false;
    }
}
?>


