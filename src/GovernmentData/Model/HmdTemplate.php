<?php
namespace GovernmentData\Model;

class HmdTemplate implements ITemplate
{
	const TEMPLATE = array(
	    array('englishName'=>'fdmchxm', 'name'=>'法定名称或姓名'),
	    // array('englishName'=>'zjlx', 'name'=>'证件类型'),
	    // array('englishName'=>'zjhm', 'name'=>'证件号码'),
	    array('englishName'=>'tyshxydm', 'name'=>'组织机构代码'),
	    array('englishName'=>'zzjgdm', 'name'=>'工商登记注册号'),
	    array('englishName'=>'gsdjzch', 'name'=>'税务登记号'),
	    // array('englishName'=>'swdjh', 'name'=>'法定代表人身份证件类型'),
	    // array('englishName'=>'frzjlx', 'name'=>'法定代表人身份证件号码'),
	    array('englishName'=>'frzjhm', 'name'=>'内容'),
	    array('englishName'=>'nr', 'name'=>'认定日期'),
	    array('englishName'=>'rq', 'name'=>'截止期'),
	    array('englishName'=>'jg', 'name'=>'公示期限(月)'),
	    array('englishName'=>'bz', 'name'=>'认定机关'),
	    array('englishName'=>'hj_sjc', 'name'=>'认定机关行政区域码'),
	    array('englishName'=>'hj_hqpc', 'name'=>'备注'),
	    array('englishName'=>'hj_cjfs', 'name'=>'数据更新时间戳'),
	    array('englishName'=>'hj_xzqydm', 'name'=>'获取批次'),
	    // array('englishName'=>'hj_xydw', 'name'=>'采集方式：0，数据交换；1，在线填报；2，数据接口'),
	    array('englishName'=>'hj_ywxtmc', 'name'=>'行政区域代码'),
	    array('englishName'=>'hj_zrr', 'name'=>'信源单位'),
	    array('englishName'=>'hj_ztlb', 'name'=>'业务系统名称'),
	    array('englishName'=>'hj_hmd', 'name'=>'责任人'),
	    // array('englishName'=>'hj_define1', 'name'=>'主体类别：0，自然人；1，法人和其他组织'),
	    // array('englishName'=>'hj_define2', 'name'=>'是否红黑名单：0，否；1，黑名单；2，红名单'),
	    array('englishName'=>'hj_define3', 'name'=>'预定义字段1'),
	    array('englishName'=>'hj_define4', 'name'=>'预定义字段2'),
	    array('englishName'=>'hj_define5', 'name'=>'预定义字段3'),
	    array('englishName'=>'hj_define6', 'name'=>'预定义字段4'),
	    array('englishName'=>'qx_msm', 'name'=>'预定义字段5'),
	    array('englishName'=>'qx_bm', 'name'=>'预定义字段6'),
	    array('englishName'=>'qx_dmq1001', 'name'=>'信源库模式名'),
	    array('englishName'=>'qx_jg_xzqh', 'name'=>'信源库表名'),
	    array('englishName'=>'qx_dsz_xzqh', 'name'=>'信用记录唯一标识'),
	    array('englishName'=>'qx_qxsj', 'name'=>'机构所在行政区划代码'),
	    array('englishName'=>'qx_zsk_sjc', 'name'=>'所属市州行政区划代码'),
	    array('englishName'=>'qx_ztid', 'name'=>'清洗时间'),
	    array('englishName'=>'qx_ztid', 'name'=>'信用库入库时间戳'),
	    array('englishName'=>'qx_ztid', 'name'=>'信用主体唯一标识'),
	    array('englishName'=>'sxyztdm', 'name'=>'信用主体唯一标识')
	);
}
