<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGameSellingPointsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $summery = null;

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getSummery(): ?string
    {
        return $this->summery;
    }

    /**
     * @param string $summery
     * @return self
     */
    public function setSummery(?string $summery): self
    {
        $this->summery = $summery;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->summery !== null) {
            $result['summery'] = $this->summery;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['summery'] ?? null) !== null) {
            $obj->summery = (string) $v;
        }
        return $obj;
    }
}
