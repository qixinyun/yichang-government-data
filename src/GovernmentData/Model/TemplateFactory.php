<?php
namespace GovernmentData\Model;

class TemplateFactory
{
    const MAPS = array(
        IGovernmentData::TYPE['XK'] => 'GovernmentData\Model\XkTemplate',
        IGovernmentData::TYPE['CF'] => 'GovernmentData\Model\CfTemplate',
        IGovernmentData::TYPE['QZ'] => 'GovernmentData\Model\QzTemplate',
        IGovernmentData::TYPE['ZS'] => 'GovernmentData\Model\ZsTemplate',
        IGovernmentData::TYPE['JF'] => 'GovernmentData\Model\JfTemplate',
        IGovernmentData::TYPE['JC'] => 'GovernmentData\Model\JcTemplate',
        IGovernmentData::TYPE['QR'] => 'GovernmentData\Model\QrTemplate',
        IGovernmentData::TYPE['JL'] => 'GovernmentData\Model\JlTemplate',
        IGovernmentData::TYPE['CJ'] => 'GovernmentData\Model\CjTemplate',
        IGovernmentData::TYPE['QT'] => 'GovernmentData\Model\QtTemplate',
        IGovernmentData::TYPE['XZ'] => 'GovernmentData\Model\XzTemplate',
        IGovernmentData::TYPE['XS'] => 'GovernmentData\Model\XsTemplate',
        IGovernmentData::TYPE['MS'] => 'GovernmentData\Model\MsTemplate',
        IGovernmentData::TYPE['PC'] => 'GovernmentData\Model\PcTemplate',
        IGovernmentData::TYPE['ZX'] => 'GovernmentData\Model\ZxTemplate',
        IGovernmentData::TYPE['QTT'] => 'GovernmentData\Model\QttTemplate',
        IGovernmentData::TYPE['WLX'] => 'GovernmentData\Model\WlxTemplate',
        IGovernmentData::TYPE['WFF'] => 'GovernmentData\Model\WffTemplate',
        IGovernmentData::TYPE['FJFL'] => 'GovernmentData\Model\FjflTemplate',
        IGovernmentData::TYPE['QTTT'] => 'GovernmentData\Model\QtttTemplate',
        IGovernmentData::TYPE['XZXK'] => 'GovernmentData\Model\XzxkTemplate',
        IGovernmentData::TYPE['XZCF'] => 'GovernmentData\Model\XzcfTemplate',
        IGovernmentData::TYPE['XZQZ'] => 'GovernmentData\Model\XzqzTemplate',
        IGovernmentData::TYPE['XZZS'] => 'GovernmentData\Model\XzzsTemplate',
        IGovernmentData::TYPE['XZJF'] => 'GovernmentData\Model\XzjfTemplate',
        IGovernmentData::TYPE['XZJC'] => 'GovernmentData\Model\XzjcTemplate',
        IGovernmentData::TYPE['XZQR'] => 'GovernmentData\Model\XzqrTemplate',
        IGovernmentData::TYPE['XZJL'] => 'GovernmentData\Model\XzjlTemplate',
        IGovernmentData::TYPE['XZCJ'] => 'GovernmentData\Model\XzcjTemplate',
        IGovernmentData::TYPE['MT'] => 'GovernmentData\Model\MtTemplate',
        IGovernmentData::TYPE['GZ'] => 'GovernmentData\Model\GzTemplate',
        IGovernmentData::TYPE['QTQT'] => 'GovernmentData\Model\QtqtTemplate'
    );

    public function getTemplate(string $type) : ITemplate
    {
        $template = isset(self::MAPS[$type]) ? self::MAPS[$type] : '';

        return class_exists($template) ? new $template : new NullTemplate();
    }
}
