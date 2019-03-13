<?php include 'header.php' ?>


<form action="authentication.php" method="post">
<label for="username">Username</label>
<input type="text" name="username" placeholder="Username" required><br>
<label for="password">Password</label>
<input type="password" name="password" placeholder="Password" required><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php include 'footer.php'; ?>