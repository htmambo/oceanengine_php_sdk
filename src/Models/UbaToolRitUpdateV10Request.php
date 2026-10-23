<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UbaToolRitUpdateV10Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * campaign_id 可选
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * cdp project_id 必填
     * @var int
     */
    protected ?int $cdpProjectId = null;

    /**
     * 预览模式，只返回预估结果不实际执行
     * @var bool
     */
    protected ?bool $dryRun = null;

    /**
     * 点位的屏蔽时间, 默认3天, 传极短时间等价于放开屏蔽
     * @var int
     */
    protected ?int $durationSeconds = null;

    /**
     * 操作原因
     * @var string
     */
    protected ?string $reason = null;

    /**
     * RIT 点位ID列表，
     * @var int[]
     */
    protected ?array $ritIds = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * campaign_id 可选
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * campaign_id 可选
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * cdp project_id 必填
     * @return int
     */
    public function getCdpProjectId(): ?int
    {
        return $this->cdpProjectId;
    }

    /**
     * cdp project_id 必填
     * @param int $cdpProjectId
     * @return self
     */
    public function setCdpProjectId(?int $cdpProjectId): self
    {
        $this->cdpProjectId = $cdpProjectId;
        return $this;
    }

    /**
     * 预览模式，只返回预估结果不实际执行
     * @return bool
     */
    public function getDryRun(): ?bool
    {
        return $this->dryRun;
    }

    /**
     * 预览模式，只返回预估结果不实际执行
     * @param bool $dryRun
     * @return self
     */
    public function setDryRun(?bool $dryRun): self
    {
        $this->dryRun = $dryRun;
        return $this;
    }

    /**
     * 点位的屏蔽时间, 默认3天, 传极短时间等价于放开屏蔽
     * @return int
     */
    public function getDurationSeconds(): ?int
    {
        return $this->durationSeconds;
    }

    /**
     * 点位的屏蔽时间, 默认3天, 传极短时间等价于放开屏蔽
     * @param int $durationSeconds
     * @return self
     */
    public function setDurationSeconds(?int $durationSeconds): self
    {
        $this->durationSeconds = $durationSeconds;
        return $this;
    }

    /**
     * 操作原因
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 操作原因
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * RIT 点位ID列表，
     * @return int[]
     */
    public function getRitIds(): ?array
    {
        return $this->ritIds;
    }

    /**
     * RIT 点位ID列表，
     * @param int[] $ritIds
     * @return self
     */
    public function setRitIds(?array $ritIds): self
    {
        $this->ritIds = $ritIds;
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->cdpProjectId !== null) {
            $result['cdp_project_id'] = $this->cdpProjectId;
        }
        if ($this->dryRun !== null) {
            $result['dry_run'] = $this->dryRun;
        }
        if ($this->durationSeconds !== null) {
            $result['duration_seconds'] = $this->durationSeconds;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->ritIds !== null) {
            $result['rit_ids'] = $this->ritIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['cdp_project_id'] ?? null) !== null) {
            $obj->cdpProjectId = (int) $v;
        }
        if (($v = $data['dry_run'] ?? null) !== null) {
            $obj->dryRun = (bool) $v;
        }
        if (($v = $data['duration_seconds'] ?? null) !== null) {
            $obj->durationSeconds = (int) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['rit_ids'] ?? null) !== null && is_array($v)) {
            $obj->ritIds = $v;
        }
        return $obj;
    }
}
