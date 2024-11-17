<style>
  form {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }

  legend{
    font: 1em sans-serif;
  }

  h5{
    font: 1em times-new-roman;
  }

  label {
    font: 1em helvetica;
    display: inline-block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  label + input[type="text"], label + input[type="email"], label + input[type="tel"] {
    margin-top: 1px;
  }

  input[type="text"], input[type="email"], input[type="tel"] {
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus {
    border-color: #aaa;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #3e8e41;
  }

  form > * {
    margin-bottom: 20px;
  }

  form > label:last-child {
    margin-bottom: 30px;
  }
</style>

<form method="post" action="2insinfo.php">
  <legend> <CENTER> <h2><B> STUDENT'S INFORMATION </B></h2> </CENTER></legend>
  <h5> Kindly submit your correct information according to the instructions mentioned.</h5>
  <h5>
  <label for="firstName">First Name</label>
  <input type="text" id="firstName" name="firstName" placeholder="First Name">

  <label for="middleName">Middle Name</label>
  <input type="text" id="middleName" name="middleName" placeholder="Middle Name">

  <label for="lastName">Last Name</label>
  <input type="text" id="lastName" name="lastName" placeholder="Last Name">

  <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="Email">

  <label for="phoneNumber">Personal Number</label>
  <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">

  <label for="address">Address</label>
  <input type="text" id="address" name="address" placeholder="Address">

  <label for="motherName">Mother's Name</label>
  <input type="text" id="motherName" name="motherName" placeholder="Mother's Name">

  <label for="motherPhoneNumber">Mother's Number</label>
  <input type="tel" id="motherPhoneNumber" name="motherPhoneNumber" placeholder="Mother's Phone Number">

  <label for="fatherName">Father's Name</label>
  <input type="text" id="fatherName" name="fatherName" placeholder="Father's Name">

  <label for="fatherPhoneNumber">Father's Number</label>
  <input type="tel" id="fatherPhoneNumber" name="fatherPhoneNumber" placeholder="Father's Phone Number">

  <input type="submit" value="Submit">
</h5>
</form>

