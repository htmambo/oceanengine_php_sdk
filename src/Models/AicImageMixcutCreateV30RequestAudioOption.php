<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicImageMixcutCreateV30RequestAudioOption implements \JsonSerializable
{
    /**
     * 音乐元素ID，最多传入5个，传入多个时，成片随机挑选一个使用
     * @var int[]
     */
    protected ?array $bgmElementIds = null;

    /**
     * 配音元素id
     * @var int
     */
    protected ?int $voiceElementId = null;

    /**
     * 音乐元素ID，最多传入5个，传入多个时，成片随机挑选一个使用
     * @return int[]
     */
    public function getBgmElementIds(): ?array
    {
        return $this->bgmElementIds;
    }

    /**
     * 音乐元素ID，最多传入5个，传入多个时，成片随机挑选一个使用
     * @param int[] $bgmElementIds
     * @return self
     */
    public function setBgmElementIds(?array $bgmElementIds): self
    {
        $this->bgmElementIds = $bgmElementIds;
        return $this;
    }

    /**
     * 配音元素id
     * @return int
     */
    public function getVoiceElementId(): ?int
    {
        return $this->voiceElementId;
    }

    /**
     * 配音元素id
     * @param int $voiceElementId
     * @return self
     */
    public function setVoiceElementId(?int $voiceElementId): self
    {
        $this->voiceElementId = $voiceElementId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bgmElementIds !== null) {
            $result['bgm_element_ids'] = $this->bgmElementIds;
        }
        if ($this->voiceElementId !== null) {
            $result['voice_element_id'] = $this->voiceElementId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bgm_element_ids'] ?? null) !== null && is_array($v)) {
            $obj->bgmElementIds = $v;
        }
        if (($v = $data['voice_element_id'] ?? null) !== null) {
            $obj->voiceElementId = (int) $v;
        }
        return $obj;
    }
}
