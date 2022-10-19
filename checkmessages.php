<!DOCTYPE html>
<html>
 
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-03QBFHJDYE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-03QBFHJDYE');
    </script>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="My name is Bobby Fabie. I am an IT Help Desk Professional. I also provide services such as Technical Support, Social Media Management and Marketing, SEO, and Web Development">
    <meta name="keywords" content="Filipino Freelancer, IT Help Desk Professional, Technical Support Professional, Social Media Manager, Social Media Engager, Social Media Marketer, Virtual Assistant, SEO Specialist, Web Developer">
    <title>Check My Messages</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="favicon.png"/>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
 
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <center>

        <?php
        $pass1 = $_REQUEST['pass2'];
        $pass2 = $_REQUEST['pass1'];


        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "id19690635_bfabie", $pass2, "id19690635_bobbyfabie");
        // Check connection
        if ($conn->connect_error) {
          die("Oops!");
        }

        $sql = "SELECT * FROM Social";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<p class='msg-result'>Name: " . $row["name"].
            "<br/>Email: " . $row["email"].
            "<br/>Message: " . $row["message"].
            "<br/>Time: " . $row["timestmp"]. "</p><br/>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>

    </center>
    <center>
      <form action="clearmessages.php" method="post">
        <div class="row">
          <div class="col-lg-6 col-12">
            <input type="pass1" class="fc1" name="pass1" placeholder="" id="pass1">
          </div>
          <div class="ml-lg-auto col-12">
            <input type="submit" class="fc2 submit-btn" value="CLICK HERE TO CLEAR ALL MESSAGES">
          </div>
        </div>
      </form>
    </center>
</body>
 
</html>