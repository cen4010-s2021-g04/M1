<?php
// rename to authenticate
$dbserver = "localhost";        // server name
$dbuser = "cen4010_s21_g04";    // username on server
$dbpass = "winter97wind24";     // password
$dbname = "cen4010_s21_g04";    // name of connecting database

// creates a connection to the database
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

// checks to see if we're connected to the sqldatabase
if (!$conn) // could also use mysqli_connect_errno()
{
    die("Failed to connect to database");
} 
else 
{
    //echo "Successful connection";
}

// creates an sql table if one is not already created
function createTable($conn, $table_name, $query) {
    $result = $conn->query("CREATE TABLE IF NOT EXISTS $name($query)");
    if (!result) die("Failed to connect to database");
    
    echo "Table '$name' created or a;ready exists.<br>";
}

// logs user out of current session
function destroySession() {
    _SESSION = array(); // array contating the users session information
    
    // because PHP uses cookies to manage user sessions we need to check if 
    // there is an already existing cookie that matchs the current session
    // and if so then force the browser to remove the cookie by setting the 
    // expiration date a time in the past and if not do nothing
    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time() - 2592000, '/');
    
    // destroys the current user session 
    session_destroy();
    
}

function register($conn) {
    if (!isset($_POST['NAME'], $_POST['EMAIL'], $_POST['PHONE'], 
               $_POST['DOB'], $_POST['PASSWORD']))
    {
        //exit('Please complete the registration form.');
    }
    
    if (empty($_POST['NAME']) || empty($_POST['EMAIL']) || empty($_POST['PHONE']) 
        || empty($_POST['DOB']) || empty($_POST['PASSWORD'])) 
    {
        exit('Please complete the registration form.');
    }
    
    // prevents SQL injections
    if ($stmt = $conn->prepare('SELECT id, password FROM login_test WHERE email = ?')) 
    {
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) 
        {
            echo 'This email is already taken. Please try another email or sign in.';  
        } else 
        {
            // registers new account
            if ($stmt = $conn->prepare('INSERT INTO login_test (name, email, phone, dob, password) VALUES (?, ?, ?, ?, ?)')) 
            {
                $passwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $_POST['NAME'], $_POST['EMAIL'], $_POST['PHONE'], $_POST['DOB'], $passwd);
                $stmt->execute();
                echo "Successfully logged a new user";
            } else 
            {
                // couldn't prepare staement
            }
            
        }
        
        $stmt->close();
    } else 
    { 
        // couldn't prepare staement
    }
    
    header("Location: login.php");
    $conn->close();
    die;
}


/*function loggedin($conn) {
    if (!isset($_POST['EMAIL'])) 
    {
        exit("Enter valid email.");
    }
    
    if (!isset($_POST['PASSWORD'])) 
    {
        exit('Enter a password.');
    }

    // prevents SQL injections
    
    if ($stmt = $conn->prepare('SELECT ID, e'))
}*/

?>