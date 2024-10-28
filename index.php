<?php
session_start();
?>
<html>

<body>
    <form action="risultati.php" method="post">
        Nominativo:<input type="text" name="nominativo"><br>
        Genere: <input type="radio" name="sesso" value="M">
        <label for="M">M</label>
        <input type="radio" name="sesso" value="F">
        <label for="F">F</label><br>
        Debiti:
        <input type="checkbox" name="ita" value="ita">
        <label> Italiano</label>
        <input type="checkbox" name="mate" value="mate">
        <label> Matematica</label>
        <input type="checkbox" name="tel" value="tel">
        <label> Telecomunicazioni</label>
        <input type="checkbox" name="info" value="info">
        <label> Informatica</label><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>