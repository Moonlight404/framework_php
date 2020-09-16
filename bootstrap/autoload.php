<?php
class Load
{
    public function startServer($port){
        system("cd ./public/ && php -S localhost:$port");
    }
}


