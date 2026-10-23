<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderGetRegisteredIpActsV2ResponseDataIpActivityListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $ipActId = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @return int
     */
    public function getIpActId(): ?int
    {
        return $this->ipActId;
    }

    /**
     * @param int $ipActId
     * @return self
     */
    public function setIpActId(?int $ipActId): self
    {
        $this->ipActId = $ipActId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ipActId !== null) {
            $result['ip_act_id'] = $this->ipActId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ip_act_id'] ?? null) !== null) {
            $obj->ipActId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
