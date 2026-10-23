<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageGetV30ResponseData implements \JsonSerializable
{
    /**
     * 定向包
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInner[]
     */
    protected ?array $audiencePackages = null;

    /**
     * 定向包
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInner[]
     */
    public function getAudiencePackages(): ?array
    {
        return $this->audiencePackages;
    }

    /**
     * 定向包
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInner[] $audiencePackages
     * @return self
     */
    public function setAudiencePackages(?array $audiencePackages): self
    {
        $this->audiencePackages = $audiencePackages;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_packages'] ?? null) !== null && is_array($v)) {
            $obj->audiencePackages = array_map(fn ($vv) => \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
