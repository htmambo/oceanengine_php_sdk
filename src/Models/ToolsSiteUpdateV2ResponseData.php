<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
