

<?php

if (isset($_POST['login'])) {
    if (empty($_POST['email'])) {
        $errors['email'] = 'email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM user WHERE  email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: dashboard.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong email / password";
            }


        } else {
        	$password_from_User =$password_from_DB;
        	$email_from_user = $email_from_DB;
		
				if ($password_from_DB == $password_from_User && $email_from_DB == $email_from_user)  {
				header("Location: dashboard.php");
				die();
				
				}

				else{
					echo "Invalid email or password ";
					die();
				}
        //     $_SESSION['message'] = "Database error. Login failed!";
        //     $_SESSION['type'] = "alert-danger";
        // }
    }
}
}

?>