<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanBrandAuthorizedGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanBrandAuthorizedGetV10ResponseDataBrandInfosInner[]
     */
    protected ?array $brandInfos = null;

    /**
     * @return \Oceanengine\Models\QianchuanBrandAuthorizedGetV10ResponseDataBrandInfosInner[]
     */
    public function getBrandInfos(): ?array
    {
        return $this->brandInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanBrandAuthorizedGetV10ResponseDataBrandInfosInner[] $brandInfos
     * @return self
     */
    public function setBrandInfos(?array $brandInfos): self
    {
        $this->brandInfos = $brandInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandInfos !== null) {
            $result['brand_infos'] = $this->brandInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_infos'] ?? null) !== null && is_array($v)) {
            $obj->brandInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanBrandAuthorizedGetV10ResponseDataBrandInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
