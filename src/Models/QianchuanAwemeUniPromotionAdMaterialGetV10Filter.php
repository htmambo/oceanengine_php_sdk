<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionAdMaterialGetV10Filter implements \JsonSerializable
{
    /**
     * 查询数据结束日期，格式：YYYY-MM-DD，默认订单结束时间/当天
     * @var string
     */
    protected ?string $endDate = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType
     */
    protected ?string $materialType = null;

    /**
     * 查询数据开始日期，格式：YYYY-MM-DD，默认订单创建时间
     * @var string
     */
    protected ?string $startDate = null;

    /**
     * 查询数据结束日期，格式：YYYY-MM-DD，默认订单结束时间/当天
     * @return string
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * 查询数据结束日期，格式：YYYY-MM-DD，默认订单结束时间/当天
     * @param string $endDate
     * @return self
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * 查询数据开始日期，格式：YYYY-MM-DD，默认订单创建时间
     * @return string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * 查询数据开始日期，格式：YYYY-MM-DD，默认订单创建时间
     * @param string $startDate
     * @return self
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endDate !== null) {
            $result['end_date'] = $this->endDate;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->startDate !== null) {
            $result['start_date'] = $this->startDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_date'] ?? null) !== null) {
            $obj->endDate = (string) $v;
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['start_date'] ?? null) !== null) {
            $obj->startDate = (string) $v;
        }
        return $obj;
    }
}
