<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectUpdateV30RequestAudienceCustomArea implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomAreaGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomAreaGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomAreaGeolocationInner[] $geolocation
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
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomAreaGeolocationInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
