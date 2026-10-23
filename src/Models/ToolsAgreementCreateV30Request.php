<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAgreementCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 是否同意并确认签署协议
     * @var bool
     */
    protected ?bool $isAgree = null;

    /**
     * @var \Oceanengine\Models\ToolsAgreementCreateV30Type
     */
    protected ?string $type = null;

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
     * 是否同意并确认签署协议
     * @return bool
     */
    public function getIsAgree(): ?bool
    {
        return $this->isAgree;
    }

    /**
     * 是否同意并确认签署协议
     * @param bool $isAgree
     * @return self
     */
    public function setIsAgree(?bool $isAgree): self
    {
        $this->isAgree = $isAgree;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAgreementCreateV30Type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsAgreementCreateV30Type $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->isAgree !== null) {
            $result['is_agree'] = $this->isAgree;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['is_agree'] ?? null) !== null) {
            $obj->isAgree = (bool) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
