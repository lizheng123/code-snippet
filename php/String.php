<php?
      /**
      str 要裁剪的字符串
      start 开始位置
      len 要返回的字符串长度
      */
      substr("str", start, len)；
      
      
      /**
      字符串长度
      */
      
      int strlen ( string $string ) 
      int strlen ( string $string )  获取给定字符串的[字节]长度 成功则返回字符串$string的长度，如果$string为空，则返回 0。
      $str1 = "abcdef";        //输出6
      $str2 = " ab cd ";        //输出7，注意,开头、结尾、中间的空格
      $str3 = "中国你好";        //输出12,但会变化，与系统所采用的字符编码方式有关
      $str4 = "中国，你好";    //输出15,但会变化，与系统所采用的字符编码方式有关
      echo '$str1的字节长度为:'.strlen($str1).'$str2的字节长度为:'.strlen($str2).'';
      echo '$str3的字节长度为:'.strlen($str3).'$str4的字节长度为:'.strlen($str4).''; 
      
      /**
      mb_strlen() — 获取字符串的长度
      mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )
      $str 要检查长度的字符串
      $encoding，可指定字符编码，如省略则使用内部字符编码
      返回值：返回具有encoding编码的字符串str包含的[字符数]，多字节的字符被计为 1
      */
      $str1 = "abcdef";        //输出6
      $str2 = " ab cd ";        //输出7        注意,开头、结尾、中间的空格
      $str3 = "中国你好";        //输出4
      $str4 = "中国，你好";    //输出5
      echo '$str1的字符长度为:'.mb_strlen($str1,"utf-8").'$str2的字符长度为:'.mb_strlen($str2,"utf-8").'';
      echo '$str3的字符长度为:'.mb_strlen($str3,"utf-8").'$str4的字符长度为:'.mb_strlen($str4,"utf-8").'';
      
