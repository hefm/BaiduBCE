<?php

namespace Hfm\BaiduBce;

interface AI
{

  public function __construct(string $app_id = '', string $app_key = '', string $app_secret = '');

  // 获取token
  public function getToken();

  // 提交图片入库
  public function addImageToList(string $image_url = '', array $params = []);

  // 搜索图片
  public function searchImage(string $image_url = '');

  // 解析图片
  public function getImageContent(string $image_url = '');
}