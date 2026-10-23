<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserUnassignV2ResponseData implements \JsonSerializable
{
    /**
     * 分配失败账户数
     * @var int
     */
    protected ?int $failNum = null;

    /**
     * 分配结果
     * @var \Oceanengine\Models\AgentAdvertiserUnassignV2ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * 分配成功账户数
     * @var int
     */
    protected ?int $successNum = null;

    /**
     * 分配失败账户数
     * @return int
     */
    public function getFailNum(): ?int
    {
        return $this->failNum;
    }

    /**
     * 分配失败账户数
     * @param int $failNum
     * @return self
     */
    public function setFailNum(?int $failNum): self
    {
        $this->failNum = $failNum;
        return $this;
    }

    /**
     * 分配结果
     * @return \Oceanengine\Models\AgentAdvertiserUnassignV2ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 分配结果
     * @param \Oceanengine\Models\AgentAdvertiserUnassignV2ResponseDataResultsInner[] $results
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
        return $this;
    }

    /**
     * 分配成功账户数
     * @return int
     */
    public function getSuccessNum(): ?int
    {
        return $this->successNum;
    }

    /**
     * 分配成功账户数
     * @param int $successNum
     * @return self
     */
    public function setSuccessNum(?int $successNum): self
    {
        $this->successNum = $successNum;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failNum !== null) {
            $result['fail_num'] = $this->failNum;
        }
        if ($this->results !== null) {
            $result['results'] = $this->results;
        }
        if ($this->successNum !== null) {
            $result['success_num'] = $this->successNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_num'] ?? null) !== null) {
            $obj->failNum = (int) $v;
        }
        if (($v = $data['results'] ?? null) !== null && is_array($v)) {
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvertiserUnassignV2ResponseDataResultsInner::fromArray($vv), $v);
        }
        if (($v = $data['success_num'] ?? null) !== null) {
            $obj->successNum = (int) $v;
        }
        return $obj;
    }
}
