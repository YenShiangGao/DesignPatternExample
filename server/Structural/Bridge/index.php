<?php
include_once 'LaezelDialog.php';
include_once 'ShadowHeartDialog.php';
include_once 'Render/VoiceRender.php';
include_once 'Render/TextRender.php';

# 使用文字渲染器
$dialog1 = new \Bridge\LaezelDialog(new \Bridge\Render\TextRender());
echo $dialog1->present() . "<br>";

# 使用聲音渲染器
$dialog2 = new \Bridge\ShadowHeartDialog(new \Bridge\Render\VoiceRender());
echo $dialog2->present();