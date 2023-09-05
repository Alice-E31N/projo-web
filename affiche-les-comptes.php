<?php
require "session.php";  
$host = 'localhost';
$dbname = 'bdd_compte';
$username = 'root';
$password = '';
  
$stmt1 = new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password);
$stmt = $stmt1->query("select * from bdd_comptes;");
?>

<!DOCTYPE html>
<html>
<head>Affichage de la table des comptes</head>
<body>
 <h1>Liste des comptes</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Nom</th>
       <th>Password ?</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch()) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['nom']); ?></td>
       <td><?php echo htmlspecialchars($row['password']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>