<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UbaToolAdCreateCreateV10Request implements \JsonSerializable
{
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
     * 创建类型
     * @var int
     */
    protected ?int $createType = null;

    /**
     * 预览模式，只返回预估结果不实际执行
     * @var bool
     */
    protected ?bool $dryRun = null;

    /**
     * 指定新建素材lego_mid, 不保证一定新建
     * @var int[]
     */
    protected ?array $legoMidList = null;

    /**
     * 操作原因
     * @var string
     */
    protected ?string $reason = null;

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
     * 创建类型
     * @return int
     */
    public function getCreateType(): ?int
    {
        return $this->createType;
    }

    /**
     * 创建类型
     * @param int $createType
     * @return self
     */
    public function setCreateType(?int $createType): self
    {
        $this->createType = $createType;
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
     * 指定新建素材lego_mid, 不保证一定新建
     * @return int[]
     */
    public function getLegoMidList(): ?array
    {
        return $this->legoMidList;
    }

    /**
     * 指定新建素材lego_mid, 不保证一定新建
     * @param int[] $legoMidList
     * @return self
     */
    public function setLegoMidList(?array $legoMidList): self
    {
        $this->legoMidList = $legoMidList;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->cdpProjectId !== null) {
            $result['cdp_project_id'] = $this->cdpProjectId;
        }
        if ($this->createType !== null) {
            $result['create_type'] = $this->createType;
        }
        if ($this->dryRun !== null) {
            $result['dry_run'] = $this->dryRun;
        }
        if ($this->legoMidList !== null) {
            $result['lego_mid_list'] = $this->legoMidList;
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
        if (($v = $data['create_type'] ?? null) !== null) {
            $obj->createType = (int) $v;
        }
        if (($v = $data['dry_run'] ?? null) !== null) {
            $obj->dryRun = (bool) $v;
        }
        if (($v = $data['lego_mid_list'] ?? null) !== null && is_array($v)) {
            $obj->legoMidList = $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        return $obj;
    }
}
