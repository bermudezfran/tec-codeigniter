<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('EventModel'); // Cargar el modelo EventModel
		setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain', 'Spanish');

    }

	public function index()
	{
		$data['featuredEvents'] = $this->EventModel->getFeaturedEvents();
		$data['events'] = $this->EventModel->getAllEvents();

		// Transformar los eventos para agregar el campo time_formatted
		foreach ($data['events'] as &$event) {
			// Asegurarse de que el campo time no sea nulo antes de formatearlo
			$event['time_formatted'] = isset($event['time']) ? date('H:i', strtotime($event['time'])) : null;

			// Convertir event_date a un string si es un objeto
			if ($event['event_date'] instanceof DateTime) {
				$event['event_date'] = $event['event_date']->format('Y-m-d');
			}
		}
		
		$data['faqs'] = [
			[
				'id' => 1,
				'question' => '¿Qué es Trinchera en CABA?',
				'answer' => 'Un espacio de encuentro para músicos, productores, peñeros, difusores de nuestra música y gente que le gusta el folklore.',
				'is_active' => 1
			],
			[
				'id' => 2,
				'question' => '¿Qué espacios hay dentro de Trinchera en CABA?',
				'answer' => '- La agenda de peñas.<br>- Los destacados de cada finde.<br>- Una playlist de Spotify.',
				'is_active' => 1
			],
			[
				'id' => 3,
				'question' => '¿Cómo hago para que mi flyer se publique en la página?',
				'answer' => 'Envialo a cualquiera de nuestras redes sociales ubicadas en la sección de Contacto.',
				'is_active' => 1
			],
			[
				'id' => 4,
				'question' => '¿Qué música encuentro en la playlist de Spotify?',
				'answer' => 'Músicos autogestivos y los clásicos de siempre. Es una lista de canciones que periódicamente se actualiza.',
				'is_active' => 1
			],
			[
				'id' => 5,
				'question' => '¿Cómo hago para formar parte de la playlist?',
				'answer' => 'Envianos tu tema por mail o por cualquiera de nuestras redes sociales.',
				'is_active' => 1
			],
			[
				'id' => 6,
				'question' => '¿Sortean entradas para eventos?',
				'answer' => 'Sí. Muchas veces nos dan entradas gratis, 2x1, 3x2, etc, para sortear entre nuestros seguidores. Si queres que hagamos un sorteo de entradas para tu evento, escribinos a nuestras redes y lo organizamos.',
				'is_active' => 1
			],
			[
				'id' => 7,
				'question' => '¿Cómo podemos apoyar este proyecto?',
				'answer' => 'Compartiendo las redes con tus amigos peñeros. También podes apoyarnos a través del botón que dice "Cafecito".',
				'is_active' => 1
			],
			[
				'id' => 8,
				'question' => '¿Hacen publicidad de peñas?',
				'answer' => 'Sí, hacemos publicidad, sorteos, etc. En esta página como en todas las redes. Contanos de tu proyecto y vemos cómo podemos ayudarte.',
				'is_active' => 1
			]
		];		
		
		$data['contacts'] = [
			[
				'id' => 1,
				'type' => 'WHATSAPP',
				'url' => 'https://wa.me/5491155170992',
				'icon' => 'bi bi-whatsapp'
			],
			[
				'id' => 2,
				'type' => 'EMAIL',
				'url' => 'mailto:Trincheraencaba@gmail.com',
				'icon' => 'bi bi-envelope'
			],
			[
				'id' => 3,
				'type' => 'INSTAGRAM',
				'url' => 'https://www.instagram.com/trincheraencaba/',
				'icon' => 'bi bi-instagram'
			],
			[
				'id' => 4,
				'type' => 'FACEBOOK',
				'url' => 'https://www.facebook.com/TrincheraenCABA',
				'icon' => 'bi bi-facebook'
			]
		];

		
		$this->load->view('index', $data);
	}
}
