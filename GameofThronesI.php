<?php
function GameofThronesI($s) {
 $n=strlen($s);
 $vector= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
 $cadena=str_split($s);
 $flag=0;
 foreach($cadena as $k){
  $n=ord($k);
  $vector[$n-97]++;
 }
 for ($i=0;$i<26;$i++)
  if($vector[$i]%2!=0){
   $flag++;
 }
 if($flag>1) return "NO";
  return "YES";
}