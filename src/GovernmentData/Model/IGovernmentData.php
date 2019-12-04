<?php
namespace GovernmentData\Model;

interface IGovernmentData extends IGovernmentDataName
{
    const SUBJECT_CATEGORY = array(
        'NULL' => 0,
        'FR' => 1,
        'ZRR' => 2
    );

    const TYPE_PID = array(
        'XZGL' => 'XZGL',
        'SFCP' => 'SFCP',
        'GGFW' => 'GGFW',
        'SHJD' => 'SHJD',
        'HHMD' => 'HHMD'
    );

    const TYPE = array(
        'listFrXk' => 'listFrXk',
        'listFrCf' => 'listFrCf',
        'listFrQz' => 'listFrQz',
        'listFrZs' => 'listFrZs',
        'listFrJf' => 'listFrJf',        
        'listFrJc' => 'listFrJc', 
        'listFrQr' => 'listFrQr',            
        'listFrJl' => 'listFrJl',         
        'listFrCj' => 'listFrCj',       
        'listFrQt' => 'listFrQt',
        'listFrXzcp' => 'listFrXzcp',  
        'listFrXscp' => 'listFrXscp',           
        'listFrMscp' => 'listFrMscp',       
        'listFrPccp' => 'listFrPccp', 
        'listFrZxcp' => 'listFrZxcp', 
        'listFrQtt' => 'listFrQtt',
        'listFrWlx' => 'listFrWlx',               
        'listFrWff' => 'listFrWff',
        'listFrFjfl' => 'listFrFjfl',             
        'listFrXzxk' => 'listFrXzxk',
        'listFrXzcf' => 'listFrXzcf',            
        'listFrXzqz' => 'listFrXzqz',             
        'listFrXzzs' => 'listFrXzzs',      
        'listFrXzjf' => 'listFrXzjf', 
        'listFrXzjc' => 'listFrXzjc',
        'listFrXzqr' => 'listFrXzqr',         
        'listFrXzjl' => 'listFrXzjl',
        'listFrXzcj' => 'listFrXzcj',          
        'listFrQttt' => 'listFrQttt',             
        'listFrMt' => 'listFrMt',
        'listFrGz' => 'listFrGz',
        'listFrRmd' => 'listFrRmd',
        'listFrBmd' => 'listFrBmd'   
    );

    const TYPE_RELATIONSHIP = array(
        self::TYPE_PID['XZGL'] => array(
            self::TYPE['listFrXk'],
            self::TYPE['listFrCf'],
            self::TYPE['listFrQz'],
            self::TYPE['listFrZs'],
            self::TYPE['listFrJf'],
            self::TYPE['listFrJc'],
            self::TYPE['listFrQr'],
            self::TYPE['listFrJl'],
            self::TYPE['listFrCj'],
            self::TYPE['listFrQt'],
        ),
        self::TYPE_PID['SFCP'] => array(
            self::TYPE['listFrXzcp'],
            self::TYPE['listFrXscp'],
            self::TYPE['listFrMscp'],
            self::TYPE['listFrPccp'],
            self::TYPE['listFrZxcp'],
            self::TYPE['listFrQtt'],
        ),
        self::TYPE_PID['GGFW'] => array(
            self::TYPE['listFrWlx'],
            self::TYPE['listFrWff'],
            self::TYPE['listFrFjfl'],
            self::TYPE['listFrXzxk'],
            self::TYPE['listFrXzcf'],
            self::TYPE['listFrXzqz'],
            self::TYPE['listFrXzzs'],
            self::TYPE['listFrXzjf'],
            self::TYPE['listFrXzjc'],
            self::TYPE['listFrXzqr'],
            self::TYPE['listFrXzjl'],
            self::TYPE['listFrXzcj'],
            self::TYPE['listFrQttt'],
        ),
        self::TYPE_PID['SHJD'] => array(
            self::TYPE['listFrMt'],
            self::TYPE['listFrGz'],
        ),
        self::TYPE_PID['HHMD'] => array(
            self::TYPE['listFrRmd'],
            self::TYPE['listFrBmd'],
        ),
    );
}