<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerCompanyBasicInfo implements \JsonSerializable
{
    /**
     * 主体验证类型
     * @var int
     */
    protected ?int $checkType = null;

    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 资质编号
     * @var string
     */
    protected ?string $qualificationSerial = null;

    /**
     * 资质类型
     * @var int
     */
    protected ?int $qualificationType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus
     */
    protected ?string $status = null;

    /**
     * 主体验证类型
     * @return int
     */
    public function getCheckType(): ?int
    {
        return $this->checkType;
    }

    /**
     * 主体验证类型
     * @param int $checkType
     * @return self
     */
    public function setCheckType(?int $checkType): self
    {
        $this->checkType = $checkType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * 资质编号
     * @return string
     */
    public function getQualificationSerial(): ?string
    {
        return $this->qualificationSerial;
    }

    /**
     * 资质编号
     * @param string $qualificationSerial
     * @return self
     */
    public function setQualificationSerial(?string $qualificationSerial): self
    {
        $this->qualificationSerial = $qualificationSerial;
        return $this;
    }

    /**
     * 资质类型
     * @return int
     */
    public function getQualificationType(): ?int
    {
        return $this->qualificationType;
    }

    /**
     * 资质类型
     * @param int $qualificationType
     * @return self
     */
    public function setQualificationType(?int $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus $status
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
        if ($this->checkType !== null) {
            $result['check_type'] = $this->checkType;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->qualificationSerial !== null) {
            $result['qualification_serial'] = $this->qualificationSerial;
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
        if (($v = $data['check_type'] ?? null) !== null) {
            $obj->checkType = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['qualification_serial'] ?? null) !== null) {
            $obj->qualificationSerial = (string) $v;
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
