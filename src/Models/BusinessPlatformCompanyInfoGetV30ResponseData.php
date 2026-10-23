<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BusinessPlatformCompanyInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataCompanyInfoInner[]
     */
    protected ?array $companyInfo = null;

    /**
     * @var \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataCompanyInfoInner[]
     */
    public function getCompanyInfo(): ?array
    {
        return $this->companyInfo;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataCompanyInfoInner[] $companyInfo
     * @return self
     */
    public function setCompanyInfo(?array $companyInfo): self
    {
        $this->companyInfo = $companyInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->companyInfo !== null) {
            $result['company_info'] = $this->companyInfo;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_info'] ?? null) !== null && is_array($v)) {
            $obj->companyInfo = array_map(fn ($vv) => \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataCompanyInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
