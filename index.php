<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300, 400" rel="stylesheet">
<title> Musicians Tracking DataBase </title>
<style>
* {
	font-family: 'Roboto';
	margin: 0;
  padding: 0;
}

.container {
  background: url(home.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  border-style: none;
}

.textwrapper h1 {
  font-style: bold;
  font-size: 350%;
  padding-bottom: 10px;
}

.textwrapper {
    padding-top: 17.5%;
    padding-bottom: 23%;
    padding-left: 20%;
    padding-right: 20%;
    border-style: none;
}

.button {
    background-color: #F9F9F9;
    border: none;
    color: black;
    text-align: center;
    display: inline-block;
    margin-top: 8px;
    margin-left: 8px;
    padding: 14px 40px;
    border-radius: 2px;
    text-decoration: none;
    font-size: 16px;
    transition-duration: 0.3s;
}

.button:hover, .first_button:hover {
  background-color: #e7e7e7;
  -webkit-transform:scale(1.05); /* Safari and Chrome */
  -moz-transform:scale(1.05); /* Firefox */
  transform:scale(1.05);
}

.first_button {
	background-color: #ffffff;
    border: none;
    color: black;
    text-align: center;
    display: inline-block;
    margin-top: 5px;
    margin-left: 15%;
    padding: 14px 40px;
    border-radius: 2px;
    text-decoration: none;
    font-size: 16px;
    transition-duration: 0.3s;
}

.transbox {
  background-color: #ffffff;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
  padding: 40px 40px;
  padding-left: 45px;
}

</style>
</head>
<body>
<div class="container">
    <div class="textwrapper">
      <div class="transbox">
        <h1>Musicians Tracking Database</h1>
        <h3>A new way to track the places that you've been, and find artists that you know and love! </h3>
      </div>
      <a href="userTasks.php" class="first_button">I am an User</a>
      <a href="venueTasks.php" class="button">I am a Venue</a>
      <a href="artistTasks.php" class="button">I am an Artist</a>
    </div>
</div>
</body>
</html>