<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $expectConserveTime = null;

    /**
     * @return string
     */
    public function getExpectConserveTime(): ?string
    {
        return $this->expectConserveTime;
    }

    /**
     * @param string $expectConserveTime
     * @return self
     */
    public function setExpectConserveTime(?string $expectConserveTime): self
    {
        $this->expectConserveTime = $expectConserveTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->expectConserveTime !== null) {
            $result['expect_conserve_time'] = $this->expectConserveTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['expect_conserve_time'] ?? null) !== null) {
            $obj->expectConserveTime = (string) $v;
        }
        return $obj;
    }
}
