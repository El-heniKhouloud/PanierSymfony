<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InternationalShippings
 *
 * @ORM\Table(name="international_shippings")
 * @ORM\Entity(repositoryClass="App\Repository\InternationalShippingsRepository")
 */
class InternationalShippings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="price_weight", type="string", length=255, nullable=false)
     */
    private $priceWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255, nullable=false)
     */
    private $weight;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPriceWeight(): ?string
    {
        return $this->priceWeight;
    }

    public function setPriceWeight(string $priceWeight): self
    {
        $this->priceWeight = $priceWeight;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }


}
