<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionCardRecommendGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $result = null;

    /**
     * @return string[]
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param string[] $result
     * @return self
     */
    public function setResult(?array $result): self
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
        if (($v = $data['result'] ?? null) !== null && is_array($v)) {
            $obj->result = $v;
        }
        return $obj;
    }
}
