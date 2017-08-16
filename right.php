        <!-- Right column -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3>Contact Us</h3>

                <div id="about-me">
                    <p><strong>Skills Point</strong></p>
                    <p>Contact: 9051182021</p>
                    <p>Website: skillspoint@web.com<br />
                    </p>
</div> <!-- /about-me -->

                                <!-- Category -->
                <h3 >Login</h3>
<div class="login" align="center" >
                <form name="form1" method="post" action="login.php">
                  <table width="100%" border="0">
                    <tr>
                      <td><div align="center"><strong>User Name</strong></div></td>
                    </tr>
                    <tr>
        			<td><div align="center"><span id="sprytextfield1">
                        <label>
                        <input type="text" name="txtUser" id="txtUser">
                        </label><br />
                      	<span class="textfieldRequiredMsg">Enter username</span></span>
          				<label></label></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><strong>Password</strong></div></td>
                    </tr>
                    <tr>
                	<td><div align="center"><span id="sprytextfield2">
                        <label>
                        <input type="password" name="txtPass" id="txtPass">
                        </label><br />
                      	<span class="textfieldRequiredMsg">Enter password</span></span></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><strong>User Type</strong></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
                      	</label></div></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="Forget.php"><strong>Forget Password? </strong></a></div></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

               </div> <!-- /col-in -->
</div> <!-- /col -->
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
