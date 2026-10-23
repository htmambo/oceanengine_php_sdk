<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 人群标签id
     * @var int
     */
    protected ?int $labelId = null;

    /**
     * 人群标签id
     * @return int
     */
    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    /**
     * 人群标签id
     * @param int $labelId
     * @return self
     */
    public function setLabelId(?int $labelId): self
    {
        $this->labelId = $labelId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->labelId !== null) {
            $result['label_id'] = $this->labelId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['label_id'] ?? null) !== null) {
            $obj->labelId = (int) $v;
        }
        return $obj;
    }
}
