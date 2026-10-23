<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaExpGetV2ResponseDataDataArrayInner implements \JsonSerializable
{
    /**
     * 展现数据-点击数 当头条用户点击广告素材时，触发点击事件，该事件被认为是一次有效的广告点击
     * @var int
     */
    protected ?int $click = null;

    /**
     * 转化数据-转化数 将转化数记录在转化事件发生的时间上。建议广告主考核成本时参考“转化数据（计费时间）”例如您的广告在早上8点进行了展示和点击，用户晚上19点发生了激活行为，我们会把激活数披露在晚上19点
     * @var int
     */
    protected ?int $convert = null;

    /**
     * 展现数据-总花费 表示广告在投放期内的预估花费金额,当天数据可能会有波动，次日稳定
     * @var float
     */
    protected ?float $cost = null;

    /**
     * 数据统计日期，格式YYYYMMDD
     * @var string
     */
    protected ?string $date = null;

    /**
     * 展现数据-展示数 广告展示给用户的次数。计算方式：经平台判定有效且被计费的展示次数
     * @var int
     */
    protected ?int $show = null;

    /**
     * 联合实验策略，请求入参
     * @var string
     */
    protected ?string $strategy = null;

    /**
     * 竞胜率。 竞胜率=竞胜数/参竞数，代表广告主参竞请求的胜出比例
     * @var float
     */
    protected ?float $winRatio = null;

    /**
     * 展现数据-点击数 当头条用户点击广告素材时，触发点击事件，该事件被认为是一次有效的广告点击
     * @return int
     */
    public function getClick(): ?int
    {
        return $this->click;
    }

    /**
     * 展现数据-点击数 当头条用户点击广告素材时，触发点击事件，该事件被认为是一次有效的广告点击
     * @param int $click
     * @return self
     */
    public function setClick(?int $click): self
    {
        $this->click = $click;
        return $this;
    }

    /**
     * 转化数据-转化数 将转化数记录在转化事件发生的时间上。建议广告主考核成本时参考“转化数据（计费时间）”例如您的广告在早上8点进行了展示和点击，用户晚上19点发生了激活行为，我们会把激活数披露在晚上19点
     * @return int
     */
    public function getConvert(): ?int
    {
        return $this->convert;
    }

    /**
     * 转化数据-转化数 将转化数记录在转化事件发生的时间上。建议广告主考核成本时参考“转化数据（计费时间）”例如您的广告在早上8点进行了展示和点击，用户晚上19点发生了激活行为，我们会把激活数披露在晚上19点
     * @param int $convert
     * @return self
     */
    public function setConvert(?int $convert): self
    {
        $this->convert = $convert;
        return $this;
    }

    /**
     * 展现数据-总花费 表示广告在投放期内的预估花费金额,当天数据可能会有波动，次日稳定
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * 展现数据-总花费 表示广告在投放期内的预估花费金额,当天数据可能会有波动，次日稳定
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 数据统计日期，格式YYYYMMDD
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 数据统计日期，格式YYYYMMDD
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 展现数据-展示数 广告展示给用户的次数。计算方式：经平台判定有效且被计费的展示次数
     * @return int
     */
    public function getShow(): ?int
    {
        return $this->show;
    }

    /**
     * 展现数据-展示数 广告展示给用户的次数。计算方式：经平台判定有效且被计费的展示次数
     * @param int $show
     * @return self
     */
    public function setShow(?int $show): self
    {
        $this->show = $show;
        return $this;
    }

    /**
     * 联合实验策略，请求入参
     * @return string
     */
    public function getStrategy(): ?string
    {
        return $this->strategy;
    }

    /**
     * 联合实验策略，请求入参
     * @param string $strategy
     * @return self
     */
    public function setStrategy(?string $strategy): self
    {
        $this->strategy = $strategy;
        return $this;
    }

    /**
     * 竞胜率。 竞胜率=竞胜数/参竞数，代表广告主参竞请求的胜出比例
     * @return float
     */
    public function getWinRatio(): ?float
    {
        return $this->winRatio;
    }

    /**
     * 竞胜率。 竞胜率=竞胜数/参竞数，代表广告主参竞请求的胜出比例
     * @param float $winRatio
     * @return self
     */
    public function setWinRatio(?float $winRatio): self
    {
        $this->winRatio = $winRatio;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->click !== null) {
            $result['click'] = $this->click;
        }
        if ($this->convert !== null) {
            $result['convert'] = $this->convert;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
        }
        if ($this->strategy !== null) {
            $result['strategy'] = $this->strategy;
        }
        if ($this->winRatio !== null) {
            $result['win_ratio'] = $this->winRatio;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click'] ?? null) !== null) {
            $obj->click = (int) $v;
        }
        if (($v = $data['convert'] ?? null) !== null) {
            $obj->convert = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        if (($v = $data['strategy'] ?? null) !== null) {
            $obj->strategy = (string) $v;
        }
        if (($v = $data['win_ratio'] ?? null) !== null) {
            $obj->winRatio = (float) $v;
        }
        return $obj;
    }
}
