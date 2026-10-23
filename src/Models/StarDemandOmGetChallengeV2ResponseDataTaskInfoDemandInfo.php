<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo implements \JsonSerializable
{
    /**
     * 参考素材
     * @var string[]
     */
    protected ?array $attachments = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * 参考素材
     * @return string[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * 参考素材
     * @param string[] $attachments
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachments'] ?? null) !== null && is_array($v)) {
            $obj->attachments = $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        return $obj;
    }
}
