<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor implements \JsonSerializable
{
    /**
     * 图片的主颜色信息(下部区域)
     * @var string
     */
    protected ?string $primaryColorDown = null;

    /**
     * 视频帧的主颜色信息, 每帧一个
     * @var string[]
     */
    protected ?array $primaryColorList = null;

    /**
     * 图片的主颜色信息(上部区域)
     * @var string
     */
    protected ?string $primaryColorUpper = null;

    /**
     * 图片的主颜色信息(下部区域)
     * @return string
     */
    public function getPrimaryColorDown(): ?string
    {
        return $this->primaryColorDown;
    }

    /**
     * 图片的主颜色信息(下部区域)
     * @param string $primaryColorDown
     * @return self
     */
    public function setPrimaryColorDown(?string $primaryColorDown): self
    {
        $this->primaryColorDown = $primaryColorDown;
        return $this;
    }

    /**
     * 视频帧的主颜色信息, 每帧一个
     * @return string[]
     */
    public function getPrimaryColorList(): ?array
    {
        return $this->primaryColorList;
    }

    /**
     * 视频帧的主颜色信息, 每帧一个
     * @param string[] $primaryColorList
     * @return self
     */
    public function setPrimaryColorList(?array $primaryColorList): self
    {
        $this->primaryColorList = $primaryColorList;
        return $this;
    }

    /**
     * 图片的主颜色信息(上部区域)
     * @return string
     */
    public function getPrimaryColorUpper(): ?string
    {
        return $this->primaryColorUpper;
    }

    /**
     * 图片的主颜色信息(上部区域)
     * @param string $primaryColorUpper
     * @return self
     */
    public function setPrimaryColorUpper(?string $primaryColorUpper): self
    {
        $this->primaryColorUpper = $primaryColorUpper;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->primaryColorDown !== null) {
            $result['primary_color_down'] = $this->primaryColorDown;
        }
        if ($this->primaryColorList !== null) {
            $result['primary_color_list'] = $this->primaryColorList;
        }
        if ($this->primaryColorUpper !== null) {
            $result['primary_color_upper'] = $this->primaryColorUpper;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['primary_color_down'] ?? null) !== null) {
            $obj->primaryColorDown = (string) $v;
        }
        if (($v = $data['primary_color_list'] ?? null) !== null && is_array($v)) {
            $obj->primaryColorList = $v;
        }
        if (($v = $data['primary_color_upper'] ?? null) !== null) {
            $obj->primaryColorUpper = (string) $v;
        }
        return $obj;
    }
}
