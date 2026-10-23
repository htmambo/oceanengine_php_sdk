<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarUserGetAwemeAuthorIdV2ResponseData implements \JsonSerializable
{
    /**
     * 达人uid
     * @var int
     */
    protected ?int $awemeAuthorId = null;

    /**
     * 达人uid
     * @return int
     */
    public function getAwemeAuthorId(): ?int
    {
        return $this->awemeAuthorId;
    }

    /**
     * 达人uid
     * @param int $awemeAuthorId
     * @return self
     */
    public function setAwemeAuthorId(?int $awemeAuthorId): self
    {
        $this->awemeAuthorId = $awemeAuthorId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeAuthorId !== null) {
            $result['aweme_author_id'] = $this->awemeAuthorId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_author_id'] ?? null) !== null) {
            $obj->awemeAuthorId = (int) $v;
        }
        return $obj;
    }
}
