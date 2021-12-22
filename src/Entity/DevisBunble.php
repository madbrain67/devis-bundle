<?php

declare(strict_types=1);

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Entity
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

namespace Madbrain67\DevisBundle\Entity;

/*
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Entity
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Entity
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 *
 * @ORM\Entity
 * @ORM\Table(name="devis_bundle")
 */
class DevisBundle
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    protected $slug;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    protected $create_at;

    public function __construct()
    {
        $this->create_at = new \DateTime();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setCreateAt(DateTime $create_at): self
    {
        $this->create_at = $create_at;

        return $this;
    }

    public function getCreateAt(): DateTime
    {
        return $this->create_at;
    }
}
