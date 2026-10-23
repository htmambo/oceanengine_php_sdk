<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatInstanceListV2Filter implements \JsonSerializable
{
    /**
     * 创建时间截止日期，格式：2022-07-29
     * @var string
     */
    protected ?string $createTimeEnd = null;

    /**
     * 创建时间起始日期，格式：2022-07-19
     * @var string
     */
    protected ?string $createTimeStart = null;

    /**
     * 微信号码包IDs，超过100个时报参数错误
     * @var int[]
     */
    protected ?array $instanceIds = null;

    /**
     * 微信号码包名称，模糊匹配
     * @var string
     */
    protected ?string $name = null;

    /**
     * 分页，>=1，默认值1
     * @var int
     */
    protected ?int $page = null;

    /**
     * 页大小，1-100，默认值20
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 微信号，精确匹配
     * @var string
     */
    protected ?string $wechatNumber = null;

    /**
     * 创建时间截止日期，格式：2022-07-29
     * @return string
     */
    public function getCreateTimeEnd(): ?string
    {
        return $this->createTimeEnd;
    }

    /**
     * 创建时间截止日期，格式：2022-07-29
     * @param string $createTimeEnd
     * @return self
     */
    public function setCreateTimeEnd(?string $createTimeEnd): self
    {
        $this->createTimeEnd = $createTimeEnd;
        return $this;
    }

    /**
     * 创建时间起始日期，格式：2022-07-19
     * @return string
     */
    public function getCreateTimeStart(): ?string
    {
        return $this->createTimeStart;
    }

    /**
     * 创建时间起始日期，格式：2022-07-19
     * @param string $createTimeStart
     * @return self
     */
    public function setCreateTimeStart(?string $createTimeStart): self
    {
        $this->createTimeStart = $createTimeStart;
        return $this;
    }

    /**
     * 微信号码包IDs，超过100个时报参数错误
     * @return int[]
     */
    public function getInstanceIds(): ?array
    {
        return $this->instanceIds;
    }

    /**
     * 微信号码包IDs，超过100个时报参数错误
     * @param int[] $instanceIds
     * @return self
     */
    public function setInstanceIds(?array $instanceIds): self
    {
        $this->instanceIds = $instanceIds;
        return $this;
    }

    /**
     * 微信号码包名称，模糊匹配
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 微信号码包名称，模糊匹配
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 分页，>=1，默认值1
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 分页，>=1，默认值1
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页大小，1-100，默认值20
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 页大小，1-100，默认值20
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 微信号，精确匹配
     * @return string
     */
    public function getWechatNumber(): ?string
    {
        return $this->wechatNumber;
    }

    /**
     * 微信号，精确匹配
     * @param string $wechatNumber
     * @return self
     */
    public function setWechatNumber(?string $wechatNumber): self
    {
        $this->wechatNumber = $wechatNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTimeEnd !== null) {
            $result['create_time_end'] = $this->createTimeEnd;
        }
        if ($this->createTimeStart !== null) {
            $result['create_time_start'] = $this->createTimeStart;
        }
        if ($this->instanceIds !== null) {
            $result['instance_ids'] = $this->instanceIds;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->wechatNumber !== null) {
            $result['wechat_number'] = $this->wechatNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time_end'] ?? null) !== null) {
            $obj->createTimeEnd = (string) $v;
        }
        if (($v = $data['create_time_start'] ?? null) !== null) {
            $obj->createTimeStart = (string) $v;
        }
        if (($v = $data['instance_ids'] ?? null) !== null && is_array($v)) {
            $obj->instanceIds = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['wechat_number'] ?? null) !== null) {
            $obj->wechatNumber = (string) $v;
        }
        return $obj;
    }
}
