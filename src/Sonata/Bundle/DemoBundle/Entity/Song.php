<?php

namespace Sonata\Bundle\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Song
 *
 * @ORM\Table(name="song")
 * @ORM\Entity
 */
class Song
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Author", mappedBy="song", cascade={"persist"})
     */
    private $authors;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;


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
     * Set title
     *
     * @param string $title
     * @return Song
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add authors
     *
     * @param \Sonata\Bundle\DemoBundle\Entity\Author $authors
     * @return Song
     */
    public function addAuthor(\Sonata\Bundle\DemoBundle\Entity\Author $authors)
    {
        $this->authors[] = $authors;

        return $this;
    }

    /**
     * Remove authors
     *
     * @param \Sonata\Bundle\DemoBundle\Entity\Author $authors
     */
    public function removeAuthor(\Sonata\Bundle\DemoBundle\Entity\Author $authors)
    {
        $this->authors->removeElement($authors);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthors()
    {
        return $this->authors;
    }
}
