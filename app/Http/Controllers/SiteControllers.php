<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteControllers extends Controller
{
    public function page_acceuil(){

        return view('welcome');
    }


    public function page1_presentation(){

        return view('page1');
    }


    public function page2_presentation(){

        return view('page2');
    }


    public function page3_presentation(){

        return view('page3');
    }

    public function page1_blog(){

        return view('blog1');
    }


    public function page2_blog(){

        return view('blog2');
    }

    public function page3_blog(){

        return view('blog3');
    }


    public function page1_service(){

        return view('service1');
    }


    public function page2_service(){

        return view('service2');
    }


    public function detail_compte(){

        return view('details_compte');
    }


    public function securite_compte(){

        return view('securite_compte');
    }


    public function notification_compte(){

        return view('notification_compte');
    }


    public function message_compte(){

        return view('message_compte');
    }

    
    public function elements_enregistres_compte(){

        return view('elements_enregistres_compte');
    }


    public function collection_compte(){

        return view('collection_compte');
    }


    public function paiement_details_compte(){

        return view('paiement_details_compte');
    }

    public function page_connexion_compte(){

        return view('page_connexion_compte');
    }


    public function page_inscription_compte(){

        return view('page_inscription_compte');
    }
}
