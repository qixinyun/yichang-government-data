<?php
namespace GovernmentData\Model;

interface IGovernmentDataName
{
    const TYPE_PID_NAME = array(
        IGovernmentData::TYPE_PID['XZGL'] => '行政管理类',
        IGovernmentData::TYPE_PID['SFCP'] => '司法裁判类',
        IGovernmentData::TYPE_PID['GGFW'] => '公共服务类',
        IGovernmentData::TYPE_PID['SHJD'] => '社会监督类',
        IGovernmentData::TYPE_PID['QTDL'] => '其他类'
    );

    const TYPE_NAME = array(
        IGovernmentData::TYPE['FRXYXX'] => '法人信用信息',
        IGovernmentData::TYPE['ZRRXYXX'] => '自然人信用信息',
        IGovernmentData::TYPE['XK'] => '行政许可',
        IGovernmentData::TYPE['CF'] => '行政处罚',
        IGovernmentData::TYPE['QZ'] => '行政强制',
        IGovernmentData::TYPE['ZS'] => '行政征收',
        IGovernmentData::TYPE['JF'] => '行政给付',
        IGovernmentData::TYPE['JC'] => '行政检查',
        IGovernmentData::TYPE['QR'] => '行政确认',
        IGovernmentData::TYPE['JL'] => '行政奖励',
        IGovernmentData::TYPE['CJ'] => '行政裁决',
        IGovernmentData::TYPE['QT'] => '其他',
        IGovernmentData::TYPE['XZ'] => '行政',
        IGovernmentData::TYPE['XS'] => '刑事',
        IGovernmentData::TYPE['MS'] => '民事',
        IGovernmentData::TYPE['PC'] => '赔偿',
        IGovernmentData::TYPE['ZX'] => '执行',
        IGovernmentData::TYPE['QTT'] => '其他',
        IGovernmentData::TYPE['WLX'] => '未履行法定义务及违约信息',
        IGovernmentData::TYPE['WFF'] => '违反有关规定的信息',
        IGovernmentData::TYPE['FJFL'] => '分级分类管理信息',
        IGovernmentData::TYPE['QTTT'] => '其他',
        IGovernmentData::TYPE['XZXK'] => '行政许可（城管）',
        IGovernmentData::TYPE['XZCF'] => '行政处罚（城管）',
        IGovernmentData::TYPE['XZQZ'] => '行政强制（城管）',
        IGovernmentData::TYPE['XZZS'] => '行政征收（城管）',
        IGovernmentData::TYPE['XZJF'] => '行政给付（城管）',
        IGovernmentData::TYPE['XZJC'] => '行政检查（城管）',
        IGovernmentData::TYPE['XZQR'] => '行政确认（城管）',
        IGovernmentData::TYPE['XZJL'] => '行政奖励（城管）',
        IGovernmentData::TYPE['XZCJ'] => '行政裁决（城管）',
        IGovernmentData::TYPE['MT'] => '媒体监督',
        IGovernmentData::TYPE['GZ'] => '公众监督',
        IGovernmentData::TYPE['QTQT'] => '其他事项'
    );
}