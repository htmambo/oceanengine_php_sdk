<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetCommonAuthorPackageListV2ResponseData implements \JsonSerializable
{
    /**
     * 人群包列表
     * @var \Oceanengine\Models\StarVasGetCommonAuthorPackageListV2ResponseDataPacksInner[]
     */
    protected ?array $packs = null;

    /**
     * 人群包列表
     * @return \Oceanengine\Models\StarVasGetCommonAuthorPackageListV2ResponseDataPacksInner[]
     */
    public function getPacks(): ?array
    {
        return $this->packs;
    }

    /**
     * 人群包列表
     * @param \Oceanengine\Models\StarVasGetCommonAuthorPackageListV2ResponseDataPacksInner[] $packs
     * @return self
     */
    public function setPacks(?array $packs): self
    {
        $this->packs = $packs;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->packs !== null) {
            $result['packs'] = $this->packs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['packs'] ?? null) !== null && is_array($v)) {
            $obj->packs = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetCommonAuthorPackageListV2ResponseDataPacksInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
