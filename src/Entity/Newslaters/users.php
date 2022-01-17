<?php

namespace App\Entity\Newslaters;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Newslaters\categories;
use Doctrine\Common\Collections\Collection;
use App\Repository\Newslaters\usersRepository;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=usersRepository::class)
 */
class users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_rgpd ;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $validation_token;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_valid = false;

    /**
     * @ORM\ManyToMany(targetEntity=categories::class, mappedBy="users")
     */
    private $categories;

    public function __construct()
    {
        $this->createdAt = new \Datetime();
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getIsRgpd(): ?bool
    {
        return $this->is_rgpd;
    }

    public function setIsRgpd(bool $is_rgpd): self
    {
        $this->is_rgpd = $is_rgpd;

        return $this;
    }

    public function getValidationToken(): ?string
    {
        return $this->validation_token;
    }

    public function setValidationToken(string $validation_token): self
    {
        $this->validation_token = $validation_token;

        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->is_valid;
    }

    public function setIsValid(bool $is_valid): self
    {
        $this->is_valid = $is_valid;

        return $this;
    }

    /**
     * @return Collection|categories[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addUser($this);
        }

        return $this;
    }

    public function removeCategory(categories $category): self
    {
        if ($this->categories->removeElement($category)) {
            $category->removeUser($this);
        }

        return $this;
    }
}
