<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo implements \JsonSerializable
{
    /**
     * 联系人id
     * @var int
     */
    protected ?int $contactId = null;

    /**
     * 联系人姓名
     * @var string
     */
    protected ?string $contactName = null;

    /**
     * 联系人手机号
     * @var string
     */
    protected ?string $contactPhone = null;

    /**
     * 联系人id
     * @return int
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    /**
     * 联系人id
     * @param int $contactId
     * @return self
     */
    public function setContactId(?int $contactId): self
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * 联系人姓名
     * @return string
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * 联系人姓名
     * @param string $contactName
     * @return self
     */
    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * 联系人手机号
     * @return string
     */
    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    /**
     * 联系人手机号
     * @param string $contactPhone
     * @return self
     */
    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contactId !== null) {
            $result['contact_id'] = $this->contactId;
        }
        if ($this->contactName !== null) {
            $result['contact_name'] = $this->contactName;
        }
        if ($this->contactPhone !== null) {
            $result['contact_phone'] = $this->contactPhone;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['contact_id'] ?? null) !== null) {
            $obj->contactId = (int) $v;
        }
        if (($v = $data['contact_name'] ?? null) !== null) {
            $obj->contactName = (string) $v;
        }
        if (($v = $data['contact_phone'] ?? null) !== null) {
            $obj->contactPhone = (string) $v;
        }
        return $obj;
    }
}
