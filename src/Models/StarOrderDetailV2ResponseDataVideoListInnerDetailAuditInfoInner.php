<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderDetailV2ResponseDataVideoListInnerDetailAuditInfoInner implements \JsonSerializable
{
    /**
     * 审核拒绝原因
     * @var string
     */
    protected ?string $auditBanReason = null;

    /**
     * 审核渠道 1 = 抖音内容审核 7 = 广告素材审核
     * @var string
     */
    protected ?string $auditSource = null;

    /**
     * 审核状态 0 = 审核不通过 99 = 审核中 1 = 审核通过 3 = 作者删除 4 = 跳过审核
     * @var string
     */
    protected ?string $auditStatus = null;

    /**
     * 审核时间  unix timestamp
     * @var string
     */
    protected ?string $auditTime = null;

    /**
     * 审核拒绝原因
     * @return string
     */
    public function getAuditBanReason(): ?string
    {
        return $this->auditBanReason;
    }

    /**
     * 审核拒绝原因
     * @param string $auditBanReason
     * @return self
     */
    public function setAuditBanReason(?string $auditBanReason): self
    {
        $this->auditBanReason = $auditBanReason;
        return $this;
    }

    /**
     * 审核渠道 1 = 抖音内容审核 7 = 广告素材审核
     * @return string
     */
    public function getAuditSource(): ?string
    {
        return $this->auditSource;
    }

    /**
     * 审核渠道 1 = 抖音内容审核 7 = 广告素材审核
     * @param string $auditSource
     * @return self
     */
    public function setAuditSource(?string $auditSource): self
    {
        $this->auditSource = $auditSource;
        return $this;
    }

    /**
     * 审核状态 0 = 审核不通过 99 = 审核中 1 = 审核通过 3 = 作者删除 4 = 跳过审核
     * @return string
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * 审核状态 0 = 审核不通过 99 = 审核中 1 = 审核通过 3 = 作者删除 4 = 跳过审核
     * @param string $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 审核时间  unix timestamp
     * @return string
     */
    public function getAuditTime(): ?string
    {
        return $this->auditTime;
    }

    /**
     * 审核时间  unix timestamp
     * @param string $auditTime
     * @return self
     */
    public function setAuditTime(?string $auditTime): self
    {
        $this->auditTime = $auditTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditBanReason !== null) {
            $result['audit_ban_reason'] = $this->auditBanReason;
        }
        if ($this->auditSource !== null) {
            $result['audit_source'] = $this->auditSource;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->auditTime !== null) {
            $result['audit_time'] = $this->auditTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_ban_reason'] ?? null) !== null) {
            $obj->auditBanReason = (string) $v;
        }
        if (($v = $data['audit_source'] ?? null) !== null) {
            $obj->auditSource = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['audit_time'] ?? null) !== null) {
            $obj->auditTime = (string) $v;
        }
        return $obj;
    }
}
