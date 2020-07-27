<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_c;

    /**
     * @ORM\Column(type="string")
     */
    private $nom_c;

    /**
     * @ORM\Column(type="string")
     */
    private $prenom_c;

    /**
     * @ORM\Column(type="string")
     */
    private $commentaire_c;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_c;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdC(): ?string
    {
        return $this->id_c;
    }

    public function setIdC(string $id_c): self
    {
        $this->id_c = $id_c;

        return $this;
    }

    public function getNomC(): ?string
    {
        return $this->nom_c;
    }

    public function setNomC(string $nom_c): self
    {
        $this->nom_c = $nom_c;

        return $this;
    }

    public function getPrenomC(): ?string
    {
        return $this->prenom_c;
    }

    public function setPrenomC(string $prenom_c): self
    {
        $this->prenom_c = $prenom_c;

        return $this;
    }

    public function getCommentaireC(): ?string
    {
        return $this->commentaire_c;
    }

    public function setCommentaireC(string $commentaire_c): self
    {
        $this->commentaire_c = $commentaire_c;

        return $this;
    }

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->date_c;
    }

    public function setDateC(\DateTimeInterface $date_c): self
    {
        $this->date_c = $date_c;

        return $this;
    }
}
