<?php
namespace GovernmentData\Model;

class TemplateFactory
{
    const MAPS = array(
        IGovernmentData::TYPE['XK'] => 'GovernmentData\Model\XkTemplate',
        IGovernmentData::TYPE['CF'] => 'GovernmentData\Model\CfTemplate'
    );

    public function getTemplate(string $type) : ITemplate
    {
        $template = isset(self::MAPS[$type]) ? self::MAPS[$type] : '';

        return class_exists($template) ? new $template : new NullTemplate();
    }
}
