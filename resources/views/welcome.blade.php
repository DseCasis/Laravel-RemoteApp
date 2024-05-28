<!DOCTYPE html>
<html>
<form method="POST" action="{{ route('ssh.execute') }}">
    @csrf
    <div>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username">
        <input type="text" id="password" name="password">
    </div>
    <div>
        <label for="host">Host:</label>
        <input type="text" id="host" name="host">
    </div>
    <button type="submit">Conectar</button>
</form>

</html>
