<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRubeexRemarkV2Filtering implements \JsonSerializable
{
    /**
     * data_md5指rubeex工具产出的试玩素材作品版本，一个rubeex试玩素材可能有多个作品版本
     * @var string
     */
    protected ?string $dataMd5 = null;

    /**
     * data_md5指rubeex工具产出的试玩素材作品版本，一个rubeex试玩素材可能有多个作品版本
     * @return string
     */
    public function getDataMd5(): ?string
    {
        return $this->dataMd5;
    }

    /**
     * data_md5指rubeex工具产出的试玩素材作品版本，一个rubeex试玩素材可能有多个作品版本
     * @param string $dataMd5
     * @return self
     */
    public function setDataMd5(?string $dataMd5): self
    {
        $this->dataMd5 = $dataMd5;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataMd5 !== null) {
            $result['data_md5'] = $this->dataMd5;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_md5'] ?? null) !== null) {
            $obj->dataMd5 = (string) $v;
        }
        return $obj;
    }
}
