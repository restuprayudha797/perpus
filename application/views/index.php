<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('src/layout/header'); ?>
</head>
<body>
    <div class="wrapper">
        <?php $this->load->view('src/layout/topbar'); ?>
        <div class="container_full">
            <?php $this->load->view('src/layout/sidebar'); ?>

            <div class="content_wrapper">
                <div class="container-fluid">
                    <?php $this->load->view('src/' . $page); ?>
                </div>
            </div>
        </div>
        <?php $this->load->view('src/layout/footer'); ?>

</body>

</html>