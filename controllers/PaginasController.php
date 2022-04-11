<?php

namespace Controllers;
use MVC\Router;
// use Model\Compu;
// use Model\N_compu;

use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index( Router $router ) {
            
        $router->render('paginas/index', [
            'descripcion' =>  "",
            'title' => "Ari Gómez | Inicio ",


        ]);
    }

    public static function proyectos( Router $router ) {
            
        $router->render('paginas/proyectos', [
            'descripcion' =>  "",
            'title' => "Ari Gómez | Proyectos ",


        ]);
    }

    public static function sobre_mi( Router $router ) {
            
        $router->render('paginas/sobre_mi', [
            'descripcion' =>  "",
            'title' => "Ari Gómez | Sobre_mi ",


        ]);
    }

    
    public static function pagina_no_encontrada( Router $router ) {
            
        $router->render('paginas/pagina_no_encontrada', [
            'descripcion' =>  "Página no encontrada, error 404",
            'title' => "Página no encontrada (404) | Ari Gómez",


        ]);
    }

     public static function contacto( Router $router ) {
         $mensaje = null;

         if($_SERVER['REQUEST_METHOD'] === 'POST') {


            //   Validar 
             $respuestas = $_POST['contacto'];
        
            //   create a new object
             $mail = new PHPMailer();
            //   configure an SMTP
             $mail->isSMTP();

            //  $mail->Host = 'smtp.mailtrap.io';
            //  $mail->SMTPAuth = true;
            //  $mail->Username = '79f6e8667dadbf';
            //  $mail->Password = '25e021030297ef';
            //  $mail->SMTPSecure = 'tls';
            //  $mail->Port = 2525;

            $mail->Host = 'p3plzcpnl489529.prod.phx3.secureserver.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'arigomez@ecutroniccomputadorasautomotrices.com';
            $mail->Password = '+ga2fOMgL@)w';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //  configurar el contenido del email
             $mail->setFrom('clientesari@ecutroniccomputadorasautomotrices.com', $respuestas['nombre']);//quien envia elemail setFrom
             $mail->addAddress('arigomez@ecutroniccomputadorasautomotrices.com', 'computadorasautomotrices.com.mx');//que email va a llegar ese correo addAddres (la direccion donde se va a recibir) (quien lo recibe...)
             $mail->Subject = 'Tienes un Nuevo Correo';

            //   Set HTML 
            //  Habilitar HTML
             $mail->isHTML(TRUE);
             $mail->CharSet = 'UTF-8'; 

            //  definir el contenido
             $contenido = '<html>';
             $contenido .= "<p><strong>Has Recibido un Correo:</strong></p>";

             $contenido .= "<p>Nombre: " . $respuestas['nombre'] . "</p>";

             $contenido .= "<p>Apellido: " . $respuestas['apellido'] . "</p>";

             $contenido .= "<p>Correo: " . $respuestas['correo'] . "</p>";

             $contenido .= "<p>Su teléfono es: " .  $respuestas['telefono'] ." </p>";

             $contenido .= "<p>El nombre de su negocio es: " .  $respuestas['negocio'] ." </p>";

             if($respuestas['sitio-cuentas'] === 'si') {
                $contenido .= "<p>Si tiene sitio web</p>";
                $contenido .= "<p>Su dominio es: " .  $respuestas['sitio'] ." </p>";
               
            } else {
                $contenido .= "<p>No tiene sitio web</p>";
            }

             $contenido .= "<p>Su presupuesto es: " .  $respuestas['presupuesto'] ." </p>";

             $contenido .= "<p>Mensaje: " . $respuestas['mensaje'] . "</p>";

             $contenido .= '</html>';
             $mail->Body = $contenido;
             $mail->AltBody = 'Esto es texto alternativo';

            

            //   send the message
            //  send (es si se envia, has esto...) (si tiene ! es lo opuesto)
             if(!$mail->send()){
                 $mensaje = 'Hubo un Error... intente de nuevo';
             } else {
                 $mensaje = true;
             }

         }
        
         $router->render('paginas/contacto', [
            'mensaje' => $mensaje,
            'descripcion' =>  "",
            'title' => "Ari Gómez | Contacto ",




         ]);
     }
}