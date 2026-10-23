<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderGetV10Filtering implements \JsonSerializable
{
    /**
     * 计划创建结束时间，与order_create_start_date搭配使用，格式：\"yyyy-mm-dd\"，时间跨度不能超过180天
     * @var string
     */
    protected ?string $orderCreateEndDate = null;

    /**
     * 计划创建开始时间，格式：\"yyyy-mm-dd\"，不传默认查所有
     * @var string
     */
    protected ?string $orderCreateStartDate = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10FilteringStatus
     */
    protected ?string $status = null;

    /**
     * 计划创建结束时间，与order_create_start_date搭配使用，格式：\"yyyy-mm-dd\"，时间跨度不能超过180天
     * @return string
     */
    public function getOrderCreateEndDate(): ?string
    {
        return $this->orderCreateEndDate;
    }

    /**
     * 计划创建结束时间，与order_create_start_date搭配使用，格式：\"yyyy-mm-dd\"，时间跨度不能超过180天
     * @param string $orderCreateEndDate
     * @return self
     */
    public function setOrderCreateEndDate(?string $orderCreateEndDate): self
    {
        $this->orderCreateEndDate = $orderCreateEndDate;
        return $this;
    }

    /**
     * 计划创建开始时间，格式：\"yyyy-mm-dd\"，不传默认查所有
     * @return string
     */
    public function getOrderCreateStartDate(): ?string
    {
        return $this->orderCreateStartDate;
    }

    /**
     * 计划创建开始时间，格式：\"yyyy-mm-dd\"，不传默认查所有
     * @param string $orderCreateStartDate
     * @return self
     */
    public function setOrderCreateStartDate(?string $orderCreateStartDate): self
    {
        $this->orderCreateStartDate = $orderCreateStartDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderCreateEndDate !== null) {
            $result['order_create_end_date'] = $this->orderCreateEndDate;
        }
        if ($this->orderCreateStartDate !== null) {
            $result['order_create_start_date'] = $this->orderCreateStartDate;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_create_end_date'] ?? null) !== null) {
            $obj->orderCreateEndDate = (string) $v;
        }
        if (($v = $data['order_create_start_date'] ?? null) !== null) {
            $obj->orderCreateStartDate = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
