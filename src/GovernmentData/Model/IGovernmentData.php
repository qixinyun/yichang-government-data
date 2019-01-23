<?php
namespace GovernmentData\Model;

interface IGovernmentData extends IGovernmentDataName
{
    const SUBJECT_CATEGORY = array(
        'NULL' => 0,
        'FR' => 1,
        'ZRR' => 2
    );

    const TYPE = array(
        'NULL' => '',
        'FRXYXX' => 'frxyxx',
        'ZRRXYXX' => 'zrrxyxx',
        'XK' => 'xk',
        'CF' => 'cf',
        'QZ' => 'qz',
        'ZS' => 'zs',        
        'JF' => 'jf', 
        'JC' => 'jc',            
        'QR' => 'qr',         
        'JL' => 'jl',       
        'CJ' => 'cj',
        'QT' => 'qt',  
        'XZ' => 'xz',           
        'XS' => 'xs',       
        'MS' => 'ms', 
        'PC' => 'pc', 
        'ZX' => 'zx',
        'QTT' => 'qtt',               
        'WLX' => 'wlx',
        'WFF' => 'wff',             
        'FJFL' => 'fjfl',
        'QTTT' => 'qttt',            
        'XZXK' => 'xzxk',             
        'XZCF' => 'xzcf',      
        'XZQZ' => 'xzqz', 
        'XZZS' => 'xzzs',
        'XZJF' => 'xzjf',         
        'XZJC' => 'xzjc',
        'XZQR' => 'xzqr',          
        'XZJL' => 'xzjl',             
        'XZCJ' => 'xzcj',
        'MT' => 'mt',
        'GZ' => 'gz',
        'QTQT' => 'qtqt'   
    );
}