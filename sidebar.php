<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">Prachatech</a>
            <a class="navbar-brand hidden" href="index.php"><img src="assets/img/fav.png" alt="Prachatech"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-calendar"></i>Campaign Scheduling</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="add_campaign_schedule.php">Add</a></li>
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="campaign_list.php">List</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Group</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="add_group.php">Add</a></li>
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="group_list.php">List</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-comments"></i>Message Templates</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="add_message.php">Add</a></li>
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="message_list.php">List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="reports.php"> <i class="menu-icon fa fa-file"></i>Reports</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>