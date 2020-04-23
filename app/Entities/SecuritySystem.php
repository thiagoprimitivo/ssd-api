<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="security_systems")
*/
class SecuritySystem
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
    * @ORM\Column(type="string", length=100)
    */
    private $description;

    /**
    * @ORM\Column(type="string", length=10)
    */
    private $acronyms;

    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    private $email;

    /**
    * @ORM\Column(type="string", length=50, nullable=true)
    */
    private $url;

    /**
    * @ORM\Column(type="string", length=50, options={"default":"Ativo"})
    */
    private $status;

    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    private $responsible_user;

    /**
    * @ORM\Column(type="datetime", nullable=true)
    */
    private $updated_at;

    /**
    * @ORM\Column(type="text", nullable=true)
    */
    private $new_justificative;

    /**
    * @ORM\Column(type="text", nullable=true)
    */
    private $last_justificative;

    public function __construct(
        $description,
        $acronyms,
        $email = null,
        $url = null,
        $status = 'Ativo',
        $updated_at = null,
        $responsible_user = null,
        $new_justificative = null,
        $last_justificative = null
    )
    {
        $this->description = $description;
        $this->acronyms = $acronyms;
        $this->email = $email;
        $this->url = $url;
        $this->status = $status;
        $this->updated_at = $updated_at;
        $this->responsible_user = $responsible_user;
        $this->new_justificative = $new_justificative;
        $this->last_justificative = $last_justificative;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getAcronyms()
    {
        return $this->acronyms;
    }

    public function setAcronyms($acronyms)
    {
        $this->acronyms = $acronyms;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getResponsibleUser()
    {
        return $this->responsible_user;
    }

    public function setResponsibleUser($responsible_user)
    {
        $this->responsible_user = $responsible_user;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getNewJustificative()
    {
        return $this->new_justificative;
    }

    public function setNewJustificative($new_justificative)
    {
        $this->new_justificative = $new_justificative;
    }

    public function getLastJustificative()
    {
        return $this->last_justificative;
    }

    public function setLastJustificative($last_justificative)
    {
        $this->last_justificative = $last_justificative;
    }
}
