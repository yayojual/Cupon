<?php

namespace Cupon\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ExtranetController extends Controller
{
    public function portadaAction()
    {
	$em = $this->getDoctrine()->getManager();
        
        $tienda = $this->get('security.context')->getToken()->getUser();
        $ofertas = $em->getRepository('TiendaBundle:Tienda')
        ->findOfertasRecientes($tienda->getId());
        
        return $this->render('TiendaBundle:Extranet:portada.html.twig', 
            array('ofertas' => $ofertas
        ));
    }
	
    public function loginAction()
    {
	$peticion = $this->getRequest();
	$sesion = $peticion->getSession();
	$error = $peticion->attributes->get(
	SecurityContext::AUTHENTICATION_ERROR,
	$sesion->get(SecurityContext::AUTHENTICATION_ERROR)
	);

	return $this->render('TiendaBundle:Extranet:login.html.twig', array(
		'error' => $error
	));
    }
    
    public function ofertaEditarAction($id)
    {
        $oferta = $em->getRepository('OfertaBundle:Oferta')->find($id);
        if (false === $this->get('security.context')->isGranted(
            'ROLE_EDITAR_OFERTA', $oferta
        )) {
            throw new AccessDeniedException();
        }
        // ...
    }
}