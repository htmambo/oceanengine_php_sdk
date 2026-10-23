<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizersInner implements \JsonSerializable
{
    /**
     * 负责人ID
     * @var int
     */
    protected ?int $optimizerId = null;

    /**
     * 负责人名称
     * @var string
     */
    protected ?string $optimizerName = null;

    /**
     * 负责人ID
     * @return int
     */
    public function getOptimizerId(): ?int
    {
        return $this->optimizerId;
    }

    /**
     * 负责人ID
     * @param int $optimizerId
     * @return self
     */
    public function setOptimizerId(?int $optimizerId): self
    {
        $this->optimizerId = $optimizerId;
        return $this;
    }

    /**
     * 负责人名称
     * @return string
     */
    public function getOptimizerName(): ?string
    {
        return $this->optimizerName;
    }

    /**
     * 负责人名称
     * @param string $optimizerName
     * @return self
     */
    public function setOptimizerName(?string $optimizerName): self
    {
        $this->optimizerName = $optimizerName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->optimizerId !== null) {
            $result['optimizer_id'] = $this->optimizerId;
        }
        if ($this->optimizerName !== null) {
            $result['optimizer_name'] = $this->optimizerName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['optimizer_id'] ?? null) !== null) {
            $obj->optimizerId = (int) $v;
        }
        if (($v = $data['optimizer_name'] ?? null) !== null) {
            $obj->optimizerName = (string) $v;
        }
        return $obj;
    }
}
