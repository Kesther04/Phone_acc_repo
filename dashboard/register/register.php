<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css" media="all">
    <link rel="stylesheet" href="../../css/login_rep.css" media="all">
    <title>SIGN UP</title>
</head>

<body>
    <div class="form-sec">
            
        <h1>REGISTRATION FORM</h1>
        
        <form name="reg-form" action="backend_reg_admin.php" method="post">
        
        <table>
        
            <tr>
                <td><span>FULLNAME:</span><input type="text" value="ADMIN" name="full" readonly required></td>
            </tr>

            <tr>
                <td>
                    <span>GENDER:</span>
                    <select name="gender">
                        <option></option>
                        <option>MALE</option>
                        <option>FEMALE</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td> <span>EMAIL ADDRESS:</span><input type="text"  name="email" required></td>
            </tr>

            <tr>
                <td>
                    
                <span>PASSWORD:</span>
                <span>
                    
                    <input type="password"  name="pass" id="p-p-p" onclick="record()"  required>
                </span>
                
                <span id="p-a-t">
                    <input type="button" value="SHOW" onclick="login()" id="aaa"> 
                    <input type="button" value="SHOW" onclick="lob()" id="bbb">
                </span>
                </td>
            <script src="../../js/reed.js"></script>
            </tr>

            <tr>
                <td><span>PHONE NUMBER:</span><input type="text"  name="pno"  required></td>
            </tr>

        </table>

        <div class="btn-div">
            <button class="btn">REGISTER</button>
        </div>
        
        </form>
    
    </div>

</body>

</html>