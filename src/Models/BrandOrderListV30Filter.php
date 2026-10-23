<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30Filter implements \JsonSerializable
{
    /**
     * 投放产品
     * @var \Oceanengine\Models\BrandOrderListV30FilterAdForm[]
     */
    protected ?array $adForm = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30FilterAdvancedOption
     */
    protected ?string $advancedOption = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30FilterAppOrigin
     */
    protected ?string $appOrigin = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30FilterAuditStatus[]
     */
    protected ?array $auditStatus = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30FilterClassify
     */
    protected ?string $classify = null;

    /**
     * 创建截止时间，格式：2024-01-01
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * 创建起始时间，格式：2024-01-01
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * 投放截止时间，格式：2024-01-01
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30FilterGdSendType
     */
    protected ?string $gdSendType = null;

    /**
     * 预订单ID
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * 预订单名称
     * @var string
     */
    protected ?string $orderName = null;

    /**
     * 预订单状态
     * @var \Oceanengine\Models\BrandOrderListV30FilterOrderStatus[]
     */
    protected ?array $orderStatus = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30FilterProType
     */
    protected ?string $proType = null;

    /**
     * 投放起始时间，格式：2024-01-01
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 投放产品
     * @return \Oceanengine\Models\BrandOrderListV30FilterAdForm[]
     */
    public function getAdForm(): ?array
    {
        return $this->adForm;
    }

    /**
     * 投放产品
     * @param \Oceanengine\Models\BrandOrderListV30FilterAdForm[] $adForm
     * @return self
     */
    public function setAdForm(?array $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30FilterAdvancedOption
     */
    public function getAdvancedOption(): ?string
    {
        return $this->advancedOption;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30FilterAdvancedOption $advancedOption
     * @return self
     */
    public function setAdvancedOption(?string $advancedOption): self
    {
        $this->advancedOption = $advancedOption;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30FilterAppOrigin
     */
    public function getAppOrigin(): ?string
    {
        return $this->appOrigin;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30FilterAppOrigin $appOrigin
     * @return self
     */
    public function setAppOrigin(?string $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30FilterAuditStatus[]
     */
    public function getAuditStatus(): ?array
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30FilterAuditStatus[] $auditStatus
     * @return self
     */
    public function setAuditStatus(?array $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30FilterClassify
     */
    public function getClassify(): ?string
    {
        return $this->classify;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30FilterClassify $classify
     * @return self
     */
    public function setClassify(?string $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * 创建截止时间，格式：2024-01-01
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * 创建截止时间，格式：2024-01-01
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 创建起始时间，格式：2024-01-01
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * 创建起始时间，格式：2024-01-01
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 投放截止时间，格式：2024-01-01
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放截止时间，格式：2024-01-01
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30FilterGdSendType
     */
    public function getGdSendType(): ?string
    {
        return $this->gdSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30FilterGdSendType $gdSendType
     * @return self
     */
    public function setGdSendType(?string $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * 预订单ID
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * 预订单ID
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * 预订单名称
     * @return string
     */
    public function getOrderName(): ?string
    {
        return $this->orderName;
    }

    /**
     * 预订单名称
     * @param string $orderName
     * @return self
     */
    public function setOrderName(?string $orderName): self
    {
        $this->orderName = $orderName;
        return $this;
    }

    /**
     * 预订单状态
     * @return \Oceanengine\Models\BrandOrderListV30FilterOrderStatus[]
     */
    public function getOrderStatus(): ?array
    {
        return $this->orderStatus;
    }

    /**
     * 预订单状态
     * @param \Oceanengine\Models\BrandOrderListV30FilterOrderStatus[] $orderStatus
     * @return self
     */
    public function setOrderStatus(?array $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30FilterProType
     */
    public function getProType(): ?string
    {
        return $this->proType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30FilterProType $proType
     * @return self
     */
    public function setProType(?string $proType): self
    {
        $this->proType = $proType;
        return $this;
    }

    /**
     * 投放起始时间，格式：2024-01-01
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放起始时间，格式：2024-01-01
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adForm !== null) {
            $result['ad_form'] = $this->adForm;
        }
        if ($this->advancedOption !== null) {
            $result['advanced_option'] = $this->advancedOption;
        }
        if ($this->appOrigin !== null) {
            $result['app_origin'] = $this->appOrigin;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->classify !== null) {
            $result['classify'] = $this->classify;
        }
        if ($this->createEndTime !== null) {
            $result['create_end_time'] = $this->createEndTime;
        }
        if ($this->createStartTime !== null) {
            $result['create_start_time'] = $this->createStartTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        if ($this->orderStatus !== null) {
            $result['order_status'] = $this->orderStatus;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_form'] ?? null) !== null && is_array($v)) {
            $obj->adForm = $v;
        }
        if (($v = $data['advanced_option'] ?? null) !== null) {
            $obj->advancedOption = (string) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null) {
            $obj->appOrigin = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null && is_array($v)) {
            $obj->auditStatus = $v;
        }
        if (($v = $data['classify'] ?? null) !== null) {
            $obj->classify = (string) $v;
        }
        if (($v = $data['create_end_time'] ?? null) !== null) {
            $obj->createEndTime = (string) $v;
        }
        if (($v = $data['create_start_time'] ?? null) !== null) {
            $obj->createStartTime = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (string) $v;
        }
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        if (($v = $data['order_status'] ?? null) !== null && is_array($v)) {
            $obj->orderStatus = $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
