
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

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="UTF-8">
    <title>PCEA BARAKA CHURCH</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PCEA Baraka Church in Mugutha, Ruiru is a vibrant Christian community with active groups including PCMF, Women's Guild, Youth Fellowship, and Sunday School. Join us for worship and fellowship." />
    <meta name="keywords" content="PCEA, PCEA Baraka, pcea baraka, PCEA Baraka Church, Mugutha, Ruiru Church, PCMF, Women's Guild, Youth Fellowship, Presbyterian Church, Kenya churches" />
    <meta name="robots" content="index, follow" />


    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="manifest" href="site.webmanifest">

    <style>
        .fc-subscribe-button {
            display: none !important; /* Hides the button */
        }
        button[title="Subscribe"] {
            display: none !important; /* Hides the button */
        }

        .s-events {
            padding-top: 0;
        }

        /* General Styling */
.readings {
    padding: 20px;
    margin: 0 0 20px 0;
    text-align: center;
}

/* Grid Layout for Readings */
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive columns */
    gap: 30px; /* Space between items */
    margin-top: 20px;
    padding: 10px;
}

/* Styling for Each Reading */
.reading-item {
    padding: 20px;
    background: linear-gradient(135deg, #ffffff, #a1b5c7); /* Soft gradient background */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    max-height: 500px; /* Restrict height */
    overflow-y: auto; /* Scrollable content */
    scrollbar-width: thin; /* For Firefox */
    scrollbar-color: #3498db #f0f8ff; /* Custom scrollbar */
}

/* Hover Effect */
.reading-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Scrollbar Styling for Webkit Browsers (Chrome, Safari) */
.reading-item::-webkit-scrollbar {
    width: 6px;
}

.reading-item::-webkit-scrollbar-thumb {
    background-color: #3498db;
    border-radius: 3px;
}

.reading-item::-webkit-scrollbar-track {
    background: #f0f8ff;
}

/* Title Styling */
.reading-item h3 {
/*    font-size: 1.5rem;*/
    color: #2c3e50;
    margin-bottom: 10px;
    font-weight: bold;
}

/* Scripture Styling */
.reading-item .scripture {
    font-size: 1.2rem;
    color: #2980b9;
    font-weight: bold;
    margin-bottom: 15px;
}

/* Content Styling */
.reading-item p {
    font-size: 1.7rem;
    color: #555;
    line-height: 1.6;
}

/* Strong Tag Styling */
strong {
    font-family: "Montserrat", sans-serif;
    font-size: 1.9rem;
}

/* Responsive Design for Smaller Screens */
@media (max-width: 768px) {
    .grid {
        gap: 20px;
    }

    h3{
        margin-top: 3rem;
    }
    .reading-item {
        padding: 15px;
        max-height: 300px; /* Slightly reduced for mobile */
    }

    /*.reading-item h3 {
        font-size: 1.3rem;
    }*/

    .reading-item .scripture {
        font-size: 1rem;
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


    <!-- hero
    ================================================== -->
    <section class="s-hero" data-parallax="scroll" data-image-src="https://res.cloudinary.com/dmg75vlxv/image/upload/v1742234793/cover2_joxkbp.jpg" 
    data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="hero-left-bar"></div>

        <div class="row hero-content">

            <div class="column large-full hero-content__text">
                <h1>
                    Welcome To <br>
                    PCEA BARAKA <br>
                    CHURCH
                </h1>

                <div class="hero-content__buttons">
                    <a href="events.php" class="btn btn--stroke">Upcoming Events</a>
                    <a href="about.php" class="btn btn--stroke">About Us</a>
                </div>
            </div> <!-- end hero-content__text -->

        </div> <!-- end hero-content -->

        <ul class="hero-social">
            <li class="hero-social__title">Follow Us</li>
            <li>
                <a href="#0" title="">Facebook</a>
            </li>
            <li>
                <a href="#0" title="">YouTube</a>
            </li>
            <li>
                <a href="#0" title="">Instagram</a>
            </li>
        </ul> <!-- end hero-social -->

        <div class="hero-scroll">
            <a href="#about" class="scroll-link smoothscroll">
                Scroll For More
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about">

        <div class="row row-y-center about-content">

            <div class="column large-half medium-full">
                <h3 class="subhead">Welcome to PCEA BARAKA CHURCH</h3>
                <p class="lead">
                PCEA Baraka Church, located in Mugutha, was founded in 2016 as a place of worship and spiritual growth for the local community. Since its establishment, the church has been dedicated to spreading the Gospel, fostering fellowship, and engaging in various outreach programs to support both its congregation and the wider community. With a strong emphasis on faith, love, and hope, PCEA Baraka Church provides a welcoming environment for worship, Bible study, and social initiatives, aiming to nurture spiritual development and strengthen Christian values among its members.
                </p>
                <a href="about.php" class="btn btn--primary btn--about">Read More</a>
            </div>

            <div class="column large-half medium-full">
                <ul class="about-sched">
                    <li>
                        <h4>English Service</h4>
                        <p>
                        Sunday - 8:00AM - 10.00AM<br>
                        Mugutha,Ruiru
                        </p>
                    </li>
                    <li>
                        <h4>Kikuyu Service</h4>
                        <p>
                        Sunday - 10:00AM - 12:00PM <br>
                        Mugutha,Ruiru
                        </p>
                    </li>
                    <li>
                        <h4>Church School</h4>
                        <p>
                        Sunday - 8:00AM - 10.00AM<br>
                        Mugutha,Ruiru
                        </p>
                    </li>

                    <li>
                        <h4>Brigade</h4>
                        <p>
                        Sunday - 8:00AM - 10.00AM<br>
                        Mugutha,Ruiru
                        </p>
                    </li>
                </ul> <!-- end about-sched-->
            </div>

        </div> <!-- end about-content -->

    </section> <!-- end s-about -->


   
    <!-- events
    ================================================== -->
<section class="s-events">

    <div class="readings">

        <?php
            $sql = "SELECT * FROM readings ORDER BY date DESC LIMIT 3"; // Latest three readings
            $result = $conn->query($sql);
            ?>
            <center> <h3 class="display-1 events-list__item-title"> Sunday Readings </h3> </center>
           <div class="grid">
                <?php
                // Check if there are readings
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='reading-item'>
                                <h3>{$row['title']}</h3>
                                <p class='scripture'><strong>{$row['scripture']}</strong></p>
                                <p>{$row['content']}</p>
                              </div>";

                    }
                } else {
                    echo "<p>No readings available.</p>";
                }
                ?>
            </div>

  </div>

        <div class="row events-header">
            <div class="column">
                <h2 class="subhead">Upcoming Events.</h2>
            </div>
        </div> <!-- end event-header -->

        <div class="row block-large-1-2 block-900-full events-list">

           <!-- events-list__item -->


            <?php
                $delete_sql = "DELETE FROM events WHERE event_date < CURDATE()";
                $conn->query($delete_sql);

                // Retrieve upcoming events
                $sql = "SELECT * FROM events ORDER BY event_date ASC";
                $result = $conn->query($sql);

                $maxEvents = 4;
                $eventCount = 0;

                if ($result->num_rows > 0) {
                    while ($event = $result->fetch_assoc()) {
                        if ($eventCount >= $maxEvents) break;

                        echo '<div class="column events-list__item">';
                        echo '<h3 class="display-1 events-list__item-title"><a href="#0" title="">' . htmlspecialchars($event['title']) . '</a></h3>';
                        echo '<p>' . htmlspecialchars($event['description']) . '</p>';
                        echo '<ul class="events-list__meta">';
                        echo '<li class="events-list__meta-date">' . date("l, F j, Y", strtotime($event['event_date'])) . '</li>';
                        echo '<li class="events-list__meta-time">' . htmlspecialchars($event['event_time']) . '</li>';
                        echo '<li class="events-list__meta-location">VENUE: ' . htmlspecialchars($event['venue']) . '</li>';
                        echo '</ul>';
                        echo '</div>';

                        $eventCount++;
                    }
                } else {
                    echo "No events found.";
                }

                $conn->close();
            ?>

            <!-- end events-list -->
        </div> 
        
        
    </div>
        </div>
</section> <!-- end s-events -->


    <!-- series
    ================================================== -->



    <section class="s-series">


        <div class="series-img" style="background-image: url('https://images.unsplash.com/photo-1585519916621-7af4c8636a18?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>

        <div class="row row-y-center series-content">

            <div class="column large-half medium-full">
                <h3 class="subhead">Current Sermon</h3>
                <?php
                    $servername = "localhost";
                    $username = "pceabara_root"; 
                    $password = "0ffo[2LJY5)Wz8"; 
                    $database = "pceabara_pcea";
                    
                    $conn = new mysqli($servername, $username, $password,   $database);
                    // Retrieve current content
                    $sql = "SELECT title, content FROM commission_content WHERE id=1";
                    $result = $conn->query($sql);

                    if ($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
                    } else {
                        echo "<p>Content not found.</p>";
                    }

                    $conn->close();
                ?>

            </div> <!-- end column -->

            <div class="column large-half medium-full">
                <div class="series-content__buttons">
                    <!-- <a href="" class="btn btn--large h-full-width">Watch the Video</a> -->
                    <a href="sermons/index.php#spotify" class="btn btn--large h-full-width">Listen To the Message</a>
                </div>

                <div class="series-content__subscribe">
                    <p>
                    Never miss a message. Listen to our sermons on spotify.
                    </p>
                    
                    <ul class="series-content__subscribe-links">
                        <li class="ss-spotify"><a href="https://open.spotify.com/show/0knIjLVOwS2codnTUtLZia" target="_blank"></a>SPOTIFY</li>
                    </ul>
                </div>
            </div> <!-- end column -->
            
        </div> <!-- series-content -->

    </section> <!-- end s-series -->


  


    <!-- footer
    ================================================== -->
    <?php include 'footer.html'; ?>
     <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script type="text/javascript">

    </script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modernizr.js"></script>
</body>