<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWL Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard_style.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
   
</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="images/user.jpg" alt="User Image." id="userImage"/>
                <span><?=$user['first_name'].''.$user['last_name']></span>
                <span>OWL</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li class="liMainMenu">
                        <a href="./dashboard.php" ><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
                    </li>
                    <li class="liMainMenu" >
                        <a href="javascript:void(0);" class="showHideSubMenu" >
                            <i class="fa fa-tag showHideSubMenu" ></i>
                            <span class="menuText showHideSubMenu" >Product</span>
                            <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" style="float: right;"></i>
                        </a>
                        <ul class="subMenus">
                            <li>
                                <a class="subMenuLink" href="#"><i class="fa fa-circle-o"></i>  View Product</a>
                                <a class="subMenuLink" href="#"><i class="fa fa-circle-o"></i>  Add Product</a>
                            </li>
                        </ul>
                    </li>
                    <li class="liMainMenu" >
                        <a href="javascript:void(0);" class="showHideSubMenu" >
                            <i class="fa fa-truck showHideSubMenu" ></i>
                            <span class="menuText showHideSubMenu" >Supplier</span>
                            <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" style="float: right;"></i>
                        </a>
                        <ul class="subMenus">
                            <li>
                                <a class="subMenuLink" href="#"><i class="fa fa-circle-o"></i>  View Supplier</a>
                                <a class="subMenuLink" href="#"><i class="fa fa-circle-o"></i>  Add Supplier</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="liMainMenu showHideSubMenu" >
                        <a href="javascript:void(0);" class="showHideSubMenu" >
                            <i class="fa fa-user-plus showHideSubMenu" ></i>
                            <span class="menuText showHideSubMenu" >User</span>
                            <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" style="float: right;"></i>
                        </a>
                        <ul class="subMenus">
                            <li>
                                <a class="subMenuLink" href="#"><i class="fa fa-circle-o"></i>  View Users</a>
                                <a class="subMenuLink" href="./users-add.php"><i class="fa fa-circle-o"></i>  Add Users</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-power-off"></i>   Log-out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                
                </div>
            </div>
        </div>
    </div>
    <script src="dashboard.js"></script>
</body>
</html>
