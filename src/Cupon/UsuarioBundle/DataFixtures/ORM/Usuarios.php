<?php

namespace Cupon\UsuarioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Cupon\UsuarioBundle\Entity\Usuario;

class Usuarios implements FixtureInterface, ContainerAwareInterface
{
	private $container;
	
	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}
	
	public function load(ObjectManager $manager)
	{
		for ($i=1; $i<=500; $i++) {
			$usuario = new Usuario();
			$passwordEnClaro = 'usuario'.$i;
			$salt = md5(time());
			$encoder = $this->container->get('security.encoder_factory')->getEncoder($usuario);
			$password = $encoder->encodePassword($passwordEnClaro, $salt);
			$usuario->setPassword($password);
			$usuario->setSalt($salt);
		}
	}
}