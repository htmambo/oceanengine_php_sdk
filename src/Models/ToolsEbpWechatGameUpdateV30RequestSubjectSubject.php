<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatGameUpdateV30RequestSubjectSubject implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var int
     */
    protected ?int $platform = null;

    /**
     * @var string
     */
    protected ?string $subjectEntityName = null;

    /**
     * @var int
     */
    protected ?int $subjectStatus = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    /**
     * @param int $platform
     * @return self
     */
    public function setPlatform(?int $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubjectEntityName(): ?string
    {
        return $this->subjectEntityName;
    }

    /**
     * @param string $subjectEntityName
     * @return self
     */
    public function setSubjectEntityName(?string $subjectEntityName): self
    {
        $this->subjectEntityName = $subjectEntityName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubjectStatus(): ?int
    {
        return $this->subjectStatus;
    }

    /**
     * @param int $subjectStatus
     * @return self
     */
    public function setSubjectStatus(?int $subjectStatus): self
    {
        $this->subjectStatus = $subjectStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->subjectEntityName !== null) {
            $result['subject_entity_name'] = $this->subjectEntityName;
        }
        if ($this->subjectStatus !== null) {
            $result['subject_status'] = $this->subjectStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (int) $v;
        }
        if (($v = $data['subject_entity_name'] ?? null) !== null) {
            $obj->subjectEntityName = (string) $v;
        }
        if (($v = $data['subject_status'] ?? null) !== null) {
            $obj->subjectStatus = (int) $v;
        }
        return $obj;
    }
}
