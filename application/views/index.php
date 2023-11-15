<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('src/layout/header'); ?>
</head>

<body>
    <div class="wrapper">
        <!-- topbar -->
        <?php $this->load->view('src/layout/topbar'); ?>
        <div class="container_full">
            <!-- sidebar -->
            <?php $this->load->view('src/layout/sidebar'); ?>

            <div class="content_wrapper">
                <div class="container-fluid">
                    <div class="page-heading">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                                <div class="page-breadcrumb">
                                </div>
                            </div>
                            <div class="col-md-6 justify-content-md-end d-md-flex">
                                <div class="breadcrumb_nav">
                                    <ol class="breadcrumb">
                                        <li>
                                            <i class="fa fa-home"></i>
                                            <a class="parent-item" href="index.html">Admin</a>
                                            <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active">
                                            <?= $title ?>
                                            
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- main content -->
                    <?php $this->load->view('src/' . $page); ?>

                </div>
            </div>
        </div>
        <!-- footer -->
        <?php $this->load->view('src/layout/footer'); ?>

</body>

</html>