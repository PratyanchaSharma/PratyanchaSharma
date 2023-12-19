<html>
    <head>
        <title>logoutpage</title>
        </head>
        <?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Get the current timestamp
    $timestamp = time();

    // Get the time difference between current timestamp and session start timestamp
    $timeDiff = $timestamp - $_SESSION['start'];

    // Check if the session has expired (100 seconds in this example)
    if ($timeDiff > 1000) {
        // Clear the session data
        session_unset();
        session_destroy();

        // Redirect the user to the login page with a logout message
        header("Location: index.html?logout=1");
        exit();
    } else {
        // Refresh the start timestamp for the session
        $_SESSION['start'] = $timestamp;
    }
} else {
    // If the user is not logged in, redirect them to the login page
    header("Location: register2.html");
    exit();
}

// User logout code
if (isset($_GET['logout'])) {
    // Clear the session data
    session_unset();
    session_destroy();

    // Redirect the user to the login page with a logout message
    header("Location: index.html?logout=1");
    exit();
}

// User login code
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Perform your login validation here

    // If login is successful, set session variables and redirect
    $email = $_POST['email'];
    $_SESSION['name'] = $email;
    $_SESSION['start'] = time();

    // Redirect the user to the dashboard or any other page
    header("Location: dashboard.php");
    exit();
}
?>

<!--?php
        {
            $data= mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['name'] = $data['admin_username'];
            $_SESSION['start']=time();
            $_SESSION['expire']= $_SESSION['start'] + 100;
            header("location: eventdmin.php");
        }
?-->
<!--?php
// session_start();
// unset($_SESSION['email']);
// session_abort();
// header('location:eventdmin.html')

//session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
    // Clear the session data
   // $_SESSION = array();
    session_destroy(); // Destroy the session

    // Redirect the user to the login page
    header("Location: register2.html");
    exit();
} else {
    // If the user is not logged in, redirect them to the login page
    header("Location: index.html");
    exit();
}

?-->
<html>