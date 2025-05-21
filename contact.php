<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = trim($_POST['cName']);
    $email = trim($_POST['cEmail']);
    $reason = trim($_POST['cReason']); // New field
    $message = trim($_POST['cMessage']);

    // Database connection details
    $servername = "localhost";
    $username = "pceabara_root"; 
    $password = "0ffo[2LJY5)Wz8"; 
    $database = "pceabara_pcea";

    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, reason, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $reason, $message);

    // Execute and check if the submission is successful
    if ($stmt->execute()) {
        // Redirect to the same page or a thank you page
        header("Location: contact.php?success=1"); // Change to your desired URL
        exit; // Make sure to call exit after header redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PCEA BARAKA - Contact</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <link rel="manifest" href="site.webmanifest">

    <style type="text/css">
        .page-content{
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        /* Modal styling */
.modal {
     /* Hidden by default  */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    max-width: 500px;
    text-align: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

.modal-content h2 {
    color: #333;
    font-size: 1.5em;
}

.modal-content p {
    font-size: 1em;
    color: #666;
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
    <section class="page-header page-header--contact">

        <div class="gradient-overlay"></div>
        <div class="row page-header__content">
            <div class="column">
                <h1>Contact Us</h1>
            </div>
        </div>

    </section> <!-- end page-header -->


    <!-- page content
    ================================================== -->
    <section class="page-content">

        <div class="row">
            <div class="column">

                <p class="lead drop-cap">
                At PCEA BARAKA CHURCH, we believe in the power of connection. Whether you have a question, need prayer, or would like to learn more about our ministries, we’re here for you. </p>

                <p>
                Feel free to reach out using the form below or via the contact details provided. Our team is ready to assist you with any inquiries or support you may need. Thank you for being part of our community — we look forward to hearing from you!.
                </p>

                <div class="row">
                    <div class="column large-6 tab-full">
                        <h3>Church Location.</h3>
                        <p>
                        Spring Valley Road,Mugutha<br>
                        Ruiru<br>
                        Mon-Friday 8:30am – 4:30pm 
                        </p>
                    </div>

                    <div class="column large-6 tab-full">
                        <h3>Contact Info.</h3>
                        <p>
                        info@pceabaraka.com<br>
                        P.O. BOX 1222-1000,Ruiru<br>
                        Phone: +254710000000
                        </p>
                    </div>
                </div>


                <h2>Get In Touch.</h2>

                <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" id="cName" class="h-full-width h-remove-bottom" placeholder="Your Name" value="" type="text" required>
                        </div>

                        <div class="form-field">
                            <input name="cEmail" id="cEmail" class="h-full-width h-remove-bottom" placeholder="Your Email" value="" type="email">
                        </div>

                        <br>
                        <div class="form-field">
                            <label for="cReason">Reason for Contact</label>
                            <div class="ss-custom-select">
                                <select class="h-full-width h-remove-bottom" name="cReason" id="cReason">
                                    <option value="" disabled selected>Select a reason</option> <!-- Placeholder option -->
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Request for Prayer">Request for Prayer</option>
                                    <option value="Volunteer Opportunities">Volunteer Opportunities</option>
                                    <option value="Event Information">Event Information</option>
                                    <option value="Membership Information">Membership Information</option>
                                    <option value="Baptism Inquiry">Baptism Inquiry</option>
                                    <option value="Counseling Services">Counseling Services</option>
                                    <option value="Feedback/Suggestions">Feedback/Suggestions</option>
                                    <option value="Weddings/Funerals">Weddings/Funerals</option>
                                    <option value="Youth Programs">Youth Programs</option>
                                    <option value="Mission Trips">Mission Trips</option>
                                </select>
                            </div>
                        </div>


                        <div class="message form-field">
                            <textarea name="cMessage" id="cMessage" class="h-full-width h-remove-bottom" placeholder="Your Message" required></textarea>
                        </div>

                        <br>

                        <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width" value="Send Message" type="submit">

                    </fieldset>
                </form>

            </div>
        </div>

        <div id="successModal" class="modal" style="display: none;">
            <div class="modal-content">
                <h2>Thank you!</h2>
                <p>Your message has been sent successfully.</p>
                <button class="close-btn" onclick="closeModal()">Close</button>
            </div>
        </div>

    </section> <!-- end page-content -->


    

    <!-- footer
    ================================================== -->
    <?php include 'footer.html'; ?>
    <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        // Show the modal
        function showModal() {
            document.getElementById("successModal").style.display = "block";
        }

        // Close the modal
        function closeModal() {
            document.getElementById("successModal").style.display = "none";
        }

        // Listen for form submission
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting the traditional way
            
            const formData = new FormData(this);
            
            fetch("", { // Empty string means the same page
                method: "POST",
                body: formData
            })
            .then(response => {
                if (!response.ok) throw new Error("Network response was not ok");
                return response.text(); // Process the response
            })
            .then(data => {
                // Show the modal if submission is successful
                showModal();
                // Reset the form after submission
                document.getElementById("contactForm").reset();
            })
            .catch(error => {
                console.error("There was a problem with the fetch operation:", error);
            });
        });

    </script>

</body>