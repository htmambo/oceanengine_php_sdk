<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfigRangeValuesInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $label = null;

    /**
     * @var string
     */
    protected ?string $value = null;

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['label'] ?? null) !== null) {
            $obj->label = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
