<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8"/>
        <meta name="autor" content="Wilian Miyai"/>
        <meta name="keywords"content="html, WilianMiyai, senac tech, TI,
		Desenvolvimento"/>
        <title>Barbearia</title>
        <link rel="stylesheet" href="css/styles.css">
        <style>
            #home {
            background: url('img/andre-reis-1_DAlXy0wng-unsplash.jpg') no-repeat center center fixed;
            height: 85vh;
            position: relative;
            width: 100%;
            background-size: cover;
            }
        </style>
    </head>
    
    <body>
        <header class="header">
            <div class="container container-nav">
                <div class="site-title">
                    <h1>Barbearia Wilian</h1>
                    <p class="subtitle">Para quem quer estilo</p>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>galeria">Galeria</a></li>
                        <li><a href="<?php echo base_url(); ?>contato">Agendar</a></li>
                    </ul>
                    
                </nav>
            </div>
        </header>
        <main>
            <div id="home">
                <div class="overlay">
                    <div class="overlay">
                        <div class="landing-text">
                            <h3>Preparando seu cabelo</h3>
                            <h1>Barbearia Wilian</h1>
                            <hr id="hr-main">
                            <a href="<?php echo base_url(); ?>contato" class="button btn-hire">Agendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>            