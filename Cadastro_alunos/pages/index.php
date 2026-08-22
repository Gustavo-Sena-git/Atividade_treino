<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="formAluno" method="POST">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="text" name="email"><br>
        Idade: <input type="text" name="idade"><br>

        Selecione o seu curso:
        <select name="curso">
            <option value="">Selecione seu curso</option>
            <option value="ds">Desenvolvimento de Sistemas</option>
            <option value="adm">Administração</option>
            <option value="eletronica">Eletrônica</option>
        </select>

        <input type="submit" value="Enviar">
    </form>
    <div>

            <table>
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Chris</th>
                    <td>HTML tables</td>
                    <td>22</td>
                    </tr>
                    <tr>
                    <th scope="row">Dennis</th>
                    <td>Web accessibility</td>
                    <td>45</td>
                    </tr>
                    <tr>
                    <th scope="row">Sarah</th>
                    <td>JavaScript frameworks</td>
                    <td>29</td>
                    </tr>
                    <tr>
                    <th scope="row">Karen</th>
                    <td>Web performance</td>
                    <td>36</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                    <th scope="row" colspan="2">Average age</th>
                    <td>33</td>
                    </tr>
                </tfoot>
                </table>
    </div>

    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</body>
</html>