<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_E52FFDEEB8B5B102", columns={"international_shipping_id"}), @ORM\UniqueConstraint(name="UNIQ_E52FFDEE4887F3F8", columns={"shipping_id"}), @ORM\UniqueConstraint(name="UNIQ_E52FFDEE6BF700BD", columns={"status_id"}), @ORM\UniqueConstraint(name="UNIQ_E52FFDEE4C3A3BB", columns={"payment_id"})}, indexes={@ORM\Index(name="IDX_E52FFDEEA76ED395", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     */
    private $phone;

    /**
     * @var bool
     *
     * @ORM\Column(name="gift_wrap", type="boolean", nullable=false)
     */
    private $giftWrap;

    /**
     * @var string
     *
     * @ORM\Column(name="order_number", type="string", length=255, nullable=false)
     */
    private $orderNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=false)
     */
    private $orderDate;

    /**
     * @var \ShippingAddress
     *
     * @ORM\ManyToOne(targetEntity="ShippingAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
     * })
     */
    private $shipping;

    /**
     * @var \Payments
     *
     * @ORM\ManyToOne(targetEntity="Payments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;

    /**
     * @var \Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \InternationalShippings
     *
     * @ORM\ManyToOne(targetEntity="InternationalShippings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="international_shipping_id", referencedColumnName="id")
     * })
     */
    private $internationalShipping;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getGiftWrap(): ?bool
    {
        return $this->giftWrap;
    }

    public function setGiftWrap(bool $giftWrap): self
    {
        $this->giftWrap = $giftWrap;

        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->orderDate;
    }

    public function setOrderDate(\DateTimeInterface $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getShipping(): ?ShippingAddress
    {
        return $this->shipping;
    }

    public function setShipping(?ShippingAddress $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    public function getPayment(): ?Payments
    {
        return $this->payment;
    }

    public function setPayment(?Payments $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getInternationalShipping(): ?InternationalShippings
    {
        return $this->internationalShipping;
    }

    public function setInternationalShipping(?InternationalShippings $internationalShipping): self
    {
        $this->internationalShipping = $internationalShipping;

        return $this;
    }


}
