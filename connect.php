<?php
    mysqli_report(MYSQLI_REPORT_STRICT);


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contactDetails = $_POST['contactDetails'];
    $intersts = $_POST['interests'];
    $status = $_POST['status'];
    $documentNumber = $_POST['documentNumber'];

    $conn = new mysqli('localhost', 'Tim Kang', 'Aa!09080', 'register');
    

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(firstName, lastName, contactDetails, interests, status, documentNumber)
            values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $firstName, $lastName, $contactDetails, $intersts, $status, $documentNumber);
        $stmt->execute();
        echo "registration successful";
        $stmt->close();
        $conn->close();
    }
    // dskt--FindYourTribeofWarriorWives-ASafeandEffectiveMatchingSystem
?>
