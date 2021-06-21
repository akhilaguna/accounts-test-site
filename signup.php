<?php
  include_once 'header.php';
?>
    <div>
    <h1>Sign Up</h1>
    <form action="signup.inc.php" method="POST">
        <table>
            <tr>
                <td>UserID</td>
                <td><input type="text" name="uid"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Re-enter Password</td>
                <td><input type="password" name="pass2"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit"></td>
            </tr>
        </table>
    </form>
    </div>
<?php
  include_once 'footer.php';
?>
  