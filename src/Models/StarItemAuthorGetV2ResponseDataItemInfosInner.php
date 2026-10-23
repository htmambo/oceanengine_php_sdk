<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarItemAuthorGetV2ResponseDataItemInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $uid = null;

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     * @return self
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->uid !== null) {
            $result['uid'] = $this->uid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['uid'] ?? null) !== null) {
            $obj->uid = (int) $v;
        }
        return $obj;
    }
}
