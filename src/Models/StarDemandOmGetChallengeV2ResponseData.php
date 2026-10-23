<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfo $taskInfo = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfo
     */
    public function getTaskInfo(): ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfo
    {
        return $this->taskInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfo $taskInfo
     * @return self
     */
    public function setTaskInfo(?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfo $taskInfo): self
    {
        $this->taskInfo = $taskInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->taskInfo !== null) {
            $result['task_info'] = $this->taskInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['task_info'] ?? null) !== null && is_array($v)) {
            $obj->taskInfo = \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfo::fromArray($v);
        }
        return $obj;
    }
}
