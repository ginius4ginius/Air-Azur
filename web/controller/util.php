<?php
function mkHtmlTable($aTable) {
  $sHtml = null;
  //
  if(is_array($aTable)) {
    foreach($aTable as $k=>$v) {
      if(is_array($v)) {
        if($k == 0) {
          $aLabels = array_keys($v);
          $sHtml .= '<tr><td>'.implode('</td><td>', $aLabels).'</td></tr>'; 
        }
        //
        $sHtml .= '<tr><td>'.implode('</td><td>', $v).'</td></tr>'; 
      }        
    }
  }
  //
  if(!empty($sHtml)) 
    $sHtml = "<table> $sHtml </table>";
  //
  return $sHtml;
}

?>