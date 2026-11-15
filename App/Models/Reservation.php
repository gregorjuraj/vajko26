<?php

namespace App\Models;

use Framework\Core\Model;

class Reservation extends Model
{
    protected ?int $id = null;
    protected string $start_at = '';
    protected string $end_at = '';
    protected string $note = '';
    protected string $status = 'valid';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartAt(): string
    {
        return $this->start_at;
    }

    public function getEndAt(): string
    {
        return $this->end_at;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStartAt(string $startAt): void
    {
        $this->start_at = $startAt;
    }

    public function setEndAt(string $endAt): void
    {
        $this->end_at = $endAt;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getServiceLinks(): array
    {
        return $this->getAllRelated(
            ReservationService::class,
            'reservation_id'
        );
    }
}