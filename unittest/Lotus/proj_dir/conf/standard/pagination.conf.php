<?php
/**
 * ��ҳ
 */
$config['pagination.pager']['per_page'] = 25; //ÿ��ҳ����ϣ��չʾ����Ŀ���� 
$config['pagination.pager']['num_links_show'] = 9; //����������ʾ���� 
$config['pagination.pager']['num_point_start_end'] = 2; //���㡱ǰ�ߺͺ�ߵ���������
/**
 * �Ƿ���ʾ��һҳ,��һҳ...
 */
$config['pagination.pager']['show_first'] = true;
$config['pagination.pager']['show_prev'] = true;
$config['pagination.pager']['show_next'] = true;
$config['pagination.pager']['show_last'] = true;
$config['pagination.pager']['show_goto'] = false;
$config['pagination.pager']['show_info'] = false;
$config['pagination.pager']['show_point'] = true;
$config['pagination.pager']['show_empty_button'] = false;
/**
 * ��һҳ,��һҳ...����ʾ��������
 */
$config['pagination.pager']['first_text'] = '��ҳ';
$config['pagination.pager']['prev_text'] = '��һҳ';
$config['pagination.pager']['next_text'] = '��һҳ';
$config['pagination.pager']['last_text'] = 'βҳ';
$config['pagination.pager']['point_text'] = '...';
/**
 * ����html���벿��, :url��ʾ��������
 */
$config['pagination.pager']['full_tag_open'] = '<div class="pages">';
$config['pagination.pager']['full_tag_close'] = '</div>';
$config['pagination.pager']['num_tag_open'] = '';
$config['pagination.pager']['num_tag_close'] = '';
$config['pagination.pager']['link_tag_open'] = '<a href=":url">';
$config['pagination.pager']['link_tag_close'] = '</a>';
$config['pagination.pager']['link_tag_cur_open'] = '<strong>';
$config['pagination.pager']['link_tag_cur_close'] = '</strong>';
$config['pagination.pager']['button_tag_open'] = '<a href=":url" style="font-weight:bold">';
$config['pagination.pager']['button_tag_close'] = '</a>';
$config['pagination.pager']['button_tag_empty_open'] = '<span>';
$config['pagination.pager']['button_tag_empty_close'] = '</span>';
$config['pagination.pager']['point_tag_open'] = '<span>';
$config['pagination.pager']['point_tag_close'] = '</span>';
