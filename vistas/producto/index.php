<?php include_once '../PARCIAL-_SOFT/templates/header.php'; ?>

<h1 class="text-center">Formulario Rancho</h1>
<div class="row justify-content-center">
    <form action="/controladores/Menú/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="nombre_usuario">Nombre del Usuario</label>
                <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="menu">Menú:</label>
                <input type="text" name="menu" id="menu" min="0" step="0.01" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="fecha/hora">Fecha y hora:</label>
                <input type="datetime" name="fecha/hora" id="fecha/hora" min="0" step="0.01" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="Tiemp_comida">Tiempo de la comida:</label>
                <input type="text" name="Tiemp_comida" id="Tiemp_comida" min="0" step="0.01" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="pasador">Pasador:</label>
                <input type="text" name="pasador" id="pasador" min="0" step="0.01" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
    </form>
</div>

<?php include_once '../PARCIAL-_SOFT/templates/footer.php'; ?>
