<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange implements \JsonSerializable
{
    /**
     * 达人抖音号,此字段非必填，仅在专属任务challenge_info.author_scope=2时需要传
     * @var string[]
     */
    protected ?array $uniqueIds = null;

    /**
     * 达人抖音号,此字段非必填，仅在专属任务challenge_info.author_scope=2时需要传
     * @return string[]
     */
    public function getUniqueIds(): ?array
    {
        return $this->uniqueIds;
    }

    /**
     * 达人抖音号,此字段非必填，仅在专属任务challenge_info.author_scope=2时需要传
     * @param string[] $uniqueIds
     * @return self
     */
    public function setUniqueIds(?array $uniqueIds): self
    {
        $this->uniqueIds = $uniqueIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->uniqueIds !== null) {
            $result['unique_ids'] = $this->uniqueIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['unique_ids'] ?? null) !== null && is_array($v)) {
            $obj->uniqueIds = $v;
        }
        return $obj;
    }
}
