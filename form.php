<?
 
        if (isset($_POST['btn-confirm'])) {
 
            $firstName= $_POST['fName'];
            $lastName = $_POST['lName'];
            $submit = $_POST['submit-btn'];
            if ($check=='on') $check = 1;
 
 
            if ($check == 1 && empty($partner)) {
 
               $check = true;
            }
        }
 
        ?>