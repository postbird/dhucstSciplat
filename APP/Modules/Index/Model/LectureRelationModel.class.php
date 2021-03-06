<?php
/*
 * 人才库与用户关联模型
 */
Class EliteRelationModel extends RelationModel{
	
		//定义主表名称
	Protected $tableName='lecture';
	//定义关联关系
	Protected $_link=array(
			'user'=>array(
					'mapping_type'=>MANY_TO_MANY,//多对多关系
					'mapping_name'=>'lecture',
					'foreign_key'=>'lecture_id',//主表在中间表的字段名称
					'relation_foreign_key'=>'user_num',//副表在中间表的字段 名称
					'relation_table'=>'sp_lecture_user',//中间表
					'mapping_fields'=>'uid,unum,uname',
			),
			
	);
	
}