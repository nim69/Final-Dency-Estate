  <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "u813153865_riviera", "Riviera7", "u813153865_riviera");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];

if(isset($_POST['esubmit'])){
	$to = "altayvenom@gmail.com";
	$subject = $subject;
	$message = $message;
	$from = $email;
	$headers = "From : $from";
	
	mail($to, $subject, $message, $headers);
	
	echo "Mail sent";
}

         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO riviera_inbox  VALUES ('$name',
            '$phone','$email','$subject','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $phone\n "
                . "$email\n $subject\n $message");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);











		
		header("Location: contact.html");
        ?>