<?php include("database/db.php");?>

<?php include("includes/header.php");?>

<?php
    if (isset($_GET['idAlumno'])) {
        $id = $_GET['idAlumno'];
        $query = "SELECT * FROM alumno WHERE idAlumno = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombreAlumno'];
            $apellidoP = $row['apellidoPaternoAlumno'];
            $apellidoM = $row['apellidoMaternoAlumno'];
            $correo = $row['correoAlumno'];
            $carrera = $row['carreraAlumno'];
        }
    }

    if (isset($_POST['update'])) {
        $id = $_GET['idAlumno'];
        $nombre = $_POST['nombreAlumno'];
        $apellidoP = $_POST['apellidoPaternoAlumno'];
        $apellidoM = $_POST['apellidoMaternoAlumno'];
        $correo = $_POST['correoAlumno'];
        $carrera = $_POST['carreraAlumno'];

        $query = "UPDATE alumno set nombreAlumno = '$nombre', apellidoPaternoAlumno = '$apellidoP', apellidoMaternoAlumno = '$apellidoM', correoAlumno = '$correo', carreraAlumno = '$carrera' WHERE idAlumno = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Task Update Successfuly';
        $_SESSION['message_type'] = 'primary';

        header("location: index.php");
    }
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="">
                    <div class="col form-group">
                        <label>Nombre(s):</label>
                        <input type="text" name="nombreAlumno" class="form-control" placeholder="Ej.: Joaquín">
                    </div> <br>

                    <div class="col form-group">
                        <label>Apellido Paterno:</label>
                        <input type="text" name="apellidoPaternoAlumno" class="form-control" placeholder="Ej.: Hernández">
                    </div> <br>

                    <div class="col form-group">
                        <label>Apellido Materno:</label>
                        <input type="text" name="apellidoMaternoAlumno" class="form-control" placeholder="Ej.: Oregón">
                    </div> <br>

                    <div class="col form-group">
                        <label>Correo Electrónico Institucional:</label>
                        <input type="text" name="correoAlumno" class="form-control" placeholder="Ej.: edgar.mb@.tecnm.mx">
                    </div> <br>

                    <div class="col form-group">
                        <label>Carrera:</label>
                        <select name="carreraAlumno" class="form-control">
                            <option value="IGE">Ing. en Gestión Empresarial</option>
                            <option value="II">Ing. Industrial</option>
                            <option value="AR">Arquitectura</option>
                            <option value="ITIC">Ing. En Tecnol. de la Info. y Comunic</option>
                        </select>
                    </div> <br>

                    <button class="btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php include("includes/footer.php");?>