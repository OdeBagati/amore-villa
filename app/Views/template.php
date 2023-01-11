<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, srink-to-fit=no"/>
        <meta name="description" content="Amore Villa"/>

        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.css" />
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/styles.css" />

        <?= $this->renderSection('specific-css') ?>

        <?= $this->renderSection('page-title') ?>
    </head>
    <body class="bg-light">

        <?= $this->renderSection('content') ?>
        
        <script type="text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>/assets/js/main.js"></script>

        <?= $this->renderSection('specific-js') ?>
        
    </body>
</html>