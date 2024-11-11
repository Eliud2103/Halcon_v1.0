<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start(); 
    include 'components/head_meta.php'; 
    ?>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h4 {
            font-weight: 800;
            text-align: center;
            margin-top: 20px;
        }

        .bg-form {
            background-color: #d6e1f7;
            border-radius: 20px;
            padding: 20px;
            margin-top: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            position: relative;
            min-height: 300px;
        }

        label {
            font-weight: 200;
            color: #4a4a4a;
            margin-bottom: 8px;
            display: block;
        }

        label.form-control {
            border-radius: 10px;
            background-color: #BBD5FD;
            color: #000000;
            padding: 14px;
            width: 100%;
            margin-bottom: 20px;
            border: none;
            opacity: 0.9;
            white-space: normal; /* Permite que el texto haga salto de línea */
            word-wrap: break-word; /* Fuerza el salto de línea si es necesario */
        }

        label.form-control:disabled {
            background-color: #BBD5FD;
            color: black;
            opacity: 1;
        } 

        .imagen {
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-right: 20px;
            flex-direction: column;
        }

        .logo {
            width: 40%;
            max-width: 200px;
            position: relative;
            margin: 0 auto;
            z-index: 1;
        }

        .autobus {
            max-width: 250px;
            position: relative;
            margin-top: 10px;
            z-index: 2;
        }

        /* Responsive adjustments */
        @media (min-width: 992px) {
            .bg-form {
                flex-direction: row;
                padding: 20px 40px;
            }

            .col-md-8 {
                order: 1;
            }

            .col-md-4 {
                order: 2;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .logo {
                position: absolute;
                bottom: 155px;
                right: 40px;
                max-width: 250px;
            }

            .autobus {
                position: absolute;
                bottom: 20px;
                right: 30px;
            }
            .img-fluid{
                width: 300px;;
            }
            
            
        }

        @media (max-width: 768px) {
            .bg-form {
                flex-direction: column;
                padding: 20px;
                margin: 20px 10px;
            }

            .form-group label.form-control {
                padding: 10px; /* Reduce el padding en móviles para más espacio */
                height: auto;
                border-radius: 20px;
                margin: 10px auto;
            }

            .imagen {
                flex-direction: column;
                margin-top: 20px;
                align-items: center;
            }

            .logo, .autobus {
                position: relative;
                max-width: 150px;
                margin: 0 auto;
                bottom: 0;
            }
            
            
            
        }
    </style>
</head>
<body>
    <?php include 'components/navbar.php'; ?>
    <div class="container">
        <h4>CONTACTO</h4>
        <div class="row bg-form">
            <div class="col-12 col-md-8">
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <label class="form-control">Autobuses Halcón División México</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <label class="form-control">autobuseshalcon.dmo@gmail.com</label>
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <label class="form-control">C. Valdivieso S/N B. San Antonio, San Pablo Huixtepec</label>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4 imagen">
                <img class="autobus img-fluid" src="assets/images/autobus.png" alt="">
                <img class="logo img-fluid" src="assets/images/logoTicket.png" alt="">
            </div>
        </div>
    </div>
</body>
<?php include 'components/footer.php'; ?>
</html> 
