<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpSubjectListV30ResponseData implements \JsonSerializable
{
    /**
     * ebp 主体相关信息
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInner[]
     */
    protected ?array $companyBasicInfos = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataPagination
     */
    protected ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataPagination $pagination = null;

    /**
     * ebp 主体相关信息
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInner[]
     */
    public function getCompanyBasicInfos(): ?array
    {
        return $this->companyBasicInfos;
    }

    /**
     * ebp 主体相关信息
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInner[] $companyBasicInfos
     * @return self
     */
    public function setCompanyBasicInfos(?array $companyBasicInfos): self
    {
        $this->companyBasicInfos = $companyBasicInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->companyBasicInfos !== null) {
            $result['company_basic_infos'] = $this->companyBasicInfos;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_basic_infos'] ?? null) !== null && is_array($v)) {
            $obj->companyBasicInfos = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\ToolsEbpSubjectListV30ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
