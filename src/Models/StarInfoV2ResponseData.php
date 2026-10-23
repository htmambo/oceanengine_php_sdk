<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarInfoV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarInfoV2ResponseDataInfoListInner[]
     */
    protected ?array $infoList = null;

    /**
     * @return \Oceanengine\Models\StarInfoV2ResponseDataInfoListInner[]
     */
    public function getInfoList(): ?array
    {
        return $this->infoList;
    }

    /**
     * @param \Oceanengine\Models\StarInfoV2ResponseDataInfoListInner[] $infoList
     * @return self
     */
    public function setInfoList(?array $infoList): self
    {
        $this->infoList = $infoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->infoList !== null) {
            $result['info_list'] = $this->infoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['info_list'] ?? null) !== null && is_array($v)) {
            $obj->infoList = array_map(fn ($vv) => \Oceanengine\Models\StarInfoV2ResponseDataInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
