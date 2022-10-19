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
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="My name is Bobby Fabie. I am an IT Help Desk Professional. I also provide services such as Technical Support, Social Media Management and Marketing, SEO, and Web Development">
    <meta name="keywords" content="Filipino Freelancer, IT Help Desk Professional, Technical Support Professional, Social Media Manager, Social Media Engager, Social Media Marketer, Virtual Assistant, SEO Specialist, Web Developer">
    <title>Send Message</title>
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
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "id19690635_bfabie", "Fm9y}GG9*xz#Uqx\\", "id19690635_bobbyfabie");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        $timestmp = date("d/m/Y H:i:s");
      
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Social  VALUES ('$name','$email','$message','$timestmp')";
        

        if($message != ""){
        if(mysqli_query($conn, $sql)){
            
            echo "<br/><h3>Your message has been sent."
                . "&nbsp;I will reply back to you as soon as possible.<br/><br/>Thank you. Have a good day!</h3>";
            
        } else{
            echo "<br/><h3>ERROR: <br/><br/>Hush! Sorry there seems to be an error. You may send your message at bobby.fabie@gmail.com.<br/>You can close this tab now.</h3>";
        }
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>