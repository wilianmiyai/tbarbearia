<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8"/>
        <meta name="autor" content="Wilian Miyai"/>
        <meta name="keywords"content="html, WilianMiyai, senac tech, TI,
              Desenvolvimento"/>
        <title>Barbearia</title>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
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
        <main class="contact">
            <div id="home">
                <div class="overlay">
                    <div class="overlay">
                        <h1>Agende seu serviço</h1>
                        <div class="flex-container">
                            <div class="flex-item-left">
                                <h4>Estamos localizados em</h4>
                                <p>Lomba do Pinheiro</p>
                                <p>Porto Alegre, RS</p>
                                <h4>Telefone</h4>
                                <p>51-911111111</p>
                                <h4>Email</h4>
                                <p>wilian@gmail.com</p>
                                <h4>Horario</h4>
                                <p>8:00 as 22:00</p>
                            </div>
                            <div class="flex-item-right">
                                <?php echo form_open('contato/inserir', 'name="formuser"'); ?>
                                <form action="" method="post" name="formuser">
                                    <label>Nome</label>
                                    <input type="text" name="nome" id="fname" placeholder="Seu nome" required>
                                    <label>Data</label>
                                    <input type="datetime-local" name="dataTime" id="data" placeholder="data e horario do corte" required>
                                    <label>Tipo de serviço</label>
                                    <select name="tipoServico" id="select" required>
                                        <option value="selecione">Selecione um tipo de serviço</option>
                                        <option value="1">Cabelo-R$20</option>
                                        <option value="2">Cabelo e barba-R$25</option>
                                        <option value="3">Cabelo, barba e sobrancelha-R$30</option>
                                        <option value="4">Barba-R$10</option>
                                        <option value="5">Sobrancelha-R$10</option>
                                        <option value="6">Barba e sobrancelha-R$20</option>
                                    </select>
                                    <label>Telefone</label>
                                    <input pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="Digite um numero de telefone no formato: (11) 11111-1111" type="tel" oninput="mascaraPhone(this)" name="telefone" id="phone" required>
                                    <label>Como você quer o corte</label>
                                    <textarea name="corte" id="textarea" cols="30" rows="10" required></textarea>
                                    <input type="submit" onclick="return validar()" placeholder="(Opcional)" name="salvar" value="Salvar" id="submit"/>
									<?php echo $this->session->tempdata('msg'); ?>
                                </form>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <h3><span id="demo">&copy;</span><a href="#"> Wilian</a></h3>
        </footer>
        <script type = "text/javascript"src = "<?php echo base_url().'js/index.js'; ?>">
        </script>
    </body>
</html>                                                                                    
