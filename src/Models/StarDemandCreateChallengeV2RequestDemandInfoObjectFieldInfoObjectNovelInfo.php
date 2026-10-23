<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfoObjectNovelInfo implements \JsonSerializable
{
    /**
     * 小说ID
     * @var int
     */
    protected ?int $novelId = null;

    /**
     * 小说ID
     * @return int
     */
    public function getNovelId(): ?int
    {
        return $this->novelId;
    }

    /**
     * 小说ID
     * @param int $novelId
     * @return self
     */
    public function setNovelId(?int $novelId): self
    {
        $this->novelId = $novelId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->novelId !== null) {
            $result['novel_id'] = $this->novelId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['novel_id'] ?? null) !== null) {
            $obj->novelId = (int) $v;
        }
        return $obj;
    }
}
