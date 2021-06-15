<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductToOrders
 *
 * @ORM\Table(name="product_to_orders", indexes={@ORM\Index(name="IDX_AD5D47FEB670B536", columns={"product_detail_id"}), @ORM\Index(name="IDX_AD5D47FECFFE9AD6", columns={"orders_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductToOrdersRepository")
 */
class ProductToOrders
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
     * @var \ProductDetails
     *
     * @ORM\ManyToOne(targetEntity="ProductDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_detail_id", referencedColumnName="id")
     * })
     */
    private $productDetail;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orders_id", referencedColumnName="id")
     * })
     */
    private $orders;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductDetail(): ?ProductDetails
    {
        return $this->productDetail;
    }

    public function setProductDetail(?ProductDetails $productDetail): self
    {
        $this->productDetail = $productDetail;

        return $this;
    }

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(?Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }


}
