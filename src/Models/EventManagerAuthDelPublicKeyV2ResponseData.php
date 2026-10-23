<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthDelPublicKeyV2ResponseData implements \JsonSerializable
{
    /**
     * @var array<string,string>
     */
    protected ?array $details = null;

    /**
     * @return array<string,string>
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * @param array<string,string> $details
     * @return self
     */
    public function setDetails(?array $details): self
    {
        $this->details = $details;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->details !== null) {
            $result['details'] = $this->details;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['details'] ?? null) !== null && is_array($v)) {
            $obj->details = $v;
        }
        return $obj;
    }
}
