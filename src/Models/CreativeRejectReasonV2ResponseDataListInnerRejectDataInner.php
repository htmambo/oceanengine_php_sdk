<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeRejectReasonV2ResponseDataListInnerRejectDataInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $rejectItem = null;

    /**
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @return string
     */
    public function getRejectItem(): ?string
    {
        return $this->rejectItem;
    }

    /**
     * @param string $rejectItem
     * @return self
     */
    public function setRejectItem(?string $rejectItem): self
    {
        $this->rejectItem = $rejectItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * @param string $rejectReason
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->rejectItem !== null) {
            $result['reject_item'] = $this->rejectItem;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['reject_item'] ?? null) !== null) {
            $obj->rejectItem = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        return $obj;
    }
}
