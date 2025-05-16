<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <style>
        /* Tus estilos actuales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        h1 {
            color: #6c4f3d;
        }
        a, .logout-button {
            color: #6c4f3d;
            text-decoration: none;
            background-color: #f1e3d3;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 5px;
        }
        a:hover, .logout-button:hover {
            background-color: #e0d3c5;
        }
        .table-container {
            width: 100%;
            max-width: 95%;
            overflow-y: auto;
            max-height: 70vh;
            margin-top: 20px;
            margin-bottom: 25px;
            padding: 0 10px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            word-wrap: break-word;
            font-size: 14px;
        }
        th {
            background-color: #6c4f3d;
            color: #fff;
        }
        td img {
            border-radius: 8px;
            max-width: 80px;
        }
        button {
            background-color: #e07a5f;
            border: none;
            color: #fff;
            padding: 6px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #cf6d5f;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Eventos</h1>

    <div style="display: flex; justify-content: space-between; align-items: center; width: 80%; max-width: 800px;">
        <a href="<?= base_url('events/create') ?>">Agregar Nuevo Evento</a>
        
        <!-- Botón de Cerrar Sesión -->
        <form action="<?= base_url('auth/logout') ?>" method="POST">
            <button class="logout-button" type="submit">Cerrar Sesión</button>
        </form>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Info Evento</th>
                    <th>Destacado</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventsByMonth as $month => $events): ?>
                    <tr>
                        <th colspan="12">Eventos en <?= date('F Y', strtotime($month . '-01')) ?></th>
                    </tr>
                    <?php foreach ($events as $event): ?>
                        <tr>
                            <td><?= esc($event['name']) ?></td>
                            <td><?= $event['event_date']; ?></td>
                            <td><?= $event['time'] ?? 'No especificado' ?></td>
                            <td><?= esc($event['description']) ?></td>
                            <td><img src="<?= esc($event['image_url']) ?>" alt="Imagen del evento"></td>
                            <td>
                                <?php if (!empty($event['facebook_url'])): ?>
                                    <a href="<?= esc($event['facebook_url']) ?>" target="_blank">Facebook</a>
                                <?php else: ?>
                                    No disponible
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (!empty($event['instagram_url'])): ?>
                                    <a href="<?= esc($event['instagram_url']) ?>" target="_blank">Instagram</a>
                                <?php else: ?>
                                    No disponible
                                <?php endif; ?>
                            </td>
                            <td><?= esc($event['info_event']) ?? 'No disponible' ?></td>
                            <td><?= $event['is_featured'] ? 'Sí' : 'No' ?></td>
                            <td><?= esc($event['location']) ?></td>
                            <td>
                                <a href="<?= base_url('events/edit/' . $event['id']) ?>">Editar</a>
                                <form action="<?= base_url('events/delete/' . $event['id']) ?>" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este evento? Si confirma no podrá recuperarlo.')">
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
