<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselCreateV2ResponseDataCarouselAudio implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $audioId = null;

    /**
     * @var string
     */
    protected ?string $audioUrl = null;

    /**
     * @return string
     */
    public function getAudioId(): ?string
    {
        return $this->audioId;
    }

    /**
     * @param string $audioId
     * @return self
     */
    public function setAudioId(?string $audioId): self
    {
        $this->audioId = $audioId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudioUrl(): ?string
    {
        return $this->audioUrl;
    }

    /**
     * @param string $audioUrl
     * @return self
     */
    public function setAudioUrl(?string $audioUrl): self
    {
        $this->audioUrl = $audioUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audioId !== null) {
            $result['audio_id'] = $this->audioId;
        }
        if ($this->audioUrl !== null) {
            $result['audio_url'] = $this->audioUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_id'] ?? null) !== null) {
            $obj->audioId = (string) $v;
        }
        if (($v = $data['audio_url'] ?? null) !== null) {
            $obj->audioUrl = (string) $v;
        }
        return $obj;
    }
}
