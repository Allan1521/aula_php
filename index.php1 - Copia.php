<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1 class="text-primary">Formulário</h1>
            <form action="cad.php" method="POST">
                <div class="form-row">
                    <div class="col-5">
                        <h5>Nome</h5><input type="text" name="name" class="form-control"
                            placeholder="Digite seu nome">
                    </div>
                    <div class="col-5">
                        <h5>Endereço</h5><input type="text" name="adress" class="form-control"
                            placeholder="Digite seu endereço">
                    </div>
                    <div class="col-5">
                        <h5>Data de Nascimeto</h5><input type="text" name="date" class="form-control"
                            placeholder="Digite sua Data de Nascimento">
                    </div>
                    <div class="col-5">
                        <h5>Cidade</h5><input type="text" name="city" class="form-control"
                            placeholder="Digite sua Cidade">
                    </div>
                    <div class="col-5">
                        <h5>Bairro</h5><input type="text" name="lugar" class="form-control"
                            placeholder="Digite seu Bairro">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Enviar">

                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>