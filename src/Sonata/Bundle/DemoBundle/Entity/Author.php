<?php

namespace Sonata\Bundle\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity
 */
class Author
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Song", inversedBy="authors", cascade={"persist"})
     * @ORM\JoinColumn(name="song_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $song;

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
     * Set name
     *
     * @param string $name
     * @return Author
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

    /**
     * Set id
     *
     * @param string $id
     * @return Author
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set song
     *
     * @param \Sonata\Bundle\DemoBundle\Entity\Song $song
     * @return Author
     */
    public function setSong(\Sonata\Bundle\DemoBundle\Entity\Song $song = null)
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Get song
     *
     * @return \Sonata\Bundle\DemoBundle\Entity\Song 
     */
    public function getSong()
    {
        return $this->song;
    }
}
