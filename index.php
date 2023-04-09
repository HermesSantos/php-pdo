<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD PHP</title>
</head>
<style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
  <section>
    <p>POST</p>
    <form method="get">
      <div>
        <label>Nome</label><br>
        <input type="text" placeholder="FirstName" name="FirstName"><br>
        <label>Sobrenome</label><br>
        <input type="text" placeholder="LastName" name="LastName"><br>
        <label>Estado</label><br>
        <input type="text" placeholder="Address" name="Address"><br>
        <label>Cidade</label><br>
        <input type="text" placeholder="City" name="City"><br>
      </div>
      <div>
        <input type="submit" value="POST">
      </div>
    </form>
  </section>
  <section>
    <p>GET</p>
    <form method="get">
      <div>
        <label>Ver os dados do banco</label><br>
        <input type="submit" value="GET">
      </div>
    </form>
    <div>
      <table >
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Estado</th>
          <th>Cidade</th>
        </tr>
        <tr>
          <?php
            require('Database.php');
          
            $db = DataBase::Connect();
            $sql = "SELECT * FROM persons";
          
            $data = $db->query($sql, PDO::FETCH_ASSOC);

            foreach($data as $d){
              echo "<td>".$d['FirstName']."</td>";
              echo "<td>".$d['LastName']."</td>";
              echo "<td>".$d['Address']."</td>";
              echo "<td>".$d['City']."</td>";
            }
            echo "<br>";
          ?>
        </tr>
      </table>
    </div>
  </section>
</body>
</html>