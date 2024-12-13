<?php 

    if(isset($_POST['add_stu'])){
        $id = $_POST['id']; // ​ប្រកាស់ variable ថ្មីឈ្មោះ $id , id ជា តម្លៃនៃ name នៅក្នុង input form
        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $age = $_POST['age'];

        if($id == "" || empty($id)){
            header('location:index.php?message=You need to fill id');
        }
    }

?>