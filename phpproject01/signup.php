<?php
include_once("header.php");
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name ..."></br>
        <input type="text" name="email" placeholder="Email..."></br>
        <input type="text" name="uid" placeholder="Username..."></br>
        <input type="text" name="pwd" placeholder="Password.."></br>
        <input type="text" name="pwdrepeat" placeholder="Repeat password ..."></br>
        <button type="submit" name="submit">Sign up</button>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!<p>";
        }
        if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!<p>";
        }
        if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!<p>";
        }
        if ($_GET["error"] == "passwordsdonotmatch") {
            echo "<p>Passwords don't match!<p>";
        }
        if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!<p>";
        }
        if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!<p>";
        }
        if ($_GET["error"] == "none") {
            echo "<p>You have signed up!<p>";
        }
    }
    ?>
</section>

<?php
include_once("footer.php")
?>