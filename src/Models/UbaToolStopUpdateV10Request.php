<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UbaToolStopUpdateV10Request implements \JsonSerializable
{
    /**
     * 指定关停的素材
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $cdpProjectId = null;

    /**
     * 预览模式，只返回预估结果不实际执行
     * @var bool
     */
    protected ?bool $dryRun = null;

    /**
     * 操作原因
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 指定关停的素材
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * 指定关停的素材
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

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
     * 项目id
     * @return int
     */
    public function getCdpProjectId(): ?int
    {
        return $this->cdpProjectId;
    }

    /**
     * 项目id
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->cdpProjectId !== null) {
            $result['cdp_project_id'] = $this->cdpProjectId;
        }
        if ($this->dryRun !== null) {
            $result['dry_run'] = $this->dryRun;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['cdp_project_id'] ?? null) !== null) {
            $obj->cdpProjectId = (int) $v;
        }
        if (($v = $data['dry_run'] ?? null) !== null) {
            $obj->dryRun = (bool) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        return $obj;
    }
}
