<?php

// src/Cupon/OfertaBundle/Entity/Venta.php

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Venta")
*/
class Venta
{

	/** @ORM\Column(type="datetime") */
	protected $fecha;

	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Cupon\OfertaBundle\Entity\Oferta")
	 * @ORM\JoinColumn(name="oferta_id", referencedColumnName="id")
	*/
	protected $oferta;

	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Cupon\UsuarioBundle\Entity\Usuario")
	 * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
	*/
	protected $usuario;



    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Venta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set oferta
     *
     * @param \Cupon\OfertaBundle\Entity\Oferta $oferta
     * @return Venta
     */
    public function setOferta(\Cupon\OfertaBundle\Entity\Oferta $oferta)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get oferta
     *
     * @return \Cupon\OfertaBundle\Entity\Oferta 
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set usuario
     *
     * @param \Cupon\UsuarioBundle\Entity\Usuario $usuario
     * @return Venta
     */
    public function setUsuario(\Cupon\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Cupon\UsuarioBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
