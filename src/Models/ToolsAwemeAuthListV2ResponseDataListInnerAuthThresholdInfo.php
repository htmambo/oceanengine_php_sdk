<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo implements \JsonSerializable
{
    /**
     * 是否已成年
     * @var bool
     */
    protected ?bool $isAudit = null;

    /**
     * 有效涨粉数是否达到要求
     * @var bool
     */
    protected ?bool $isReachedRiseFansCount = null;

    /**
     * 是否已实名
     * @var bool
     */
    protected ?bool $isRealNameCert = null;

    /**
     * 是否严重违规
     * @var bool
     */
    protected ?bool $isSeriousViolation = null;

    /**
     * 是否已成年
     * @return bool
     */
    public function getIsAudit(): ?bool
    {
        return $this->isAudit;
    }

    /**
     * 是否已成年
     * @param bool $isAudit
     * @return self
     */
    public function setIsAudit(?bool $isAudit): self
    {
        $this->isAudit = $isAudit;
        return $this;
    }

    /**
     * 有效涨粉数是否达到要求
     * @return bool
     */
    public function getIsReachedRiseFansCount(): ?bool
    {
        return $this->isReachedRiseFansCount;
    }

    /**
     * 有效涨粉数是否达到要求
     * @param bool $isReachedRiseFansCount
     * @return self
     */
    public function setIsReachedRiseFansCount(?bool $isReachedRiseFansCount): self
    {
        $this->isReachedRiseFansCount = $isReachedRiseFansCount;
        return $this;
    }

    /**
     * 是否已实名
     * @return bool
     */
    public function getIsRealNameCert(): ?bool
    {
        return $this->isRealNameCert;
    }

    /**
     * 是否已实名
     * @param bool $isRealNameCert
     * @return self
     */
    public function setIsRealNameCert(?bool $isRealNameCert): self
    {
        $this->isRealNameCert = $isRealNameCert;
        return $this;
    }

    /**
     * 是否严重违规
     * @return bool
     */
    public function getIsSeriousViolation(): ?bool
    {
        return $this->isSeriousViolation;
    }

    /**
     * 是否严重违规
     * @param bool $isSeriousViolation
     * @return self
     */
    public function setIsSeriousViolation(?bool $isSeriousViolation): self
    {
        $this->isSeriousViolation = $isSeriousViolation;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isAudit !== null) {
            $result['is_audit'] = $this->isAudit;
        }
        if ($this->isReachedRiseFansCount !== null) {
            $result['is_reached_rise_fans_count'] = $this->isReachedRiseFansCount;
        }
        if ($this->isRealNameCert !== null) {
            $result['is_real_name_cert'] = $this->isRealNameCert;
        }
        if ($this->isSeriousViolation !== null) {
            $result['is_serious_violation'] = $this->isSeriousViolation;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_audit'] ?? null) !== null) {
            $obj->isAudit = (bool) $v;
        }
        if (($v = $data['is_reached_rise_fans_count'] ?? null) !== null) {
            $obj->isReachedRiseFansCount = (bool) $v;
        }
        if (($v = $data['is_real_name_cert'] ?? null) !== null) {
            $obj->isRealNameCert = (bool) $v;
        }
        if (($v = $data['is_serious_violation'] ?? null) !== null) {
            $obj->isSeriousViolation = (bool) $v;
        }
        return $obj;
    }
}
