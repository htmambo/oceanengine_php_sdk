<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyResultGetV30ResponseData implements \JsonSerializable
{
    /**
     * 创建的开票申请单
     * @var \Oceanengine\Models\InvoiceApplyResultGetV30ResponseDataApplyOrdersInner[]
     */
    protected ?array $applyOrders = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyResultGetV30DataHandleStatus
     */
    protected ?string $handleStatus = null;

    /**
     * 创建的开票申请单
     * @return \Oceanengine\Models\InvoiceApplyResultGetV30ResponseDataApplyOrdersInner[]
     */
    public function getApplyOrders(): ?array
    {
        return $this->applyOrders;
    }

    /**
     * 创建的开票申请单
     * @param \Oceanengine\Models\InvoiceApplyResultGetV30ResponseDataApplyOrdersInner[] $applyOrders
     * @return self
     */
    public function setApplyOrders(?array $applyOrders): self
    {
        $this->applyOrders = $applyOrders;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyResultGetV30DataHandleStatus
     */
    public function getHandleStatus(): ?string
    {
        return $this->handleStatus;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyResultGetV30DataHandleStatus $handleStatus
     * @return self
     */
    public function setHandleStatus(?string $handleStatus): self
    {
        $this->handleStatus = $handleStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyOrders !== null) {
            $result['apply_orders'] = $this->applyOrders;
        }
        if ($this->handleStatus !== null) {
            $result['handle_status'] = $this->handleStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_orders'] ?? null) !== null && is_array($v)) {
            $obj->applyOrders = array_map(fn ($vv) => \Oceanengine\Models\InvoiceApplyResultGetV30ResponseDataApplyOrdersInner::fromArray($vv), $v);
        }
        if (($v = $data['handle_status'] ?? null) !== null) {
            $obj->handleStatus = (string) $v;
        }
        return $obj;
    }
}
