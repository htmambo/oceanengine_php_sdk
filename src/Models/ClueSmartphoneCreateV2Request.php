<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueSmartphoneCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ClueSmartphoneCreateV2CallDisplay
     */
    protected ?string $callDisplay = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ClueSmartphoneCreateV2RequestNoDisturbTimesInner[]
     */
    protected ?array $noDisturbTimes = null;

    /**
     * @var string
     */
    protected ?string $phoneNumber = null;

    /**
     * @var \Oceanengine\Models\ClueSmartphoneCreateV2ValidateType
     */
    protected ?string $validateType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueSmartphoneCreateV2CallDisplay
     */
    public function getCallDisplay(): ?string
    {
        return $this->callDisplay;
    }

    /**
     * @param \Oceanengine\Models\ClueSmartphoneCreateV2CallDisplay $callDisplay
     * @return self
     */
    public function setCallDisplay(?string $callDisplay): self
    {
        $this->callDisplay = $callDisplay;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueSmartphoneCreateV2RequestNoDisturbTimesInner[]
     */
    public function getNoDisturbTimes(): ?array
    {
        return $this->noDisturbTimes;
    }

    /**
     * @param \Oceanengine\Models\ClueSmartphoneCreateV2RequestNoDisturbTimesInner[] $noDisturbTimes
     * @return self
     */
    public function setNoDisturbTimes(?array $noDisturbTimes): self
    {
        $this->noDisturbTimes = $noDisturbTimes;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueSmartphoneCreateV2ValidateType
     */
    public function getValidateType(): ?string
    {
        return $this->validateType;
    }

    /**
     * @param \Oceanengine\Models\ClueSmartphoneCreateV2ValidateType $validateType
     * @return self
     */
    public function setValidateType(?string $validateType): self
    {
        $this->validateType = $validateType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->callDisplay !== null) {
            $result['call_display'] = $this->callDisplay;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->noDisturbTimes !== null) {
            $result['no_disturb_times'] = $this->noDisturbTimes;
        }
        if ($this->phoneNumber !== null) {
            $result['phone_number'] = $this->phoneNumber;
        }
        if ($this->validateType !== null) {
            $result['validate_type'] = $this->validateType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['call_display'] ?? null) !== null) {
            $obj->callDisplay = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['no_disturb_times'] ?? null) !== null && is_array($v)) {
            $obj->noDisturbTimes = array_map(fn ($vv) => \Oceanengine\Models\ClueSmartphoneCreateV2RequestNoDisturbTimesInner::fromArray($vv), $v);
        }
        if (($v = $data['phone_number'] ?? null) !== null) {
            $obj->phoneNumber = (string) $v;
        }
        if (($v = $data['validate_type'] ?? null) !== null) {
            $obj->validateType = (string) $v;
        }
        return $obj;
    }
}
