<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

      /**
     * @ORM\Column(type="text")
     */
    private $title;

      /**
     * @ORM\Column(type="text")
     */
    private $body;

    //geteri i seteri


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title=$title;
    }

    public function getBody()
    {
        return $this->body;
    }
    public function setBody($body)
    {
        $this->body=$body;
    }
}
