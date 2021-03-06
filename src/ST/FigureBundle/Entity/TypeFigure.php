<?php

namespace ST\FigureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Figure
 *
 * @ORM\Table(name="typefigure")
 * @ORM\Entity(repositoryClass="ST\FigureBundle\Repository\TypeFigureRepository")
 */
class TypeFigure
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;
	
	 /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

	public function setId($id)
    {
        $this->id = $id;
		return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Figure
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
