<html>
    <head>
    <title>Sending Money</title>
</head>
<body>
Please type the acount number to send money to<input type="number"name="account_no"></br>
Enter the amount of Money to send<input type="number"name="amount">frw</br>
<input type="button"name="submit"value="send">
<a href="wel.php"><input type="button"name="cancel"value="cancel"></a>
<?php
if(isset($_POST['submit'])){
class TransactionDemo {

const DB_HOST = 'localhost';
const DB_NAME = 'user';
const DB_USER = 'root';
const DB_PASSWORD = '';
public function transfer($from, $to, $amount) {
    try {
        $this->pdo->beginTransaction();
        $sql = 'SELECT BALANCE FROM client WHERE user_id=:from';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(":from" => $from));
        $availableAmount = (int) $stmt->fetchColumn();
        $stmt->closeCursor();

        if ($availableAmount < $amount) {
            echo 'No money in your account';
            return false;
        }
        $sql_update_from = 'UPDATE client
            SET BALANCE = BALANCE - :BALANCE
            WHERE user_id = :from';
        $stmt = $this->pdo->prepare($sql_update_from);
        $stmt->execute(array(":from" => $from, ":BALANCE" => $amount));
        $stmt->closeCursor();
        $sql_update_to = 'UPDATE client
                            SET BALANCE = BALANCE + :BALANCE
                            WHERE user_id = :to';
        $stmt = $this->pdo->prepare($sql_update_to);
        $stmt->execute(array(":to" => $to, ":BALANCE" => $balance));
        $this->pdo->commit();
        echo 'The amount has been transferred successfully';
        return true;
    } catch (PDOException $e) {
        $this->pdo->rollBack();
        die($e->getMessage());
    }
}
public function __construct() {
    $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
    try {
        $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
public function __destruct() {
    $this->pdo = null;
}
}
}
?>