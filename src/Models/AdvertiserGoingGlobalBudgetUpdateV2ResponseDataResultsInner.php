<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserGoingGlobalBudgetUpdateV2ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advId = null;

    /**
     * @var int
     */
    protected ?int $reasonCode = null;

    /**
     * @var string
     */
    protected ?string $reasonMessage = null;

    /**
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * @return int
     */
    public function getAdvId(): ?int
    {
        return $this->advId;
    }

    /**
     * @param int $advId
     * @return self
     */
    public function setAdvId(?int $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * @return int
     */
    public function getReasonCode(): ?int
    {
        return $this->reasonCode;
    }

    /**
     * @param int $reasonCode
     * @return self
     */
    public function setReasonCode(?int $reasonCode): self
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getReasonMessage(): ?string
    {
        return $this->reasonMessage;
    }

    /**
     * @param string $reasonMessage
     * @return self
     */
    public function setReasonMessage(?string $reasonMessage): self
    {
        $this->reasonMessage = $reasonMessage;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advId !== null) {
            $result['adv_id'] = $this->advId;
        }
        if ($this->reasonCode !== null) {
            $result['reason_code'] = $this->reasonCode;
        }
        if ($this->reasonMessage !== null) {
            $result['reason_message'] = $this->reasonMessage;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_id'] ?? null) !== null) {
            $obj->advId = (int) $v;
        }
        if (($v = $data['reason_code'] ?? null) !== null) {
            $obj->reasonCode = (int) $v;
        }
        if (($v = $data['reason_message'] ?? null) !== null) {
            $obj->reasonMessage = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
