<?php
  include_once 'header.php';
?>
    <div>
    <h1>Sign Up</h1>
    <form action="includes/signup.inc.php" method="POST">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="name" placeholder="Full name..."></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="Email..."></td>
            </tr>
            <tr>
                <td>User ID:</td>
                <td><input type="text" name="uid" placeholder="Username..."></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" placeholder="Password..."></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="pwdrepeat" placeholder=" Re-enter Password..."></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Sign Up</button></td>
            </tr>
        </table>
    </form>
    </div>
<?php
  include_once 'footer.php';
?>
  