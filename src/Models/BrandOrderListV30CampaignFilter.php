<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30CampaignFilter implements \JsonSerializable
{
    /**
     * 广告组ID
     * @var string
     */
    protected ?string $campaignId = null;

    /**
     * 广告组名称
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * 广告组状态
     * @var \Oceanengine\Models\BrandOrderListV30CampaignFilterCampaignStatus[]
     */
    protected ?array $campaignStatus = null;

    /**
     * 广告组创建截止时间，格式：2024-01-01
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * 广告组创建起始时间，格式：2024-01-01
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * 广告组投放截止时间，格式：2024-01-01
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 广告组投放起始时间，格式：2024-01-01
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 广告组ID
     * @return string
     */
    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    /**
     * 广告组ID
     * @param string $campaignId
     * @return self
     */
    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 广告组名称
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * 广告组名称
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * 广告组状态
     * @return \Oceanengine\Models\BrandOrderListV30CampaignFilterCampaignStatus[]
     */
    public function getCampaignStatus(): ?array
    {
        return $this->campaignStatus;
    }

    /**
     * 广告组状态
     * @param \Oceanengine\Models\BrandOrderListV30CampaignFilterCampaignStatus[] $campaignStatus
     * @return self
     */
    public function setCampaignStatus(?array $campaignStatus): self
    {
        $this->campaignStatus = $campaignStatus;
        return $this;
    }

    /**
     * 广告组创建截止时间，格式：2024-01-01
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * 广告组创建截止时间，格式：2024-01-01
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 广告组创建起始时间，格式：2024-01-01
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * 广告组创建起始时间，格式：2024-01-01
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 广告组投放截止时间，格式：2024-01-01
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 广告组投放截止时间，格式：2024-01-01
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 广告组投放起始时间，格式：2024-01-01
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 广告组投放起始时间，格式：2024-01-01
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->campaignStatus !== null) {
            $result['campaign_status'] = $this->campaignStatus;
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
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (string) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['campaign_status'] ?? null) !== null && is_array($v)) {
            $obj->campaignStatus = $v;
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
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
