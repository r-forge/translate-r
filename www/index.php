
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<p> No content added. </p>

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

<p>
<table align="center">
<tr>
  <td width="150">Language</td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/R-intro.pot?revision=33&root=translate-r">R-intro</a> | </td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/R-FAQ.pot?revision=29&root=translate-r">R-FAQ</a> | </td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/R-admin.pot?revision=29&root=translate-r">R-admin</a> | </td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/rw-FAQ.pot?revision=29&root=translate-r">rw-FAQ</a> | </td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/R-exts.pot?revision=29&root=translate-r">R-exts</a> | </td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/R-lang.pot?revision=29&root=translate-r">R-lang</a> | </td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/R-ints.pot?revision=29&root=translate-r">R-ints</a> | </td>
  <td><a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/src/pot/man/R-data.pot?revision=29&root=translate-r">R-data</a></td>
</tr>

<tr>
  <td><a href="de.html">German</a>  </td>
  <td><a href="http://translation.r-project.org/R-intro-de.html" target="_blank">de</a></td>
  <td><a href="#"></a>de</td>
  <td><a href="http://translation.r-project.org/R-admin-de.html"></a>de</td>
  <td><a href="#"></a>de</td>
  <td><a href="http://translation.r-project.org/R-exts-de.html"></a>de</td>
  <td><a href="http://translation.r-project.org/R-lang-de.html"></a>de</td>
  <td><a href="http://translation.r-project.org/R-ints-de.html"></a>de</td>
  <td><a href="http://translation.r-project.org/R-data-de.html"></a>de</td>  
</tr>


<tr>
  <td><a href="ko.html">Korean</a>  </td>
  <td><a href="http://translation.r-project.org/R-intro-ko.html" target="_blank">ko</a></td>
  <td><a href="#"></a>ko</td>
  <td><a href="http://translation.r-project.org/R-admin-ko.html"></a>ko</td>
  <td><a href="#"></a>ko</td>
  <td><a href="http://translation.r-project.org/R-exts-ko.html"></a>ko</td>
  <td><a href="http://translation.r-project.org/R-lang-ko.html"></a>ko</td>
  <td><a href="http://translation.r-project.org/R-ints-ko.html"></a>ko</td>
  <td><a href="http://translation.r-project.org/R-data-ko.html"></a>ko</td>  
</tr>

<tr>
  <td><a href="pt_BR.html">Portuguese_BR</a>  </td>
  <td><a href="http://translation.r-project.org/R-intro-pt_BR.html" target="_blank">pt_BR</a></td>
  <td><a href="#"></a>pt_BR</td>
  <td><a href="http://translation.r-project.org/R-admin-pt_BR.html"></a>pt_BR</td>
  <td><a href="#"></a>pt_BR</td>
  <td><a href="http://translation.r-project.org/R-exts-pt_BR.html"></a>pt_BR</td>
  <td><a href="http://translation.r-project.org/R-lang-pt_BR.html"></a>pt_BR</td>
  <td><a href="http://translation.r-project.org/R-ints-pt_BR.html"></a>pt_BR</td>
  <td><a href="http://translation.r-project.org/R-data-pt_BR.html"></a>pt_BR</td>  
</tr>
</table>
</p>


</body>
</html>
