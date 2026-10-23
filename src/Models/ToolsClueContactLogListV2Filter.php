<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueContactLogListV2Filter implements \JsonSerializable
{
    /**
     * 呼叫记录id，若不填则返回线索下的全部话单
     * @var string
     */
    protected ?string $contactId = null;

    /**
     * 呼叫记录id，若不填则返回线索下的全部话单
     * @return string
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * 呼叫记录id，若不填则返回线索下的全部话单
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
