<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $nombre = $_POST["nombre"];
  $fecha = $_POST["fecha"];
  $hora = $_POST["hora"];
  $cantidad = $_POST["cantidad"];

  // Validar los datos (puedes agregar más validaciones según tus necesidades)
  if (empty($nombre) || empty($fecha) || empty($hora) || empty($cantidad)) {
    echo "Por favor, completa todos los campos del formulario.";
    exit;
  }

  // Procesar los datos de reserva, guardar en base de datos o enviar un correo electrónico de confirmación, etc.
  // Aquí puedes agregar tu código para realizar las acciones necesarias con los datos de la reserva.

  // Mostrar un mensaje de éxito
  echo "¡La reserva se ha realizado correctamente!";

} else {
  // Redireccionar si se accede directamente al archivo procesar_reserva.php sin enviar el formulario
  header("Location: index.html");
  exit;
}
?>
