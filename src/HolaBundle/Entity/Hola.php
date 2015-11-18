<?php

namespace HolaBundle\Entity;

/**
 * Hola
 */
class Hola
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tareas;

    /**
     * @var boolean
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $creado;


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
     * Set tareas
     *
     * @param string $tareas
     *
     * @return Hola
     */
    public function setTareas($tareas)
    {
        $this->tareas = $tareas;

        return $this;
    }

    /**
     * Get tareas
     *
     * @return string
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Hola
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     *
     * @return Hola
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime
     */
    public function getCreado()
    {
        return $this->creado;
    }
}

