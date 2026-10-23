<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $queryType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification
     */
    protected ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification $subjectQualification = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto
     */
    protected ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto $verifyInfoDto = null;

    /**
     * @return int
     */
    public function getQueryType(): ?int
    {
        return $this->queryType;
    }

    /**
     * @param int $queryType
     * @return self
     */
    public function setQueryType(?int $queryType): self
    {
        $this->queryType = $queryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification
     */
    public function getSubjectQualification(): ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification
    {
        return $this->subjectQualification;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification $subjectQualification
     * @return self
     */
    public function setSubjectQualification(?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification $subjectQualification): self
    {
        $this->subjectQualification = $subjectQualification;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto
     */
    public function getVerifyInfoDto(): ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto
    {
        return $this->verifyInfoDto;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto $verifyInfoDto
     * @return self
     */
    public function setVerifyInfoDto(?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto $verifyInfoDto): self
    {
        $this->verifyInfoDto = $verifyInfoDto;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->queryType !== null) {
            $result['query_type'] = $this->queryType;
        }
        if ($this->subjectQualification !== null) {
            $result['subject_qualification'] = $this->subjectQualification;
        }
        if ($this->verifyInfoDto !== null) {
            $result['verify_info_dto'] = $this->verifyInfoDto;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['query_type'] ?? null) !== null) {
            $obj->queryType = (int) $v;
        }
        if (($v = $data['subject_qualification'] ?? null) !== null && is_array($v)) {
            $obj->subjectQualification = \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification::fromArray($v);
        }
        if (($v = $data['verify_info_dto'] ?? null) !== null && is_array($v)) {
            $obj->verifyInfoDto = \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto::fromArray($v);
        }
        return $obj;
    }
}
