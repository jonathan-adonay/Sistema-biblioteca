<?php
class Loan {
    private $conn;
    private $loanTable = 'loans'; // Nombre de la tabla en la base de datos

    public $id;
    public $user_id;
    public $book_id;
    public $loan_date;
    public $return_date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addLoan() {
        $query = "INSERT INTO " . $this->loanTable . " (user_id, book_id, loan_date) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("iis", $this->user_id, $this->book_id, $this->loan_date);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function updateReturnDate() {
        $query = "UPDATE " . $this->loanTable . " SET return_date = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("si", $this->return_date, $this->id);

        if ($stmt->execute()) {
            return $stmt->affected_rows > 0;
        }
        return false;
    }

    public function listLoans() {
        $query = "SELECT * FROM " . $this->loanTable;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }
}
?>
