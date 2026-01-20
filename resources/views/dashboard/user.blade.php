<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Usuario</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .header { background: #007bff; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        .header h1 { margin: 0; }
        .logout-btn { background: #dc3545; color: white; border: none; padding: 8px 15px; cursor: pointer; border-radius: 3px; }
        .logout-btn:hover { background: #c82333; }
        .container { max-width: 600px; margin: 30px auto; background: white; padding: 30px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { margin-bottom: 20px; }
        .info-group { margin-bottom: 15px; }
        .info-label { font-weight: bold; margin-bottom: 5px; }
        .info-value { padding: 10px; background: #f8f9fa; border-radius: 3px; border-left: 3px solid #007bff; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Mi Perfil</h1>
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="logout-btn">Cerrar Sesión</button>
        </form>
    </div>

    <div class="container">
        <h2>Información Personal</h2>
        <div class="info-group">
            <div class="info-label">Usuario</div>
            <div class="info-value">{{ $user->username }}</div>
        </div>
        <div class="info-group">
            <div class="info-label">Nombre</div>
            <div class="info-value">{{ $user->name }}</div>
        </div>
        <div class="info-group">
            <div class="info-label">Apellidos</div>
            <div class="info-value">{{ $user->surname }}</div>
        </div>
        <div class="info-group">
            <div class="info-label">Email</div>
            <div class="info-value">{{ $user->email }}</div>
        </div>
    </div>
</body>
</html>
