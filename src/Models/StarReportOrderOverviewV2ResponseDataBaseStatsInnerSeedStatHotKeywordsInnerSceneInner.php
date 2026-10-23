<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerSceneInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $value = null;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return self
     */
    public function setValue(?int $value): self
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (int) $v;
        }
        return $obj;
    }
}
