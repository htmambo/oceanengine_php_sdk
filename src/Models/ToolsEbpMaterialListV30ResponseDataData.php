<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialListV30ResponseDataData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInner[] $videos
     * @return self
     */
    public function setVideos(?array $videos): self
    {
        $this->videos = $videos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->videos !== null) {
            $result['videos'] = $this->videos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['videos'] ?? null) !== null && is_array($v)) {
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
