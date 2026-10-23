<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderQuotaGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $maxCost = null;

    /**
     * @var int
     */
    protected ?int $quotaGear = null;

    /**
     * @var int
     */
    protected ?int $sumQuota = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo $terminateQuotaInfo = null;

    /**
     * @var int
     */
    protected ?int $usedQuota = null;

    /**
     * @return float
     */
    public function getMaxCost(): ?float
    {
        return $this->maxCost;
    }

    /**
     * @param float $maxCost
     * @return self
     */
    public function setMaxCost(?float $maxCost): self
    {
        $this->maxCost = $maxCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuotaGear(): ?int
    {
        return $this->quotaGear;
    }

    /**
     * @param int $quotaGear
     * @return self
     */
    public function setQuotaGear(?int $quotaGear): self
    {
        $this->quotaGear = $quotaGear;
        return $this;
    }

    /**
     * @return int
     */
    public function getSumQuota(): ?int
    {
        return $this->sumQuota;
    }

    /**
     * @param int $sumQuota
     * @return self
     */
    public function setSumQuota(?int $sumQuota): self
    {
        $this->sumQuota = $sumQuota;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo
     */
    public function getTerminateQuotaInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo
    {
        return $this->terminateQuotaInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo $terminateQuotaInfo
     * @return self
     */
    public function setTerminateQuotaInfo(?\Oceanengine\Models\QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo $terminateQuotaInfo): self
    {
        $this->terminateQuotaInfo = $terminateQuotaInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsedQuota(): ?int
    {
        return $this->usedQuota;
    }

    /**
     * @param int $usedQuota
     * @return self
     */
    public function setUsedQuota(?int $usedQuota): self
    {
        $this->usedQuota = $usedQuota;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->maxCost !== null) {
            $result['max_cost'] = $this->maxCost;
        }
        if ($this->quotaGear !== null) {
            $result['quota_gear'] = $this->quotaGear;
        }
        if ($this->sumQuota !== null) {
            $result['sum_quota'] = $this->sumQuota;
        }
        if ($this->terminateQuotaInfo !== null) {
            $result['terminate_quota_info'] = $this->terminateQuotaInfo;
        }
        if ($this->usedQuota !== null) {
            $result['used_quota'] = $this->usedQuota;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['max_cost'] ?? null) !== null) {
            $obj->maxCost = (float) $v;
        }
        if (($v = $data['quota_gear'] ?? null) !== null) {
            $obj->quotaGear = (int) $v;
        }
        if (($v = $data['sum_quota'] ?? null) !== null) {
            $obj->sumQuota = (int) $v;
        }
        if (($v = $data['terminate_quota_info'] ?? null) !== null && is_array($v)) {
            $obj->terminateQuotaInfo = \Oceanengine\Models\QianchuanAwemeOrderQuotaGetV10ResponseDataTerminateQuotaInfo::fromArray($v);
        }
        if (($v = $data['used_quota'] ?? null) !== null) {
            $obj->usedQuota = (int) $v;
        }
        return $obj;
    }
}
