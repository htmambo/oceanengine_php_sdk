<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfoGamePointsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $context = null;

    /**
     * @var string
     */
    protected ?string $sellingPoint = null;

    /**
     * @return string
     */
    public function getContext(): ?string
    {
        return $this->context;
    }

    /**
     * @param string $context
     * @return self
     */
    public function setContext(?string $context): self
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellingPoint(): ?string
    {
        return $this->sellingPoint;
    }

    /**
     * @param string $sellingPoint
     * @return self
     */
    public function setSellingPoint(?string $sellingPoint): self
    {
        $this->sellingPoint = $sellingPoint;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->context !== null) {
            $result['context'] = $this->context;
        }
        if ($this->sellingPoint !== null) {
            $result['selling_point'] = $this->sellingPoint;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['context'] ?? null) !== null) {
            $obj->context = (string) $v;
        }
        if (($v = $data['selling_point'] ?? null) !== null) {
            $obj->sellingPoint = (string) $v;
        }
        return $obj;
    }
}
