<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandAgentDataV30Filter implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var bool
     */
    protected ?bool $isBandAdOverflow = null;

    /**
     * @var \Oceanengine\Models\ReportBrandAgentDataV30FilterSelfServiceSource
     */
    protected ?string $selfServiceSource = null;

    /**
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param int[] $ids
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBandAdOverflow(): ?bool
    {
        return $this->isBandAdOverflow;
    }

    /**
     * @param bool $isBandAdOverflow
     * @return self
     */
    public function setIsBandAdOverflow(?bool $isBandAdOverflow): self
    {
        $this->isBandAdOverflow = $isBandAdOverflow;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportBrandAgentDataV30FilterSelfServiceSource
     */
    public function getSelfServiceSource(): ?string
    {
        return $this->selfServiceSource;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandAgentDataV30FilterSelfServiceSource $selfServiceSource
     * @return self
     */
    public function setSelfServiceSource(?string $selfServiceSource): self
    {
        $this->selfServiceSource = $selfServiceSource;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->isBandAdOverflow !== null) {
            $result['is_band_ad_overflow'] = $this->isBandAdOverflow;
        }
        if ($this->selfServiceSource !== null) {
            $result['self_service_source'] = $this->selfServiceSource;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['is_band_ad_overflow'] ?? null) !== null) {
            $obj->isBandAdOverflow = (bool) $v;
        }
        if (($v = $data['self_service_source'] ?? null) !== null) {
            $obj->selfServiceSource = (string) $v;
        }
        return $obj;
    }
}
