<?php
namespace GovernmentData\Model;

class TemplateFactory
{
    const MAPS = array(
        IGovernmentData::TYPE['listFrXk'] => 'GovernmentData\Model\XkTemplate',
        IGovernmentData::TYPE['listFrCf'] => 'GovernmentData\Model\CfTemplate',
        IGovernmentData::TYPE['listFrQz'] => 'GovernmentData\Model\QzTemplate',
        IGovernmentData::TYPE['listFrZs'] => 'GovernmentData\Model\ZsTemplate',
        IGovernmentData::TYPE['listFrJf'] => 'GovernmentData\Model\JfTemplate',
        IGovernmentData::TYPE['listFrJc'] => 'GovernmentData\Model\JcTemplate',
        IGovernmentData::TYPE['listFrQr'] => 'GovernmentData\Model\QrTemplate',
        IGovernmentData::TYPE['listFrJl'] => 'GovernmentData\Model\JlTemplate',
        IGovernmentData::TYPE['listFrCj'] => 'GovernmentData\Model\CjTemplate',
        IGovernmentData::TYPE['listFrQt'] => 'GovernmentData\Model\QtTemplate',
        IGovernmentData::TYPE['listFrXzcp'] => 'GovernmentData\Model\XzTemplate',
        IGovernmentData::TYPE['listFrXscp'] => 'GovernmentData\Model\XsTemplate',
        IGovernmentData::TYPE['listFrMscp'] => 'GovernmentData\Model\MsTemplate',
        IGovernmentData::TYPE['listFrPccp'] => 'GovernmentData\Model\PcTemplate',
        IGovernmentData::TYPE['listFrZxcp'] => 'GovernmentData\Model\ZxTemplate',
        IGovernmentData::TYPE['listFrQtt'] => 'GovernmentData\Model\QttTemplate',
        IGovernmentData::TYPE['listFrWlx'] => 'GovernmentData\Model\WlxTemplate',
        IGovernmentData::TYPE['listFrWff'] => 'GovernmentData\Model\WffTemplate',
        IGovernmentData::TYPE['listFrFjfl'] => 'GovernmentData\Model\FjflTemplate',
        IGovernmentData::TYPE['listFrXzxk'] => 'GovernmentData\Model\XzxkTemplate',
        IGovernmentData::TYPE['listFrXzcf'] => 'GovernmentData\Model\XzcfTemplate',
        IGovernmentData::TYPE['listFrXzqz'] => 'GovernmentData\Model\XzqzTemplate',
        IGovernmentData::TYPE['listFrXzzs'] => 'GovernmentData\Model\XzzsTemplate',
        IGovernmentData::TYPE['listFrXzjf'] => 'GovernmentData\Model\XzjfTemplate',
        IGovernmentData::TYPE['listFrXzjc'] => 'GovernmentData\Model\XzjcTemplate',
        IGovernmentData::TYPE['listFrXzqr'] => 'GovernmentData\Model\XzqrTemplate',
        IGovernmentData::TYPE['listFrXzjl'] => 'GovernmentData\Model\XzjlTemplate',
        IGovernmentData::TYPE['listFrXzcj'] => 'GovernmentData\Model\XzcjTemplate',
        IGovernmentData::TYPE['listFrQttt'] => 'GovernmentData\Model\QtttTemplate',
        IGovernmentData::TYPE['listFrMt'] => 'GovernmentData\Model\MtTemplate',
        IGovernmentData::TYPE['listFrGz'] => 'GovernmentData\Model\GzTemplate',
        IGovernmentData::TYPE['listFrRmd'] => 'GovernmentData\Model\HmdTemplate',
        IGovernmentData::TYPE['listFrBmd'] => 'GovernmentData\Model\BmdTemplate'
    );

    public function getTemplate(string $type) : ITemplate
    {
        $template = isset(self::MAPS[$type]) ? self::MAPS[$type] : '';

        return class_exists($template) ? new $template : new NullTemplate();
    }
}
