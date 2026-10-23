<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueContactLogRecordUrlGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $contactId = null;

    /**
     * @var string
     */
    protected ?string $contactUrl = null;

    /**
     * @return string
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * @param string $contactId
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactUrl(): ?string
    {
        return $this->contactUrl;
    }

    /**
     * @param string $contactUrl
     * @return self
     */
    public function setContactUrl(?string $contactUrl): self
    {
        $this->contactUrl = $contactUrl;
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
        if ($this->contactUrl !== null) {
            $result['contact_url'] = $this->contactUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['contact_id'] ?? null) !== null) {
            $obj->contactId = (string) $v;
        }
        if (($v = $data['contact_url'] ?? null) !== null) {
            $obj->contactUrl = (string) $v;
        }
        return $obj;
    }
}
