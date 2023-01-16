<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <script>
            function validdateform()
            {
                var username= document.getElementById('username').value;
                var password =document.getElementById('password').value;
                if(username ==null || username=='')
                {
                    document.getElementById("errormessage").innerHTML='username is required';
                    return false;
                }
                if(password ==null || password=='')
                {
                    document.getElementById("errormessage").innerHTML='password  is required';
                    return false;
                }
                if(username.length < 4)
                {
                    document.getElementById("errormessage").innerHTML='username is too short';
                    return false;
                }
                if(password.length<6)
                {
                    document.getElementById("errormessage").innerHTML='Password must be at least 6 characters long.'; 
                 return false;  
                }
                return true;
                
            }
        </script>
        <style>
            #errormessage
            {
                color:red;
            }
        </style>
    </head>
    <body>
        <h2>Registration Form</h2>
        <p id="errormessage"></p>
        <form name="myform" method="POST" action="database.php" onsubmit="return validdateform()">
        <fieldset>
            <legend>Fill up your Detail</legend>
            <table>
                <tr>
                    <td><label >FirstName</label></td>
                    <td> <input type="text"name="FirstName" /></td>
                </tr>
                <tr>
                    <td><label> LastName</label></td>
                    <td> <input type="text"name="LastName" autofocus/></td>
    
                </tr>
                <tr>
                    <td><label >Nationality</label></td>
                    <td> <input type="text"name="Nationality" /></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td> <input type="text"name="Email"/></td>
                   <tr>
                   <td><label> Address</label></td>
                    <td> <input type="text"name="Address" autofocus/></td>
    
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td>
                        <input type="radio" name="gender"value="M">Male
                        <input type="radio" name="gender"value="F">Female
                    </td>
                </tr>
            </tr>
        </tr>
    </tr>
                <tr>
                <td>MobileNo</td>
               <td><input type="text" name="mobileno" id="mobileno" size="10"></td>
               </tr>
                           
                    <tr>
                        <td><label>Profile Pic</label></td>
                    <td>
                        <input type="file"name="profilepic">
                    </td>
                </tr>
                <tr>
                <td>Age</td>
               <td><input type="text" name="age" id="age"></td>
               </tr>
                    <tr>
                        <td>
                            <label>Username</label>
                        </td>
                        <td><input type="text"name="Username" id="username"></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label>
                        </td>
                        <td><input type="password"name="Password" id="password"></td>
                    </tr>
                    <tr>
                        
                        <td><input type="submit" value="login"> 
                    </tr>
            </table>
        </fieldset>
    </body>
</html>