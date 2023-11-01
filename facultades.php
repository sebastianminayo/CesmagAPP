<?php
include 'index.php';
include 'conexion.php';
?>
<div class = "container" >
<h1>Listado de facultades</h1>
<div align = "right"> 
  <a class='btn btn-primary' href="form_registro_fac.php" >Adicionar</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
            $sql = "SELECT * FROM facultades";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["Codigo_fac"]."</td>";
                    echo "<td>".$row["Nombre_fac"]."</td>";
                    echo "<td>
                    <a class='btn btn-success'>Editar</a>
                    <a class='btn btn-danger'>Eliminar</a>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "0 resultados";
            }
            $conn->close();
        ?>
    <tr>
      <th scope="row">1</th>
      <td>artes</td>
      <td>
    <a class="btn btn-success">Editar</button>
    <a class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>
</div>