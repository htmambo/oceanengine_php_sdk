<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMaterialPushV30ResponseData implements \JsonSerializable
{
    /**
     * 推送失败列表
     * @var \Oceanengine\Models\AicMaterialPushV30ResponseDataFailResultsInner[]
     */
    protected ?array $failResults = null;

    /**
     * 推送成功列表
     * @var \Oceanengine\Models\AicMaterialPushV30ResponseDataSuccessResultsInner[]
     */
    protected ?array $successResults = null;

    /**
     * 推送失败列表
     * @return \Oceanengine\Models\AicMaterialPushV30ResponseDataFailResultsInner[]
     */
    public function getFailResults(): ?array
    {
        return $this->failResults;
    }

    /**
     * 推送失败列表
     * @param \Oceanengine\Models\AicMaterialPushV30ResponseDataFailResultsInner[] $failResults
     * @return self
     */
    public function setFailResults(?array $failResults): self
    {
        $this->failResults = $failResults;
        return $this;
    }

    /**
     * 推送成功列表
     * @return \Oceanengine\Models\AicMaterialPushV30ResponseDataSuccessResultsInner[]
     */
    public function getSuccessResults(): ?array
    {
        return $this->successResults;
    }

    /**
     * 推送成功列表
     * @param \Oceanengine\Models\AicMaterialPushV30ResponseDataSuccessResultsInner[] $successResults
     * @return self
     */
    public function setSuccessResults(?array $successResults): self
    {
        $this->successResults = $successResults;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failResults !== null) {
            $result['fail_results'] = $this->failResults;
        }
        if ($this->successResults !== null) {
            $result['success_results'] = $this->successResults;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_results'] ?? null) !== null && is_array($v)) {
            $obj->failResults = array_map(fn ($vv) => \Oceanengine\Models\AicMaterialPushV30ResponseDataFailResultsInner::fromArray($vv), $v);
        }
        if (($v = $data['success_results'] ?? null) !== null && is_array($v)) {
            $obj->successResults = array_map(fn ($vv) => \Oceanengine\Models\AicMaterialPushV30ResponseDataSuccessResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
