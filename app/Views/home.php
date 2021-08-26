<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>HOME</title>
	</head>

        <style>
            * {
                /*size - position */
                margin: 0;
                padding: 0;

                /*style*/
                scroll-behavior: smooth;

                /*grid*/
            }

            ::-webkit-scrollbar {
                /*size - position */
                width: 0px;

                /*style*/

                /*grid*/
            }

            .container {
                /*size - position */
                width: 100vw;
                height: 100vh;

                /*style*/
                background-color: #f5f5f5;

                /*grid*/
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .box {
                /*size - position */
                width: 90vw;
                height: 90vh;

                /*style*/
                background-color: white;
                box-shadow: 0 0 5px rgba(0, 0, 0, .25);

                /*grid*/
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .box h1{
                /*size - position */
                margin-bottom: 2vh;

                /*style*/

                /*grid*/
            }

            .box label{
                /*size - position */
                margin-bottom: 2vh;

                /*style*/
                font-size: 2.5vh;

                /*grid*/
            }

            .box form {
                /*size - position */
                width: 100%;

                /*style*/
                overflow: scroll;

                /*grid*/
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .form-input {
                /*size - position*/
                width: 25%;
                height: 5.5vh;
                margin: 2vh;
                
                /*style*/
                background-color: white;
                border-radius: 2.5vh;
                padding: 0 2.5vh 0 2.5vh;
                box-shadow: 0 0 5px rgba(0, 0, 0, .25);

                /*grid*/
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
            }

            .input {
                /*size - position*/
                width: 100%;
                height: 100%;

                /*style*/
                color: #7d7d7d;
                box-shadow: 0 0 0 0;
                border: 0 none;
                outline: 0;
                cursor: pointer;
                text-decoration: none;
                font-size: 2.5vh;

                /*grid*/
            }

            .btn-sucess {
                /*size - position*/
                width: 25%;
                height: 5.5vh;
                margin: 2vh;

                /*style*/
                font-size: 2.5vh;
                color: white;
                background-color: #000;
                text-decoration: none;
                cursor: pointer;
                outline: none;
                border: none;
                border-radius: 2.5vh;
                box-shadow: 0 0 5px rgba(0, 0, 0, .25);

                /*grid*/
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .btn-danger {
                /*size - position*/
                width: 25%;
                height: 5.5vh;
                margin: 2vh;

                /*style*/
                font-size: 2.5vh;
                color: black;
                background-color: #fff;
                text-decoration: none;
                cursor: pointer;
                outline: none;
                border: none;
                border-radius: 2.5vh;
                box-shadow: 0 0 5px rgba(0, 0, 0, .25);

                /*grid*/
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .btn-sair {
                /*size - position*/
                width: 15%;
                height: 5.5vh;
                margin-bottom: 2vh;

                /*style*/
                font-size: 2.5vh;
                color: white;
                background-color: #000;
                text-decoration: none;
                cursor: pointer;
                outline: none;
                border: none;
                border-radius: 2.5vh;
                box-shadow: 0 0 5px rgba(0, 0, 0, .25);

                /*grid*/
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            table {
                /*size - position*/
                width: 100%;

                /*style*/

                /*grid*/
            }

            table tr {
                /*size - position*/
                margin: 2vh;

                /*style*/

                /*grid*/
            }

            table th {
                /*size - position*/

                /*style*/
                font-size: 2.5vh;

                /*grid*/

            }

            table td {
                /*size - position*/

                /*style*/
                font-size: 2vh;
                background-color: #f5f5f5;

                /*grid*/

            }
        </style>

	<body>
        <?php
			$session = session();
            if($session->get('logado')) :
        ?>
            <div class="container">
                <div class="box">
                    <h1>Opa Bão? <?= $session->get('logado')['user_nome'] ?></h1><br>
                    <a class="btn-sair" href="<?= base_url('Usuario/sair')?>">SAIR</a>

                    <label>Cadastre seu endereço</label>

                    <?php echo form_open('Home/cadastrarEndereco') ?>
                        <div class="form-input">
                            <input class="input" type="text" id="cep" name="cep" placeholder="Digite seu CEP:" required>
                        </div>
                        <div class="form-input">
                            <input class="input" type="text" id="uf" name="uf" placeholder="Digite o estado: (sigla)" required>
                        </div>
                        <div class="form-input">
                            <input class="input" type="text" id="localidade" name="localidade" placeholder="Digite a cidade:" required>
                        </div>
                        <div class="form-input">
                            <input class="input" type="text" id="bairro" name="bairro" placeholder="Digite o bairro:" required>
                        </div>
                        <div class="form-input">
                            <input class="input" type="text" id="logradouro" name="logradouro" placeholder="Digite a rua:" required>
                        </div>
                        <div class="form-input">
                            <input class="input" type="number" id="numero" name="numero" placeholder="Digite o numero:" required>
                        </div>
                        <input type="hidden" name="user_id" value="<?= $session->get('logado')['user_cd'] ?>">
                        <button class="btn-sucess" type="submit">REGISTRAR</button>
                        <button class="btn-danger" onclick="limpar()">CANCELAR</button>
                    <?php echo form_close()?>

                    <table>
                        <tr>
                            <th>CD</th>
                            <th>CEP</th>
                            <th>UF</th>
                            <th>Cidade</th>
                            <th>Bairro</th>
                            <th>Rua</th>
                            <th>Numero</th>
                            <th>EXCLUIR</th>
                        </tr>
                        <?php
                            foreach($enderecos as $endereco) : 
                        ?>
                            <tr>
                                <td><?= $endereco['endereco_cd'] ?></td>
                                <td><?= $endereco['cep'] ?></td>
                                <td><?= $endereco['uf'] ?></td>
                                <td><?= $endereco['localidade'] ?></td>
                                <td><?= $endereco['bairro'] ?></td>
                                <td><?= $endereco['logradouro'] ?></td>
                                <td><?= $endereco['numero'] ?></td>
                                <td><?php echo anchor('Home/deletarEndereco/' . $endereco['endereco_cd'], 'X', ['onclick' => 'return confirma()']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        <?php
            else :
        ?>
           <div class="container">
                <div class="box">
                    <h1>Acesso negado</h1><br>
                    <a class="btn" href="<?= base_url('Usuario/sair')?>">SAIR</a>
                </div>
            </div>
        <?php endif; ?>

        <script src="assets/js/cep.js"></script>

        <script>
            function confirma() {
                if(!confirm('Tem certeza que deseja excluir?')) {
                    return false;
                }

                return true;
            }

            function limpar() {
                document.getElementById('cep').value = '';
                document.getElementById('uf').value = '';
                document.getElementById('localidade').value = '';
                document.getElementById('bairro').value = '';
                document.getElementById('logradouro').value = '';
                document.getElementById('numero').value = '';
            }
        </script>

        <!---
                          #######  ##       ########
                #######   #     #  ##       ##    ##  #######
                #######   #        ##       ##    ##  #######
        #######           #######  ##       ########           #######
                #######        ##  ##       ##    ##  #######
                #######   #    ##  ##       ##    ##  #######
                          #######  #######  ##    ##
    	-->
	</body>
</html>