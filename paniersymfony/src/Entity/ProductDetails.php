<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductDetails
 *
 * @ORM\Table(name="product_details", indexes={@ORM\Index(name="IDX_A3FF103A4584665A", columns={"product_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductDetailsRepository")
 */
class ProductDetails
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
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discount", type="integer", nullable=true)
     */
    private $discount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="new", type="boolean", nullable=true)
     */
    private $new;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VariantOptions", inversedBy="productDetails")
     * @ORM\JoinTable(name="product_details_variant_options",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_details_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="variant_options_id", referencedColumnName="id")
     *   }
     * )
     */
    private $variantOptions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->variantOptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getNew(): ?bool
    {
        return $this->new;
    }

    public function setNew(?bool $new): self
    {
        $this->new = $new;

        return $this;
    }

    public function getProduct(): ?Products
    {
        return $this->product;
    }

    public function setProduct(?Products $product): self
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return Collection|VariantOptions[]
     */
    public function getVariantOptions(): Collection
    {
        return $this->variantOptions;
    }

    public function addVariantOption(VariantOptions $variantOption): self
    {
        if (!$this->variantOptions->contains($variantOption)) {
            $this->variantOptions[] = $variantOption;
        }

        return $this;
    }

    public function removeVariantOption(VariantOptions $variantOption): self
    {
        $this->variantOptions->removeElement($variantOption);

        return $this;
    }

}
