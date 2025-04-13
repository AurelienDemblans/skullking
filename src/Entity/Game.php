<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $startedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $endedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column]
    private array $gameState = [];

    #[ORM\Column]
    private ?int $gameRound = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $playerTurn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartedAt(): ?\DateTimeImmutable
    {
        return $this->startedAt;
    }

    public function setStartedAt(?\DateTimeImmutable $startedAt): static
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    public function getEndedAt(): ?\DateTimeImmutable
    {
        return $this->endedAt;
    }

    public function setEndedAt(?\DateTimeImmutable $endedAt): static
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getGameState(): array
    {
        return $this->gameState;
    }

    public function setGameState(array $gameState): static
    {
        $this->gameState = $gameState;

        return $this;
    }

    public function getGameRound(): ?int
    {
        return $this->gameRound;
    }

    public function setGameRound(int $gameRound): static
    {
        $this->gameRound = $gameRound;

        return $this;
    }

    public function getPlayerTurn(): ?string
    {
        return $this->playerTurn;
    }

    public function setPlayerTurn(?string $playerTurn): static
    {
        $this->playerTurn = $playerTurn;

        return $this;
    }
}
