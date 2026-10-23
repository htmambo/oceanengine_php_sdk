<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueLiteContactRecordV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * @var string
     */
    protected ?string $contactId = null;

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
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->contactId !== null) {
            $result['contact_id'] = $this->contactId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['contact_id'] ?? null) !== null) {
            $obj->contactId = (string) $v;
        }
        return $obj;
    }
}
