<form action="save_name.php" method="post">
    <input type="text" name="name" placeholder="Unesite ime">
    <input type="text" name="sport" placeholder="Unesite naziv sporta">
    <button type="submit">Save</button>
</form>

<?php foreach ($result as $row): ?>
    <?php echo $row['name']." ".$row['sport']; ?> <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> 
    <a href="update.php?id=<?php echo $row['id']; ?>">Update</a><hr>
<?php endforeach; ?>
