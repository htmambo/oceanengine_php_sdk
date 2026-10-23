<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo implements \JsonSerializable
{
    /**
     * 按钮文案
     * @var string
     */
    protected ?string $buttonDesc = null;

    /**
     * 动态创意 0-不启用 1-启用
     * @var int
     */
    protected ?int $dynamicCreativity = null;

    /**
     * 图片配文
     * @var string
     */
    protected ?string $imageDesc = null;

    /**
     * 留资卡片样式 1-无图卡 2-小图卡 3-头图卡 4-报价卡 卡片样式，图片位置存储在上一级的UrlStruct
     * @var int
     */
    protected ?int $leadsCardStyleType = null;

    /**
     * 线索类型 1-手机号线索 2-微信线索
     * @var int
     */
    protected ?int $leadsType = null;

    /**
     * 线索验证类型 1-智能验证 2-全量验证
     * @var int
     */
    protected ?int $leadsVerificationType = null;

    /**
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo
     */
    protected ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo $priceInfo = null;

    /**
     * 卖点
     * @var string[]
     */
    protected ?array $sellingPoints = null;

    /**
     * 按钮文案
     * @return string
     */
    public function getButtonDesc(): ?string
    {
        return $this->buttonDesc;
    }

    /**
     * 按钮文案
     * @param string $buttonDesc
     * @return self
     */
    public function setButtonDesc(?string $buttonDesc): self
    {
        $this->buttonDesc = $buttonDesc;
        return $this;
    }

    /**
     * 动态创意 0-不启用 1-启用
     * @return int
     */
    public function getDynamicCreativity(): ?int
    {
        return $this->dynamicCreativity;
    }

    /**
     * 动态创意 0-不启用 1-启用
     * @param int $dynamicCreativity
     * @return self
     */
    public function setDynamicCreativity(?int $dynamicCreativity): self
    {
        $this->dynamicCreativity = $dynamicCreativity;
        return $this;
    }

    /**
     * 图片配文
     * @return string
     */
    public function getImageDesc(): ?string
    {
        return $this->imageDesc;
    }

    /**
     * 图片配文
     * @param string $imageDesc
     * @return self
     */
    public function setImageDesc(?string $imageDesc): self
    {
        $this->imageDesc = $imageDesc;
        return $this;
    }

    /**
     * 留资卡片样式 1-无图卡 2-小图卡 3-头图卡 4-报价卡 卡片样式，图片位置存储在上一级的UrlStruct
     * @return int
     */
    public function getLeadsCardStyleType(): ?int
    {
        return $this->leadsCardStyleType;
    }

    /**
     * 留资卡片样式 1-无图卡 2-小图卡 3-头图卡 4-报价卡 卡片样式，图片位置存储在上一级的UrlStruct
     * @param int $leadsCardStyleType
     * @return self
     */
    public function setLeadsCardStyleType(?int $leadsCardStyleType): self
    {
        $this->leadsCardStyleType = $leadsCardStyleType;
        return $this;
    }

    /**
     * 线索类型 1-手机号线索 2-微信线索
     * @return int
     */
    public function getLeadsType(): ?int
    {
        return $this->leadsType;
    }

    /**
     * 线索类型 1-手机号线索 2-微信线索
     * @param int $leadsType
     * @return self
     */
    public function setLeadsType(?int $leadsType): self
    {
        $this->leadsType = $leadsType;
        return $this;
    }

    /**
     * 线索验证类型 1-智能验证 2-全量验证
     * @return int
     */
    public function getLeadsVerificationType(): ?int
    {
        return $this->leadsVerificationType;
    }

    /**
     * 线索验证类型 1-智能验证 2-全量验证
     * @param int $leadsVerificationType
     * @return self
     */
    public function setLeadsVerificationType(?int $leadsVerificationType): self
    {
        $this->leadsVerificationType = $leadsVerificationType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo
     */
    public function getPriceInfo(): ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo
    {
        return $this->priceInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo $priceInfo
     * @return self
     */
    public function setPriceInfo(?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo $priceInfo): self
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    /**
     * 卖点
     * @return string[]
     */
    public function getSellingPoints(): ?array
    {
        return $this->sellingPoints;
    }

    /**
     * 卖点
     * @param string[] $sellingPoints
     * @return self
     */
    public function setSellingPoints(?array $sellingPoints): self
    {
        $this->sellingPoints = $sellingPoints;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->buttonDesc !== null) {
            $result['button_desc'] = $this->buttonDesc;
        }
        if ($this->dynamicCreativity !== null) {
            $result['dynamic_creativity'] = $this->dynamicCreativity;
        }
        if ($this->imageDesc !== null) {
            $result['image_desc'] = $this->imageDesc;
        }
        if ($this->leadsCardStyleType !== null) {
            $result['leads_card_style_type'] = $this->leadsCardStyleType;
        }
        if ($this->leadsType !== null) {
            $result['leads_type'] = $this->leadsType;
        }
        if ($this->leadsVerificationType !== null) {
            $result['leads_verification_type'] = $this->leadsVerificationType;
        }
        if ($this->priceInfo !== null) {
            $result['price_info'] = $this->priceInfo;
        }
        if ($this->sellingPoints !== null) {
            $result['selling_points'] = $this->sellingPoints;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['button_desc'] ?? null) !== null) {
            $obj->buttonDesc = (string) $v;
        }
        if (($v = $data['dynamic_creativity'] ?? null) !== null) {
            $obj->dynamicCreativity = (int) $v;
        }
        if (($v = $data['image_desc'] ?? null) !== null) {
            $obj->imageDesc = (string) $v;
        }
        if (($v = $data['leads_card_style_type'] ?? null) !== null) {
            $obj->leadsCardStyleType = (int) $v;
        }
        if (($v = $data['leads_type'] ?? null) !== null) {
            $obj->leadsType = (int) $v;
        }
        if (($v = $data['leads_verification_type'] ?? null) !== null) {
            $obj->leadsVerificationType = (int) $v;
        }
        if (($v = $data['price_info'] ?? null) !== null && is_array($v)) {
            $obj->priceInfo = \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo::fromArray($v);
        }
        if (($v = $data['selling_points'] ?? null) !== null && is_array($v)) {
            $obj->sellingPoints = $v;
        }
        return $obj;
    }
}
