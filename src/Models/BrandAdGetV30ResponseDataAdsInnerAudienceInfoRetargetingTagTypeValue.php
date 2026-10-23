<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValue implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValueInfosInner[]
     */
    protected ?array $infos = null;

    /**
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValueInfosInner[]
     */
    public function getInfos(): ?array
    {
        return $this->infos;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValueInfosInner[] $infos
     * @return self
     */
    public function setInfos(?array $infos): self
    {
        $this->infos = $infos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->infos !== null) {
            $result['infos'] = $this->infos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['infos'] ?? null) !== null && is_array($v)) {
            $obj->infos = array_map(fn ($vv) => \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValueInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
