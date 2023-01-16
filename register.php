<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <style>
            body{
            background-color:rgb(240, 219, 219);
            }
            h2{
                color:blue;
                font-size: 24px;
                font-family:Georgia, 'Times New Roman', Times, serif;

            }
        </style>
    </head>
    <body>
        <h2>Registration Form</h2>
        <fieldset>
            <legend>Fill up your Detail</legend>
            <table>
                <tr>
                    <td><label >First Name</label></td>
                    <td> <input type="text"name="First Name" /></td>
                </tr>
                <tr>
                    <td><label> Last Name</label></td>
                    <td> <input type="text"name="Last Name" autofocus/></td>
    
                </tr>
                <tr>
                    <td><label >Nationality</label></td>
                    <td> <input type="text"name="Nationality" /></td>
                </tr>
                <tr>
                    <td><label>Email Address</label></td>
                    <td> <input type="text"name="Email Address"/></td>
                    <tr>
                        <td><label>State</td>
                            <td>
                        <select name="State">
                            <option>Select your state</option>
                            <option value="1">Province 3</option>
                            <option value="4">Province 4</option>
                            <option value="2">Province 2</option>
                            <option value="1">Province 1</option>
                            <option value="7">Province 7</option>
                        </select>
                    </td>
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
        <td><label>Interests</label></td>
        <td>
            <input type="checkbox" name="interest[]"value="Hiking">Coding
            <input type="checkbox" name="interest[]"value="Picnic">Hacking
            <input type="checkbox" name="interest[]"value="Swimming">Developer
            <input type="checkbox" name="interest[]"value="all">All 
        </td>
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
                        <td>
                            <label>Username</label>
                        </td>
                        <td><input type="text"name="Username"></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label>
                        </td>
                        <td><input type="password"name="Password"></td>
                    </tr>
                    <tr>
                        
                        <td><button type="submit"name="Submit">Submit</button></td>    
                    </tr>
            </table>
        </fieldset>
    </body>
</html>