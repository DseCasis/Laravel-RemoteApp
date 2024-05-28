<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use phpseclib3\Net\SSH2;


class RemoteDesktopController extends Controller
{
    public function executeSSHCommand(Request $request)
    {

        $data = $request->only(['username', 'password', 'host']);

        Artisan::command('run:python-script', function () {
            $output = shell_exec('ssh user@remote_host "cd C:\Users\casis\Music\SharedScreen &amp;&amp; source venv/bin/activate &amp;&amp; python share_screen.py"');
            echo $output;
        });

        // Validar los datos del formulario
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'host' => 'required|string',
        ]);

        // Obtener los datos del formulario
        $username = $request->input('username');
        $password = $request->input('password');
        $host = $request->input('host');

        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'SSH login failed.'], 401);
        }

        $command = ('cd C:\Users\casis\Music\SharedScreen && venv/bin/activate && python share_screen.py');
        $output = $ssh->exec($command);

        // Retornar una respuesta exitosa
        return response()->json(['message' => 'Conectado', 'output' => $output]);

    }
}
