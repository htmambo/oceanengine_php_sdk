<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRubeexVersionGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * data_md5指rubeex工具产出的试玩素材作品版本，一个rubeex试玩素材可能有多个作品版本
     * @var string
     */
    protected ?string $dataMd5 = null;

    /**
     * 首次创建时间
     * @var string
     */
    protected ?string $firstLaunchDate = null;

    /**
     * 版本对应作品名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 素材url
     * @var string
     */
    protected ?string $playableUrl = null;

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
     * 首次创建时间
     * @return string
     */
    public function getFirstLaunchDate(): ?string
    {
        return $this->firstLaunchDate;
    }

    /**
     * 首次创建时间
     * @param string $firstLaunchDate
     * @return self
     */
    public function setFirstLaunchDate(?string $firstLaunchDate): self
    {
        $this->firstLaunchDate = $firstLaunchDate;
        return $this;
    }

    /**
     * 版本对应作品名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 版本对应作品名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 素材url
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * 素材url
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
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
        if ($this->firstLaunchDate !== null) {
            $result['first_launch_date'] = $this->firstLaunchDate;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_md5'] ?? null) !== null) {
            $obj->dataMd5 = (string) $v;
        }
        if (($v = $data['first_launch_date'] ?? null) !== null) {
            $obj->firstLaunchDate = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        return $obj;
    }
}
