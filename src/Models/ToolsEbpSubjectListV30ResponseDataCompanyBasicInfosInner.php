<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam
     */
    protected ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam $accountParam = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo $companyBasicInfo = null;

    /**
     * ebp根结点
     * @var int
     */
    protected ?int $groupId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo $qualificationInfo = null;

    /**
     * 主体类型
     * @var int
     */
    protected ?int $qualificationType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30DataCompanyBasicInfosStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam
     */
    public function getAccountParam(): ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam
    {
        return $this->accountParam;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam $accountParam
     * @return self
     */
    public function setAccountParam(?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam $accountParam): self
    {
        $this->accountParam = $accountParam;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo
     */
    public function getCompanyBasicInfo(): ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo
    {
        return $this->companyBasicInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo $companyBasicInfo
     * @return self
     */
    public function setCompanyBasicInfo(?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo $companyBasicInfo): self
    {
        $this->companyBasicInfo = $companyBasicInfo;
        return $this;
    }

    /**
     * ebp根结点
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * ebp根结点
     * @param int $groupId
     * @return self
     */
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo
     */
    public function getQualificationInfo(): ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo
    {
        return $this->qualificationInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo $qualificationInfo
     * @return self
     */
    public function setQualificationInfo(?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo $qualificationInfo): self
    {
        $this->qualificationInfo = $qualificationInfo;
        return $this;
    }

    /**
     * 主体类型
     * @return int
     */
    public function getQualificationType(): ?int
    {
        return $this->qualificationType;
    }

    /**
     * 主体类型
     * @param int $qualificationType
     * @return self
     */
    public function setQualificationType(?int $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30DataCompanyBasicInfosStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30DataCompanyBasicInfosStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
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
        if ($this->accountParam !== null) {
            $result['account_param'] = $this->accountParam;
        }
        if ($this->companyBasicInfo !== null) {
            $result['company_basic_info'] = $this->companyBasicInfo;
        }
        if ($this->groupId !== null) {
            $result['group_id'] = $this->groupId;
        }
        if ($this->qualificationInfo !== null) {
            $result['qualification_info'] = $this->qualificationInfo;
        }
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_param'] ?? null) !== null && is_array($v)) {
            $obj->accountParam = \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam::fromArray($v);
        }
        if (($v = $data['company_basic_info'] ?? null) !== null && is_array($v)) {
            $obj->companyBasicInfo = \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo::fromArray($v);
        }
        if (($v = $data['group_id'] ?? null) !== null) {
            $obj->groupId = (int) $v;
        }
        if (($v = $data['qualification_info'] ?? null) !== null && is_array($v)) {
            $obj->qualificationInfo = \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo::fromArray($v);
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
