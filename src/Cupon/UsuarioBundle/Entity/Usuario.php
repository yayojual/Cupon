<?php

namespace Cupon\UsuarioBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Cupon\UsuarioBundle\Entity\UsuarioRepository")
 * @DoctrineAssert\UniqueEntity("email")
 * @Assert\Callback(methods={"esDniValido"})
 */
class Usuario implements UserInterface
{
	//Métodos de UserInterface (getPassword y getSalt ya estaban definidos)
	function eraseCredentials()
	{
	}
	
	function getRoles()
	{
		return array('ROLE_USUARIO');
	}

	function getUsername()
	{
		return $this->getEmail();
	}
	
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
	 * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
	 * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
	 * @Assert\Length(min = 6)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text")
     */
    private $direccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="permite_email", type="boolean")
     */
    private $permiteEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetime")
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime")
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=9)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_tarjeta", type="string", length=20)
     */
    private $numeroTarjeta;

    /** @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad") */
	private $ciudad;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set permiteEmail
     *
     * @param boolean $permiteEmail
     * @return Usuario
     */
    public function setPermiteEmail($permiteEmail)
    {
        $this->permiteEmail = $permiteEmail;
    
        return $this;
    }

    /**
     * Get permiteEmail
     *
     * @return boolean 
     */
    public function getPermiteEmail()
    {
        return $this->permiteEmail;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;
    
        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Usuario
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Usuario
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set numeroTarjeta
     *
     * @param string $numeroTarjeta
     * @return Usuario
     */
    public function setNumeroTarjeta($numeroTarjeta)
    {
        $this->numeroTarjeta = $numeroTarjeta;
    
        return $this;
    }

    /**
     * Get numeroTarjeta
     *
     * @return string 
     */
    public function getNumeroTarjeta()
    {
        return $this->numeroTarjeta;
    }

    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad)
	{
		$this->ciudad = $ciudad;
	}

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
	
	public function __toString()
	{
		return $this->getNombre().' '.$this->getApellidos();
	}
	
	//Fecha de alta automatica
	public function __construct()
	{
		$this->fechaAlta = new \DateTime();
	}
	
	public function esDniValido(ExecutionContextInterface $context)
	{
		$dni = $this->getDni();
		// Comprobar que el formato sea correcto
		if (0 === preg_match("/\d{1,8}[a-z]/i", $dni)) {
			$context->addViolationAt('dni', 'El DNI introducido no tiene el
			formato correcto (entre 1 y 8 números seguidos de una letra, sin guiones y sin
			dejar ningún espacio en blanco)', array(), null);
			return;
		}
		// Comprobar que la letra cumple con el algoritmo
		$numero = substr($dni, 0, -1);
		$letra = strtoupper(substr($dni, -1));
		if ($letra != substr("TRWAGMYFPDXBNJZSQVHLCKE", strtr($numero, "XYZ","012")%23, 1)) {
			$context->addViolationAt('dni', 'La letra no coincide con el número
			del DNI. Comprueba que has escrito bien tanto el número como la letra',
			array(), null);
		}
	}
	
	/**
	* @Assert\True(message = "Debes tener al menos 18 años")
	*/
	public function isMayorDeEdad()
	{
		return $this->fechaNacimiento <= new \DateTime('today - 18 years');
	}
}