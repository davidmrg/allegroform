<?php include("includes/header.php")?>
<?php include("db.php")?>

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">LEER DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Alumno</th>
                            <th>Dirección</th>
                            <th>Fecha Creación de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM alumno";
                        $result_alumnos = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_alumnos)){?>
                            <tr>
                                <td><?php echo $row['nombres']?></td>
                                <td><?php echo $row['direccion']?></td>
                                <td><?php echo $row['fecha_registro']?></td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

<?php include("includes/footer.php")?>