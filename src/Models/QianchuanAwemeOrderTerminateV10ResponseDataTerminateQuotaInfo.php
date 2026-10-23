<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderTerminateV10ResponseDataTerminateQuotaInfo implements \JsonSerializable
{
    /**
     * 终止订单配额
     * @var int
     */
    protected ?int $terminateQuotaSum = null;

    /**
     * 已终止订单数
     * @var int
     */
    protected ?int $terminateQuotaUsed = null;

    /**
     * 终止订单配额
     * @return int
     */
    public function getTerminateQuotaSum(): ?int
    {
        return $this->terminateQuotaSum;
    }

    /**
     * 终止订单配额
     * @param int $terminateQuotaSum
     * @return self
     */
    public function setTerminateQuotaSum(?int $terminateQuotaSum): self
    {
        $this->terminateQuotaSum = $terminateQuotaSum;
        return $this;
    }

    /**
     * 已终止订单数
     * @return int
     */
    public function getTerminateQuotaUsed(): ?int
    {
        return $this->terminateQuotaUsed;
    }

    /**
     * 已终止订单数
     * @param int $terminateQuotaUsed
     * @return self
     */
    public function setTerminateQuotaUsed(?int $terminateQuotaUsed): self
    {
        $this->terminateQuotaUsed = $terminateQuotaUsed;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->terminateQuotaSum !== null) {
            $result['terminate_quota_sum'] = $this->terminateQuotaSum;
        }
        if ($this->terminateQuotaUsed !== null) {
            $result['terminate_quota_used'] = $this->terminateQuotaUsed;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['terminate_quota_sum'] ?? null) !== null) {
            $obj->terminateQuotaSum = (int) $v;
        }
        if (($v = $data['terminate_quota_used'] ?? null) !== null) {
            $obj->terminateQuotaUsed = (int) $v;
        }
        return $obj;
    }
}
