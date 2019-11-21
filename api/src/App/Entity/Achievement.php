<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * The vgo:Achievement is a reward gained in a game due to some event accomplished in the game. Achievements are commonly used in game industry to reward players for having accomplished tasks in the game. This ontology defines various subclasses of vgo:Achievement, which are all based on the classification presented by Markus Montola et al. \[Markus Montola, Timo Nummenmaa, Andrés Lucero, Marion Boberg, and Hannu Korhonen, 2009, “Applying game achievement systems to enhance user experience in a photo sharing service”, In Proceedings of the 13th International MindTrek Conference: Everyday Life in the Ubiquitous Era (MindTrek '09)\] http://dl.acm.org/citation.cfm?id=1621859.
 *
 * @see http://purl.org/net/VideoGameOntology#Achievement Documentation on Schema.org
 *
 * @ORM\Entity
 * @ApiResource(iri="http://purl.org/net/VideoGameOntology#Achievement")
 */
class Achievement
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
