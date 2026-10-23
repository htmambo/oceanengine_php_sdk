<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentCreateLinkV2ResponseData implements \JsonSerializable
{
    /**
     * 组件ID
     * @var int
     */
    protected ?int $linkComponentId = null;

    /**
     * 组件ID
     * @return int
     */
    public function getLinkComponentId(): ?int
    {
        return $this->linkComponentId;
    }

    /**
     * 组件ID
     * @param int $linkComponentId
     * @return self
     */
    public function setLinkComponentId(?int $linkComponentId): self
    {
        $this->linkComponentId = $linkComponentId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->linkComponentId !== null) {
            $result['link_component_id'] = $this->linkComponentId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['link_component_id'] ?? null) !== null) {
            $obj->linkComponentId = (int) $v;
        }
        return $obj;
    }
}
