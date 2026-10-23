<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectDeliveryUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $cdpProjectId = null;

    /**
     * 省略或 true：查询及预览；false：允许执行所选创编/纠偏
     * @var bool
     */
    protected ?bool $dryRun = null;

    /**
     * PVR 有效期默认 259200 秒；范围 1～2592000
     * @var int
     */
    protected ?int $durationSeconds = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCdpProjectId(): ?int
    {
        return $this->cdpProjectId;
    }

    /**
     * @param int $cdpProjectId
     * @return self
     */
    public function setCdpProjectId(?int $cdpProjectId): self
    {
        $this->cdpProjectId = $cdpProjectId;
        return $this;
    }

    /**
     * 省略或 true：查询及预览；false：允许执行所选创编/纠偏
     * @return bool
     */
    public function getDryRun(): ?bool
    {
        return $this->dryRun;
    }

    /**
     * 省略或 true：查询及预览；false：允许执行所选创编/纠偏
     * @param bool $dryRun
     * @return self
     */
    public function setDryRun(?bool $dryRun): self
    {
        $this->dryRun = $dryRun;
        return $this;
    }

    /**
     * PVR 有效期默认 259200 秒；范围 1～2592000
     * @return int
     */
    public function getDurationSeconds(): ?int
    {
        return $this->durationSeconds;
    }

    /**
     * PVR 有效期默认 259200 秒；范围 1～2592000
     * @param int $durationSeconds
     * @return self
     */
    public function setDurationSeconds(?int $durationSeconds): self
    {
        $this->durationSeconds = $durationSeconds;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
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
        return $obj;
    }
}
