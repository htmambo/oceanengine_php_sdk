<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $configId = null;

    /**
     * @return int
     */
    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    /**
     * @param int $configId
     * @return self
     */
    public function setConfigId(?int $configId): self
    {
        $this->configId = $configId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->configId !== null) {
            $result['config_id'] = $this->configId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['config_id'] ?? null) !== null) {
            $obj->configId = (int) $v;
        }
        return $obj;
    }
}
