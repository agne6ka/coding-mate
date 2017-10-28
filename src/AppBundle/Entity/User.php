<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=24, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="string", length=255, nullable=true)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=64, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=64, nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=64, nullable=true)
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="goals", type="string", length=64, nullable=true)
     */
    private $goals;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="availability", type="datetime", length=24, nullable=true)
     */
    private $availability;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return User
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return User
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set goals
     *
     * @param string $goals
     *
     * @return User
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * Get goals
     *
     * @return string
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set availability
     *
     * @param string $availability
     *
     * @return User
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }
}

