<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoCallToActionsInner[]
     */
    protected ?array $callToActions = null;

    /**
     * @var string
     */
    protected ?string $enablePersonalCallToAction = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductImagesInner[]
     */
    protected ?array $productImages = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductSellingPointsInner[]
     */
    protected ?array $productSellingPoints = null;

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoCallToActionsInner[]
     */
    public function getCallToActions(): ?array
    {
        return $this->callToActions;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoCallToActionsInner[] $callToActions
     * @return self
     */
    public function setCallToActions(?array $callToActions): self
    {
        $this->callToActions = $callToActions;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnablePersonalCallToAction(): ?string
    {
        return $this->enablePersonalCallToAction;
    }

    /**
     * @param string $enablePersonalCallToAction
     * @return self
     */
    public function setEnablePersonalCallToAction(?string $enablePersonalCallToAction): self
    {
        $this->enablePersonalCallToAction = $enablePersonalCallToAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductImagesInner[]
     */
    public function getProductImages(): ?array
    {
        return $this->productImages;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductImagesInner[] $productImages
     * @return self
     */
    public function setProductImages(?array $productImages): self
    {
        $this->productImages = $productImages;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductSellingPointsInner[]
     */
    public function getProductSellingPoints(): ?array
    {
        return $this->productSellingPoints;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductSellingPointsInner[] $productSellingPoints
     * @return self
     */
    public function setProductSellingPoints(?array $productSellingPoints): self
    {
        $this->productSellingPoints = $productSellingPoints;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->callToActions !== null) {
            $result['call_to_actions'] = $this->callToActions;
        }
        if ($this->enablePersonalCallToAction !== null) {
            $result['enable_personal_call_to_action'] = $this->enablePersonalCallToAction;
        }
        if ($this->productImages !== null) {
            $result['product_images'] = $this->productImages;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productSellingPoints !== null) {
            $result['product_selling_points'] = $this->productSellingPoints;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['call_to_actions'] ?? null) !== null && is_array($v)) {
            $obj->callToActions = array_map(fn ($vv) => \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoCallToActionsInner::fromArray($vv), $v);
        }
        if (($v = $data['enable_personal_call_to_action'] ?? null) !== null) {
            $obj->enablePersonalCallToAction = (string) $v;
        }
        if (($v = $data['product_images'] ?? null) !== null && is_array($v)) {
            $obj->productImages = array_map(fn ($vv) => \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_selling_points'] ?? null) !== null && is_array($v)) {
            $obj->productSellingPoints = array_map(fn ($vv) => \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductSellingPointsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
