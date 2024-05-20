<?php 
    require '../PARCIAL-_SOFT/modelos/Producto.php';
    
    $mensaje = '';
    $precio =  $_POST['menu'];

    // VALIDAR INFORMACION
    $_POST['nombre_usuario'] = htmlspecialchars( $_POST['nombre_usuario']);
    $_POST['menu'] = filter_var( $precio , FILTER_VALIDATE_FLOAT) ;
    
    if($_POST['nombre_usuario'] == '' || !$_POST['menu'] || $_POST['menu'] < 0 ){

        // ALERTA PARA VALIDAR DATOS
        $resultado = [
            'mensaje' => 'VALIDACIÓN DE LOS DATOS',
            'codigo' => 2
        ];
    }else{
        try {
            // CONSULTA
            $guardar = $producto->guardar();
            $resultado = [
                'mensaje' => 'PRODUCTO INSERTADO CORRECTAMENTE',
                'codigo' => 1
            ];
            
        } catch (PDOException $pe){
            $resultado = [
                'mensaje' => 'OCURRIO UN ERROR INSERTANDO A LA BD',
                'detalle' => $pe->getMessage(),
                'codigo' => 0
            ];
        } catch (Exception $e) {
            $resultado = [
                'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
                'detalle' => $e->getMessage(),
                'codigo' => 0
            ];
        }
        
    }

    $alertas = ['danger', 'success', 'warning'];

    
    include_once '../PARCIAL-_SOFT/templates/header.php'; ?>

    <div class="row justify-content-center">
        <div class="col-lg-6 alert alert-<?=$alertas[$resultado['codigo']] ?>" role="alert">
            <?= $resultado['mensaje'] ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <a href="../../vistas/producto/index.php" class="btn btn-primary w-100">Volver al formulario</a>
        </div>
    </div>


<?php include_once '../PARCIAL-_SOFT/templates/footer.php'; ?>  