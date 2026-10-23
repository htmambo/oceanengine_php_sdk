<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarAttachmentUploadV2ResponseData implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $result = null;

    /**
     * @return bool
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     * @return self
     */
    public function setResult(?bool $result): self
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->result !== null) {
            $result['result'] = $this->result;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['result'] ?? null) !== null) {
            $obj->result = (bool) $v;
        }
        return $obj;
    }
}
