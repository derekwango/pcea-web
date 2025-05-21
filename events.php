
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
    <meta charset="utf-8">
    <title>PCEA BARAKA CHURCH- Events</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="manifest" href="site.webmanifest">

    <style type="text/css">
        .page-content {
            padding-top: 6rem;
            padding-bottom: 6rem;
            background-color: #ffffff;
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
                <h1>Upcoming Events</h1>
            </div>
        </div>

    </section> <!-- end page-header -->


    <!-- page content
    ================================================== -->
    <section class="page-content">

        <?php
            
            // Pagination setup
            $eventsPerPage = 6;
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $offset = ($page - 1) * $eventsPerPage;

            // Query to get the events for the current page
            $sql = "SELECT * FROM events ORDER BY event_date ASC LIMIT $eventsPerPage OFFSET $offset";
            $result = $conn->query($sql);

            // Display events
            echo '<div class="row wide block-large-1-2 block-900-full events-list">';
            if ($result->num_rows > 0) {
                while ($event = $result->fetch_assoc()) {
                    echo '<div class="column events-list__item">';
                    echo '<h3 class="display-1 events-list__item-title"><a href="#0" title="">' . htmlspecialchars($event['title']) . '</a></h3>';
                    echo '<p>' . htmlspecialchars($event['description']) . '</p>';
                    echo '<ul class="events-list__meta">';
                    echo '<li class="events-list__meta-date">' . date("l, F j, Y", strtotime($event['event_date'])) . '</li>';
                    echo '<li class="events-list__meta-time">' . htmlspecialchars($event['event_time']) . '</li>';
                    echo '<li class="events-list__meta-location">VENUE: ' . htmlspecialchars($event['venue']) . '</li>';
                    echo '</ul>';
                    echo '</div>';
                }
            } else {
                echo "No upcoming events found.";
            }
            echo '</div> <!-- end events-list -->';

            // Calculate the total number of pages
            $totalEventsResult = $conn->query("SELECT COUNT(*) AS total FROM events");
            $totalEvents = $totalEventsResult->fetch_assoc()['total'];
            $totalPages = ceil($totalEvents / $eventsPerPage);

            // Close the database connection
            $conn->close();
        ?>


        <!-- Pagination Navigation -->
        <div class="row">
            <div class="column large-full">
                <nav class="pgn">
                    <ul>
                        <?php if ($page > 1): ?>
                            <li><a class="pgn__prev" href="?page=<?php echo $page - 1; ?>">Prev</a></li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li><a class="pgn__num <?php echo ($i === $page) ? 'active' : ''; ?>" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>

                        <?php if ($page < $totalPages): ?>
                            <li><a class="pgn__next" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>

    </section> <!-- end page content -->


    <!-- footer
    ================================================== -->
    <?php include 'footer.html'; ?>
    <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modernizr.js"></script>
      
    <script>
        let currentPage = 1;

        function loadEvents(page) {
            currentPage = page;
            // Fetch events for the selected page
            fetch(`path_to_your_php_script.php?page=${page}`)
                .then(response => response.json())
                .then(events => {
                    // Update event display as shown above
                });
        }

        // Load the first page on initial load
        document.addEventListener('DOMContentLoaded', () => loadEvents(1));

        //load events with pagenation

        function loadEvents(page) {
            fetch(`path_to_your_php_script.php?page=${page}`)
                .then(response => response.json())
                .then(events => {
                    const eventsContainer = document.querySelector('.events-list');
                    eventsContainer.innerHTML = '';  // Clear previous events
                    
                    events.forEach(event => {
                        // Build the event HTML structure
                        const eventElement = `
                            <div class="column events-list__item">
                                <h3 class="display-1 events-list__item-title">
                                    <a href="#" title="">${event.title}</a>
                                </h3>
                                <p>${event.description}</p>
                                <ul class="events-list__meta">
                                    <li class="events-list__meta-date">${new Date(event.event_date).toLocaleDateString()}</li>
                                    <li class="events-list__meta-time">${event.event_time}</li>
                                    <li class="events-list__meta-location">VENUE: ${event.venue}</li>
                                </ul>
                            </div>
                        `;
                        eventsContainer.insertAdjacentHTML('beforeend', eventElement);
                    });
                });
        }
    </script>

</body>