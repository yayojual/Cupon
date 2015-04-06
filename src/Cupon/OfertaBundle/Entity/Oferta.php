<?php

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\OfertaBundle\Util\Util;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Oferta
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Cupon\OfertaBundle\Entity\OfertaRepository")
 */
class Oferta
{
    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     *
     * @ORM\Column(name="slug", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $slug;

    /**
     *
     * @ORM\Column(name="descripcion", type="text")
     * @Assert\NotBlank()
     * @Assert\Length(min = 30)
     */
    private $descripcion;

    /**
     *
     * @ORM\Column(name="condiciones", type="text")
     */
    private $condiciones;

    /**
     *
     * @ORM\Column(name="ruta_foto", type="string", length=255)
     * @Assert\Range(min = 0)
     */
    private $rutaFoto;
    
    /**
    * @Assert\Image(maxSize = "500k")
    */
    protected $foto;

    /**
     *
     * @ORM\Column(name="precio", type="decimal", scale=2)
     * 
     * @Assert\Range(min = 0)
     */
    private $precio;

    /**
     *
     * @ORM\Column(name="descuento", type="decimal", scale=2)
     */
    private $descuento;

    /**
     *
     * @ORM\Column(name="fecha_publicacion", type="datetime", nullable=true)
     * @Assert\DateTime
     */
    private $fechaPublicacion;

    /**
     *
     * @ORM\Column(name="fecha_expiracion", type="datetime", nullable=true)
     * @Assert\DateTime
     */
    private $fechaExpiracion;

    /**
     *
     * @ORM\Column(name="compras", type="integer")
     */
    private $compras;

    /**
     *
     * @ORM\Column(name="umbral", type="integer")
     * @Assert\Type(type="integer")
     * @Assert\Range(min = 0)
     */
    private $umbral;

    /**
     *
     * @ORM\Column(name="revisada", type="boolean")
     * @Assert\Type(type="bool")
     */
    private $revisada;

    /** @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad") */
    private $ciudad;

    /** @ORM\ManyToOne(targetEntity="Cupon\TiendaBundle\Entity\Tienda") */
    private $tienda;


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
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);
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
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set condiciones
     *
     * @param text $condiciones
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;
    }

    /**
     * Get condiciones
     *
     * @return text 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set rutaFoto
     *
     * @param string $rutaFoto
     */
    public function setRutaFoto($rutaFoto)
    {
        $this->rutaFoto = $rutaFoto;
    }

    /**
     * Get rutaFoto
     *
     * @return string 
     */
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }

    /**
     * Set precio
     *
     * @param decimal $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * Get precio
     *
     * @return decimal 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set descuento
     *
     * @param decimal $descuento
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    }

    /**
     * Get descuento
     *
     * @return decimal 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set fechaExpiracion
     *
     * @param \DateTime $fechaExpiracion
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fechaExpiracion = $fechaExpiracion;
    }

    /**
     * Get fechaExpiracion
     *
     * @return \DateTime 
     */
    public function getFechaExpiracion()
    {
        return $this->fechaExpiracion;
    }

    /**
     * Set compras
     *
     * @param integer $compras
     */
    public function setCompras($compras)
    {
        $this->compras = $compras;
    }

    /**
     * Get compras
     *
     * @return integer 
     */
    public function getCompras()
    {
        return $this->compras;
    }

    /**
     * Set umbral
     *
     * @param integer $umbral
     */
    public function setUmbral($umbral)
    {
        $this->umbral = $umbral;
    }

    /**
     * Get umbral
     *
     * @return integer 
     */
    public function getUmbral()
    {
        return $this->umbral;
    }

    /**
     * Set revisada
     *
     * @param boolean $revisada
     */
    public function setRevisada($revisada)
    {
        $this->revisada = $revisada;
    }

    /**
     * Get revisada
     *
     * @return boolean 
     */
    public function getRevisada()
    {
        return $this->revisada;
    }

    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function getCiudad()
    {
	return $this->ciudad;
    }

    public function setTienda(\Cupon\TiendaBundle\Entity\Tienda $tienda)
    {
	$this->tienda = $tienda;
    }
	
    public function getTienda()
    {
	return $this->tienda;
    }
	
    public function __toString()
    {
	return $this->getNombre();
    }
        
    /**
    * @Assert\True(message = "La fecha de expiración debe ser posterior a
    *                         la fecha de publicación")
    */
    public function isFechaValida()
    {
        if ($this->fechaPublicacion == null
        ||
        $this->fechaExpiracion == null) {
        return true;
        }

        return $this->fechaExpiracion > $this->fechaPublicacion;
    }
    
    /**
    * @param UploadedFile $foto
    */
    public function setFoto(UploadedFile $foto = null)
    {
        $this->foto = $foto;
    }
    
    /**
    * @return UploadedFile
    */
    public function getFoto()
    {
        return $this->foto;
    }
    
    public function subirFoto($directorioDestino)
    {
        if (null === $this->foto) {
            return;
        }
        
        $nombreArchivoFoto = uniqid('cupon-').'-foto1.jpg';
        $this->foto->move($directorioDestino, $nombreArchivoFoto);
        $this->setRutaFoto($nombreArchivoFoto);
    }
}
