
<?php
 $username = "";
 $email = "";
 $password = "";
 $password_1 = "";
 $password_2 = "";
 $errors = array();

$password = md5($password_1);
try {
    $db = new PDO('mysql:host=localhost;dbname=registration', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO USERS (usernmae, email, password)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $db->query($sql);
    echo "New record created successfully";
} catch (PDOException $errors) {
    echo 'Message: sorry...' . $errors->getMessage();
    exit();
}

//if(isset($_POST['register'])) {
//
//    if (empty($username)) {
//        array_push($errors, 'Username is required');
//    }
//    if (empty($email)) {
//        array_push($errors, 'Email is required');
//    }
//    if (empty($password_1) || empty($password_2)) {
//        array_push($errors, 'Password is required');
//    }
//    if (empty($password_1 != $password_2)) {
//        array_push($errors, 'The two passwords do not match');
//    }
//    if (count($errors) == 0) {
//        $password = md5($password_1);
//        try {
//            $db = new PDO('mysql:host=localhost;dbname=registration', 'root', '');
////            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////            $db->execute(array($username, $email, $password));
//            $username = 'Haruna';
//            $password = '12345';
//            $email = 'haruna@gmail.com';
//            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $sql = "INSERT INTO USERS (usernmae, email, password)
//    VALUES ('John', 'Doe', 'john@example.com')";
//            // use exec() because no results are returned
//            $db->query($sql);
//            echo "New record created successfully";
//        } catch (PDOException $errors) {
//            echo 'Message: sorry...' . $errors->getMessage();
//            exit();
//        }
//
//        echo 'Connected to MySQL';
//    }
//}

?>