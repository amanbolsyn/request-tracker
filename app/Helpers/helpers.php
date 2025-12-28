<?php

function PrioratyColor($prioraty){
     
    switch($prioraty){
        case 'low':  return 'bg-green-300' ;
        case 'medium':  return 'bg-orange-300 ' ;
        case 'critical':  return 'bg-red-300';
    }

}

function StatusColor($status){
     
    switch($status){
        case 'new':  return 'bg-green-300' ;
        case 'in progress':  return 'bg-orange-300 ' ;
        case 'completed':  return 'bg-green-300';
        case 'rejected':  return 'bg-red-300';
    }

}