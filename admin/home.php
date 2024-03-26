<h1 class="text-light">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="bg-light">

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-light elevation-1"><i class="fas fa-book-open"></i></span>
            <div class="info-box-content">
                <a href="<?php echo base_url ?>admin/?page=transaction" class="nav-link nav-transaction">
                    <span class="info-box-text">Total Members Payment Today</span>
                    <span class="info-box-number text-right">
                        <?php 
                        $payment = $conn->query("SELECT sum(payable_amount) as total FROM transaction_list")->fetch_assoc()['total'];
                        echo number_format($payment);
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-light elevation-1"><i class="fas fa-coins"></i></span>
            <div class="info-box-content">
                <a href="<?php echo base_url ?>admin/?page=listofdonation" class="nav-link nav-donate">
                    <span class="info-box-text">Total Donations Today</span>
                    <span class="info-box-number text-right">
                        <?php 
                        $donation = $conn->query("SELECT sum(amount) as total FROM donations")->fetch_assoc()['total'];
                        echo number_format($donation);
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-blog"></i></span>
            <div class="info-box-content">
                <a href="<?php echo base_url ?>admin/?page=blogs" class="nav-link nav-blogs">
                    <span class="info-box-text">Total Published Blogs/Posts</span>
                    <span class="info-box-number text-right">
                        <?php 
                        $blogs = $conn->query("SELECT id FROM `blogs` where status = '1' ")->num_rows;
                        echo number_format($blogs);
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-md-up"></div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar-day"></i></span>
            <div class="info-box-content">
                <a href="<?php echo base_url ?>admin/?page=events" class="nav-link nav-events">
                    <span class="info-box-text">Upcoming Events</span>
                    <span class="info-box-number text-right">
                        <?php 
                        $event = $conn->query("SELECT id FROM `events` where date(schedule) >= '".date('Y-m-d')."' ")->num_rows;
                        echo number_format($event);
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-money-bill-wave"></i></span>
            <div class="info-box-content">
                <a href="<?php echo base_url ?>admin/?page=maintenance/company" class="nav-link nav-maintenance_company">
                    <span class="info-box-text">Types of Payments</span>
                    <span class="info-box-number text-right">
                        <?php 
                        echo $conn->query("SELECT * FROM `company_list` where status =1")->num_rows;
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-friends"></i></span>
            <div class="info-box-content">
                <a href="<?php echo base_url ?>admin/?page=clients" class="nav-link nav-clients">
                    <span class="info-box-text">Members/Benefactors</span>
                    <span class="info-box-number text-right">
                        <?php 
                        echo $conn->query("SELECT * FROM `users` where `type` =2")->num_rows;
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="nav-icon fas fa-file"></i></span>
            <div class="info-box-content">
                <a href="<?php echo base_url ?>admin/?page=reports" class="nav-link nav-reports">
                    <span class="info-box-text">Reports</span>
                    <span class="info-box-number text-right">
                        <?php 
                        echo $conn->query("SELECT * FROM `users` where `type` =2")->num_rows;
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
