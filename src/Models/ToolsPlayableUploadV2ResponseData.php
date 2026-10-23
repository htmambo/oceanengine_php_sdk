<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableUploadV2ResponseData implements \JsonSerializable
{
    /**
     * 试玩素材ID
     * @var int
     */
    protected ?int $playableId = null;

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->playableId !== null) {
            $result['playable_id'] = $this->playableId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['playable_id'] ?? null) !== null) {
            $obj->playableId = (int) $v;
        }
        return $obj;
    }
}
