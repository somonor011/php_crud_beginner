<?php 
    
    include("dbcon.php");

    if(isset($_POST['add_stu'])){
        $id = $_POST['id']; // ​ប្រកាស់ variable ថ្មីឈ្មោះ $id , id ជា តម្លៃនៃ name នៅក្នុង input form
        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $age = $_POST['age'];

        if (empty($id)) {  
            header('Location: index.php?message=You need to fill id');  
            exit(); // Exit after redirecting  
        } else {  
            // Use single quotes for values in the SQL query  
            $query = "INSERT INTO `tbl_crud_beginner` (`id`, `frist_name`, `last_name`, `age`) VALUES ('$id', '$fName', '$lName', '$age')";  
    
            $result = mysqli_query($connection, $query);  
    
            if (!$result) {  
                echo "Error: " . mysqli_error($connection); // Display error if query fails  
            } else {  
                header('Location: index.php?msg_insert=Record added successfully');  
                exit(); // Exit after redirecting  
            }  
        }  
    }
mysqli_close($connection);
?>