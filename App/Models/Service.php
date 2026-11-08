<?php

namespace App\Models;

use Framework\Core\Model;

class Service extends Model
{
    protected ?int $id = null;
    protected string $name = '';
    protected string $description = '';
    protected string $price = '0.00';
    protected int $duration = 0;
    protected bool $active = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }
}
