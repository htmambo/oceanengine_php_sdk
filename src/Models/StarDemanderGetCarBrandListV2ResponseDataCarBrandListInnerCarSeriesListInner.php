<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderGetCarBrandListV2ResponseDataCarBrandListInnerCarSeriesListInner implements \JsonSerializable
{
    /**
     * 车系id
     * @var int
     */
    protected ?int $seriesId = null;

    /**
     * 车系名称
     * @var string
     */
    protected ?string $seriesName = null;

    /**
     * 车系id
     * @return int
     */
    public function getSeriesId(): ?int
    {
        return $this->seriesId;
    }

    /**
     * 车系id
     * @param int $seriesId
     * @return self
     */
    public function setSeriesId(?int $seriesId): self
    {
        $this->seriesId = $seriesId;
        return $this;
    }

    /**
     * 车系名称
     * @return string
     */
    public function getSeriesName(): ?string
    {
        return $this->seriesName;
    }

    /**
     * 车系名称
     * @param string $seriesName
     * @return self
     */
    public function setSeriesName(?string $seriesName): self
    {
        $this->seriesName = $seriesName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->seriesId !== null) {
            $result['series_id'] = $this->seriesId;
        }
        if ($this->seriesName !== null) {
            $result['series_name'] = $this->seriesName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['series_id'] ?? null) !== null) {
            $obj->seriesId = (int) $v;
        }
        if (($v = $data['series_name'] ?? null) !== null) {
            $obj->seriesName = (string) $v;
        }
        return $obj;
    }
}
