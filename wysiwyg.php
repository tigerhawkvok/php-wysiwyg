<?php

require_once("markdown/Michelf/MarkdownExtra.inc.php");
require_once("./bblike-wysiwyg.php");

class wysiwyg {

  public static function toHtml($text)
  {
    $parsed = parseBlock($text);
    return MarkdownExtra::defaultTransform($parsed);
  }

  public static function fromHtml($html)
  {
    # Undo markdown
    # $markdown =
    $markdown = $html; # temp
    return deparseBlock($markdown);
  }
  
}

?>