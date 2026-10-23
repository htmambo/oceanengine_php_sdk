<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicVideoMixcutCreateV30RequestRenderOption implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AicVideoMixcutCreateV30RenderOptionTargetRadio
     */
    protected ?string $targetRadio = null;

    /**
     * @var \Oceanengine\Models\AicVideoMixcutCreateV30RenderOptionVideoDuration
     */
    protected ?string $videoDuration = null;

    /**
     * @return \Oceanengine\Models\AicVideoMixcutCreateV30RenderOptionTargetRadio
     */
    public function getTargetRadio(): ?string
    {
        return $this->targetRadio;
    }

    /**
     * @param \Oceanengine\Models\AicVideoMixcutCreateV30RenderOptionTargetRadio $targetRadio
     * @return self
     */
    public function setTargetRadio(?string $targetRadio): self
    {
        $this->targetRadio = $targetRadio;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicVideoMixcutCreateV30RenderOptionVideoDuration
     */
    public function getVideoDuration(): ?string
    {
        return $this->videoDuration;
    }

    /**
     * @param \Oceanengine\Models\AicVideoMixcutCreateV30RenderOptionVideoDuration $videoDuration
     * @return self
     */
    public function setVideoDuration(?string $videoDuration): self
    {
        $this->videoDuration = $videoDuration;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->targetRadio !== null) {
            $result['target_radio'] = $this->targetRadio;
        }
        if ($this->videoDuration !== null) {
            $result['video_duration'] = $this->videoDuration;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['target_radio'] ?? null) !== null) {
            $obj->targetRadio = (string) $v;
        }
        if (($v = $data['video_duration'] ?? null) !== null) {
            $obj->videoDuration = (string) $v;
        }
        return $obj;
    }
}
