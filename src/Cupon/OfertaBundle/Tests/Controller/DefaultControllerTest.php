<?php

namespace Cupon\OfertaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
	/** @test */
	public function laPortadaSimpleRedirigeAUnaCiudad()
	{
		$client = static::createClient();
		$client->followRedirects(true);
		$crawler = $client->request('GET', '/');
		$ofertasActivas = $crawler->filter(
		'article section.descripcion a:contains("Comprar")'
		)->count();
		
		$this->assertEquals(1, $ofertasActivas,
		'La portada muestra una única oferta activa que se puede comprar'
		);
	}
	
	/** @test */
	public function losUsuariosPuedenRegistrarseDesdeLaPortada()
	{
		$client = static::createClient();
		$client->request('GET', '/');
		$crawler = $client->followRedirect();
		$numeroEnlacesRegistrarse = $crawler->filter(
		'html:contains("Regístrate")'
		)->count();
		
		$this->assertGreaterThan(0, $numeroEnlacesRegistrarse,
		'La portada muestra al menos un enlace o botón para registrarse'
		);
	}
	
	//....
}
