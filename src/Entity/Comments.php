<?php

namespace App\Entity;

use App\Entity\Post;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_c", type="string", length=255, nullable=false)
     */
    private $nomC;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_c", type="string", length=255, nullable=false)
     */
    private $prenomC;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires_c", type="text", length=0, nullable=false)
     */
    private $commentairesC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_c", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateC = 'CURRENT_TIMESTAMP';

    /**
     * @var \Post
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_c", referencedColumnName="id_p")
     * })
     */
    private $idC;

    /**
     * @ORM\ManyToOne(targetEntity=Post::class, inversedBy="comments")
     */
    private $post;

    public function getNomC(): ?string
    {
        return $this->nomC;
    }

    public function setNomC(string $nomC): self
    {
        $this->nomC = $nomC;

        return $this;
    }

    public function getPrenomC(): ?string
    {
        return $this->prenomC;
    }

    public function setPrenomC(string $prenomC): self
    {
        $this->prenomC = $prenomC;

        return $this;
    }

    public function getCommentairesC(): ?string
    {
        return $this->commentairesC;
    }

    public function setCommentairesC(string $commentairesC): self
    {
        $this->commentairesC = $commentairesC;

        return $this;
    }

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->dateC;
    }

    public function setDateC(\DateTimeInterface $dateC): self
    {
        $this->dateC = $dateC;

        return $this;
    }

    public function getIdC(): ?Post
    {
        return $this->idC;
    }

    public function setIdC(?Post $idC): self
    {
        $this->idC = $idC;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): self
    {
        $this->post = $post;

        return $this;
    }


}
