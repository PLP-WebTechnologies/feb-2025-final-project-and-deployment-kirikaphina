<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGAL TECH</title>
    <link rel="icon" href="image/kutrrh.jpg" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 22px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 100px;
        }
        .logo h1 {
            margin: 10px 0;
            font-size: 24px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
            padding: 10px;
        }
        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"] {
            width: 100%;
            padding: 10px 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group .bi {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            pointer-events:visible;
        }
        .form-group .bi-person-fill {
            left: 15px;
        }
        .form-group .bi-envelope-fill {
            left: 15px;
        }
        .form-group .bi-lock-fill {
            left: 15px;
        }
        .form-group .toggle-password {
            right: 15px;
            cursor: pointer;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        .link {
            text-align: center;
            margin-top: 10px;
            color: black;
            cursor: pointer;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techlegal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";
$formType = "login"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id']; 
                $_SESSION['username'] = $user['username']; 
                header("Location: chatbot.php");
                exit(); 
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "User not found.";
        }
        $stmt->close();
    } elseif (isset($_POST['signup'])) {
        $formType = "signup";
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password !== $confirm_password) {
            $error = "Passwords do not match.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                $_SESSION['user_id'] = $stmt->insert_id; 
                $_SESSION['username'] = $username;
                header("Location: chatbot.php");
                exit(); 
            } else {
                $error = "Error: " . $stmt->error;
            }
            $stmt->close();
        }
    }
}
$conn->close();
?>


<div class="container" id="login-container" style="display: <?php echo ($formType === 'login') ? 'block' : 'none'; ?>;">
    
    <h6 style="text-align: center;">Login</h6>
    <form id="login-form" method="post" action="">
        <div class="form-group">
            <i class="bi bi-person-fill"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <i class="bi bi-lock-fill"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <i class="bi bi-eye toggle-password" onclick="togglePassword()"></i>
            
        </div>
        <div class="link">
    <a href="forgot_password.php">Forgot Password?</a>
</div>

        <div class="form-group">
            <input type="submit" name="login" value="Login">
        </div>
        <div class="error"><?php echo ($formType === "login") ? $error : ""; ?></div>
    </form>
    <div class="link" id="signup-link">Create an account? Signup</div>
</div>

<div class="container" id="signup-container" style="display: <?php echo ($formType === 'signup') ? 'block' : 'none'; ?>;">
    
    <h6 style="text-align: center;">Signup</h6>
    <form id="signup-form" method="post" action="">
        <div class="form-group">
            <i class="bi bi-person-fill"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <i class="bi bi-envelope-fill"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <i class="bi bi-lock-fill"></i>
            <input type="password" name="password" id="signup-password" placeholder="Password" required>
            <i class="bi bi-eye toggle-password" onclick="togglePassword('signup-password')"></i>
        </div>
        <div class="form-group">
            <i class="bi bi-lock-fill"></i>
            <input type="password" name="confirm_password" id="signup1-password" placeholder="Confirm Password" required>
            <i class="bi bi-eye toggle-password" onclick="togglePassword('signup1-password')"></i>
        </div>
        <div class="form-group">
            <input type="submit" name="signup" value="Signup">
        </div>
        <div class="error"><?php echo ($formType === "signup") ? $error : ""; ?></div>
    </form>
    <div class="link" id="login-link">Already have an account? SignIn</div>
</div>

<script>
    document.getElementById("signup-link").addEventListener("click", function () {
        document.getElementById("login-container").style.display = "none";
        document.getElementById("signup-container").style.display = "block";
    });

    document.getElementById("login-link").addEventListener("click", function () {
        document.getElementById("signup-container").style.display = "none";
        document.getElementById("login-container").style.display = "block";
    });

    function togglePassword(id = 'password') {
        const passwordField = document.getElementById(id);
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

</body>
</html>