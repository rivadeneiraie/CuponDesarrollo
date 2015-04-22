<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


class DefaultController extends Controller
{
    public function portadaAction($ciudad = null)
	{

		if (null == $ciudad) {
			$ciudad = $this->container->getParameter('cupon.ciudad_por_defecto');
		}

		$em = $this->getDoctrine()->getManager();

		$fechaPublicacion = new \DateTime('today');
        $fechaPublicacion->setTime(23, 59, 59);

		$oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
			'ciudad' => $ciudad,
			'fecha_publicacion' => $fechaPublicacion
		));

		return $this->render('OfertaBundle:Default:portada.html.twig', array('oferta' => $oferta));
	}
}
