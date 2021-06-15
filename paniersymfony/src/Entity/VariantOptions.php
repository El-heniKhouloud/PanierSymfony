<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * VariantOptions
 *
 * @ORM\Table(name="variant_options", indexes={@ORM\Index(name="IDX_BF90D7C13B69A9AF", columns={"variant_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\VariantOptionsRepository")
 */
class VariantOptions
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
     * @ORM\Column(name="detail", type="string", length=255, nullable=false)
     */
    private $detail;

    /**
     * @var \Variants
     *
     * @ORM\ManyToOne(targetEntity="Variants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="variant_id", referencedColumnName="id")
     * })
     */
    private $variant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProductDetails", mappedBy="variantOptions")
     */
    private $productDetails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productDetails = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    public function getVariant(): ?Variants
    {
        return $this->variant;
    }

    public function setVariant(?Variants $variant): self
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return Collection|ProductDetails[]
     */
    public function getProductDetails(): Collection
    {
        return $this->productDetails;
    }

    public function addProductDetail(ProductDetails $productDetail): self
    {
        if (!$this->productDetails->contains($productDetail)) {
            $this->productDetails[] = $productDetail;
            $productDetail->addVariantOption($this);
        }

        return $this;
    }

    public function removeProductDetail(ProductDetails $productDetail): self
    {
        if ($this->productDetails->removeElement($productDetail)) {
            $productDetail->removeVariantOption($this);
        }

        return $this;
    }

}
