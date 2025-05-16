<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <style>
        /* Estilos existentes */
        body { font-family: 'Arial',sans-serif; background:#f4f4f9; color:#333; margin:0; padding:0; display:flex; justify-content:center; align-items:center; min-height:100vh; flex-direction:column; }
        h1 { color:#6c4f3d; }
        a, .logout-button { color:#6c4f3d; text-decoration:none; background:#f1e3d3; padding:10px 15px; border-radius:5px; transition:0.3s; margin:5px; }
        a:hover, .logout-button:hover { background:#e0d3c5; }
        .table-container { width:100%; max-width:95%; overflow-y:auto; max-height:70vh; margin:20px 0; padding:0 10px; box-sizing:border-box; }
        table { width:100%; border-collapse:collapse; background:#fff; box-shadow:0 0 10px rgba(0,0,0,0.1); }
        th, td { padding:8px; text-align:left; border-bottom:1px solid #ddd; font-size:14px; }
        th { background:#6c4f3d; color:#fff; }
        td img { border-radius:8px; max-width:80px; }
        button { background:#e07a5f; border:none; color:#fff; padding:6px 10px; border-radius:5px; cursor:pointer; transition:0.3s; }
        button:hover { background:#cf6d5f; }
        form { display:inline; }
    </style>
</head>
<body>
    <h1>Eventos</h1>
    <div style="display:flex; justify-content:space-between; align-items:center; width:80%; max-width:800px;">
        <a href="<?= base_url('events/create') ?>">Agregar Nuevo Evento</a>
        <form action="<?= base_url('auth/logout') ?>" method="POST">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
            <button class="logout-button" type="submit">Cerrar Sesión</button>
        </form>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Orden</th>
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
                <tr><th colspan="12">Eventos en <?= date('F Y', strtotime($month.'-01')) ?></th></tr>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <!-- Flechas de orden -->
                        <td style="white-space:nowrap; text-align:center;">
                            <div style="display:inline-flex; flex-direction:column;">
                                <!-- Subir -->
                                <form action="<?= base_url('events/move_up/'.$event['id']) ?>" method="POST" style="margin-bottom:4px;">
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                                    <button type="submit" title="Subir">&uarr;</button>
                                </form>
                                <!-- Bajar -->
                                <form action="<?= base_url('events/move_down/'.$event['id']) ?>" method="POST">
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                                    <button type="submit" title="Bajar">&darr;</button>
                                </form>
                            </div>
                        </td>
                        <!-- Nombre -->
                        <td><?= esc($event['name']) ?></td>
                        <!-- Fecha -->
                        <td><?= esc($event['event_date']) ?></td>
                        <!-- Hora -->
                        <td><?= !empty($event['time']) ? esc($event['time']) : 'No especificado' ?></td>
                        <!-- Descripción -->
                        <td><?= esc($event['description']) ?></td>
                        <!-- Imagen si existe -->
                        <td>
                            <?php if (!empty($event['image_url'])): ?>
                                <img src="<?= esc($event['image_url']) ?>" alt="Evento <?= esc($event['name']) ?>">
                            <?php endif; ?>
                        </td>
                        <!-- Facebook -->
                        <td><?= !empty($event['facebook_url']) ? '<a href="'.esc($event['facebook_url']).'" target="_blank">Facebook</a>' : 'No disponible' ?></td>
                        <!-- Instagram -->
                        <td><?= !empty($event['instagram_url']) ? '<a href="'.esc($event['instagram_url']).'" target="_blank">Instagram</a>' : 'No disponible' ?></td>
                        <!-- Info Evento -->
                        <td><?= !empty($event['info_event']) ? esc($event['info_event']) : 'No disponible' ?></td>
                        <!-- Destacado -->
                        <td><?= $event['is_featured'] ? 'Sí' : 'No' ?></td>
                        <!-- Ubicación -->
                        <td><?= esc($event['location']) ?></td>
                        <!-- Acciones -->
                        <td>
                            <a href="<?= base_url('events/edit/'.$event['id']) ?>">Editar</a>
                            <form action="<?= base_url('events/delete/'.$event['id']) ?>" method="POST" onsubmit="return confirm('¿Eliminar este evento? Esta acción no se puede deshacer.')" style="display:inline;">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
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
