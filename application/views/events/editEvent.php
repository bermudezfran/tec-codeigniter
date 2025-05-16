<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 1.5rem;
            font-size: 24px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], input[type="time"], textarea, select {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        button {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Evento</h1>

        <form action="<?= base_url('events/update/' . $event['id']) ?>" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="<?= esc($event['name']) ?>" required>
            
            <label for="event_date">Fecha:</label>
            <input type="date" id="event_date" name="event_date" value="<?= esc($event['event_date']) ?>" required>
            
            <label for="time">Hora:</label>
            <input type="time" id="time" name="time" value="<?= esc($event['time']) ?>" required>

            <label for="description">Descripción:</label>
            <textarea id="description" name="description"><?= esc($event['description']) ?></textarea>
            
            <label for="image_url">Imagen URL:</label>
            <input type="text" id="image_url" name="image_url" value="<?= esc($event['image_url']) ?>">
            
            <label for="facebook_url">Facebook URL:</label>
            <input type="text" id="facebook_url" name="facebook_url" value="<?= esc($event['facebook_url']) ?>">
            
            <label for="instagram_url">Instagram URL:</label>
            <input type="text" id="instagram_url" name="instagram_url" value="<?= esc($event['instagram_url']) ?>">

            <!-- Campo para evento destacado -->
            <label for="is_featured">¿Evento destacado?</label>
            <select id="is_featured" name="is_featured">
                <option value="0" <?= $event['is_featured'] == 0 ? 'selected' : '' ?>>No</option>
                <option value="1" <?= $event['is_featured'] == 1 ? 'selected' : '' ?>>Sí</option>
            </select>

            <!-- Campo para la ubicación (CABA o Conurbano) -->
            <label for="location">Ubicación:</label>
            <select id="location" name="location" required>
                <option value="CABA" <?= $event['location'] == 'CABA' ? 'selected' : '' ?>>CABA</option>
                <option value="Conurbano" <?= $event['location'] == 'Conurbano' ? 'selected' : '' ?>>Conurbano</option>
            </select>
        
            <!-- Campo para información adicional -->
            <label for="info_event">Información adicional del evento:</label>
            <textarea id="info_event" name="info_event"><?= esc($event['info_event']) ?></textarea>
            
            <button type="submit">Guardar</button>
        </form>
        
    </div>
</body>
</html>
