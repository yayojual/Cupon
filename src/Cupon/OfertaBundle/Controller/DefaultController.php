<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function portadaAction($ciudad)
    {
		$em = $this->getDoctrine()->getManager();
		
		/* $oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
			'ciudad' => 1
		)); */
		
		$oferta = $em->getRepository('OfertaBundle:Oferta')->findOfertaDelDia($ciudad);
		
		/*$oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
		'ciudad' => $this->container->getParameter('cupon.ciudad_por_defecto')));*/ /*,
		'fechaPublicacion' => new \DateTime('today')));*/ //Por fecha de publicación no encuentra
		
		if (!$oferta) {
            throw $this->createNotFoundException('No se ha encontrado ninguna oferta del día en la ciudad seleccionada');
        }
		
		return $this->render(
			'OfertaBundle:Default:portada.html.twig',
			array('oferta' => $oferta)
		);
	}
	
	public function ofertaAction($ciudad, $slug)
	{
		$em = $this->getDoctrine()->getManager();
		$oferta = $em->getRepository('OfertaBundle:Oferta')->findOferta($ciudad, $slug);
		
		//Control de errores
		if (!$oferta) {throw $this->createNotFoundException('No existe la oferta');}
		
		$relacionadas=$em->getRepository('OfertaBundle:Oferta')->findRelacionadas($ciudad);
		return $this->render('OfertaBundle:Default:detalle.html.twig', array(
			'oferta' => $oferta,
			'relacionadas' => $relacionadas
		));
	}
}
