<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #5a3f1b;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        label {
            font-weight: bold;
            color: #5a3f1b;
        }
        input[type="text"], input[type="date"], input[type="time"], textarea, select {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 0.5rem;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        button {
            background-color: #5a3f1b;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 0.75rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #4a2e16;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agregar Nuevo Evento</h1>
    
        <form action="<?= base_url('events/store') ?>" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="event_date">Fecha:</label>
            <input type="date" id="event_date" name="event_date" required>
            
            <label for="time">Hora:</label>
            <input type="time" id="time" name="time" required>
            
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="image_url">Imagen URL:</label>
            <input type="text" id="image_url" name="image_url" required>
            
            <label for="facebook_url">Facebook URL:</label>
            <input type="text" id="facebook_url" name="facebook_url" required>
            
            <label for="instagram_url">Instagram URL:</label>
            <input type="text" id="instagram_url" name="instagram_url" required>
            
            <label for="location">Ubicación:</label>
            <select id="location" name="location" required>
                <option value="">Selecciona una ubicación</option>
                <option value="CABA">CABA</option>
                <option value="Conurbano">Conurbano</option>
            </select>

            <label for="is_featured">¿Evento destacado?</label>
            <select id="is_featured" name="is_featured">
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
        
            <label for="info_event">Información adicional del evento:</label>
            <textarea id="info_event" name="info_event"></textarea>
            
            <button type="submit">Guardar</button>
        </form>
        
    </div>
    
</body>
</html>
