<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShippingAddress
 *
 * @ORM\Table(name="shipping_address")
 * @ORM\Entity(repositoryClass="App\Repository\ShippingAddressRepository")
 */
class ShippingAddress
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="ship_address", type="string", length=255, nullable=false)
     */
    private $shipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ship_city", type="string", length=255, nullable=false)
     */
    private $shipCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ship_state", type="string", length=255, nullable=true)
     */
    private $shipState;

    /**
     * @var string
     *
     * @ORM\Column(name="ship_country", type="string", length=255, nullable=false)
     */
    private $shipCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="ship_postal_code", type="integer", nullable=false)
     */
    private $shipPostalCode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getShipAddress(): ?string
    {
        return $this->shipAddress;
    }

    public function setShipAddress(string $shipAddress): self
    {
        $this->shipAddress = $shipAddress;

        return $this;
    }

    public function getShipCity(): ?string
    {
        return $this->shipCity;
    }

    public function setShipCity(string $shipCity): self
    {
        $this->shipCity = $shipCity;

        return $this;
    }

    public function getShipState(): ?string
    {
        return $this->shipState;
    }

    public function setShipState(?string $shipState): self
    {
        $this->shipState = $shipState;

        return $this;
    }

    public function getShipCountry(): ?string
    {
        return $this->shipCountry;
    }

    public function setShipCountry(string $shipCountry): self
    {
        $this->shipCountry = $shipCountry;

        return $this;
    }

    public function getShipPostalCode(): ?int
    {
        return $this->shipPostalCode;
    }

    public function setShipPostalCode(int $shipPostalCode): self
    {
        $this->shipPostalCode = $shipPostalCode;

        return $this;
    }


}
