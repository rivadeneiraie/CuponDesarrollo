<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


class DefaultController extends Controller
{
    public function portadaAction($ciudad)
	{

		$em = $this->getDoctrine()->getManager();

		$fechaPublicacion = new \DateTime('today');
        $fechaPublicacion->setTime(23, 59, 59);

		$oferta = $em->getRepository('OfertaBundle:Oferta')->findOfertaDelDia($ciudad);

		if (!$oferta) {
			throw $this->createNotFoundException('No se ha encontrado la oferta del día en la ciudad seleccionada');
		}

		return $this->render('OfertaBundle:Default:portada.html.twig', array('oferta' => $oferta));
	}
}
