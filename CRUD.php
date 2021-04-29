<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="global.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body class="pepe">
        <form action="index.php">
            <input class="tipoz" type="submit" value="Volver al Index">
        </form>
        <form action="Estadistiques.php">
                <input class="tipoz" type="submit" value="Estadistiques">
        </form>
        <div style="margin: auto;width: 60%;">
            <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
            <form id="fupForm" name="form1" method="post">
                <div class="form-group">
                    <label for="email">Modalitat:</label>
                    <input type="text" class="form-control" id="modalitat" placeholder="Modalitat" name="modalitat">
                </div>
                <div class="form-group">
                    <label for="pwd">Nivell:</label>
                    <input type="email" class="form-control" id="nivell" placeholder="Nivell" name="nivell">
                </div>
                <div class="form-group">
                    <label for="pwd">Intents:</label>
                    <input type="text" class="form-control" id="intents" placeholder="Intents" name="intents">
                </div>
                <input type="button" name="save" class="btn btn-primary tipoz1" value="Añadir" id="butsave">
                <div class="form-group">
                    <label for="pwd">ID:</label>
                    <input type="text" class="form-control" id="id" placeholder="ID" name="id">
                </div>
                <input type="button" name="delete" class="btn btn-primary tipoz1" value="Borrar" id="butdelete">
                <input type="button" name="update" class="btn btn-primary tipoz1" value="Modificar" id="butupdate">
            </form>
        </div>
        <script src="ajax.js" language="javascript" type="text/javascript"></script>
    </body>
</html>