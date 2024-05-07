<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/style.css">
    </link>
</head>

<body>

    <?php include './include/navbar.php' ?>

    <section class="fundo">

        <div class="fale-conosco">

            <h1 class="titulo-contato">Fale Conosco</h1>

            <div class="inputs">

                <div class="espaco-input">
                    <label for="nome" class="label">Nome:</label>
                    <input type="text" class="input" name="nome" placeholder="Seu Nome" />
                </div>

                <div class="espaco-input">
                    <label for="email" class="label">Email:</label>
                    <input type="email" class="input" name="email" />
                </div>

                <br>

                <div class="espaco-input">
                    <label for="sala" class="label">Sala:</label>
                    <select class="input" name="sala">
                        <option value="1° DS">1° DS</option>
                        <option value="1° Nutri A">1° Nutri A</option>
                        <option value="1° Nutri B">1° Nutri B</option>
                        <option value="2° DS">2° DS</option>
                        <option value="2° Nutri A">2° Nutri A</option>
                        <option value="2° Nutri B">2° Nutri B</option>
                        <option value="3° DS A">3° DS A</option>
                        <option value="3° DS B">3° DS B</option>
                        <option value="3° Nutri">3° Nutri</option>
                        <option value="Modular">Modular</option>
                    </select>
                </div>

                <div class="espaco-input">
                    <label for="rm" class="label">RM:</label>
                    <input type="Numeric" class="input" name="rm" placeholder="Digite seu RM" />
                </div>

                <br>

                <div class="espaco-input">
                    <label for="assunto" class="label">Assunto:</label>
                    <input type="text" class="input" name="assunto" />
                </div>

                <div class="espaco-input">
                    <label for="mensagem" class="label">Mensagem:</label>
                    <input type="text" class="input" name="mensagem" placeholder="Digite sua mensagem aqui" />
                </div> <!--Deixe este placeholder maior-->

                <br>
                <br>

                <input type="submit" class="botao-enviar" name="botao" placeholder="Enviar" />

            </div>

        </div>

    </section>

    <?php include './include/footer.php' ?>

</body>

</html>