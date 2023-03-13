<?php
// Returns file extension without dot.
function file_ext($fileName) {
  return preg_match('/\./', $fileName) ? preg_replace('/^.*\./', '', $fileName) : '';
}

// Returns fileNname w/o extension
function file_ext_strip($fileName){
  return preg_replace('/.[^.]*$/', '', $fileName);
}
