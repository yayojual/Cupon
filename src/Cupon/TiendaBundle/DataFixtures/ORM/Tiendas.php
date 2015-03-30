<?php

namespace Cupon\TiendaBundle\DataFixtures\ORM;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Tiendas extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	private $container;
	
	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}
	
	public function load(ObjectManager $manager)
	{
		// ...
		foreach ($ciudades as $ciudad) {
			for ($j=1; $j<=rand(2, 5); $j++) {
				$tienda = new Tienda();
				// ...
				$tienda->setLogin('tienda'.$i);
				$tienda->setSalt(md5(time()));
				$encoder = $this->container->get('security.encoder_factory')
				->getEncoder($tienda);
				$passwordEnClaro = 'tienda'.$i;
				$passwordCodificado = $encoder->encodePassword(
				$passwordEnClaro,
				$tienda->getSalt()
				);
				$tienda->setPassword($passwordCodificado);
				// ...

				$manager->persist($tienda);
			}
		}
	$manager->flush();
	}
}