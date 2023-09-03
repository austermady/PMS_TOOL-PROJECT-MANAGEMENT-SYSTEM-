<?php
session_start();
if (empty($_SESSION['email'])) {
?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <link rel="stylesheet" type="text/css" href="../css.css">
    <link rel="stylesheet" href="./index.css" />
    <script src="https://kit.fontawesome.com/5099b17d5e.js" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      body {
        background-image: url(background.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
    <title>Project Management System</title>
  </head>
  <div>

    <body>
      <table width="100%" cellspacing="00" cellpadding="00">
        <tr class="glass">
          <th width="7%" scope="col">&nbsp;</th>
          <th width="12%" scope="col"><img src="images/logo1.png" alt="LOGO" /></th>
          <th width="62%" scope="col">
            <font size="8" color="whitesmoke">Project Managenent System</font>
          </th>
          <th width="13%" scope="col">
            <font size="5" color="White">&nbsp;</font>
          </th>
          <th width="6%" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><br /><br />
            <div class="glass" style="width:50%;margin-left:24%;margin-top:100px;border:1px solid black; margin: bottom 100px;">
              <br><br>
              <form name="login" action="chk.php" method="post">

                <table width="100%" cellspacing="02" cellpadding="05">
                  <tr>
                    <th colspan="2" scope="col">
                      <font size="6">LOGIN</font>
                    </th>
                  </tr>
                  <tr>
                    <td align="right">
                      <font size="5">ID&nbsp;:&nbsp;</font>
                    </td>
                    <td><input style="height: 20px; font-size: 15px;" type="text" name="id" /><br />
                    </td>
                  </tr>
                  <tr>
                    <td align="right">
                      <font size="5">Password&nbsp;:&nbsp;</font>
                    </td>
                    <td><input style="height: 20px; font-size: 15px;" type="password" name="pass" /></td>
                  </tr>
                  <tr>
                    <td align="right">
                      <font size="5">Login As&nbsp;:&nbsp;</font>
                    </td>
                    <td>
                      <select name="role" style="width: 13em; height: 2em; font-size: 15px;">
                        <option value="Student">Student</option>
                        <option value="Faculty">Faculty</option>
                        <option value="Admin">Admin</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><input type="submit" style="width: 4em;  height: 2em; font-size: 20px;" name="register" value="Submit" /></td>
                  </tr>
                </table>

                <br />
                &nbsp;
              </form>
            </div>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <footer id="footer">
        <div id="joinNowContainer">
          <div id="text">
            <span class="lineH">Manage your workplace!</span><br />
            <span class="lineF">Explore the latest trends and innovations in tech, one byte at a
              time.</span>
          </div>
        </div>
        <div id="slideContainer">
          <div id="slide1">
            <div id="desc">
              <div id="details">
                This Project of "Project Management System" is created as an assignment work. <br>
                This assignment is created for BHARAT INTERN. <br>
                Want To Connect With Me!! <br>
                click on Icons Below.....<br>
              </div>
            </div>
            <div id="socialBtnContainer">
              <a href="https://github.com/austermady"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.instagram.com/austermady"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/austermady"><i class="fa-brands fa-linkedin"></i></a>
              <a href="mailto: singh.bhupendra2612@gmail.com"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <div id="feedbackBtnContainer">
              <button type="submit" id="feedbackBtn">Share your feedback!</button>
            </div>
          </div>

          <div id="slide2">
            <div id="feedbackFormContainer">
              <button id="feedbackBackBtn">
                <i class="fa-solid fa-backward"></i>
              </button>
              <div id="feedback">
                <div id="title">Write your Feedback!</div>
                <textarea id="feedbackContent" placeholder="Write here..."></textarea>
                <button id="shareFeedback" type="submit">Share</button>
              </div>
            </div>
          </div>
        </div>
        <div id="developed">developed by @bhupendra</div>
      </footer>
    </body>
  </div>

  </html>

<?php
} else {
  header("location:Admin.php");
}

?>