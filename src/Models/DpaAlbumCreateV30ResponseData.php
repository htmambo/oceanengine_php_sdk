<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAlbumCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $albumId = null;

    /**
     * @return string
     */
    public function getAlbumId(): ?string
    {
        return $this->albumId;
    }

    /**
     * @param string $albumId
     * @return self
     */
    public function setAlbumId(?string $albumId): self
    {
        $this->albumId = $albumId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->albumId !== null) {
            $result['album_id'] = $this->albumId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['album_id'] ?? null) !== null) {
            $obj->albumId = (string) $v;
        }
        return $obj;
    }
}
