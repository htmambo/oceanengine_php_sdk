<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarCopyrightCreateV2ResponseData implements \JsonSerializable
{
    /**
     * 小说ID
     * @var int
     */
    protected ?int $copyrightId = null;

    /**
     * 小说ID
     * @return int
     */
    public function getCopyrightId(): ?int
    {
        return $this->copyrightId;
    }

    /**
     * 小说ID
     * @param int $copyrightId
     * @return self
     */
    public function setCopyrightId(?int $copyrightId): self
    {
        $this->copyrightId = $copyrightId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->copyrightId !== null) {
            $result['copyright_id'] = $this->copyrightId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['copyright_id'] ?? null) !== null) {
            $obj->copyrightId = (int) $v;
        }
        return $obj;
    }
}
