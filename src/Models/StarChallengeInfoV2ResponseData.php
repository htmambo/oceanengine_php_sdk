<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInner[]
     */
    protected ?array $taskInfoList = null;

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInner[]
     */
    public function getTaskInfoList(): ?array
    {
        return $this->taskInfoList;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInner[] $taskInfoList
     * @return self
     */
    public function setTaskInfoList(?array $taskInfoList): self
    {
        $this->taskInfoList = $taskInfoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->taskInfoList !== null) {
            $result['task_info_list'] = $this->taskInfoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['task_info_list'] ?? null) !== null && is_array($v)) {
            $obj->taskInfoList = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
