<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAudioAdV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileAudioAdV2ResponseDataAudioInfo
     */
    protected ?\Oceanengine\Models\FileAudioAdV2ResponseDataAudioInfo $audioInfo = null;

    /**
     * @return \Oceanengine\Models\FileAudioAdV2ResponseDataAudioInfo
     */
    public function getAudioInfo(): ?\Oceanengine\Models\FileAudioAdV2ResponseDataAudioInfo
    {
        return $this->audioInfo;
    }

    /**
     * @param \Oceanengine\Models\FileAudioAdV2ResponseDataAudioInfo $audioInfo
     * @return self
     */
    public function setAudioInfo(?\Oceanengine\Models\FileAudioAdV2ResponseDataAudioInfo $audioInfo): self
    {
        $this->audioInfo = $audioInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audioInfo !== null) {
            $result['audio_info'] = $this->audioInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_info'] ?? null) !== null && is_array($v)) {
            $obj->audioInfo = \Oceanengine\Models\FileAudioAdV2ResponseDataAudioInfo::fromArray($v);
        }
        return $obj;
    }
}
