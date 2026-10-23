<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $dataSourceId = null;

    /**
     * @return string
     */
    public function getDataSourceId(): ?string
    {
        return $this->dataSourceId;
    }

    /**
     * @param string $dataSourceId
     * @return self
     */
    public function setDataSourceId(?string $dataSourceId): self
    {
        $this->dataSourceId = $dataSourceId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataSourceId !== null) {
            $result['data_source_id'] = $this->dataSourceId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_source_id'] ?? null) !== null) {
            $obj->dataSourceId = (string) $v;
        }
        return $obj;
    }
}
