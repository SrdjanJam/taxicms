<?
	/* CMS Studio 3.0 modfify_ncateg.php */

	$_ADMINPAGES = true;
	include_once("../../../config.php");
		
	global $smarty;
	global $auth;
	
	if($auth->isActionAllowed("ACTION_NEWS_TYPE_MODIFY"))
	{
		if(isset($_REQUEST["mode"])) $_REQUEST["news_type_id"]=-1;		
		if(isset($_REQUEST["news_type_id"]))
		{
			//punjenje i/ili postavljanje kategorijeid iz/u sesije
			$_SESSION["newstypeid"] = $_REQUEST["news_type_id"];
			if(isset($_REQUEST["mode"])) $smarty->assign("mode", 'insert');
			else $smarty->assign("mode", 'edit');			

			
			$nwType = $ObjectFactory->createObject("NewsType",$_REQUEST["news_type_id"]);
			
			$smarty->assign($nwType->toArray());
			$smarty->display('modify.tpl');
		}
		else 
		{
			//header("index.php");
			//exit();
		}
	}
	else 
	{
		// show error message not enough rights
		$smarty->assign("norights_message",$LanguageArray["value"]["PLG_NORIGHT"]);
		$smarty->display('../../../templates/norights.tpl');
	}
?>