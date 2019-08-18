

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Online Bank</title>
<link href="css/PageStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php include 'test.php' ?>



         <div class="logmainbox" style="width: 480px;">
        <form action="RegDB.php" method="POST">
            <h1>Sign Up Form</h1>
            <div class="inset">
                <table>
                    <tr>
                        <td><label for="Fname" class="Ltext">First Name</label></td>
                        <td>
                            <input type="text" name="Fname" id="Fname" class="loginput" >
                                       
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Lname" class="Ltext">Last Name</label></td>
                        <td><input type="text" name="Lname" id="Lname" class="loginput" >
                        </td>
                    </tr>
                    <tr>
   							<td id="attr" class="Ltext">Date of Birth : </td>
   							<td>
   								<input type="date" name="DOB" id="dob" min="1947-01-02" max="2050-01-02" required>
   							</td>
   						</tr>
      

 	                  <tr>
   							<td   class="Ltext">Gender : </td>
   							<td>
   								<div class="inline">
   									<input type="radio" name="Gender" value="male" style="width: auto" checked="checked">
   									<label>Male</label>
   								</div>
   								<div class="inline">
   									<input type="radio" name="Gender" value="female" style="width: auto">
   									<label>Female</label>
   								</div>
   							</td>
   						</tr>
                    <tr>
                        <td><label for="ifsc" class="Ltext">IFSC CODE</label></td>
                        <td><select name="ifsc" id="Email" class="ddlist">
                         <option value="BOGC234">BOGC234</option>
                        <option value="IB1232">IB1232</option>
                        <option value="WB6357">WB6357</option>

                  
                    
                </select></td>
                    </tr>
                    <tr>
                        <td><label for="Mnum" class="Ltext">Account Number</label></td>
                        <td><input type="text" name="Mnum" id="Mnum" class="loginput" ></td>
                    </tr>
                    <tr>
                        <td><label for="accstatus" class="Ltext">Account Status</label></td>
                        <td><select name="accstatus" id="accstatus" class="ddlist">
                        <option value="active">Active</option>
                        <option value="inactive">In-active</option>
                </select></td>
                    </tr>
                    <tr>
                        <td><label for="acctype" class="LText">Account Type</label></td>
                        <td><select name="acctype" id="acctype" class="ddlist">
                         <option value="salary">salary</option>
                        <option value="student">student</option>
                         <option value="savings">savings</option>
                        <option value="current">current</option>
                       
                </select>
                </td>
                    </tr>
                    <tr>
                        <td><label for="Uname" class="Ltext">Login ID</label></td>
                        <td><input type="text" name="Uname" class="loginput" id="Uname">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Password" class="Ltext">Password</label></td>
                        <td><input type="password" name="Pwd" id="Password" class="loginput">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Cpassword" class="Ltext">Re-enter Password</label></td>
                        <td><input type="password" name="Cpwd" id="Cpassword" class="loginput" ></td>
                    </tr>
                    <tr>
                        <td><label for="TrPassword" class="Ltext">Transaction Password</label></td>
                        <td><input type="password" name="TrPwd" id="TrPassword" class="loginput" >
                        </td>
                    </tr>
                    <tr>
                        <td><label for="TrCpassword" class="Ltext">Re-enter Password</label></td>
                        <td><input type="password" name="TrCpwd" id="TrCpassword" class="loginput" ></td>
                    </tr>
                </table>
            </div>
                    <input type="submit" name="submit" value="Register" style="margin-bottom:25px;margin-right: 25px;" class="loginput">
        </form>
    </div>
    </div>
    </div>
    </div>
<?php include'footer.php' ?>
</body>
</html>
