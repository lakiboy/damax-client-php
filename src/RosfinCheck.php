<?php

declare(strict_types=1);

namespace Damax\Client;

final class RosfinCheck
{
    private const TYPE_PERSON = 4;

    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function id(): int
    {
        return $this->data['id'];
    }

    public function type(): int
    {
        return $this->data['type'];
    }

    public function person(): bool
    {
        return self::TYPE_PERSON === $this->type();
    }

    public function fullName(): array
    {
        return $this->data['fullName'];
    }

    public function birthDate(): ?string
    {
        return $this->data['birthDate'] ?? null;
    }

    public function birthPlace(): ?string
    {
        return $this->data['birthPlace'] ?? null;
    }

    public function description(): ?string
    {
        return $this->data['description'] ?? null;
    }

    public function address(): ?string
    {
        return $this->data['address'] ?? null;
    }

    public function resolution(): ?string
    {
        return $this->data['resolution'] ?? null;
    }

    public function passport(): ?string
    {
        return $this->data['passport'] ?? null;
    }
}
