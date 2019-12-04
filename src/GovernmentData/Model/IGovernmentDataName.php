<?php
namespace GovernmentData\Model;

interface IGovernmentDataName
{
    const TYPE_PID_NAME = array(
        IGovernmentData::TYPE_PID['XZGL'] => '行政管理类',
        IGovernmentData::TYPE_PID['SFCP'] => '司法裁判类',
        IGovernmentData::TYPE_PID['GGFW'] => '公共服务类',
        IGovernmentData::TYPE_PID['SHJD'] => '社会监督类',
        IGovernmentData::TYPE_PID['HHMD'] => '红黑名单'
    );

    const TYPE_NAME = array(
        IGovernmentData::TYPE['listFrXk'] => '行政许可',
        IGovernmentData::TYPE['listFrCf'] => '行政处罚',
        IGovernmentData::TYPE['listFrQz'] => '行政强制',
        IGovernmentData::TYPE['listFrZs'] => '行政征收',
        IGovernmentData::TYPE['listFrJf'] => '行政给付',
        IGovernmentData::TYPE['listFrJc'] => '行政检查',
        IGovernmentData::TYPE['listFrQr'] => '行政确认',
        IGovernmentData::TYPE['listFrJl'] => '行政奖励',
        IGovernmentData::TYPE['listFrCj'] => '行政裁决',
        IGovernmentData::TYPE['listFrQt'] => '其他',
        IGovernmentData::TYPE['listFrXzcp'] => '行政',
        IGovernmentData::TYPE['listFrXscp'] => '刑事',
        IGovernmentData::TYPE['listFrMscp'] => '民事',
        IGovernmentData::TYPE['listFrPccp'] => '赔偿',
        IGovernmentData::TYPE['listFrZxcp'] => '执行',
        IGovernmentData::TYPE['listFrQtt'] => '其他',
        IGovernmentData::TYPE['listFrWlx'] => '未履行法定义务及违约信息',
        IGovernmentData::TYPE['listFrWff'] => '违反有关规定的信息',
        IGovernmentData::TYPE['listFrFjfl'] => '分级分类管理信息',
        IGovernmentData::TYPE['listFrXzxk'] => '其他',
        IGovernmentData::TYPE['listFrXzcf'] => '行政许可（城管）',
        IGovernmentData::TYPE['listFrXzqz'] => '行政处罚（城管）',
        IGovernmentData::TYPE['listFrXzzs'] => '行政强制（城管）',
        IGovernmentData::TYPE['listFrXzjf'] => '行政征收（城管）',
        IGovernmentData::TYPE['listFrXzjc'] => '行政给付（城管）',
        IGovernmentData::TYPE['listFrXzqr'] => '行政检查（城管）',
        IGovernmentData::TYPE['listFrXzjl'] => '行政确认（城管）',
        IGovernmentData::TYPE['listFrXzcj'] => '行政奖励（城管）',
        IGovernmentData::TYPE['listFrQttt'] => '行政裁决（城管）',
        IGovernmentData::TYPE['listFrMt'] => '媒体监督',
        IGovernmentData::TYPE['listFrGz'] => '公众监督',
        IGovernmentData::TYPE['listFrRmd'] => '红名单',
        IGovernmentData::TYPE['listFrBmd'] => '黑名单'
    );
}
