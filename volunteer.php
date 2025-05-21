<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PCEA BARAKA - Volunteer</title>
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
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <link rel="manifest" href="site.webmanifest">

    <style>
        .page-content {
          padding-top: 5rem;
          padding-bottom: 6rem;
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
    <section class="page-header page-header--volunteer">

        <div class="gradient-overlay"></div>
        <div class="row page-header__content">
            <div class="column">
                <h1>Volunteer</h1>
            </div>
        </div>

    </section> <!-- end pageheader -->


    <!-- page content
    ================================================== -->
    <section class="page-content">

        <div class="row">
            <div class="column">

                <p class="lead drop-cap">
                At PCEA BARAKA CHURCH, we believe that serving is one of the best ways to express faith and build connections. Your unique gifts and talents can make a real difference in our church and community. Whether you enjoy leading worship, working with children, hospitality, or outreach, there’s a place for you. Each act of service helps us reflect Christ’s love and bring hope to those around us.
                </p>

                <p>
                Volunteering is not just about helping; it’s about growing in faith and building relationships. Whether you can commit weekly or help with one-time events, your contribution is valuable. Fill out the form below, and let’s work together to serve and uplift our community. We look forward to partnering with you!
                </p>

                <br>

                <h2>Volunteer With Us Through the Following Ministries</h2>
                
                <div class="row block-large-1-2 block-1000-full block-list">
                    <?php
                        $conn = new mysqli("localhost", "root", "", "pcea");
                        $result = $conn->query("SELECT * FROM volunteer_opportunities");

                        if ($result->num_rows > 0) {
                            while ($opportunity = $result->fetch_assoc()) {
                                echo '<div class="column block-list__item">';
                                echo '<h4 class="block-list__title-with-num">' . htmlspecialchars($opportunity['title']) . '</h4>';
                                echo '<p>' . htmlspecialchars($opportunity['description']) . '</p>';
                                echo '</div>';
                            }
                        } else {
                            echo "<p>No volunteer opportunities are currently available.</p>";
                        }
                        $conn->close();
                    ?>

                </div> <!-- end block-list -->

                <h2>Yes, I want to Volunteer!</h2>
                <p>
                Thank you for serving with us as we honor God and make disciples. Please fill-up and send the form below.
                </p>

                <form name="volunteerForm" id="volunteerForm" class="volunteerForm" method="post" action="" autocomplete="off">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" id="cName" class="h-full-width h-remove-bottom" placeholder="Your Name" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" id="cEmail" class="h-full-width h-remove-bottom" placeholder="Your Email" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cPhone" id="cPhone" class="h-full-width h-remove-bottom" placeholder="Mobile Number" value="" type="tel">
                        </div>

                        <div class="form-field">
                            <input name="cFacebook" id="cFacebook" class="h-full-width h-remove-bottom" placeholder="Facebook URL" value="" type="text">
                        </div>

                        <br>
                        <div class="form-field">
                            <label for="cMinistry">Ministry to volunteer</label>
                            <div class="ss-custom-select">
                                <select class="h-full-width h-remove-bottom" name="cMinistry" id="cMinistry">
                                    <option value="Option 1">Ushering & Security</option>
                                    <option value="Option 2">Kids Church</option>
                                    <option value="Option 3">Music Team</option>
                                    <option value="Option 4">Prayer Team</option>
                                    <option value="Option 5">Administrative Support</option>
                                    <option value="Option 6">Production Design</option>
                                    <option value="Option 7">Technical & Stage Management</option>
                                    <option value="Option 8">Communications</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-field">
                            <label for="cFirstTime">This is my first time to serve</label>
                            <div class="ss-custom-select">
                                <select class="h-full-width h-remove-bottom" name="cFirstTime" id="cFirstTime">
                                    <option value="Option 1">Yes</option>
                                    <option value="Option 2">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="comments form-field">
                            <textarea name="cComments" id="cComments" class="h-full-width h-remove-bottom" placeholder="Comments & Questions"></textarea>
                        </div>

                        <br>

                        <input name="submit" id="submit" class="btn btn--primary btn--large h-full-width" value="Submit Form" type="submit">

                    </fieldset>
                </form> <!-- end volunteerForm -->

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

</body>