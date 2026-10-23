<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsIsSupportUniversalGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsIsSupportUniversalGetV2DataIsSupportUniversal
     */
    protected ?string $isSupportUniversal = null;

    /**
     * @return \Oceanengine\Models\ToolsIsSupportUniversalGetV2DataIsSupportUniversal
     */
    public function getIsSupportUniversal(): ?string
    {
        return $this->isSupportUniversal;
    }

    /**
     * @param \Oceanengine\Models\ToolsIsSupportUniversalGetV2DataIsSupportUniversal $isSupportUniversal
     * @return self
     */
    public function setIsSupportUniversal(?string $isSupportUniversal): self
    {
        $this->isSupportUniversal = $isSupportUniversal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isSupportUniversal !== null) {
            $result['is_support_universal'] = $this->isSupportUniversal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_support_universal'] ?? null) !== null) {
            $obj->isSupportUniversal = (string) $v;
        }
        return $obj;
    }
}
