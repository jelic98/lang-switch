# lang switch
Multi-language support for PHP

<b>Description:</b><br/>
	This is a lightweight multi-language support library for websites written in PHP. Put all strings in one file per language and let the library do the rest. Folder "text" contains all translated strings. Folder "logic" contains language getter and setter. Now it's only working with 2 languages, but the plan is to exand it. Feel free to contribute!

<b>Installation:</b><br/>
  Pull this repository.
  
<b>Usage:</b><br/>
	1. Put all strings in <i>text/</i>{CountryCode}<i>.php</i><br/>
  ```php
  $string = [
          "home" => "Home"
        , "contact" => [
              "name" => "Name"
            , "email" => "Email"
            , "phone" => "Phone"
            , "subject" => "Subject"
            , "message" => "Message"
            , "send" => "Send"
        ]
        , "story" => file_get_contents("text/story.en")
    ];
  ```
  
  2. Require language getter<br/>
  
  ```php
  require("logic/get_lang.php"); 
  ```
  
  3. Reference string
  ```php
  echo $string["home"];
  ```
  
  4. Add language switcher
  ```php
  if(strcmp($lang, "en") == 0) {
      echo '<a href="logic/set_lang.php?lang=rs&page=' . $page . '">RS</a>';
  }else if(strcmp($lang, "rs") == 0) {
      echo '<a href="logic/set_lang.php?lang=en&page=' . $page . '">EN</a>';                   
  }
  ```
  
5. Have a nice day!
