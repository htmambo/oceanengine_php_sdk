<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInner implements \JsonSerializable
{
    /**
     * 审核状态 0 = 审核不通过 99 = 审核中 1 = 审核通过 3 = 作者删除 4 = 跳过审核
     * @var int
     */
    protected ?int $auditStatus = null;

    /**
     * 创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 审核详细信息
     * @var \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInnerDetailAuditInfoInner[]
     */
    protected ?array $detailAuditInfo = null;

    /**
     * 脚本文件名
     * @var string
     */
    protected ?string $resourceFilename = null;

    /**
     * 资源ID
     * @var int
     */
    protected ?int $resourceId = null;

    /**
     * 脚本文件地址
     * @var string
     */
    protected ?string $resourceUrl = null;

    /**
     * 资源状态 1 = 新上传 2 = 已驳回 3 = 已确认 4 = 非最新无意见 5 = 已删除
     * @var int
     */
    protected ?int $status = null;

    /**
     * 审核状态 0 = 审核不通过 99 = 审核中 1 = 审核通过 3 = 作者删除 4 = 跳过审核
     * @return int
     */
    public function getAuditStatus(): ?int
    {
        return $this->auditStatus;
    }

    /**
     * 审核状态 0 = 审核不通过 99 = 审核中 1 = 审核通过 3 = 作者删除 4 = 跳过审核
     * @param int $auditStatus
     * @return self
     */
    public function setAuditStatus(?int $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
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
     * @return \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInnerDetailAuditInfoInner[]
     */
    public function getDetailAuditInfo(): ?array
    {
        return $this->detailAuditInfo;
    }

    /**
     * 审核详细信息
     * @param \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInnerDetailAuditInfoInner[] $detailAuditInfo
     * @return self
     */
    public function setDetailAuditInfo(?array $detailAuditInfo): self
    {
        $this->detailAuditInfo = $detailAuditInfo;
        return $this;
    }

    /**
     * 脚本文件名
     * @return string
     */
    public function getResourceFilename(): ?string
    {
        return $this->resourceFilename;
    }

    /**
     * 脚本文件名
     * @param string $resourceFilename
     * @return self
     */
    public function setResourceFilename(?string $resourceFilename): self
    {
        $this->resourceFilename = $resourceFilename;
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
     * 脚本文件地址
     * @return string
     */
    public function getResourceUrl(): ?string
    {
        return $this->resourceUrl;
    }

    /**
     * 脚本文件地址
     * @param string $resourceUrl
     * @return self
     */
    public function setResourceUrl(?string $resourceUrl): self
    {
        $this->resourceUrl = $resourceUrl;
        return $this;
    }

    /**
     * 资源状态 1 = 新上传 2 = 已驳回 3 = 已确认 4 = 非最新无意见 5 = 已删除
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 资源状态 1 = 新上传 2 = 已驳回 3 = 已确认 4 = 非最新无意见 5 = 已删除
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->detailAuditInfo !== null) {
            $result['detail_audit_info'] = $this->detailAuditInfo;
        }
        if ($this->resourceFilename !== null) {
            $result['resource_filename'] = $this->resourceFilename;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['detail_audit_info'] ?? null) !== null && is_array($v)) {
            $obj->detailAuditInfo = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInnerDetailAuditInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['resource_filename'] ?? null) !== null) {
            $obj->resourceFilename = (string) $v;
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
        return $obj;
    }
}
