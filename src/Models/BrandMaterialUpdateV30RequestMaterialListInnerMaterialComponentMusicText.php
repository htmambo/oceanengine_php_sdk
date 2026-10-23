<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText implements \JsonSerializable
{
    /**
     * 音乐名称
     * @var string
     */
    protected ?string $musicName = null;

    /**
     * 音乐昵称
     * @var string
     */
    protected ?string $musicNickName = null;

    /**
     * 音乐名称
     * @return string
     */
    public function getMusicName(): ?string
    {
        return $this->musicName;
    }

    /**
     * 音乐名称
     * @param string $musicName
     * @return self
     */
    public function setMusicName(?string $musicName): self
    {
        $this->musicName = $musicName;
        return $this;
    }

    /**
     * 音乐昵称
     * @return string
     */
    public function getMusicNickName(): ?string
    {
        return $this->musicNickName;
    }

    /**
     * 音乐昵称
     * @param string $musicNickName
     * @return self
     */
    public function setMusicNickName(?string $musicNickName): self
    {
        $this->musicNickName = $musicNickName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->musicName !== null) {
            $result['music_name'] = $this->musicName;
        }
        if ($this->musicNickName !== null) {
            $result['music_nick_name'] = $this->musicNickName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['music_name'] ?? null) !== null) {
            $obj->musicName = (string) $v;
        }
        if (($v = $data['music_nick_name'] ?? null) !== null) {
            $obj->musicNickName = (string) $v;
        }
        return $obj;
    }
}
