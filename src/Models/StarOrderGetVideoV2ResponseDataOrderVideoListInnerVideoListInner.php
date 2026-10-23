<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInner implements \JsonSerializable
{
    /**
     * 审核状态（同ScriptInfo中同名字段）
     * @var int
     */
    protected ?int $auditStatus = null;

    /**
     * 视频封面图
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 审核详细信息
     * @var \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInnerDetailAuditInfoInner[]
     */
    protected ?array $detailAuditInfo = null;

    /**
     * 视频时长
     * @var int
     */
    protected ?int $duration = null;

    /**
     * 视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 在线（公开）状态。1: 公开，2: 非公开
     * @var int
     */
    protected ?int $onlineStatus = null;

    /**
     * 资源ID
     * @var int
     */
    protected ?int $resourceId = null;

    /**
     * 视频播放地址
     * @var string
     */
    protected ?string $resourceUrl = null;

    /**
     * 资源状态（同ScriptInfo中同名字段）
     * @var int
     */
    protected ?int $status = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 审核状态（同ScriptInfo中同名字段）
     * @return int
     */
    public function getAuditStatus(): ?int
    {
        return $this->auditStatus;
    }

    /**
     * 审核状态（同ScriptInfo中同名字段）
     * @param int $auditStatus
     * @return self
     */
    public function setAuditStatus(?int $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 视频封面图
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * 视频封面图
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 审核详细信息
     * @return \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInnerDetailAuditInfoInner[]
     */
    public function getDetailAuditInfo(): ?array
    {
        return $this->detailAuditInfo;
    }

    /**
     * 审核详细信息
     * @param \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInnerDetailAuditInfoInner[] $detailAuditInfo
     * @return self
     */
    public function setDetailAuditInfo(?array $detailAuditInfo): self
    {
        $this->detailAuditInfo = $detailAuditInfo;
        return $this;
    }

    /**
     * 视频时长
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * 视频时长
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 在线（公开）状态。1: 公开，2: 非公开
     * @return int
     */
    public function getOnlineStatus(): ?int
    {
        return $this->onlineStatus;
    }

    /**
     * 在线（公开）状态。1: 公开，2: 非公开
     * @param int $onlineStatus
     * @return self
     */
    public function setOnlineStatus(?int $onlineStatus): self
    {
        $this->onlineStatus = $onlineStatus;
        return $this;
    }

    /**
     * 资源ID
     * @return int
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    /**
     * 资源ID
     * @param int $resourceId
     * @return self
     */
    public function setResourceId(?int $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * 视频播放地址
     * @return string
     */
    public function getResourceUrl(): ?string
    {
        return $this->resourceUrl;
    }

    /**
     * 视频播放地址
     * @param string $resourceUrl
     * @return self
     */
    public function setResourceUrl(?string $resourceUrl): self
    {
        $this->resourceUrl = $resourceUrl;
        return $this;
    }

    /**
     * 资源状态（同ScriptInfo中同名字段）
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 资源状态（同ScriptInfo中同名字段）
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 视频标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->detailAuditInfo !== null) {
            $result['detail_audit_info'] = $this->detailAuditInfo;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->onlineStatus !== null) {
            $result['online_status'] = $this->onlineStatus;
        }
        if ($this->resourceId !== null) {
            $result['resource_id'] = $this->resourceId;
        }
        if ($this->resourceUrl !== null) {
            $result['resource_url'] = $this->resourceUrl;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (int) $v;
        }
        if (($v = $data['cover_url'] ?? null) !== null) {
            $obj->coverUrl = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['detail_audit_info'] ?? null) !== null && is_array($v)) {
            $obj->detailAuditInfo = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInnerDetailAuditInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['online_status'] ?? null) !== null) {
            $obj->onlineStatus = (int) $v;
        }
        if (($v = $data['resource_id'] ?? null) !== null) {
            $obj->resourceId = (int) $v;
        }
        if (($v = $data['resource_url'] ?? null) !== null) {
            $obj->resourceUrl = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
