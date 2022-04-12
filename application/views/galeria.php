<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8"/>
        <meta name="autor" content="Wilian Miyai"/>
        <meta name="keywords"content="html, WilianMiyai, senac tech, TI,
		Desenvolvimento"/>
        <title>Barbearia</title>
        <link rel="stylesheet" href="css/styles.css">
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
            <div class="gallery-header">
                <h1>Alguns de seus cortes de cabelo mais incríveis!</h1>
            </div>
            <div class="row gallery-row">
                <div class="column">
                    <img src="img/1.jpg" alt="" style="width: 100%">
                    <img src="img/2.jpg" alt="" style="width: 100%">
                    <img src="img/3.jpg" alt="" style="width: 100%">
                    <img src="img/4.jpg" alt="" style="width: 100%">
                </div>
                <div class="column">
                    <img src="img/5.jpg" alt="" style="width: 100%">
                    <img src="img/6.jpg" alt="" style="width: 100%">
                    <img src="img/7.jpg" alt="" style="width: 100%">
                    <img src="img/8.jpg" alt="" style="width: 100%">
                </div>
                <div class="column">
                    <img src="img/9.jpg" alt="" style="width: 100%">
                    <img src="img/10.jpg" alt="" style="width: 100%">
                    <img src="img/11.jpg" alt="" style="width: 100%">
                    <img src="img/12.jpg" alt="" style="width: 100%">
                </div>
                <div class="column">
                    <img src="img/13.jpg" alt="" style="width: 100%">
                    <img src="img/14.jpg" alt="" style="width: 100%">
                    <img src="img/16.jpg" alt="" style="width: 100%">
                    <img src="img/18.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </main>
        <footer class="footer">
            <h3><span id="demo">&copy;</span><a href="#">Wilian</a></h3>
        </footer>
        
    </body>
</html>