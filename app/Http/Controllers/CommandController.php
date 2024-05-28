<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//este controlador se encarga de ejecutar comandos de windows para simular el control remoto
class CommandController
{
    public function openExplorer()
    {
        // Ejecutar comando para abrir el Explorador de Windows
        $output = shell_exec('start explorer');
        return response()->json(['output' => $output]);
    }

    public function openBrowser()
    {
        // Ejecutar comando para abrir el navegador predeterminado
        $output = shell_exec('start edge');
        return response()->json(['output' => $output]);
    }
}
