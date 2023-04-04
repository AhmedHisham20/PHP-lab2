<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h5 style="color: red">* Required fieled</h5>
    <table>
        <form action="<?php $_PHP_SELF ?>" method="post">
            <tr>
                <td>Name : </td>
                <td><input type="text" name="name"> <span style="color: red">*</span></td>
            </tr>
            <tr>
              <td> Email :</td>
              <td><input type="text" value="" name="email"> <span style="color: red">*</span></td>
            </tr>
             <tr>
                <td> Group : </td>
                <td><input type="text" name="group"></td> 
            </tr>
            <tr>
                <td> Class details :</td> 
                <td> <textarea name="details" rows="5" cols="30"></textarea> </td>
            </tr>
            <tr>
                <td> Gender : </td>
                <td> <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female <span style="color: red">*</span> </td>
            </tr>
            <tr>
                <td> <label for="course">Select courses :</label></td>
                <td> <select name="courses[]" id="course" multiple="multiple">
                <option value="PHP">PHP</option>
                <option value="Java Script">Java Script</option>
                <option value="Html">Html</option>
                <option value="Css">Css</option>
                <option value="Mysql">Mysql</option>
                </select>
                </td>
            </tr>
            <tr>
                <td> Agree : </td>
                <td> <input type="checkbox" name="agree"> <span style="color: red">*</span> </td>
            </tr>

            <tr><td><input type="submit" name="submit"></td></tr>
            
    </form>
    </table>
    <h2>Your given values are as :</h2>

<?php 
    // print_r($_POST);
    if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["agree"]) ) {
    echo "Name :". $_POST['name'] . "<br />";
    echo "Email :". $_POST['email'] . "<br />";
    echo "Group :". $_POST['group'] . "<br />";
    echo "Class details :". $_POST['details'] . "<br />";
    echo "Gender :". $_POST['gender'] . "<br />";
    }
    if(isset($_POST['courses'])){
        echo "your courses are :";
        foreach($_POST['courses'] AS $value){
            echo $value;
        }
    }


?>
</body>
</html>