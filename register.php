<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account();

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Spotify</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
            <label for="loginUsername">Usernames</label>
            <input id="loginUsername" name="loginUsername" type="text" 
            placeholder="e.g your username"  require>
            </p>
            <p>
            <label for="loginPassword">Password</label>
            <input id="loginPassword" name="loginPassword" type="password" 
            require placeholder="Your password">
            </p>
            <button type="submit" name="loginButton">LOG IN</button>
        </form>

         <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
            <label for="username">Usernames</label>
            <input id="username" name="username" type="text" 
            placeholder="e.g your username" value="<?php getInputValue('username') ?>" require>
            </p>

               <p>
               <?php echo $account->getError(Constants::$firstNameCharacters); ?>

            <label for="firstName">First name</label>
            <input id="firstName" name="firstName" type="text" 
            placeholder="e.g napop" value="<?php getInputValue('firstName') ?>" require>
            </p>

               <p>
               <?php echo $account->getError(Constants::$lastNameCharacters); ?>

            <label for="lastName">Last name</label>
            <input id="lastName" name="lastName" type="text" 
            placeholder="e.g siri" value="<?php getInputValue('lastName') ?>" require>
            </p>

               <p>
               <?php echo $account->getError(Constants::$emailDoNotMatch); ?>
               <?php echo $account->getError(Constants::$emailInvalid); ?>

            <label for="email">Email</label>
            <input id="email" name="email" type="email" 
            placeholder="e.g ac@ac.com" value="<?php getInputValue('email') ?>" require>
            </p>
            <p>
            <label for="email2">Confirm email</label>
            <input id="email2" name="email2" type="email" 
            placeholder="e.g ac@ac.com" value="<?php getInputValue('email2') ?>" require>
            </p>

            <p>
            <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$passwordsNotAlphanumeric); ?>
            <?php echo $account->getError(Constants::$passwordsCharacters); ?>

            <label for="password">Password</label>
            <input id="password" name="password" type="password" 
            require placeholder="Your password">
            </p>

            <p>
            <label for="password2">Confirm Password</label>
            <input id="password2" name="password2" type="password" 
            require placeholder="Your password">
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>
        </form>

    </div>
    
</body>
</html>