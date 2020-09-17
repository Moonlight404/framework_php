<?php
class Routes {
    public function router($file){
        $array = explode("/", $file);
        $auxFolder = "";
        for($i = 0; $i < count($array); $i++){
            if($i == 0){
                $auxFolder .= $array[$i];
            } else{
                $auxFolder .= "/".$array[$i];
            }
        }
    }

    public function get($array){
        return(array($array));
    }

    public function start(){
        $this->router("/teste/index.php");
    }

    public function routerSystem($array){
        for($i = 0; $i < count($array); $i++){
            for($b = 0; $b < count($array[$i]); $b++){
            $notValid = array('"', '\\');
            $route = str_replace($notValid, "", json_encode($array[$i][$b]['route']));
            $template = str_replace($notValid, "", json_encode($array[$i][$b]['path']));
            if($route == $_SERVER['REQUEST_URI']){
                $isLogged = json_encode($array[$i][$b]['logged']);
                $loggedValidation = json_encode($array[$i][$b]['validationLogged']);
                $loggedPath = json_encode($array[$i][$b]['loggedPath']);
                $notLoggedPath = json_encode($array[$i][$b]['notLoggedPath']);
                $loggedPath = str_replace($notValid, '', $loggedPath);
                $notLoggedPath = str_replace($notValid, '', $notLoggedPath);
                if($loggedValidation){
                    if($isLogged == 'true'){
                        if(require("../template/$loggedPath.php")){
                            return;
                        }
                    } else{
                        if(require("../template/$notLoggedPath.php")){
                            return;
                        }
                    }
                    
                } else{
                    if(require("../template/$template.php")){
                        return;
                    }
                }
                
            }
        }
        }
    }
}