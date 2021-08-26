<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CADASTRO</title>
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
                width: 50vh;
                height: 50vh;

                /*style*/
                background-color: white;
                box-shadow: 0 0 5px rgba(0, 0, 0, .25);

                /*grid*/
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
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
                height: 100%;

                /*style*/

                /*grid*/
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .form-input {
                /*size - position*/
                width: 75%;
                height: 5.5vh;
                margin-bottom: 2vh;
                
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

            .btn {
                /*size - position*/
                width: 75%;
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
        </style>

	<body>
		
        <div class="container">
            <div class="box">
                <?php echo form_open('Usuario/cadastrarUsuario') ?>
                        <label><h1>REGISTRER-SE</h1></label>
                        <div class="form-input">
                            <input class="input" type="text" name="user_nome" placeholder="Nome" required>
                        </div>
                        <div class="form-input">
                            <input class="input" type="password" name="user_senha" placeholder="Senha" required>
                        </div>
                        <button class="btn" type="submit">REGISTRAR</button>

                        <a class="btn" href="<?= base_url('Login')?>">JÀ TENHO CADASTRO</a>
                <?php echo form_close()?>
            </div>
        </div>
	
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
