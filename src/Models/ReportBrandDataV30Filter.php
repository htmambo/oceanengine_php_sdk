<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandDataV30Filter implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportBrandDataV30FilterAdForm
     */
    protected ?string $adForm = null;

    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var bool
     */
    protected ?bool $isBandAdOverflow = null;

    /**
     * @return \Oceanengine\Models\ReportBrandDataV30FilterAdForm
     */
    public function getAdForm(): ?string
    {
        return $this->adForm;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandDataV30FilterAdForm $adForm
     * @return self
     */
    public function setAdForm(?string $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adForm !== null) {
            $result['ad_form'] = $this->adForm;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->isBandAdOverflow !== null) {
            $result['is_band_ad_overflow'] = $this->isBandAdOverflow;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_form'] ?? null) !== null) {
            $obj->adForm = (string) $v;
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['is_band_ad_overflow'] ?? null) !== null) {
            $obj->isBandAdOverflow = (bool) $v;
        }
        return $obj;
    }
}
