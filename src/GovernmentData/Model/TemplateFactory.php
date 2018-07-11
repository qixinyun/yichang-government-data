<?php
namespace GovernmentData\Model;

class TemplateFactory
{
    const MAPS = array(
        IGovernmentData::TYPE['xk'] => 'GovernmentData\Model\XkTemplate',
        IGovernmentData::TYPE['cf'] => 'GovernmentData\Model\CfTemplate'
    );

    public function getTemplate(string $type) : ITemplate
    {
        $templateModel = isset(self::MAPS[$type]) ? self::MAPS[$type] : '';

        return class_exists($template) ? new $template : new NullTemplate();
    }
}
