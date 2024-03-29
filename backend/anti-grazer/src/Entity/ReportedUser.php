<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ReportedUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReportedUserRepository::class)]
#[ApiResource]
class ReportedUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reportedUsers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $reporter = null;

    #[ORM\Column]
    private ?int $reported = null;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReporter(): ?int
    {
        return $this->reporter;
    }

    public function setReporter(int $reporter): static
    {
        $this->reporter = $reporter;

        return $this;
    }

    public function getReported(): ?int
    {
        return $this->reported;
    }

    public function setReportedId(int $reportedId): static
    {
        $this->reportedId = $reportedId;

        return $this;
    }

}
