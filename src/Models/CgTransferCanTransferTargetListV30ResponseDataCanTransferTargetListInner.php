<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCanTransferTargetListV30ResponseDataCanTransferTargetListInner implements \JsonSerializable
{
    /**
     * 可转账户id
     * @var int
     */
    protected ?int $targetId = null;

    /**
     * 可转账户id
     * @return int
     */
    public function getTargetId(): ?int
    {
        return $this->targetId;
    }

    /**
     * 可转账户id
     * @param int $targetId
     * @return self
     */
    public function setTargetId(?int $targetId): self
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->targetId !== null) {
            $result['target_id'] = $this->targetId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['target_id'] ?? null) !== null) {
            $obj->targetId = (int) $v;
        }
        return $obj;
    }
}
