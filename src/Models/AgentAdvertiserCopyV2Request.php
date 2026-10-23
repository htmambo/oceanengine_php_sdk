<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserCopyV2Request implements \JsonSerializable
{
    /**
     * 被复制广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 代理商账户ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 是否复制投放资质，默认不复制。原广告主账户的投放资质数量>0且<=100时才会复制。
     * @var bool
     */
    protected ?bool $copyDelivery = null;

    /**
     * 是否复制原广告主账户的账户标签
     * @var bool
     */
    protected ?bool $copyTag = null;

    /**
     * 复制账户信息
     * @var \Oceanengine\Models\AgentAdvertiserCopyV2RequestItemInner[]
     */
    protected ?array $item = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserCopyV2ReportType
     */
    protected ?string $reportType = null;

    /**
     * 被复制广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 被复制广告主账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 代理商账户ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账户ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 是否复制投放资质，默认不复制。原广告主账户的投放资质数量>0且<=100时才会复制。
     * @return bool
     */
    public function getCopyDelivery(): ?bool
    {
        return $this->copyDelivery;
    }

    /**
     * 是否复制投放资质，默认不复制。原广告主账户的投放资质数量>0且<=100时才会复制。
     * @param bool $copyDelivery
     * @return self
     */
    public function setCopyDelivery(?bool $copyDelivery): self
    {
        $this->copyDelivery = $copyDelivery;
        return $this;
    }

    /**
     * 是否复制原广告主账户的账户标签
     * @return bool
     */
    public function getCopyTag(): ?bool
    {
        return $this->copyTag;
    }

    /**
     * 是否复制原广告主账户的账户标签
     * @param bool $copyTag
     * @return self
     */
    public function setCopyTag(?bool $copyTag): self
    {
        $this->copyTag = $copyTag;
        return $this;
    }

    /**
     * 复制账户信息
     * @return \Oceanengine\Models\AgentAdvertiserCopyV2RequestItemInner[]
     */
    public function getItem(): ?array
    {
        return $this->item;
    }

    /**
     * 复制账户信息
     * @param \Oceanengine\Models\AgentAdvertiserCopyV2RequestItemInner[] $item
     * @return self
     */
    public function setItem(?array $item): self
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserCopyV2ReportType
     */
    public function getReportType(): ?string
    {
        return $this->reportType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserCopyV2ReportType $reportType
     * @return self
     */
    public function setReportType(?string $reportType): self
    {
        $this->reportType = $reportType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->copyDelivery !== null) {
            $result['copy_delivery'] = $this->copyDelivery;
        }
        if ($this->copyTag !== null) {
            $result['copy_tag'] = $this->copyTag;
        }
        if ($this->item !== null) {
            $result['item'] = $this->item;
        }
        if ($this->reportType !== null) {
            $result['report_type'] = $this->reportType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['copy_delivery'] ?? null) !== null) {
            $obj->copyDelivery = (bool) $v;
        }
        if (($v = $data['copy_tag'] ?? null) !== null) {
            $obj->copyTag = (bool) $v;
        }
        if (($v = $data['item'] ?? null) !== null && is_array($v)) {
            $obj->item = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvertiserCopyV2RequestItemInner::fromArray($vv), $v);
        }
        if (($v = $data['report_type'] ?? null) !== null) {
            $obj->reportType = (string) $v;
        }
        return $obj;
    }
}
