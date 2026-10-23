<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpBrandGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DmpBrandGetV2ResponseDataBrandInfoInner[]
     */
    protected ?array $brandInfo = null;

    /**
     * @return \Oceanengine\Models\DmpBrandGetV2ResponseDataBrandInfoInner[]
     */
    public function getBrandInfo(): ?array
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\DmpBrandGetV2ResponseDataBrandInfoInner[] $brandInfo
     * @return self
     */
    public function setBrandInfo(?array $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = array_map(fn ($vv) => \Oceanengine\Models\DmpBrandGetV2ResponseDataBrandInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
