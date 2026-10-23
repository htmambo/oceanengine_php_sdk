<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeSyncItemToAdV2ResponseDataFailSyncReasonInner implements \JsonSerializable
{
    /**
     * 原因详情
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 原因类型
     * @var int
     */
    protected ?int $type = null;

    /**
     * 原因详情
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 原因详情
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 原因类型
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * 原因类型
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        return $obj;
    }
}
