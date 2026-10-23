<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataPlayletSeriesUrlInfoInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $playletSeriesUrl = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType
     */
    protected ?string $playletSeriesUrlType = null;

    /**
     * @return string
     */
    public function getPlayletSeriesUrl(): ?string
    {
        return $this->playletSeriesUrl;
    }

    /**
     * @param string $playletSeriesUrl
     * @return self
     */
    public function setPlayletSeriesUrl(?string $playletSeriesUrl): self
    {
        $this->playletSeriesUrl = $playletSeriesUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType
     */
    public function getPlayletSeriesUrlType(): ?string
    {
        return $this->playletSeriesUrlType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType $playletSeriesUrlType
     * @return self
     */
    public function setPlayletSeriesUrlType(?string $playletSeriesUrlType): self
    {
        $this->playletSeriesUrlType = $playletSeriesUrlType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->playletSeriesUrl !== null) {
            $result['playlet_series_url'] = $this->playletSeriesUrl;
        }
        if ($this->playletSeriesUrlType !== null) {
            $result['playlet_series_url_type'] = $this->playletSeriesUrlType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['playlet_series_url'] ?? null) !== null) {
            $obj->playletSeriesUrl = (string) $v;
        }
        if (($v = $data['playlet_series_url_type'] ?? null) !== null) {
            $obj->playletSeriesUrlType = (string) $v;
        }
        return $obj;
    }
}
