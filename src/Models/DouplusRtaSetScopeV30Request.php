<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusRtaSetScopeV30Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $awemeSecUid = null;

    /**
     * @var int
     */
    protected ?int $rtaId = null;

    /**
     * @var int[]
     */
    protected ?array $targetIds = null;

    /**
     * @var \Oceanengine\Models\DouplusRtaSetScopeV30TargetType
     */
    protected ?string $targetType = null;

    /**
     * @return string
     */
    public function getAwemeSecUid(): ?string
    {
        return $this->awemeSecUid;
    }

    /**
     * @param string $awemeSecUid
     * @return self
     */
    public function setAwemeSecUid(?string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    /**
     * @return int
     */
    public function getRtaId(): ?int
    {
        return $this->rtaId;
    }

    /**
     * @param int $rtaId
     * @return self
     */
    public function setRtaId(?int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTargetIds(): ?array
    {
        return $this->targetIds;
    }

    /**
     * @param int[] $targetIds
     * @return self
     */
    public function setTargetIds(?array $targetIds): self
    {
        $this->targetIds = $targetIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusRtaSetScopeV30TargetType
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    /**
     * @param \Oceanengine\Models\DouplusRtaSetScopeV30TargetType $targetType
     * @return self
     */
    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeSecUid !== null) {
            $result['aweme_sec_uid'] = $this->awemeSecUid;
        }
        if ($this->rtaId !== null) {
            $result['rta_id'] = $this->rtaId;
        }
        if ($this->targetIds !== null) {
            $result['target_ids'] = $this->targetIds;
        }
        if ($this->targetType !== null) {
            $result['target_type'] = $this->targetType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_sec_uid'] ?? null) !== null) {
            $obj->awemeSecUid = (string) $v;
        }
        if (($v = $data['rta_id'] ?? null) !== null) {
            $obj->rtaId = (int) $v;
        }
        if (($v = $data['target_ids'] ?? null) !== null && is_array($v)) {
            $obj->targetIds = $v;
        }
        if (($v = $data['target_type'] ?? null) !== null) {
            $obj->targetType = (string) $v;
        }
        return $obj;
    }
}
