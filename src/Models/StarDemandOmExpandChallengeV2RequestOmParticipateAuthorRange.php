<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange implements \JsonSerializable
{
    /**
     * 增派达人抖音号 专属任务，list，最多200
     * @var string[]
     */
    protected ?array $addOrCancelAuthorUidsArray = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType
     */
    protected ?string $operationType = null;

    /**
     * 增派达人抖音号 专属任务，list，最多200
     * @return string[]
     */
    public function getAddOrCancelAuthorUidsArray(): ?array
    {
        return $this->addOrCancelAuthorUidsArray;
    }

    /**
     * 增派达人抖音号 专属任务，list，最多200
     * @param string[] $addOrCancelAuthorUidsArray
     * @return self
     */
    public function setAddOrCancelAuthorUidsArray(?array $addOrCancelAuthorUidsArray): self
    {
        $this->addOrCancelAuthorUidsArray = $addOrCancelAuthorUidsArray;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType $operationType
     * @return self
     */
    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->addOrCancelAuthorUidsArray !== null) {
            $result['add_or_cancel_author_uids_array'] = $this->addOrCancelAuthorUidsArray;
        }
        if ($this->operationType !== null) {
            $result['operation_type'] = $this->operationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['add_or_cancel_author_uids_array'] ?? null) !== null && is_array($v)) {
            $obj->addOrCancelAuthorUidsArray = $v;
        }
        if (($v = $data['operation_type'] ?? null) !== null) {
            $obj->operationType = (string) $v;
        }
        return $obj;
    }
}
