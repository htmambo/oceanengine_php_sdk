<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCustomAudienceListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCustomAudienceListV30ResponseDataAudiencePackageListInner[]
     */
    protected ?array $audiencePackageList = null;

    /**
     * @return \Oceanengine\Models\BrandCustomAudienceListV30ResponseDataAudiencePackageListInner[]
     */
    public function getAudiencePackageList(): ?array
    {
        return $this->audiencePackageList;
    }

    /**
     * @param \Oceanengine\Models\BrandCustomAudienceListV30ResponseDataAudiencePackageListInner[] $audiencePackageList
     * @return self
     */
    public function setAudiencePackageList(?array $audiencePackageList): self
    {
        $this->audiencePackageList = $audiencePackageList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audiencePackageList !== null) {
            $result['audience_package_list'] = $this->audiencePackageList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_package_list'] ?? null) !== null && is_array($v)) {
            $obj->audiencePackageList = array_map(fn ($vv) => \Oceanengine\Models\BrandCustomAudienceListV30ResponseDataAudiencePackageListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
