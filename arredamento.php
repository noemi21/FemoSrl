<?php
$directory = 'img/ArCommerciale/';
$images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>

<!doctype html>
<html lang="it" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arredamento Commerciale - Femo Montaggi | Soluzioni su Misura</title>
    <meta name="description"
        content="Scopri le nostre soluzioni di arredamento commerciale su misura per il tuo negozio o spazio espositivo. Professionalità e qualità garantite da Femo Montaggi.">
    <link rel="icon" type="image/x-icon" href="img/logo/FemoLogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/iubenda_cs.js" />
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/tcf/stub-v2.js" />
    <script src="https://cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
    <script>
            (_iub = self._iub || []).csConfiguration = {
            cookiePolicyId: 35214885,
            siteId: 3743016,

            timeoutLoadConfiguration: 30000,
            lang: 'it',
            enableTcf: true,
            tcfVersion: 2,
            tcfPurposes: {
                "2": "consent_only",
                "3": "consent_only",
                "4": "consent_only",
                "5": "consent_only",
                "6": "consent_only",
                "7": "consent_only",
                "8": "consent_only",
                "9": "consent_only",
                "10": "consent_only"
            },
            invalidateConsentWithoutLog: true,
            googleAdditionalConsentMode: true,
            consentOnContinuedBrowsing: false,
            banner: {
                position: "top",
                acceptButtonDisplay: true,
                customizeButtonDisplay: true,
                closeButtonDisplay: true,
                closeButtonRejects: true,
                fontSizeBody: "14px",
            },
        }
    </script>
    <script async src="https://cdn.iubenda.com/cs/iubenda_cs.js"></script>
    <style>
        /* Hover Effect on Images */
        .img-thumbnail:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        /* Active Menu Item */
        .navbar-nav .nav-link.active {
            color: #E20512;
            /* Highlight the active menu item */
        }

        /* Navbar Sticky */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1030;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo/FemoLogo.png" alt="Logo di Femo Montaggi" class="img-fluid">
            </a>
            <!-- Toggle btn-->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Offcanvas -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas"
                aria-labelledby="navbarOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="navbarOffcanvasLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end fs-5 flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="chi-siamo.html">Chi siamo</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle no-arrow active" role="button"
                                aria-expanded="false">Servizi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="arredamento.php">Arredamento Commerciale</a></li>
                                <li><a class="dropdown-item" href="carpenteria.php">Carpenteria Metallica</a></li>
                                <li><a class="dropdown-item" href="manutenzioni.php">Manutenzioni</a></li>
                                <li><a class="dropdown-item" href="clean.php">Clean Room</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contatti.html">Contatti</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="flex-shrink-0">
        <div class="container mt-5 py-5">
            <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Arredamento Commerciale</h1>
            <hr class="mt-2 mb-5">
            <div class="row text-center text-lg-start" id="imageGallery">
                <?php foreach ($images as $image): ?>
                <div class="col-lg-3 col-md-4 col-6">
                    <a class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="<?php echo $image; ?>" alt="Descrizione Immagine"
                            loading="lazy">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bd-footer py-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 mb-4">
                    <h5 class="text-uppercase">Femo Montaggi</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Siamo un'azienda che si occupa di arredamento commerciale, carpenteria
                            metallica, manutenzione e clean room.</li>
                        <li><a href="https://www.iubenda.com/privacy-policy/35214885" target="_blank">Privacy Policy</a>
                        </li>
                        <li><a href="#">Termini e Condizioni</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-uppercase">Social</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/FEMOMONTAGGI" class="text-secondary">
                                <i class="bi bi-facebook me-2"></i>Facebook
                            </a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-uppercase">Contatti</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">Telefono: <a href="tel:+390803948927">080 394 8927</a></li>
                        <li class="mb-2">Informazioni: <a
                                href="mailto:info@femomontaggisrl.it">info@femomontaggisrl.it</a></li>
                        <li class="mb-2">Amministrazione: <a
                                href="mailto:amministrazione@femomontaggisrl.it">amministrazione@femomontaggisrl.it</a>
                        </li>
                        <li>Indirizzo: Via delle Filatrici, 23, 70054 Giovinazzo BA</li>
                    </ul>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span>© 2024 Femo Montaggi - Tutti i diritti riservati</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span>P.iva 07810280722</span>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>