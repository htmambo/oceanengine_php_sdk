<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableSaveV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 试玩素材ID
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * 试玩素材名称
     * @var string
     */
    protected ?string $playableName = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 试玩素材ID
     * @return int
     */
    public function getPlayableId(): ?int
    {
        return $this->playableId;
    }

    /**
     * 试玩素材ID
     * @param int $playableId
     * @return self
     */
    public function setPlayableId(?int $playableId): self
    {
        $this->playableId = $playableId;
        return $this;
    }

    /**
     * 试玩素材名称
     * @return string
     */
    public function getPlayableName(): ?string
    {
        return $this->playableName;
    }

    /**
     * 试玩素材名称
     * @param string $playableName
     * @return self
     */
    public function setPlayableName(?string $playableName): self
    {
        $this->playableName = $playableName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->playableId !== null) {
            $result['playable_id'] = $this->playableId;
        }
        if ($this->playableName !== null) {
            $result['playable_name'] = $this->playableName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['playable_id'] ?? null) !== null) {
            $obj->playableId = (int) $v;
        }
        if (($v = $data['playable_name'] ?? null) !== null) {
            $obj->playableName = (string) $v;
        }
        return $obj;
    }
}
