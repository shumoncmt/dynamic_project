<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     //Page start
     function home(){
        return view ('site.home');
        
    }
    function blog(){
        return view('site.blog');
    }
    function contact(){
        return view('site.contact');
    }
    function faq(){
        return view('site.faq');
    }
    function about(){
        return view('site.about');
    }
    function team(){
        return view('site.team');
    }
    function service(){
        return view('site.service');
    }
    function feature(){
        return view('site.feature');
    }
    function error(){
        return view('site.error');
    }
    function testimonial(){
        return view('site.testimonial');
    }
      //Page End

      //Project Start



    function project(){
        return view('project.project');
    }

    function deeptubewell(){
        return view ('project.Deep-Tube-Well');
    }
    function zld(){
        return view ('project.zld');
    }
    function DrinkingWaterTreatmentPlant(){
        return view ('project.Drinking-Water-Treatment-Plant');
    }
    function etp(){
        return view ('project.etp');
    }
    function MembraneBasedDesalinationPlant(){
        return view ('project.Membrane-Based-Desalination-Plant');
    }
    function MobileWaterTreatmentPlant(){
        return view ('project.Mobile-Water-Treatment-Plant');
    }
    function PumpsandPumpingSystems(){
        return view ('project.Pumps-and-Pumping-Systems');
    }
    function stp(){
        return view ('project.stp');
    }
    function SurfaceWaterTreatmentPlant(){
        return view ('project.Surface-Water-Treatment-Plant');
    }
    function UltraPureWaterTreatmentPlant(){
        return view ('project.Ultra-Pure-Water-Treatment-Plant');
    }
    function WaterandWasteWaterTreatmentPlants(){
        return view ('project.Water-and-Waste-Water-Treatment-Plants');
    }
    
    function wtp(){
        return view ('project.wtp');
    }
    //Project End

    //Product Caregory Start
    
    function categories(){
        return view ('product-category.all-category');
    }

function blower(){
    return view ('product-category.blower');
}
function diffuser(){
    return view ('product-category.diffuser');
}
function electricmotor(){
    return view ('product-category.electricmotor');
}
function electromageneticflowmeter(){
    return view ('product-category.electromageneticflowmeter');
}
function frpvessel(){
    return view ('product-category.frpvessel');
}
function roandufmembrane(){
    return view ('product-category.roandufmembrane');
}
function watertreatmentaccessories(){
    return view ('product-category.watertreatmentaccessories');
}
function watertreatmentchemicalsandmedia(){
    return view ('product-category.watertreatmentchemicalsandmedia');
}

function allproduct(){
    return view ('product-category.all-product');
}

function allcategory(){
    return view('product-category.all-category');
}
function industrialpump(){
    return view('product-category.industrialpump');
}





// Product Category End


}
