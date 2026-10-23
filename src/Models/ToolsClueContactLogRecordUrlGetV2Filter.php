<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueContactLogRecordUrlGetV2Filter implements \JsonSerializable
{
    /**
     * 话单id，可从“获取线索话单”接口获取
     * @var string
     */
    protected ?string $contactId = null;

    /**
     * 话单id，可从“获取线索话单”接口获取
     * @return string
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * 话单id，可从“获取线索话单”接口获取
     * @param string $contactId
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['contact_id'] ?? null) !== null) {
            $obj->contactId = (string) $v;
        }
        return $obj;
    }
}
