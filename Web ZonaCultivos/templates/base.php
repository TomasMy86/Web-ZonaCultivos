<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/images/logo.png" type="image/png">
    <title>Zona Cultivos - <?php echo $page_title; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <?php include('header.php'); ?>

    <main class="w-100">
        <?php include $template; ?>
    </main>

    <?php include('footer.php'); ?>  
    
    <a href="https://api.whatsapp.com/send/?phone=5491154030034" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
        <img src="/assets/images/whatsapp.png" alt="WhatsApp" class="whatsapp-icon">
    </a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/js/header-scroll.js"></script>
    <script src="/assets/js/team-carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.navbar-nav .nav-link').on('click', function () {
                $('.navbar-collapse').collapse('hide');
            });
        });
    </script>

</body>
</html>




