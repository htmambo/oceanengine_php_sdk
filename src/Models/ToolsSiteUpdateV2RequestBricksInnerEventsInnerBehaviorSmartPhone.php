<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehaviorSmartPhone implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $callDisplay = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $phoneNumber = null;

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
     * @return int
     */
    public function getPhoneNumber(): ?int
    {
        return $this->phoneNumber;
    }

    /**
     * @param int $phoneNumber
     * @return self
     */
    public function setPhoneNumber(?int $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
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
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->phoneNumber !== null) {
            $result['phone_number'] = $this->phoneNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['call_display'] ?? null) !== null) {
            $obj->callDisplay = (int) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['phone_number'] ?? null) !== null) {
            $obj->phoneNumber = (int) $v;
        }
        return $obj;
    }
}
