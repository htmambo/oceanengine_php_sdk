<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskAuthorVideoAuditV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 审核拒绝理由，当opt_status = REJECT 拒绝时必填，输入字数范围[5,50]
     * @var string
     */
    protected ?string $banReason = null;

    /**
     * 要审核的星广联投任务下视频ID，可从「获取星广联投任务视频列表」接口获取
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskAuthorVideoAuditV30OptStatus
     */
    protected ?string $optStatus = null;

    /**
     * 星广联投任务ID
     * @var int
     */
    protected ?int $starTaskId = null;

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
     * 审核拒绝理由，当opt_status = REJECT 拒绝时必填，输入字数范围[5,50]
     * @return string
     */
    public function getBanReason(): ?string
    {
        return $this->banReason;
    }

    /**
     * 审核拒绝理由，当opt_status = REJECT 拒绝时必填，输入字数范围[5,50]
     * @param string $banReason
     * @return self
     */
    public function setBanReason(?string $banReason): self
    {
        $this->banReason = $banReason;
        return $this;
    }

    /**
     * 要审核的星广联投任务下视频ID，可从「获取星广联投任务视频列表」接口获取
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 要审核的星广联投任务下视频ID，可从「获取星广联投任务视频列表」接口获取
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskAuthorVideoAuditV30OptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskAuthorVideoAuditV30OptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * 星广联投任务ID
     * @return int
     */
    public function getStarTaskId(): ?int
    {
        return $this->starTaskId;
    }

    /**
     * 星广联投任务ID
     * @param int $starTaskId
     * @return self
     */
    public function setStarTaskId(?int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
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
        if ($this->banReason !== null) {
            $result['ban_reason'] = $this->banReason;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['ban_reason'] ?? null) !== null) {
            $obj->banReason = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        return $obj;
    }
}
