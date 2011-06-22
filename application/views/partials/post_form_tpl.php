<?php
  echo '<div id="post">';
  echo validation_errors();
  echo form_open(current_url().'#post');
  echo '<div id="namef">'.lang('Leave thiz field empty').'<input type="text" name="name" value="" id="namef" /></div>'; 
  echo '<table>';
  echo '<tr>';
  echo '<td colspan="2">';
  echo lang('Title', 'title').' <em title="'.lang('Mandatory').'">*</em><br/>';
  echo form_input('title', set_value('title', $post['title']), 'id="title" size="60"').'<br/>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td colspan="2">';
  echo form_textarea(array('name' => 'body', 'value' => set_value('body', $post['body']), 'cols'=>'60', 'rows'=>'10'));
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>'.lang('To add picture type the url with <b>i</b> in front <b>ihttp://</b>').'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>';
  echo lang('Password', 'password').'<br />';
  echo form_password('password', '', 'size="60" id="password"');
  echo '</td>';
  echo '<td valign="bottom" width="100px">';
  echo form_submit('post', lang($button_title), 'onclick="this.disabled=true;this.form.submit()"');
  echo '</td>';
  echo '</table>';
  echo form_close();
  echo '</div>';
?>