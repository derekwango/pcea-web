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


    $sql = "SELECT amount_raised, event_date, event_time FROM project_details WHERE id = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $amountRaised = $row['amount_raised'];
    $eventDate = date("l, F j, Y", strtotime($row['event_date']));
    $eventTime = date("g:iA", strtotime($row['event_time']));
    $totalGoal = 3000000;

    $conn->close();

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PCEA BARAKA CHURCH - Project</title>
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
    <link rel="manifest" href="site.webmanifest">

    <style type="text/css">
        .responsive-video {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 aspect ratio (height / width * 100) */
    height: 0;
    overflow: hidden;
    max-width: 100%;
}

.responsive-video iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

 .hero {
            width: 100%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .hero-text {
            flex: 1;
            padding-right: 30px;
        }

        .hero-text h1 {
            color: #b71c1c;
            font-size: 28px;
            text-transform: uppercase;
            text-align: left;
        }

        .hero-text p {
            font-size: 20px;
            color: #333;
            line-height: 1.6;
            text-align: left;
        }

        .hero img {
            width: 595px; /* Fixed width */
            height: 492px; /* Fixed height */
            object-fit: cover;
            border-radius: 2px;
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
    width: 100%; /* Set a specific width for the progress bar */
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

/* Full-width gallery section */
.gallery-section {
    width: 100%;
    padding: 40px 0;
    text-align: center;
}

/* Gallery title */
.gallery-section h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

/* Responsive grid layout */
.gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 images per row on large screens */
    gap: 20px;
    padding: 20px;
    max-width: 1200px; /* Limits gallery width */
    margin: 0 auto; /* Centers the gallery */
}

.gallery-item {
    width: 100%;
    cursor: pointer;
}

.gallery-item img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.gallery-item img:hover {
    transform: scale(1.0);
}

/* 📌 Mobile View - Show 1 image per row */
@media (max-width: 768px) {
    .gallery {
        grid-template-columns: 1fr; /* 1 image per row on smaller screens */
    }
    .gallery-item img {
        width: 100%; /* Makes image take full width */
        height: auto;
        display: block;
        margin: 0 auto; /* Centers the image */
    }
}

/* Lightbox styles */
.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.lightbox img {
    max-width: 90%;
    max-height: 90%;
}

.close {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 30px;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.close:hover {
    color: #ff4d4d;
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

@media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-text {
                padding-right: 0;
                margin-bottom: 20px;
            }
            .hero img {
                width: 100%;
                height: auto;
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
    <section class="page-header page-header--project">

        <div class="gradient-overlay"></div>
        <div class="row page-header__content">
            <div class="column">
                <h1>New Sanctuary</h1>
            </div>
        </div>

    </section> <!-- end page-header -->


    <!-- page content
    ================================================== -->
    <section class="page-content">

        <div class="row" style="max-width:none;">
            <div class="column">

                <!-- <div class="media-wrap event-thumb">
                        <img src="images/thumbs/events/event-1000.jpg" 
                          srcset="images/thumbs/events/event-2000.jpg 2000w, 
                                  images/thumbs/events/event-1000.jpg 1000w, 
                                  images/thumbs/events/event-500.jpg 500w" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div> --> <!-- end media-wrap -->

                 <div class="hero">
                    <div class="hero-text">
                        <h1>NEW SANCTUARY</h1>
                        <p> PCEA Baraka is embarking on a significant journey to build a new sanctuary for the growing congregation. Our goal is to raise KES 3 million to complete this vital project. We invite all members, well-wishers, and the community to join hands with us in making this vision a reality. To kickstart this endeavor, we will hold a harambee on <?php echo $eventDate; ?>. Your support and contributions will be instrumental in creating a lasting place of worship for generations to come. </p>
                    </div>
                    <img src="church design/PC 1.jpg" alt="Church Architecture">
                </div>

                <div class="event-content">                    

                    <ul class="event-meta">
                        <li><strong>Goal</strong> Ksh 3 Million</li>
                        <li><strong>Progress</strong>
                            <div class="progress">
                                <div class="progress-bar" id="progress-bar"></div>
                            </div>
                            <p id="progress-text" style="margin-bottom: 0;"></p>
                        </li>
                        <li><strong>Date</strong> <?php echo $eventDate; ?></li>
                        <li><strong>Time</strong> <?php echo $eventTime; ?></li>
                        <li><strong>Place</strong> PCEA BARAKA CHURCH</li>
                    </ul>

                </div> <!-- end event-content -->

            <div class="row half-bottom">
                <div class="column large-6 tab-full">
                    <h3>Church Paybill</h3>
                    <p><img src="images/devt.png" sizes="(max-width: 1000px) 100vw, 1000px" alt="" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);">
                </p>

            </div>

            </div>

                <div class="gallery-section">

                    <h1>Gallery </h1>
                    <div class="gallery">
                        <div class="gallery-item" onclick="openLightbox('church design/PC 1.jpg')">
                            <img src="church design/PC 1.jpg" alt="Church 1">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('church design/PC 2.jpg')">
                            <img src="church design/PC 2.jpg" alt="Church 2">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('church design/PC 3.jpg')">
                            <img src="church design/PC 3.jpg" alt="Church 3">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('church design/PC 4.jpg')">
                            <img src="church design/PC 4.jpg" alt="Church 4">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('church design/PC 5.jpg')">
                            <img src="church design/PC 5.jpg" alt="Church 5">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('church design/PC 6.jpg')">
                            <img src="church design/PC 6.jpg" alt="Church 6">
                        </div>
                    </div>
                </div>

                <div class="lightbox" id="lightbox" onclick="closeLightbox()">
                    <span class="close">&times;</span>
                    <img id="lightbox-img" src="">
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
    <script type="text/javascript">
    const form = document.querySelector('form');
    const loader = document.getElementById('loader');
    const message = document.getElementById('message');

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form from submitting normally
        loader.style.display = 'block'; // Show loader

        const formData = new FormData(form);

        fetch('stk_initiate.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            loader.style.display = 'none'; // Hide loader

            if (data.status === 'pending') {
                // Show a message telling the user to check their phone
                message.textContent = 'Payment request sent. Please check your phone to complete payment.';
                message.style.color = 'blue';

                // Optionally, initiate polling or redirect to a "check payment status" page
            } else {
                // Show any errors
                message.textContent = `Error: ${data.message}`;
                message.style.color = 'red';
            }
        })
        .catch(error => {
            loader.style.display = 'none'; // Hide loader
            message.textContent = `Error: ${error.message}`;
            message.style.color = 'red';
        });
    });

    // Function to reset the form
    function resetForm() {
        document.getElementById('payment-form').reset(); // Reset form fields
        document.getElementById('loader').style.display = 'none'; // Hide loader
        document.getElementById('message').innerText = ''; // Clear any messages
    }

    // Use window.onload to reset form on page reload
    window.onload = function() {
        resetForm(); // Reset form when the page is loaded
    };

    // Handle form submission
    $('#payment-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Show loader when form is submitted
        document.getElementById('loader').style.display = 'block';

        // Serialize the form data
        const formData = $(this).serialize();

        $.ajax({
            type: 'POST', // Change this to the appropriate request method
            url: 'stk_initiate.php', // URL to your PHP processing file
            data: formData,
            success: function(response) {
                const result = JSON.parse(response);
                if (result.status === 'success') {
                    // Display success message
                    document.getElementById('message').innerText = result.message;

                    // Redirect to the same page to reset the form
                    setTimeout(function() {
                        location.reload(); // Full reload of the page
                    }, 2000); // Wait for 2 seconds before reload (optional)
                } else {
                    // Display error message
                    document.getElementById('message').innerText = result.message;
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX errors
                document.getElementById('loader').style.display = 'none'; // Hide loader
                document.getElementById('message').innerText = "An error occurred: " + error;
            }
        });
    });

   
    function openLightbox(imageSrc) {
        document.getElementById('lightbox-img').src = imageSrc; // Ensure correct image path
        document.getElementById('lightbox').style.display = 'flex';
    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
    }


    </script>

    <script>
        // Fetch PHP variables into JavaScript
        const totalGoal = <?php echo $totalGoal; ?>;
        const amountRaised = <?php echo $amountRaised; ?>;

        // Calculate the percentage
        const progressPercent = (amountRaised / totalGoal) * 100;

        // Update the progress bar
        document.getElementById("progress-bar").style.width = progressPercent + "%";

        // Update the progress text
        document.getElementById("progress-text").innerText = `KES ${amountRaised.toLocaleString()} of KES ${totalGoal.toLocaleString()} raised (${Math.round(progressPercent)}%)`;
    </script>


    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modernizr.js"></script>

</body>