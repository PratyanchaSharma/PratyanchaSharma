Copy code
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'test1';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: register2.html?error=User Name is required");
        exit();
    } elseif (empty($password)) {
        header("Location: register2.html?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $password) {
                if ($row['role'] === 'admin') {
                    // Admin login
                    session_start();
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = 'admin';
                    $_SESSION['email']=$email;
                    $_SESSION['Eid']=$Eid;
                    header("Location: eventdmin.php");
                    exit();
                } else {
                    // Regular user login
                    session_start();
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = 'user';
                    $_SESSION['email']=$email;
                    $_SESSION['Eid']=$Eid;
                    echo"<script>alert('Login Succesfully');</script>" ;
                    header("Location: userdashboard.php");
                    exit();
                }
            } else {
                echo"<script>alert('Incorrect username or password');</script>" ;
                header("Location: register2.html?error=Incorrect username or password");
                exit();
            }
        } else {
            echo"<script>alert('Incorrect username or password');</script>" ;
            header("Location: register2.html?error=Incorrect username or password");
            exit();
        }
    }
} else {
    header("Location: register2.html");
    exit();
}
?>
