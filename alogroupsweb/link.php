<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php
        if ($_GET['pageid'] == '') {
        ?>
            <li class="nav-item menu-open">
                <a href="index.php" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

            </li>
        <?php
        } else {
        ?>
            <li class="nav-item menu-open">
                <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

            </li>
        <?php
        }
        ?>
        <?php
        if ($_GET['pageid'] == 2) {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=2" class="nav-link active">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <p>
                        Resume
                    </p>
                </a>
            </li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=2" class="nav-link">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <p>
                        Resume

                    </p>
                </a>
            </li>
        <?php
        }
        ?>
        <?php
        if ($_GET['pageid'] == 5) {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=5" class="nav-link active">
                    <i class="nav-icon fa fa-registered"></i>
                    <p>
                        Employee Details

                    </p>
                </a>
            </li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=5" class="nav-link">
                    <i class="nav-icon fas fa-user-edit"></i>
                    <p>
                        Employee Details

                    </p>
                </a>
            </li>
        <?php
        }
        ?>
        <?php
        if ($_GET['pageid'] == 7) {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=7" class="nav-link active">
                    <i class="nav-icon fa fa-registered"></i>
                    <p>
                        Task Details

                    </p>
                </a>
            </li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=7" class="nav-link">
                    <i class="nav-icon fa fa-registered"></i>
                    <p>
                        Task Details

                    </p>
                </a>
            </li>
        <?php
        }
        ?>
        <?php
        if ($_GET['pageid'] == 10) {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=10" class="nav-link active">
                    <i class="nav-icon fa fa-registered"></i>
                    <p>
                        Leave Details

                    </p>
                </a>
            </li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=10" class="nav-link">
                    <i class="nav-icon fa fa-registered"></i>
                    <p>
                        Leave Details

                    </p>
                </a>
            </li>
        <?php
        }
        ?>

<?php
        if ($_GET['pageid'] == 11) {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=10" class="nav-link active">
                    <i class="nav-icon fa fa-registered"></i>
                    <p>
                        Quote Details

                    </p>
                </a>
            </li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a href="index.php?pageid=11" class="nav-link">
                    <i class="nav-icon fa fa-registered"></i>
                    <p>
                        Quote Details

                    </p>
                </a>
            </li>
        <?php
        }
        ?>



    </ul>
</nav>