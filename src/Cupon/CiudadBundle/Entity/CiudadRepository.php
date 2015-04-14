<?php

namespace Cupon\CiudadBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CiudadRepository extends EntityRepository
{
	public function findCercanas($ciudad_id)
	{
            $em = $this->getEntityManager();
            $consulta = $em->createQuery('
            SELECT c
            FROM CiudadBundle:Ciudad c
            WHERE c.id != :id
            ORDER BY c.nombre ASC');
            $consulta->setMaxResults(5);
            $consulta->setParameter('id', $ciudad_id);
		
            return $consulta->getResult();
	}
        
        public function queryTodasLasOfertas($ciudad)
        {
            $em = $this->getEntityManager();
            $consulta = $em->createQuery('
            SELECT o, t FROM OfertaBundle:Oferta o
            JOIN o.tienda t JOIN o.ciudad c
            WHERE c.slug = :ciudad
            ORDER BY o.fechaPublicacion DESC');
            $consulta->setParameter('ciudad', $ciudad);
            
            return $consulta;
        }
        
        public function findTodasLasOfertas($ciudad)
        {
            return $this->queryTodasLasOfertas($ciudad)->getResult();
        }
        
        /**
        * Encuentra todos los usuarios asociados a la ciudad indicada
        *
        * @param string $ciudad El slug de la ciudad para la que se buscan sus usuarios
        */
        public function findTodosLosUsuarios($ciudad)
        {
            return $this->queryTodosLosUsuarios($ciudad)->getResult();
        }
        /**
        * Método especial asociado con `findTodosLosUsuarios()` y que devuelve solamente
        * la consulta necesaria para obtener todos los usuarios de la ciudad indicada.
        * Se utiliza para la paginación de resultados.
        *
        * @param string $ciudad El slug de la ciudad
        */
        public function queryTodosLosUsuarios($ciudad)
        {
            $em = $this->getEntityManager();
            $consulta = $em->createQuery('
                SELECT u
                FROM UsuarioBundle:Usuario u JOIN u.ciudad c
                WHERE c.slug = :ciudad
                ORDER BY u.apellidos ASC
            ');
            $consulta->setParameter('ciudad', $ciudad);
            return $consulta;
        }
        
        /**
        * Encuentra todas las tiendas asociadas a la ciudad indicada
        *
        * @param string $ciudad El slug de la ciudad para la que se buscan sus tiendas
        */
        public function findTodasLasTiendas($ciudad)
        {
            return $this->queryTodasLasTiendas($ciudad)->getResult();
        }
        /**
        * Método especial asociado con `findTodasLasTiendas()` y que devuelve solamente
        * la consulta necesaria para obtener todas las tiendas de la ciudad indicada.
        * Se utiliza para la paginación de resultados.
        *
        * @param string $ciudad El slug de la ciudad
        */
        //Todas las tiendas sin filtrar por ciudad
        public function queryTodasLasTiendas()
        {
            $em = $this->getEntityManager();
            $consulta = $em->createQuery('
                SELECT t
                FROM TiendaBundle:Tienda t
                ORDER BY t.nombre ASC
            ');
            $consulta->useResultCache(true, 600);
            return $consulta;
        }
}