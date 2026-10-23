<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionCreateV30RequestPromotionCardInfo implements \JsonSerializable
{
    /**
     * 行动号召，长度[1,10]
     * @var \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoCallToActionsInner[]
     */
    protected ?array $callToActions = null;

    /**
     * 行动号召是否开启智能生成
     * @var bool
     */
    protected ?bool $enablePersonalCallToAction = null;

    /**
     * 卡片配图，长度[1,10]
     * @var \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductImagesInner[]
     */
    protected ?array $productImages = null;

    /**
     * 卡片标题
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 推广卖点，长度[1,10]
     * @var \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductSellingPointsInner[]
     */
    protected ?array $productSellingPoints = null;

    /**
     * 行动号召，长度[1,10]
     * @return \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoCallToActionsInner[]
     */
    public function getCallToActions(): ?array
    {
        return $this->callToActions;
    }

    /**
     * 行动号召，长度[1,10]
     * @param \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoCallToActionsInner[] $callToActions
     * @return self
     */
    public function setCallToActions(?array $callToActions): self
    {
        $this->callToActions = $callToActions;
        return $this;
    }

    /**
     * 行动号召是否开启智能生成
     * @return bool
     */
    public function getEnablePersonalCallToAction(): ?bool
    {
        return $this->enablePersonalCallToAction;
    }

    /**
     * 行动号召是否开启智能生成
     * @param bool $enablePersonalCallToAction
     * @return self
     */
    public function setEnablePersonalCallToAction(?bool $enablePersonalCallToAction): self
    {
        $this->enablePersonalCallToAction = $enablePersonalCallToAction;
        return $this;
    }

    /**
     * 卡片配图，长度[1,10]
     * @return \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductImagesInner[]
     */
    public function getProductImages(): ?array
    {
        return $this->productImages;
    }

    /**
     * 卡片配图，长度[1,10]
     * @param \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductImagesInner[] $productImages
     * @return self
     */
    public function setProductImages(?array $productImages): self
    {
        $this->productImages = $productImages;
        return $this;
    }

    /**
     * 卡片标题
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 卡片标题
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 推广卖点，长度[1,10]
     * @return \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductSellingPointsInner[]
     */
    public function getProductSellingPoints(): ?array
    {
        return $this->productSellingPoints;
    }

    /**
     * 推广卖点，长度[1,10]
     * @param \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductSellingPointsInner[] $productSellingPoints
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
            $obj->callToActions = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoCallToActionsInner::fromArray($vv), $v);
        }
        if (($v = $data['enable_personal_call_to_action'] ?? null) !== null) {
            $obj->enablePersonalCallToAction = (bool) $v;
        }
        if (($v = $data['product_images'] ?? null) !== null && is_array($v)) {
            $obj->productImages = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_selling_points'] ?? null) !== null && is_array($v)) {
            $obj->productSellingPoints = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfoProductSellingPointsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
