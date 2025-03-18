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

// Single Product start

function bagfilter(){
    return view('product.Biocide-Membrane-Cleaner.Bag-Filter');
}
function MicronFilterCartridge(){
    return view('product.Biocide-Membrane-Cleaner.Micron-Filter-Cartridge');
}
function MicronFilterHousing(){
    return view('product.Biocide-Membrane-Cleaner.Micron-Filter-Housing');
}

function RoMembraneHousing(){
    return view('product.Biocide-Membrane-Cleaner.Ro-Membrane-Housing');
}
function romembrane(){
    return view('product.Biocide-Membrane-Cleaner.Ro-membrane');
}
function pressurerootsblowers(){
    return view('product.Blower.Pressure-Roots-Blowers');
}


function ringblower(){
    return view('product.Blower.Ring-Blower');
}
function vacuumrootsblower(){
    return view('product.Blower.Vacuum-Roots-Blower');
}

function electromagneticflowmeter(){
    return view('product.Flow-Meter.Electromagnetic-Flow-Meter');
}

function threephasemotor(){
    return view('product.Motor.three-phase-motor');
}

function singlephasemotor(){
    return view('product.Motor.Single-Phase-Motor');
}


function frpvesse(){
    return view('product.Vessel.frp-vessel');
}

//pump section

function DplSeriesDynamicPump(){
    return view('product.Pump.High-Pressure-Multistage-Pump.Dpl-Series-Dynamic-Pump');
}

function DpSeriesDynamicPump(){
    return view('product.Pump.High-Pressure-Multistage-Pump.Dp-Series-Dynamic-Pump');
}
function SgtCentrifugalPump(){
    return view('product.Pump.Gk-Centrifugal-Pump.Sgt-Centrifugal-Pump');
}
function gkdynamiccentrifugalpump(){
    return view('product.Pump.Gk-Centrifugal-Pump.2gk-dynamic-centrifugal-pump');
}
function gksseriescentrifugalpump(){
    return view('product.Pump.gks-series-centrifugal-pump');
}

//Water treatment chemicals and Media

function DynamicActivatedCarbon(){
    return view('product.Water-treatment-chemicals-media.Activated-Carbon.Dynamic-Activated-Carbon');
}

function DynamicResin3(){
    return view('product.Water-treatment-chemicals-media.Cation-Exchange-Resin.Dynamic-Resin-1');
}

function DynamicResin2(){
    return view('product.Water-treatment-chemicals-media.Cation-Exchange-Resin.Dynamic-Resin-2');
}

function Anthracite(){
    return view('product.Water-treatment-chemicals-media.Filtration-Media.Anthracite');
}
function Coconutshellactivatedcarbon(){
    return view('product.Water-treatment-chemicals-media.Filtration-Media.Coconut-shell-activated-carbon');
}
function Manganesedioxide(){
    return view('product.Water-treatment-chemicals-media.Filtration-Media.Manganese-dioxide');
}
function Biocide(){
    return view('product.Water-treatment-chemicals-media.Antiscalant.Biocide');
}
function Dechlorinator(){
    return view('product.Water-treatment-chemicals-media.Antiscalant.Dechlorinator');
}
function Flocculants(){
    return view('product.Water-treatment-chemicals-media.Antiscalant.Flocculants');
}
function RoAntiscalant(){
    return view('product.Water-treatment-chemicals-media.Antiscalant.Ro-Antiscalant');
}

//Single Product End




// Product Category End


}
