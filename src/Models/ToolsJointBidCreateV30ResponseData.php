<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsJointBidCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $jointId = null;

    /**
     * @return int
     */
    public function getJointId(): ?int
    {
        return $this->jointId;
    }

    /**
     * @param int $jointId
     * @return self
     */
    public function setJointId(?int $jointId): self
    {
        $this->jointId = $jointId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->jointId !== null) {
            $result['joint_id'] = $this->jointId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['joint_id'] ?? null) !== null) {
            $obj->jointId = (int) $v;
        }
        return $obj;
    }
}
