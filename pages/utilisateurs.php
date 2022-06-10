<h1>Liste des utilisateurs</h1>
<br>
<table class="table table-primary table-hover container">
    <thead>
        <tr>
            <th>Nom d'utilisateur</th>
            <th>Mot de passe</th>
            <th>Suppression</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // print_r($users);
        foreach ($users as $users) {
            echo "<tr>";
            echo "<td>" . $users['name'] . "</td><td>" . $users['password'] . "</td>";
            // echo "<td> <a href='index.php?page=deleteUser&id=".$users['id']."'>Delete</a> </td>";
            echo "<td> <a href='index.php?page=utilisateurs&action=delete&id=".$users['id']."'>Delete</a> </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>