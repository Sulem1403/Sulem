<?php
    $FullName = $_POST['FullName'];
    $UID = $_POST['UID'];
    $Section = $_POST['Section'];
    $College/University = $_POST['College/University'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['Phone Number'];
    $TeamMember = $_POST['TeamMember'];
    $Participation = $_POST['Participation'];

    //Database connection
    $conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(FullName, UID, Section, College/University, Email, PhoneNumber, TeamMember, Participation) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiss", $FullName, $UID, $Section, $College/University, $Email, $PhoneNumber, $TeamMember, $Participation);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    
?>