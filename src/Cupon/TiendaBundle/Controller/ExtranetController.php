<?php

namespace Cupon\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cupon\TiendaBundle\Form\Extranet\TiendaType;
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
    
    public function perfilAction(){
        $peticion = $this->getRequest();
        
        $tienda = $this->get('security.context')->getToken()->getUser();
        $formulario = $this->createForm(new TiendaType(), $tienda);
        
        $passwordOriginal = $formulario->getData()->getPassword();
        $formulario->handleRequest($peticion);
        
        if ($formulario->isValid()) {
            if (null == $tienda->getPassword()) {
                // La tienda no cambia su contraseña, utilizar la original
                $tienda->setPassword($passwordOriginal);
            } else {
                // La tienda cambia su contraseña, codificar su valor
                $encoder = $this->get('security.encoder_factory')
                        ->getEncoder($tienda);
                $passwordCodificado = $encoder->encodePassword(
                $tienda->getPassword(),
                $tienda->getSalt()
                );
                $tienda->setPassword($passwordCodificado);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($tienda);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('info',
            'Los datos de tu perfil se han actualizado correctamente');

            return $this->redirect(
                $this->generateUrl('extranet_portada')
            );
        }
        
        return $this->render('TiendaBundle:Extranet:perfil.html.twig', array(
            'tienda' => $tienda,
            'formulario' => $formulario->createView()
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
    
    public function ofertaVentasAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ventas = $em->getRepository('OfertaBundle:Oferta')
        ->findVentasByOferta($id);
        return $this->render('TiendaBundle:Extranet:ventas.html.twig', array(
        'oferta' => $ventas[0]->getOferta(),
        'ventas' => $ventas
        ));
    }
}