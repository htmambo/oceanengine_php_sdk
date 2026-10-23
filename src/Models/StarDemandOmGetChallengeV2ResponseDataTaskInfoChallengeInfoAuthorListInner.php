<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoAuthorListInner implements \JsonSerializable
{
    /**
     * - 取消方：1-开发者，2-达人，3-平台
     * @var int
     */
    protected ?int $cancelRole = null;

    /**
     * - 合作状态，1-已发布视频 2-待发布视频 3-合作已取消
     * @var int
     */
    protected ?int $participateStatus = null;

    /**
     * - 达人抖音号
     * @var string
     */
    protected ?string $uniqueId = null;

    /**
     * - 取消方：1-开发者，2-达人，3-平台
     * @return int
     */
    public function getCancelRole(): ?int
    {
        return $this->cancelRole;
    }

    /**
     * - 取消方：1-开发者，2-达人，3-平台
     * @param int $cancelRole
     * @return self
     */
    public function setCancelRole(?int $cancelRole): self
    {
        $this->cancelRole = $cancelRole;
        return $this;
    }

    /**
     * - 合作状态，1-已发布视频 2-待发布视频 3-合作已取消
     * @return int
     */
    public function getParticipateStatus(): ?int
    {
        return $this->participateStatus;
    }

    /**
     * - 合作状态，1-已发布视频 2-待发布视频 3-合作已取消
     * @param int $participateStatus
     * @return self
     */
    public function setParticipateStatus(?int $participateStatus): self
    {
        $this->participateStatus = $participateStatus;
        return $this;
    }

    /**
     * - 达人抖音号
     * @return string
     */
    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    /**
     * - 达人抖音号
     * @param string $uniqueId
     * @return self
     */
    public function setUniqueId(?string $uniqueId): self
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cancelRole !== null) {
            $result['cancel_role'] = $this->cancelRole;
        }
        if ($this->participateStatus !== null) {
            $result['participate_status'] = $this->participateStatus;
        }
        if ($this->uniqueId !== null) {
            $result['unique_id'] = $this->uniqueId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cancel_role'] ?? null) !== null) {
            $obj->cancelRole = (int) $v;
        }
        if (($v = $data['participate_status'] ?? null) !== null) {
            $obj->participateStatus = (int) $v;
        }
        if (($v = $data['unique_id'] ?? null) !== null) {
            $obj->uniqueId = (string) $v;
        }
        return $obj;
    }
}
