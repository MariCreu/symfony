<?php

namespace BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Category
{
    private $id;

    private $name;

    private $description; 
    
    protected $entry;
    
    public function __construct(){
        $this->entry= new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
    public function getEntries(){
        return $this->entry;
    }
}
