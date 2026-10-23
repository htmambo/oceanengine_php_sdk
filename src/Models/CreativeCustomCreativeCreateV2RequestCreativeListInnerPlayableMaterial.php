<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterial implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo $playableInfo = null;

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo
     */
    public function getPlayableInfo(): ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo
    {
        return $this->playableInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo $playableInfo
     * @return self
     */
    public function setPlayableInfo(?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo $playableInfo): self
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
            $obj->playableInfo = \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo::fromArray($v);
        }
        return $obj;
    }
}
