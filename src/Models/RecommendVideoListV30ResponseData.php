<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RecommendVideoListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\RecommendVideoListV30ResponseDataRecommendVideoListInner[]
     */
    protected ?array $recommendVideoList = null;

    /**
     * @return \Oceanengine\Models\RecommendVideoListV30ResponseDataRecommendVideoListInner[]
     */
    public function getRecommendVideoList(): ?array
    {
        return $this->recommendVideoList;
    }

    /**
     * @param \Oceanengine\Models\RecommendVideoListV30ResponseDataRecommendVideoListInner[] $recommendVideoList
     * @return self
     */
    public function setRecommendVideoList(?array $recommendVideoList): self
    {
        $this->recommendVideoList = $recommendVideoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->recommendVideoList !== null) {
            $result['recommend_video_list'] = $this->recommendVideoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['recommend_video_list'] ?? null) !== null && is_array($v)) {
            $obj->recommendVideoList = array_map(fn ($vv) => \Oceanengine\Models\RecommendVideoListV30ResponseDataRecommendVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
