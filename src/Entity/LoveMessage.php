<?php

namespace App\Entity;

use App\Repository\LoveMessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LoveMessageRepository::class)
 */
class LoveMessage
{


    public function __construct()
    {
        $this->time = new \DateTime('now');
    }
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="loveMessages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $writer_message;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getWriterMessage(): ?User
    {
        return $this->writer_message;
    }

    public function setWriterMessage(?User $writer_message): self
    {
        $this->writer_message = $writer_message;

        return $this;
    }
}
