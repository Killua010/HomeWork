<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>HomeWork</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <header>
            <h1>Meus HomeWorks</h1>
        </header>
        <article>
            <section>
                <form method="post" action="index.php/?controller=pages&action=dadosSalvar">
                    <fieldset>
                        <legend>Novo HomeWork</legend>
                        Titulo
                        <br>
                        <input type="text" name="titulo" placeholder="Ex: Ambiente de desenvolvimento android">
                        <br>
                        Descrição
                        <br>
                        <textarea name="descricao" placeholder="Pesquisar sobre o ambiente android. em torno de 10 paginas"></textarea>
                        <br>
                        Materia
                        <br>
                        <input type="text" name="materia" placeholder="Ex: Sistemas Operacionais II">
                        <input type="submit" name="Enviar" value="Salvar">
                    </fieldset>
                </form>
            </section>
            <section>

            </section>
        </article>
    </body>
</html>
