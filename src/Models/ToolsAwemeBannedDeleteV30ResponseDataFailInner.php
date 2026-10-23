<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeBannedDeleteV30ResponseDataFailInner implements \JsonSerializable
{
    /**
     * 失败的原因
     * @var string
     */
    protected ?string $message = null;

    /**
     * 失败的对象
     * @var string
     */
    protected ?string $resultKey = null;

    /**
     * 失败的原因
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * 失败的原因
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * 失败的对象
     * @return string
     */
    public function getResultKey(): ?string
    {
        return $this->resultKey;
    }

    /**
     * 失败的对象
     * @param string $resultKey
     * @return self
     */
    public function setResultKey(?string $resultKey): self
    {
        $this->resultKey = $resultKey;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->resultKey !== null) {
            $result['result_key'] = $this->resultKey;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['result_key'] ?? null) !== null) {
            $obj->resultKey = (string) $v;
        }
        return $obj;
    }
}
