<?php

namespace Cupon\TiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\OfertaBundle\Util\Util;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @ORM\Entity
* @ORM\Entity(repositoryClass="Cupon\TiendaBundle\Entity\TiendaRepository")
*/
class Tienda implements UserInterface
{
	function eraseCredentials()
	{
	}

	function getRoles()
	{
		return array('ROLE_TIENDA');
	}
	
	function getUsername()
	{
		return $this->getLogin();
	}
	
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	*/
	protected $id;
	
	/** @ORM\Column(type="string", length=100) */
	protected $nombre;

	/** @ORM\Column(type="string", length=100) */
	protected $slug;

	/** @ORM\Column(type="string", length=10) */
	protected $login;

	/** @ORM\Column(type="string", length=255) */
	protected $password;

	/** @ORM\Column(type="string", length=255) */
	protected $salt;

	/** @ORM\Column(type="text") */
	protected $descripcion;

	/** @ORM\Column(type="text") */
	protected $direccion;

	/** @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad") */
	protected $ciudad;
	
    public function getId()
    {
        return $this->id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
		$this->slug = Util::getSlug($nombre);
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
	
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }
	
	public function __toString()
	{
		return $this->getNombre();
	}
}