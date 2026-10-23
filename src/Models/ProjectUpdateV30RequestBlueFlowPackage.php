<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectUpdateV30RequestBlueFlowPackage implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $blueFlowKeywordName = null;

    /**
     * @return string[]
     */
    public function getBlueFlowKeywordName(): ?array
    {
        return $this->blueFlowKeywordName;
    }

    /**
     * @param string[] $blueFlowKeywordName
     * @return self
     */
    public function setBlueFlowKeywordName(?array $blueFlowKeywordName): self
    {
        $this->blueFlowKeywordName = $blueFlowKeywordName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowKeywordName !== null) {
            $result['blue_flow_keyword_name'] = $this->blueFlowKeywordName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_keyword_name'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeywordName = $v;
        }
        return $obj;
    }
}
