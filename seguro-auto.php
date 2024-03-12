<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Seguro de Automóvel</title>
    <style>
        /* Estilos CSS aqui */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333; /* Adicionado */
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-bottom: 15px; 
            outline: none; 
            border: 1px solid #ccc; 
            padding: 10px; 
            background-color: #f8f8f8; 
            display: inline-block; 
            border-radius: 4px; 
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s; /* Adicionado */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .resumo {
            margin-top: 30px;
            padding: 20px;
            background-color: #eaeaea;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .resumo h3 {
            margin-top: 0;
        }

        .resumo p {
            margin-bottom: 2px;
        }

        .resumo strong {
            font-weight: bold;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s; /* Adicionado */
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Adicionado: Estilo de destaque para campos de entrada */
        input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Seguro de Automóvel</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Valor do veículo: <input type="text" name="valor_veiculo" placeholder="Digite o valor em reais" required><br>
            Idade do veículo (em anos): <input type="number" name="idade_veiculo" placeholder="Digite a idade do veículo" required><br>
            Modelo do veículo:
            <select name="modelo_veiculo">
                <option value="esportivo">Esportivo</option>
                <option value="sedan">Sedan</option>
                <option value="hatch">Hatch</option>
            </select><br>
            Região de circulação:
            <input type="radio" name="regiao" value="metropolitana" checked> Metropolitana
            <input type="radio" name="regiao" value="interior"> Interior<br>
            Coberturas adicionais (opcional):<br>
            <input type="checkbox" name="cobertura[]" value="protecao_roubo"> Proteção contra Roubo
            <input type="checkbox" name="cobertura[]" value="danos_materiais"> Cobertura de Danos Materiais
            <input type="checkbox" name="cobertura[]" value="assistencia_24h"> Assistência 24 Horas<br>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
			/*IMPLEMENTAR CÓDIGO AQUI*/
			
        }
        ?>
		<button onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>';">Novo Cálculo</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputValor = document.getElementsByName('valor_veiculo')[0];

            inputValor.addEventListener('input', function(event) {
                var valor = this.value.replace(/\D/g, '');
                valor = (valor / 100).toFixed(2);

                var valorFormatado = valor.replace(/\./g, ',')
                                           .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');

                this.value = valorFormatado;
            });
        });
    </script>
</body>
</html>
