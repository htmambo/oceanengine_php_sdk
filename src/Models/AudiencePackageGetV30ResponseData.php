<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AudiencePackageGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AudiencePackageGetV30ResponseDataAudiencePackagesInner[]
     */
    protected ?array $audiencePackages = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AudiencePackageGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\AudiencePackageGetV30ResponseDataAudiencePackagesInner[]
     */
    public function getAudiencePackages(): ?array
    {
        return $this->audiencePackages;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageGetV30ResponseDataAudiencePackagesInner[] $audiencePackages
     * @return self
     */
    public function setAudiencePackages(?array $audiencePackages): self
    {
        $this->audiencePackages = $audiencePackages;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AudiencePackageGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AudiencePackageGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->audiencePackages !== null) {
            $result['audience_packages'] = $this->audiencePackages;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_packages'] ?? null) !== null && is_array($v)) {
            $obj->audiencePackages = array_map(fn ($vv) => \Oceanengine\Models\AudiencePackageGetV30ResponseDataAudiencePackagesInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AudiencePackageGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
