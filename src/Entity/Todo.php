<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="APP_TODOS")
 * @ORM\Entity(repositoryClass="App\Repository\TodoRepository")
 */
class Todo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", nullable=false)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40, unique=false, nullable=false)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=200, unique=false, nullable=false)
     */
    private $desc;

    /**
     * @ORM\Column(type="datetime", length=17, unique=false, nullable=false)
     */
    private $datetime;

    /**
     * @ORM\Column(type="integer", length=2, unique=false, nullable=false)
     */
    private $state;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    private $uid;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param mixed $datetime
     */
    public function setDatetime($datetime): void
    {
        $this->datetime = $datetime;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid): void
    {
        $this->uid = $uid;
    }

}