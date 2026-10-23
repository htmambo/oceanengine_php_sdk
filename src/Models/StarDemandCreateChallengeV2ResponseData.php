<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2ResponseDataBillInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2ResponseDataBillInfo $billInfo = null;

    /**
     * 投稿任务ID
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2ResponseDataBillInfo
     */
    public function getBillInfo(): ?\Oceanengine\Models\StarDemandCreateChallengeV2ResponseDataBillInfo
    {
        return $this->billInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2ResponseDataBillInfo $billInfo
     * @return self
     */
    public function setBillInfo(?\Oceanengine\Models\StarDemandCreateChallengeV2ResponseDataBillInfo $billInfo): self
    {
        $this->billInfo = $billInfo;
        return $this;
    }

    /**
     * 投稿任务ID
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * 投稿任务ID
     * @param int $challengeTaskId
     * @return self
     */
    public function setChallengeTaskId(?int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->billInfo !== null) {
            $result['bill_info'] = $this->billInfo;
        }
        if ($this->challengeTaskId !== null) {
            $result['challenge_task_id'] = $this->challengeTaskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bill_info'] ?? null) !== null && is_array($v)) {
            $obj->billInfo = \Oceanengine\Models\StarDemandCreateChallengeV2ResponseDataBillInfo::fromArray($v);
        }
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        return $obj;
    }
}
