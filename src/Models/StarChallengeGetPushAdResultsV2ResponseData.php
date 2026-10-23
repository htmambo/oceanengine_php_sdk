<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeGetPushAdResultsV2ResponseData implements \JsonSerializable
{
    /**
     * 广告推送结果
     * @var \Oceanengine\Models\StarChallengeGetPushAdResultsV2ResponseDataPushResultsInner[]
     */
    protected ?array $pushResults = null;

    /**
     * 广告推送结果
     * @return \Oceanengine\Models\StarChallengeGetPushAdResultsV2ResponseDataPushResultsInner[]
     */
    public function getPushResults(): ?array
    {
        return $this->pushResults;
    }

    /**
     * 广告推送结果
     * @param \Oceanengine\Models\StarChallengeGetPushAdResultsV2ResponseDataPushResultsInner[] $pushResults
     * @return self
     */
    public function setPushResults(?array $pushResults): self
    {
        $this->pushResults = $pushResults;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pushResults !== null) {
            $result['push_results'] = $this->pushResults;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['push_results'] ?? null) !== null && is_array($v)) {
            $obj->pushResults = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeGetPushAdResultsV2ResponseDataPushResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
