<?php
  include_once 'header.php';
?>
    <div>
    <h1>Log In</h1>
    <form action="includes/login.inc.php" method="POST">
        <table>
            <tr>
                <td>User ID or Email:</td>
                <td><input type="text" name="uid" placeholder="Username/Email..."></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" placeholder="Password..."></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Log In</button></td>
            </tr>
        </table>
    </form>
    </div>
<?php
  include_once 'footer.php';
?>
  