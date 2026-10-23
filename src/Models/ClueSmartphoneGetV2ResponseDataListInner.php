<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueSmartphoneGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $callDisplay = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInnerNoDisturbTimesInner[]
     */
    protected ?array $noDisturbTimes = null;

    /**
     * @var string
     */
    protected ?string $phoneNumber = null;

    /**
     * @var \Oceanengine\Models\ClueSmartphoneGetV2DataListValidateType
     */
    protected ?string $validateType = null;

    /**
     * @return int
     */
    public function getCallDisplay(): ?int
    {
        return $this->callDisplay;
    }

    /**
     * @param int $callDisplay
     * @return self
     */
    public function setCallDisplay(?int $callDisplay): self
    {
        $this->callDisplay = $callDisplay;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
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
     * @return \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInnerNoDisturbTimesInner[]
     */
    public function getNoDisturbTimes(): ?array
    {
        return $this->noDisturbTimes;
    }

    /**
     * @param \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInnerNoDisturbTimesInner[] $noDisturbTimes
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
     * @return \Oceanengine\Models\ClueSmartphoneGetV2DataListValidateType
     */
    public function getValidateType(): ?string
    {
        return $this->validateType;
    }

    /**
     * @param \Oceanengine\Models\ClueSmartphoneGetV2DataListValidateType $validateType
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
        if ($this->callDisplay !== null) {
            $result['call_display'] = $this->callDisplay;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
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
        if (($v = $data['call_display'] ?? null) !== null) {
            $obj->callDisplay = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['no_disturb_times'] ?? null) !== null && is_array($v)) {
            $obj->noDisturbTimes = array_map(fn ($vv) => \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInnerNoDisturbTimesInner::fromArray($vv), $v);
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
