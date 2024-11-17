<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  color: #333;
  background-color: #f9f9f9;
  height: 100vh;
  margin: 0;
  width: 100vw;
}

.container {
  height: 100vh;
  width: 100vw;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
  width: 100%;
}

.header h1 {
  margin: 0;
}

.content {
  padding: 20px;
  flex: 1;
}

.success-message {
  color: #2ecc71;
  font-size: 18px;
  margin-bottom: 20px;
}

.dashboard-links {
  margin-bottom: 20px;
}

.dashboard-links a {
  display: inline-block;
  margin-right: 10px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn-primary {
  background-color: #4CAF50;
  color: #fff;
}

.btn-secondary {
  background-color: #03A9F4;
  color: #fff;
}

.btn-tertiary {
  background-color: #FF9800;
  color: #fff;
}

.dashboard-stats {
  margin-bottom: 20px;
}

.dashboard-stats h3 {
  margin-top: 0;
}

.dashboard-stats ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.dashboard-stats li {
  margin-bottom: 10px;
}

.dashboard-stats li::before {
  content: "\2022";
  font-size: 18px;
  color: #4CAF50;
  margin-right: 10px;
}

.dashboard-widgets {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-bottom: 20px;
}

.widget {
  width: 48%;
  margin: 10px;
  padding: 35px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

</style>

<div class="container">
  <div class="header">
    <h1>Dashboard</h1>
  </div>
  <div class="content">
    <h2 class="success-message">Thank you for submitting. Your information has been recorded.</h2>
    <div class="dashboard-links">
      <a href="#" class="btn btn-primary">About School</a>
      <a href="#" class="btn btn-secondary">Edit Profile</a>
      <a href="#" class="btn btn-tertiary">Logout</a>
    </div>
    <div class="dashboard-stats">
      <h3>Recent Activities</h3>
      <ul>
        <li>Inter-house Quiz Competition</li>
        <li>Inter-school Literature Contest</li>
        <li>Inter-school Swimming Competition</li>
      </ul>
    </div>

    <div class="dashboard-widgets">
      <div class="widget">
        <h3>Facilities at KWS</h3>
        <ul>
          <li>Transportation all over Nepal. <br> (TnC may apply)</li>
          <li>Separate hostels for both genders.<br></li>
          <li>Food and Beverages twice a day.<br> </li>
        </ul>
      </div>

      <div class="widget">
        <h3>Scholarships Available</h3>
        <ul>
          <li>Academic Performance <br> (3.7 GPA and higher in SEE).</li>
          <li>Extra-curricular Performance <br> (TnC may apply).</li>
          <li>Co-curricular Performance <br> (TnC may apply).</li>
        </ul>
      </div>
  </div>
    
  <div class="contact">
  <h3>Contact Us</h3>
      </center>
      <hr>
      <ul>
        <li>Reception- 011669876</li>
        <li>Account- 9841312145</li>
        <li>PCD- 011661234</li>
      </ul>
      <br>
</div>