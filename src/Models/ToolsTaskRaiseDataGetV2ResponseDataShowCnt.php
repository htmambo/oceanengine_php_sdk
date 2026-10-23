<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsTaskRaiseDataGetV2ResponseDataShowCnt implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $basalValue = null;

    /**
     * @var string
     */
    protected ?string $increasedValue = null;

    /**
     * @return string
     */
    public function getBasalValue(): ?string
    {
        return $this->basalValue;
    }

    /**
     * @param string $basalValue
     * @return self
     */
    public function setBasalValue(?string $basalValue): self
    {
        $this->basalValue = $basalValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncreasedValue(): ?string
    {
        return $this->increasedValue;
    }

    /**
     * @param string $increasedValue
     * @return self
     */
    public function setIncreasedValue(?string $increasedValue): self
    {
        $this->increasedValue = $increasedValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->basalValue !== null) {
            $result['basal_value'] = $this->basalValue;
        }
        if ($this->increasedValue !== null) {
            $result['increased_value'] = $this->increasedValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['basal_value'] ?? null) !== null) {
            $obj->basalValue = (string) $v;
        }
        if (($v = $data['increased_value'] ?? null) !== null) {
            $obj->increasedValue = (string) $v;
        }
        return $obj;
    }
}
