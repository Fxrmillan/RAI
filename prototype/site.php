<?php 
	include("connection.php");
	include("logic/siteLogic.php");

	// if (session_status() === PHP_SESSION_NONE) {
	// 	session_start();
	// }

	// // Check if the user is not logged in, redirect to login page
	// if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
	// 	header('Location: index.php');
	// 	exit; // Important to prevent further script execution
	// }
?>

<?php
// include("navbar.php");
include("sidebarOLD.php");
// TODO test translation after done with functionality
// echo "English"._("Site")."English";
?>

	<div class="content">
	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->

			<section class="home">
        <div class="text">
			<h1><?php echo _('Site name')?>:&nbsp;<?php printSiteName($siteData); ?><h1>
			<h1><?php echo _('Network Name')?>:&nbsp;<?php printNetworkName($siteData); ?><h1>
			<h1><?php echo _('Prefix Name')?>:&nbsp;<?php printPrefixName($siteData); ?><h1></h1>
		</div>
    </section>

	</div>

    <script src="js/sidebar.js"></script>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>