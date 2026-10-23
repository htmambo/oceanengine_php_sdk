<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var string
     */
    protected ?string $message = null;

    /**
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        return $obj;
    }
}
