<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderTerminateV10ResponseData implements \JsonSerializable
{
    /**
     * 终止成功的订单ID
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo $terminateQuotaInfo = null;

    /**
     * 终止成功的订单ID
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * 终止成功的订单ID
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo
     */
    public function getTerminateQuotaInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo
    {
        return $this->terminateQuotaInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo $terminateQuotaInfo
     * @return self
     */
    public function setTerminateQuotaInfo(?\Oceanengine\Models\QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo $terminateQuotaInfo): self
    {
        $this->terminateQuotaInfo = $terminateQuotaInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        if ($this->terminateQuotaInfo !== null) {
            $result['terminate_quota_info'] = $this->terminateQuotaInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        if (($v = $data['terminate_quota_info'] ?? null) !== null && is_array($v)) {
            $obj->terminateQuotaInfo = \Oceanengine\Models\QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo::fromArray($v);
        }
        return $obj;
    }
}
