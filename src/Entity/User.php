<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @method string getUserIdentifier()
 */
#[ORM\Entity(repositoryClass:UserRepository::class)]


class User implements \Symfony\Component\Security\Core\User\UserInterface
{
    
     #[ORM\Id] 
     #[ORM\GeneratedValue]
     #[ORM\Column]
    
    private ?int $id=null;
   
    private ?int $age=null;

    #[ORM\Column(length:255)]
    private ?string $nom=null;

    #[ORM\Column(length:255)]
    private ?string $prenom=null;

    #[ORM\Column(length:255)]
    private ?string $email=null;

    #[ORM\Column(length:255)]
    private ?string $mdp=null;

    #[ORM\Column(length:255)]
    private ?string $numtel=null;

    #[ORM\Column(length:255)]
    private ?string $adresse=null;

    #[ORM\Column(length:255)]
    private ?string $role;


    #[ORM\Column(length:255,nullable:true)]
    private $reset_token;
    /**
     * @return mixed
     */
    public function getResetToken()
    {
        return $this->reset_token;
    }
    /**
     * @param mixed $reset_token
     */
    public function setResetToken($reset_token): void
    {
        $this->reset_token = $reset_token;
    }


    public function getId(): ?int
    {
        return $this->id;
    }
    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * @param int|null $age
     */
    public function setAge(?int $age): void
    {
        $this->age = $age;
    }


    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }


    public function getRoles(): array
    {

        // guarantee every user at least has ROLE_USER
        $roles =[];
        $roles = $this->role;

        return array_unique((array)$roles);
    }

    public function getPassword(): string
    {
        return (string)$this->mdp;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUsername(): ?string
    {
        return $this->nom;
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement @method string getUserIdentifier()
    }
}
