<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity(repositoryClass="App\Repository\StatusRepository")
 */
class Status
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
     * @var bool
     *
     * @ORM\Column(name="payment", type="boolean", nullable=false)
     */
    private $payment;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipped", type="boolean", nullable=false)
     */
    private $shipped;

    /**
     * @var bool
     *
     * @ORM\Column(name="item_recieved", type="boolean", nullable=false)
     */
    private $itemRecieved;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPayment(): ?bool
    {
        return $this->payment;
    }

    public function setPayment(bool $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getShipped(): ?bool
    {
        return $this->shipped;
    }

    public function setShipped(bool $shipped): self
    {
        $this->shipped = $shipped;

        return $this;
    }

    public function getItemRecieved(): ?bool
    {
        return $this->itemRecieved;
    }

    public function setItemRecieved(bool $itemRecieved): self
    {
        $this->itemRecieved = $itemRecieved;

        return $this;
    }


}
