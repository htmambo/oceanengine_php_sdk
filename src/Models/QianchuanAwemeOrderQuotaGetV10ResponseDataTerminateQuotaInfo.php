<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $terminateQuotaSum = null;

    /**
     * @var int
     */
    protected ?int $terminateQuotaUsed = null;

    /**
     * @return int
     */
    public function getTerminateQuotaSum(): ?int
    {
        return $this->terminateQuotaSum;
    }

    /**
     * @param int $terminateQuotaSum
     * @return self
     */
    public function setTerminateQuotaSum(?int $terminateQuotaSum): self
    {
        $this->terminateQuotaSum = $terminateQuotaSum;
        return $this;
    }

    /**
     * @return int
     */
    public function getTerminateQuotaUsed(): ?int
    {
        return $this->terminateQuotaUsed;
    }

    /**
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
