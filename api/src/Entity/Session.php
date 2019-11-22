<?php

declare(strict_types=1);

namespace Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * The vgo:Session class describes a session of gameplay. A session can be a single round of chess, a round of Counter-Strike, one half-time of soccer or one race of Formula 1. vgo:Session class can be used to store gameplay information, especially for analytical reasons.
 *
 * @see http://purl.org/net/VideoGameOntology#Session Documentation on Schema.org
 *
 * @ORM\Entity
 * @ApiResource(iri="http://purl.org/net/VideoGameOntology#Session")
 */
class Session
{
    /**
     * @var int|null
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
