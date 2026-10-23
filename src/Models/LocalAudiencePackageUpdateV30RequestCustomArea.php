<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageUpdateV30RequestCustomArea implements \JsonSerializable
{
    /**
     * 地理位置设置
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomAreaGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * 地理位置设置
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomAreaGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * 地理位置设置
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomAreaGeolocationInner[] $geolocation
     * @return self
     */
    public function setGeolocation(?array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->geolocation !== null) {
            $result['geolocation'] = $this->geolocation;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['geolocation'] ?? null) !== null && is_array($v)) {
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomAreaGeolocationInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
