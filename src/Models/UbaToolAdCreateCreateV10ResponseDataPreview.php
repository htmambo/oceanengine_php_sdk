<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UbaToolAdCreateCreateV10ResponseDataPreview implements \JsonSerializable
{
    /**
     * 受影响的广告数
     * @var int
     */
    protected ?int $affectedAdCount = null;

    /**
     * 受影响的计划数
     * @var int
     */
    protected ?int $affectedCampaignCount = null;

    /**
     * 预估消耗变化（元/天）
     * @var int
     */
    protected ?int $estimatedCostChange = null;

    /**
     * 风险提示
     * @var string
     */
    protected ?string $warning = null;

    /**
     * 预估是否会成功
     * @var bool
     */
    protected ?bool $willSucceed = null;

    /**
     * 受影响的广告数
     * @return int
     */
    public function getAffectedAdCount(): ?int
    {
        return $this->affectedAdCount;
    }

    /**
     * 受影响的广告数
     * @param int $affectedAdCount
     * @return self
     */
    public function setAffectedAdCount(?int $affectedAdCount): self
    {
        $this->affectedAdCount = $affectedAdCount;
        return $this;
    }

    /**
     * 受影响的计划数
     * @return int
     */
    public function getAffectedCampaignCount(): ?int
    {
        return $this->affectedCampaignCount;
    }

    /**
     * 受影响的计划数
     * @param int $affectedCampaignCount
     * @return self
     */
    public function setAffectedCampaignCount(?int $affectedCampaignCount): self
    {
        $this->affectedCampaignCount = $affectedCampaignCount;
        return $this;
    }

    /**
     * 预估消耗变化（元/天）
     * @return int
     */
    public function getEstimatedCostChange(): ?int
    {
        return $this->estimatedCostChange;
    }

    /**
     * 预估消耗变化（元/天）
     * @param int $estimatedCostChange
     * @return self
     */
    public function setEstimatedCostChange(?int $estimatedCostChange): self
    {
        $this->estimatedCostChange = $estimatedCostChange;
        return $this;
    }

    /**
     * 风险提示
     * @return string
     */
    public function getWarning(): ?string
    {
        return $this->warning;
    }

    /**
     * 风险提示
     * @param string $warning
     * @return self
     */
    public function setWarning(?string $warning): self
    {
        $this->warning = $warning;
        return $this;
    }

    /**
     * 预估是否会成功
     * @return bool
     */
    public function getWillSucceed(): ?bool
    {
        return $this->willSucceed;
    }

    /**
     * 预估是否会成功
     * @param bool $willSucceed
     * @return self
     */
    public function setWillSucceed(?bool $willSucceed): self
    {
        $this->willSucceed = $willSucceed;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->affectedAdCount !== null) {
            $result['affected_ad_count'] = $this->affectedAdCount;
        }
        if ($this->affectedCampaignCount !== null) {
            $result['affected_campaign_count'] = $this->affectedCampaignCount;
        }
        if ($this->estimatedCostChange !== null) {
            $result['estimated_cost_change'] = $this->estimatedCostChange;
        }
        if ($this->warning !== null) {
            $result['warning'] = $this->warning;
        }
        if ($this->willSucceed !== null) {
            $result['will_succeed'] = $this->willSucceed;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['affected_ad_count'] ?? null) !== null) {
            $obj->affectedAdCount = (int) $v;
        }
        if (($v = $data['affected_campaign_count'] ?? null) !== null) {
            $obj->affectedCampaignCount = (int) $v;
        }
        if (($v = $data['estimated_cost_change'] ?? null) !== null) {
            $obj->estimatedCostChange = (int) $v;
        }
        if (($v = $data['warning'] ?? null) !== null) {
            $obj->warning = (string) $v;
        }
        if (($v = $data['will_succeed'] ?? null) !== null) {
            $obj->willSucceed = (bool) $v;
        }
        return $obj;
    }
}
