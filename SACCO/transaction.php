<HTML>
    <HEAD>
        <title>Transactions</title>
</head>
<body>
    <table>
        <tr><th>TRANSNO</th><th>DATE</th><th>ACCOUNTNO</th><th>DEBIT AMOUNT</th><th>CREDIT AMOUNT</th></tr>
        <?php
        include('usercon.php');
        $s="SELECT * FROM transaction order by TRANSNO desc";
        $r=$con->query($s);
        while($row=$r->fetch-row())
        echo("<tr><td>TRANSNO</td><td>".$row[0]."</td></tr><tr><td>DATE</td><td>".$row[1]."</td></tr><tr><td>ACCNO</td><td>".$row[2]."</td></tr><tr><td>DEBITAM</td><td>".$row[3]."</td></tr><tr><td>CREDITAM</td><td>".$row[4]."</td></tr>");
        ?>




</table>
</body>
</html>