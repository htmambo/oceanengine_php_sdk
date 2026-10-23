<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLiveAuthorizeListV2ResponseDataListInnerLimitedPromotionTypesInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $message = null;

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
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        return $obj;
    }
}
