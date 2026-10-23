<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRtaGetInfoTmpV2ResponseDataRtaInfo implements \JsonSerializable
{
    /**
     * 备注，即RTA策略描述
     * @var string
     */
    protected ?string $remark = null;

    /**
     * RTA策略ID
     * @var int
     */
    protected ?int $rtaId = null;

    /**
     * 备注，即RTA策略描述
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注，即RTA策略描述
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * RTA策略ID
     * @return int
     */
    public function getRtaId(): ?int
    {
        return $this->rtaId;
    }

    /**
     * RTA策略ID
     * @param int $rtaId
     * @return self
     */
    public function setRtaId(?int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->rtaId !== null) {
            $result['rta_id'] = $this->rtaId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['rta_id'] ?? null) !== null) {
            $obj->rtaId = (int) $v;
        }
        return $obj;
    }
}
