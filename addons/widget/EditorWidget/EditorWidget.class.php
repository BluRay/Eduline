<?php
/**
 * 编辑器
 * @example W('Editor',array('width'=>300,'height'=>'200','contentName'=>'mycontent','value'=>'默认的值'))
 * @author jason
 * @version TS3.0
 */
class EditorWidget extends Widget{

	private static $rand = 1;

    /**
     * @param integer width 编辑器的宽度
     * @param integer height 编辑器的高度
     * @param string contentName 编辑器的表单名
     * @param string value 默认值
     */
	public function render($data){
		$var = array();    
	    $var['contentName'] = 'content';
	    $var['width'] = '100%';
		$var['tool'] = 'photo';
		
	    !empty($data) && $var = array_merge($var,$data);
	    $content = $this->renderFile(dirname(__FILE__).'/default.html',$var);
	    unset($var,$data);
	    // 输出数据
	    return $content;
  }
}