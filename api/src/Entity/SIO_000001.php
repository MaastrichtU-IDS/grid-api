<?php

declare(strict_types=1);

namespace Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @see http://semanticscience.org/resource/SIO_000001 Documentation on Schema.org
 *
 * @ORM\Entity
 * @ApiResource(iri="http://semanticscience.org/resource/SIO_000001")
 */
class SIO_000001
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
