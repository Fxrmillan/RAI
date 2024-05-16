<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <!-- <link rel="stylesheet" href="css/cardTest.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="RAICard.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    
    <title>RAI - Rhizomatica Admin</title>
</head>
<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="assets/sidebar_logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">RAI</span>
                    <span class="profession"><?php echo _('Administrator')?></span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
















                <li class="search-box">
                    <i class='bx bx-plug icon' ></i>
                    <span class="text nav-text">Platform</span>
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-laptop icon' ></i>
                            <span class="text nav-text">Site</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bxs-user-circle icon' ></i>
                            <span class="text nav-text">VOIP Account</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-sitemap icon' ></i>
                            <span class="text nav-text">Platform Stats</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-wifi icon' ></i>
                            <span class="text nav-text">Network Stats</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-money icon'></i>
                            <span class="text nav-text">Credits</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="sms.php">
                            <i class='bx bx-message-dots icon' ></i>
                            <span class="text nav-text">SMSs</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="callsDetailsRecords.php">
                            <i class='bx bxs-phone icon'></i>
                            <span class="text nav-text">CDRs</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="rates.php">
                            <i class='bx bx-dollar icon' ></i>
                            <span class="text nav-text">Rates</span>
                        </a>
                    </li> -->

                </ul>








                <li class="search-box">
                    <i class='bx bx-stats icon' ></i>
                    <span class="text nav-text">Statistics</span>
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-laptop icon' ></i>
                            <span class="text nav-text">Costs</span>
                        </a>
                    </li>
                    <!-- THIS DOES NOT WORK ON THE 'NIGHTSHADE' SERVER-->
                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-user-circle icon' ></i>
                            <span class="text nav-text">Calls</span>
                        </a>
                    </li> -->
                </ul>







                <li class="search-box">
                    <i class='bx bxs-user-detail icon' ></i>
                    <span class="text nav-text">Subscribers</span>
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-laptop icon' ></i>
                            <span class="text nav-text">Phones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bxs-user-circle icon' ></i>
                            <span class="text nav-text">Provisioning</span>
                        </a>
                    </li>
                </ul>








                
                <li class="search-box">
                    <i class='bx bxs-user-badge icon' ></i>
                    <span class="text nav-text">Resellers</span>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-laptop icon' ></i>
                            <span class="text nav-text">Accounts</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bxs-user-circle icon' ></i>
                            <span class="text nav-text">Provisioning</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-sitemap icon' ></i>
                            <span class="text nav-text">Add Credit</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-wifi icon' ></i>
                            <span class="text nav-text">Invoices</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-money icon'></i>
                            <span class="text nav-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-message-dots icon' ></i>
                            <span class="text nav-text">Configuration</span>
                        </a>
                    </li>
                </ul>




                <li class="search-box">
                    <i class='bx bx-money icon'></i>
                    <span class="text nav-text">Credits</span>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-laptop icon' ></i>
                            <span class="text nav-text">Add</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bxs-user-circle icon' ></i>
                            <span class="text nav-text">Transfer</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-sitemap icon' ></i>
                            <span class="text nav-text">History</span>
                        </a>
                    </li>

                    <!-- TODO double check this on Nightshade-->
                    <!-- <li class="nav-link">
                        <a href="networkStats.php">
                            <i class='bx bx-wifi icon' ></i>
                            <span class="text nav-text">Status</span>
                        </a>
                    </li> -->
                </ul>




















                <li class="search-box">
                    <i class='bx bx-message-dots icon' ></i>
                    <span class="text nav-text">SMSs</span>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-laptop icon' ></i>
                            <span class="text nav-text">History</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bxs-user-circle icon' ></i>
                            <span class="text nav-text">Send SMS</span>
                        </a>
                    </li>
                </ul>










                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bxs-phone icon' ></i>
                            <span class="text nav-text">CDRs</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="site.php">
                            <i class='bx bx-dollar icon' ></i>
                            <span class="text nav-text">Rates</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="site.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    