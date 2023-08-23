<?php
    include 'connection.php';

    $connect = connection();

    $sql = "SELECT * FROM alumnos";
    $query = mysqli_query($connect, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/output.css">
    <title>Document</title>
</head>

<body class= "bg-gradient-to-r from-blue-100 to-purple-100">
    <article class ="container mx-auto p-6 font-mono">
        <section class = "w-3/4 mx-auto mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class= "w-full overflow-x-auto">
            <form action="insert_user.php" method="POST" class="w-full">
            
            <h1 class="text-xl mb-1.5 text-center">Crear usuario</h1>

            <input type="text" name="id" placeholder="Id" class="px-2 py-1">
            <input type="text" name="nombre" placeholder="Nombre" class="px-2 py-1">
            <input type="text" name="apellido" placeholder="Apellido" class="px-2 py-1">
            <input type="text" name="sexo" placeholder="Sexo" class="px-2 py-1">

            <input type="submit" value="Agregar Usuario" class="rounded-full bg-gradient-to-t from-blue-300 to-violet-300 hover:from-blue-400 hover:to-violet-400" >
        </form>
        </div>
        </section>

    </article>

        <h1 class="text-xl mb-1.5 text-center font-mono">Buscar Alumnos</h1>

        <form action="index.php" method="POST">
        <article class = "w-3/4 mx-auto mb-8">
        <input type="text" name="buscar" class="flex mx-auto mb-2">
        <input type="submit" value="Buscar" class="flex mx-auto ">
        </article>

        </form>
        <h2 class="text-xl mb-2.5 text-center font-mono">Alumnos registrados</h2>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-3/4 text-md bg-white shadow-md rounded mb-4 border-2">
                    <tr class="border-b">
                        <th class= "text-left p-3 px-5 border-2">Id</th>
                        <th class= "text-left p-3 px-5 border-2">Nombre</th>
                        <th class= "text-left p-3 px-5 border-2">Apellido</th>
                        <th class= "text-left p-3 px-5 border-2">Sexo</th>
                        <th class= "text-left p-3 px-5 border-2"></th>
                    </tr>
            
            <tbody>
        
        <?php
            include 'search_user.php';

            while($row = mysqli_fetch_array($query)){?>
                <tr class="border-2 hover:bg-orange-400 bg-gray-400">

                    <td class="text-center p-3 px-5 border-2"> <?= $row['id'] ?></td>
                    <td class="text-center p-3 px-5 border-2"> <?= $row['nombre'] ?></td>
                    <td class="text-center p-3 px-5 border-2"> <?= $row['apellido'] ?></td>
                    <td class="text-center p-3 px-5 border-2"> <?= $row['sexo'] ?></td>

                    <th class="p-3 px-5 border-2"><a href="delete_user.php?id=<?= $row['id'] ?>">Eliminar</th>
                </tr>
            <?php
            }?>

            </tbody>
            </table>
    </div>
    
</body>
</html>