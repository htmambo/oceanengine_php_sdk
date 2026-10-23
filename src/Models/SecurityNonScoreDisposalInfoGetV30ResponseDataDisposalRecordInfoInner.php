<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityNonScoreDisposalInfoGetV30ResponseDataDisposalRecordInfoInner implements \JsonSerializable
{
    /**
     * 违规单所属的广告主id
     * @var string
     */
    protected ?string $advertiserId = null;

    /**
     * 处置单产生时间，秒级时间戳
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 处罚理由
     * @var string
     */
    protected ?string $diposalReason = null;

    /**
     * 处罚单id
     * @var string
     */
    protected ?string $disposalId = null;

    /**
     * 处罚结果，如：账户封停3天
     * @var string
     */
    protected ?string $disposalResult = null;

    /**
     * 违规类型枚举 30001 ：账户封停 30005 ：主体封停 30007 ：主体限制新开 30067 ： 主体清退
     * @var string
     */
    protected ?string $disposalType = null;

    /**
     * 处置单状态 1 ： 已判罚 2 ：判罚已撤销
     * @var int
     */
    protected ?int $status = null;

    /**
     * 违规账户
     * @var string
     */
    protected ?string $violationAccount = null;

    /**
     * 违规证据(图片)
     * @var string
     */
    protected ?string $violationEvidence = null;

    /**
     * 违规素材id
     * @var string
     */
    protected ?string $violationMid = null;

    /**
     * 违规素材url
     * @var string
     */
    protected ?string $violationMidUrl = null;

    /**
     * 违规项目ID/计划ID
     * @var string
     */
    protected ?string $violationProject = null;

    /**
     * 违规投放单元ID/计划ID
     * @var string
     */
    protected ?string $violationUnit = null;

    /**
     * 违规单所属的广告主id
     * @return string
     */
    public function getAdvertiserId(): ?string
    {
        return $this->advertiserId;
    }

    /**
     * 违规单所属的广告主id
     * @param string $advertiserId
     * @return self
     */
    public function setAdvertiserId(?string $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 处置单产生时间，秒级时间戳
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 处置单产生时间，秒级时间戳
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 处罚理由
     * @return string
     */
    public function getDiposalReason(): ?string
    {
        return $this->diposalReason;
    }

    /**
     * 处罚理由
     * @param string $diposalReason
     * @return self
     */
    public function setDiposalReason(?string $diposalReason): self
    {
        $this->diposalReason = $diposalReason;
        return $this;
    }

    /**
     * 处罚单id
     * @return string
     */
    public function getDisposalId(): ?string
    {
        return $this->disposalId;
    }

    /**
     * 处罚单id
     * @param string $disposalId
     * @return self
     */
    public function setDisposalId(?string $disposalId): self
    {
        $this->disposalId = $disposalId;
        return $this;
    }

    /**
     * 处罚结果，如：账户封停3天
     * @return string
     */
    public function getDisposalResult(): ?string
    {
        return $this->disposalResult;
    }

    /**
     * 处罚结果，如：账户封停3天
     * @param string $disposalResult
     * @return self
     */
    public function setDisposalResult(?string $disposalResult): self
    {
        $this->disposalResult = $disposalResult;
        return $this;
    }

    /**
     * 违规类型枚举 30001 ：账户封停 30005 ：主体封停 30007 ：主体限制新开 30067 ： 主体清退
     * @return string
     */
    public function getDisposalType(): ?string
    {
        return $this->disposalType;
    }

    /**
     * 违规类型枚举 30001 ：账户封停 30005 ：主体封停 30007 ：主体限制新开 30067 ： 主体清退
     * @param string $disposalType
     * @return self
     */
    public function setDisposalType(?string $disposalType): self
    {
        $this->disposalType = $disposalType;
        return $this;
    }

    /**
     * 处置单状态 1 ： 已判罚 2 ：判罚已撤销
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 处置单状态 1 ： 已判罚 2 ：判罚已撤销
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 违规账户
     * @return string
     */
    public function getViolationAccount(): ?string
    {
        return $this->violationAccount;
    }

    /**
     * 违规账户
     * @param string $violationAccount
     * @return self
     */
    public function setViolationAccount(?string $violationAccount): self
    {
        $this->violationAccount = $violationAccount;
        return $this;
    }

    /**
     * 违规证据(图片)
     * @return string
     */
    public function getViolationEvidence(): ?string
    {
        return $this->violationEvidence;
    }

    /**
     * 违规证据(图片)
     * @param string $violationEvidence
     * @return self
     */
    public function setViolationEvidence(?string $violationEvidence): self
    {
        $this->violationEvidence = $violationEvidence;
        return $this;
    }

    /**
     * 违规素材id
     * @return string
     */
    public function getViolationMid(): ?string
    {
        return $this->violationMid;
    }

    /**
     * 违规素材id
     * @param string $violationMid
     * @return self
     */
    public function setViolationMid(?string $violationMid): self
    {
        $this->violationMid = $violationMid;
        return $this;
    }

    /**
     * 违规素材url
     * @return string
     */
    public function getViolationMidUrl(): ?string
    {
        return $this->violationMidUrl;
    }

    /**
     * 违规素材url
     * @param string $violationMidUrl
     * @return self
     */
    public function setViolationMidUrl(?string $violationMidUrl): self
    {
        $this->violationMidUrl = $violationMidUrl;
        return $this;
    }

    /**
     * 违规项目ID/计划ID
     * @return string
     */
    public function getViolationProject(): ?string
    {
        return $this->violationProject;
    }

    /**
     * 违规项目ID/计划ID
     * @param string $violationProject
     * @return self
     */
    public function setViolationProject(?string $violationProject): self
    {
        $this->violationProject = $violationProject;
        return $this;
    }

    /**
     * 违规投放单元ID/计划ID
     * @return string
     */
    public function getViolationUnit(): ?string
    {
        return $this->violationUnit;
    }

    /**
     * 违规投放单元ID/计划ID
     * @param string $violationUnit
     * @return self
     */
    public function setViolationUnit(?string $violationUnit): self
    {
        $this->violationUnit = $violationUnit;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->diposalReason !== null) {
            $result['diposal_reason'] = $this->diposalReason;
        }
        if ($this->disposalId !== null) {
            $result['disposal_id'] = $this->disposalId;
        }
        if ($this->disposalResult !== null) {
            $result['disposal_result'] = $this->disposalResult;
        }
        if ($this->disposalType !== null) {
            $result['disposal_type'] = $this->disposalType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->violationAccount !== null) {
            $result['violation_account'] = $this->violationAccount;
        }
        if ($this->violationEvidence !== null) {
            $result['violation_evidence'] = $this->violationEvidence;
        }
        if ($this->violationMid !== null) {
            $result['violation_mid'] = $this->violationMid;
        }
        if ($this->violationMidUrl !== null) {
            $result['violation_mid_url'] = $this->violationMidUrl;
        }
        if ($this->violationProject !== null) {
            $result['violation_project'] = $this->violationProject;
        }
        if ($this->violationUnit !== null) {
            $result['violation_unit'] = $this->violationUnit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['diposal_reason'] ?? null) !== null) {
            $obj->diposalReason = (string) $v;
        }
        if (($v = $data['disposal_id'] ?? null) !== null) {
            $obj->disposalId = (string) $v;
        }
        if (($v = $data['disposal_result'] ?? null) !== null) {
            $obj->disposalResult = (string) $v;
        }
        if (($v = $data['disposal_type'] ?? null) !== null) {
            $obj->disposalType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['violation_account'] ?? null) !== null) {
            $obj->violationAccount = (string) $v;
        }
        if (($v = $data['violation_evidence'] ?? null) !== null) {
            $obj->violationEvidence = (string) $v;
        }
        if (($v = $data['violation_mid'] ?? null) !== null) {
            $obj->violationMid = (string) $v;
        }
        if (($v = $data['violation_mid_url'] ?? null) !== null) {
            $obj->violationMidUrl = (string) $v;
        }
        if (($v = $data['violation_project'] ?? null) !== null) {
            $obj->violationProject = (string) $v;
        }
        if (($v = $data['violation_unit'] ?? null) !== null) {
            $obj->violationUnit = (string) $v;
        }
        return $obj;
    }
}
