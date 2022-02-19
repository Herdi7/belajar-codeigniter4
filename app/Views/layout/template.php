<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="icon/all.min.css">
</head>

<body class="capitalize dark:bg-slate-900 dark:text-white">
    <!-- navbar -->
    <?= $this->include('layout/navbar'); ?>
    <!-- end navbar -->

    <!-- section -->
    <?php $this->renderSection('content'); ?>
    <!-- end section -->

    <!-- footer -->
    <?= $this->include('layout/footer'); ?>
    <!-- end footer -->


    <!-- js -->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- icon -->
    <script src="icon/all.min.js"></script>


</body>

</html>