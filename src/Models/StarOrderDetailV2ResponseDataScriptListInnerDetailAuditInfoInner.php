<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderDetailV2ResponseDataScriptListInnerDetailAuditInfoInner implements \JsonSerializable
{
    /**
     * 审核拒绝原因
     * @var string
     */
    protected ?string $auditBanReason = null;

    /**
     * 审核渠道 1 = 抖音内容审核 7 = 广告素材审核
     * @var int
     */
    protected ?int $auditSource = null;

    /**
     * 审核状态 0 = 审核不通过 99 = 审核中 1 = 审核通过 3 = 作者删除 4 = 跳过审核
     * @var int
     */
    protected ?int $auditStatus = null;

    /**
     * 审核时间  unix timestamp
     * @var int
     */
    protected ?int $auditTime = null;

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
     * @return int
     */
    public function getAuditSource(): ?int
    {
        return $this->auditSource;
    }

    /**
     * 审核渠道 1 = 抖音内容审核 7 = 广告素材审核
     * @param int $auditSource
     * @return self
     */
    public function setAuditSource(?int $auditSource): self
    {
        $this->auditSource = $auditSource;
        return $this;
    }

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
     * 审核时间  unix timestamp
     * @return int
     */
    public function getAuditTime(): ?int
    {
        return $this->auditTime;
    }

    /**
     * 审核时间  unix timestamp
     * @param int $auditTime
     * @return self
     */
    public function setAuditTime(?int $auditTime): self
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
            $obj->auditSource = (int) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (int) $v;
        }
        if (($v = $data['audit_time'] ?? null) !== null) {
            $obj->auditTime = (int) $v;
        }
        return $obj;
    }
}
