<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo $objectNovelInfo = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo
     */
    public function getObjectNovelInfo(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo
    {
        return $this->objectNovelInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo $objectNovelInfo
     * @return self
     */
    public function setObjectNovelInfo(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo $objectNovelInfo): self
    {
        $this->objectNovelInfo = $objectNovelInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->objectNovelInfo !== null) {
            $result['object_novel_info'] = $this->objectNovelInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['object_novel_info'] ?? null) !== null && is_array($v)) {
            $obj->objectNovelInfo = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo::fromArray($v);
        }
        return $obj;
    }
}
