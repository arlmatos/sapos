<?php
/**
*  Copyright (c) BNPHU. All rights reserved. Licensed under the GPL license.
*  See LICENSE in the project root for license information.
*
*  PHP version 7
*
*  @category vista
*  @package correspondencia
*  @author   Josué Serulle Cabreja <jota_serulle@hotmail.com>
*  @license GPL
*  @link https://github.com/josueSerulle/correspondencia
*/
    
    require_once "controlador/correspondencia/controladorCorrespondencia.php";
    require_once "controlador/correspondencia/generadorCorrespondencia.php";
    require_once "controlador/ControladorMesaEntrada.php";
    require_once "controlador/ControladorPlantilla.php";
    require_once "controlador/ControladorUsuario.php";
    require_once "controlador/controladorNotificaciones.php";
    require_once "controlador/ControladorTracking.php";
    require_once "modelo/AuthHelper.php";
    require_once "modelo/Settings.php";
    require_once "modelo/Token.php";
    require_once "modelo/conexion.php";
    require_once "controlador/emisor/generadorEmisor.php";
    
    
    $plantilla = new ControladorPlantilla();
    $plantilla->ctrPlantilla();

    
   
