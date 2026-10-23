<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskCreateV10ResponseData implements \JsonSerializable
{
    /**
     * 调控任务ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 调控任务ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 调控任务ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        return $obj;
    }
}
