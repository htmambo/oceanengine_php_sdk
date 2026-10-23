<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupSiteOptStatusUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * @var array<string,mixed>
     */
    protected ?array $data = null;

    /**
     * @return array<string,mixed>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array<string,mixed> $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        return $obj;
    }
}
