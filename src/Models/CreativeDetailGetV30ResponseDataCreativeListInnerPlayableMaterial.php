<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterialPlayableInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterialPlayableInfo $playableInfo = null;

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterialPlayableInfo
     */
    public function getPlayableInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterialPlayableInfo
    {
        return $this->playableInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterialPlayableInfo $playableInfo
     * @return self
     */
    public function setPlayableInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterialPlayableInfo $playableInfo): self
    {
        $this->playableInfo = $playableInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->playableInfo !== null) {
            $result['playable_info'] = $this->playableInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['playable_info'] ?? null) !== null && is_array($v)) {
            $obj->playableInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterialPlayableInfo::fromArray($v);
        }
        return $obj;
    }
}
