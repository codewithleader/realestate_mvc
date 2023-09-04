<main class="contenedor seccion">
  <h1>Actualizar Propiedad</h1>

  <a href="/admin" class="boton boton-primary">Volver</a>

  <!-- Mostrar Errores -->
  <?php foreach ($errors as $error) : ?>
    <div class="alert error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>

  <form method="POST" class="formulario" enctype="multipart/form-data">

    <?php include __DIR__ . '/form.php'; ?>

    <input type="submit" value="Actualizar Propiedad" class="boton boton-primary" />

  </form>
</main>