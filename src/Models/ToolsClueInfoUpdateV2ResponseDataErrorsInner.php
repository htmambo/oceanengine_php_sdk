<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueInfoUpdateV2ResponseDataErrorsInner implements \JsonSerializable
{
    /**
     * 更新失败线索id
     * @var int
     */
    protected ?int $key = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $message = null;

    /**
     * 更新失败线索id
     * @return int
     */
    public function getKey(): ?int
    {
        return $this->key;
    }

    /**
     * 更新失败线索id
     * @param int $key
     * @return self
     */
    public function setKey(?int $key): self
    {
        $this->key = $key;
        return $this;
    }

    /**
     * 失败原因
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * 失败原因
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
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['key'] ?? null) !== null) {
            $obj->key = (int) $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        return $obj;
    }
}
