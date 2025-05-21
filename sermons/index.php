<?php
$servername = "localhost";
$username = "pceabara_root"; 
$password = "0ffo[2LJY5)Wz8"; 
$database = "pceabara_pcea";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Fetch the link
$query = "SELECT link FROM video_link WHERE id = 1";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$video_link = $row['link'];
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PCEA BARAKA CHURCH - Sermons</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="styles.css">

    <!-- script
    ================================================== -->
    

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.png">
    <link rel="manifest" href="site.webmanifest">

    <style type="text/css">

        .page-content .row{
            max-width: none;
        }
        .event-content {
          margin-top: 3rem;
        }
        .responsive-video {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio (height / width * 100) */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            margin-bottom: 2rem;
        }

        .responsive-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .page-content {
          padding-top: 3rem;
          padding-bottom: 6rem;
          background-color: #ffffff;
        }

        .event-content{
            max-width: 1900px;
        }

        .progress {
            width: 200px; /* Set a specific width for the progress bar */
            height: 20px;
            background-color: #f3f3f3;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: inline-block; /* Make the progress bar inline */
            margin-left: 10px; /* Add some space between the text and the progress bar */
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background-color: #4caf50;
            border-radius: 5px;
            transition: width 0.4s ease;
        }

        #progress-text {
            font-size: 14px;
            font-weight: bold;
        }

        .overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.7);
          color: white;
          font-size: 2em;
          font-weight: bold;
          display: flex;
          align-items: center;
          justify-content: center;
          text-align: center;
          z-index: 1;
        }


        /* Additional height control for desktop view */
        @media (min-width: 568px) {
            .responsive-video {
                height: 70vh; /* 70% of the viewport height */
                padding-bottom: 0; /* Remove the padding-bottom as height is set */
            }
        }

        @media (min-width: 1280px) {
            
        .progress {
            width: 90%; /* Set a specific width for the progress bar */
            height: 20px;
            background-color: #f3f3f3;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: inline-block; /* Make the progress bar inline */
            margin-left: 10px; /* Add some space between the text and the progress bar */
        }
        }
    </style>

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
        <?php include 'header.html'; ?>

    <!-- end s-header -->


    <!-- page header
    ================================================== -->
    <section class="page-header page-header--events">

        <div class="gradient-overlay"></div>
        <div class="row page-header__content">
            <div class="column">
                <h1>Sermons</h1>
            </div>
        </div>

    </section> <!-- end page-header -->


    <!-- page content
    ================================================== -->
    <section class="page-content">

        <div class="row">
            <div class="column">

                 

                <div class="event-content">                   
                    <div id="spotify">
                       <p> <b style='font-family: "Poppins"; padding-top: 20px;'>🎧 Tune in to Our Spotify Podcast:<a href="#spotify"> Listen Here </a> </b> <br>
                         Stay connected with us anytime, anywhere! Tune in to our podcast on Spotify and listen to inspiring and uplifting sermons at your convenience. Whether you’re driving, exercising, or relaxing at home, you can always hear the Word of God. Click the link below to start listening now!
                        <center>
                            <div id="spotify">
                                <?php include 'spotify.html';?>
                            </div>
                        </center>
                        </p>
                    </div>
                    <!-- DOWNLOAD SERMONS -->
                    <h2>Download Sermons</h2>
                    <p>If you prefer offline listening, you can easily download our sermons to enjoy anytime, anywhere. Simply search for the sermon you'd like, click the download button, and it's yours to keep. Perfect for when you're on the go or don’t have access to the internet.</p>
                    
                    <div id="sermonModal" class="modal" role="dialog" aria-modal="true" style="display:none;">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                            <h2>Search Sermons</h2>
                            <input type="text" id="searchBar" placeholder="Search by date or preacher..." autofocus style="height:5rem;">
                            <div class="sermon-list-wrapper">
                                <ul id="sermonList">
                                    <?php
                                        // Fetch sermons from the database to display
                                        $result = $conn->query("SELECT * FROM sermons ORDER BY date DESC");
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<li><a href='" . $row['file_path'] . "' download>" . $row['date'] . " - Sermon by " . $row['preacher'] . "</a></li>";
                                            }
                                        } else {
                                            echo "<li>No sermons available.</li>";
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="button-container">
                        <button id="downloadButton">Download Sermons</button>
                    </div>


                </div> <!-- end event-content -->

            <div class="row half-bottom">
               
            </div>

            </div>
    </div>
        </div>

    </section> <!-- end page content -->


    


    <!-- footer
    ================================================== -->
    <?php include 'footer.html'; ?>
     <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/modernizr.js"></script>
    <script src="script.js"></script>

</body>