<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmUpdateChallengeV2RequestDemandInfo implements \JsonSerializable
{
    /**
     * 参考素材 最多3个
     * @var string[]
     */
    protected ?array $attatchmentsUrl = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * 任务截止时间 秒级时间戳，即调整任务周期，不能早于当前时间，最长不能超过最初创建任务之后的365天
     * @var int
     */
    protected ?int $expirationTimeEnd = null;

    /**
     * 参考素材 最多3个
     * @return string[]
     */
    public function getAttatchmentsUrl(): ?array
    {
        return $this->attatchmentsUrl;
    }

    /**
     * 参考素材 最多3个
     * @param string[] $attatchmentsUrl
     * @return self
     */
    public function setAttatchmentsUrl(?array $attatchmentsUrl): self
    {
        $this->attatchmentsUrl = $attatchmentsUrl;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * 任务名称
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * 任务截止时间 秒级时间戳，即调整任务周期，不能早于当前时间，最长不能超过最初创建任务之后的365天
     * @return int
     */
    public function getExpirationTimeEnd(): ?int
    {
        return $this->expirationTimeEnd;
    }

    /**
     * 任务截止时间 秒级时间戳，即调整任务周期，不能早于当前时间，最长不能超过最初创建任务之后的365天
     * @param int $expirationTimeEnd
     * @return self
     */
    public function setExpirationTimeEnd(?int $expirationTimeEnd): self
    {
        $this->expirationTimeEnd = $expirationTimeEnd;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attatchmentsUrl !== null) {
            $result['attatchments_url'] = $this->attatchmentsUrl;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->expirationTimeEnd !== null) {
            $result['expiration_time_end'] = $this->expirationTimeEnd;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attatchments_url'] ?? null) !== null && is_array($v)) {
            $obj->attatchmentsUrl = $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['expiration_time_end'] ?? null) !== null) {
            $obj->expirationTimeEnd = (int) $v;
        }
        return $obj;
    }
}
