<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAgentV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileVideoAgentV2ResponseDataVideoInfo
     */
    protected ?\Oceanengine\Models\FileVideoAgentV2ResponseDataVideoInfo $videoInfo = null;

    /**
     * @return \Oceanengine\Models\FileVideoAgentV2ResponseDataVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\FileVideoAgentV2ResponseDataVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\FileVideoAgentV2ResponseDataVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\FileVideoAgentV2ResponseDataVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\FileVideoAgentV2ResponseDataVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
