<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentCreateCommonComponentV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $commonComponentId = null;

    /**
     * @return int
     */
    public function getCommonComponentId(): ?int
    {
        return $this->commonComponentId;
    }

    /**
     * @param int $commonComponentId
     * @return self
     */
    public function setCommonComponentId(?int $commonComponentId): self
    {
        $this->commonComponentId = $commonComponentId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->commonComponentId !== null) {
            $result['common_component_id'] = $this->commonComponentId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['common_component_id'] ?? null) !== null) {
            $obj->commonComponentId = (int) $v;
        }
        return $obj;
    }
}
