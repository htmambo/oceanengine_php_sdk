<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarChallengeListV2ResponseDataChallengeTasksInner[]
     */
    protected ?array $challengeTasks = null;

    /**
     * @var \Oceanengine\Models\StarChallengeListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarChallengeListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\StarChallengeListV2ResponseDataChallengeTasksInner[]
     */
    public function getChallengeTasks(): ?array
    {
        return $this->challengeTasks;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeListV2ResponseDataChallengeTasksInner[] $challengeTasks
     * @return self
     */
    public function setChallengeTasks(?array $challengeTasks): self
    {
        $this->challengeTasks = $challengeTasks;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarChallengeListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarChallengeListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->challengeTasks !== null) {
            $result['challenge_tasks'] = $this->challengeTasks;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_tasks'] ?? null) !== null && is_array($v)) {
            $obj->challengeTasks = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeListV2ResponseDataChallengeTasksInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarChallengeListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
