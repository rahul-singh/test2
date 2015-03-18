<?php
include('Contributor.php');
//get data from command prompt

 
$repo_type = $argv[1];
$username = $argv[2];
$reponame = $argv[3];
// create object of Contributor
$obj = new Contributor();
if($repo_type == 'git'){
	//call github commit method
	$gitDataAr = $obj->getGitHubCount($username,$reponame);
} if($repo_type == 'bit'){
	//call BitBucket commit method
    $bitDataAr = $obj->getBitCount($username,$reponame);
}
if(isset($gitDataAr['error'])){
echo $gitDataAr['error']; 
}else{
echo "Number of commits by user in Github".$gitDataAr['data'];
}
if(isset($bitDataAr['error'])){
	
echo $bitDataAr['error']; 

}else{
echo "Number of commits by user in BitBucket".$bitDataAr['data']; 
}

?>
