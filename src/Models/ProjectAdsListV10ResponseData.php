<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectAdsListV10ResponseData implements \JsonSerializable
{
    /**
     * 仅 success=true 时有效；全量、去重、升序；空项目返回 []
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * 额外附加信息：query_complete、ad_count、promotion_count、查询口径
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * @var string
     */
    protected ?string $resMsg = null;

    /**
     * 全部关联查询完成才为 true；查询失败不能当作空项目
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 仅 success=true 时有效；全量、去重、升序；空项目返回 []
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * 仅 success=true 时有效；全量、去重、升序；空项目返回 []
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * 额外附加信息：query_complete、ad_count、promotion_count、查询口径
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * 额外附加信息：query_complete、ad_count、promotion_count、查询口径
     * @param array<string,string> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @return string
     */
    public function getResMsg(): ?string
    {
        return $this->resMsg;
    }

    /**
     * @param string $resMsg
     * @return self
     */
    public function setResMsg(?string $resMsg): self
    {
        $this->resMsg = $resMsg;
        return $this;
    }

    /**
     * 全部关联查询完成才为 true；查询失败不能当作空项目
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 全部关联查询完成才为 true；查询失败不能当作空项目
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->resMsg !== null) {
            $result['res_msg'] = $this->resMsg;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['res_msg'] ?? null) !== null) {
            $obj->resMsg = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
