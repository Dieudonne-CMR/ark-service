
    <?php


    // function recup_nom_website($id_website, $bdd)
    // {
    //     $recup_info = $bdd -> query("SELECT nom_website FROM websites WHERE id_website = ?");
        
    //     if($recup_info -> rowCount() != 0):
    //         $data = $recup_info -> fetch();
    //         return $data['nom_website'];
    //     else:
    //         return '/';
    //     endif;
    // }


    function recup_nom_website($id_website, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT nom_website FROM websites WHERE id_website = ?");

        $recup_infos -> execute(array($id_website));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['nom_website']; 

        else :

            return '';
            
        endif;

    }

    function recup_nom_lien($id_website, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT nom_lien FROM websites WHERE id_website = ?");

        $recup_infos -> execute(array($id_website));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['nom_lien']; 

        else :

            return '/';
            
        endif;

    }

    function recup_lien_website($id_website, $bdd)
    {
        $recup_info = $bdd -> query("SELECT lien_website FROM websites WHERE id_website = '$id_website'");
        
        if($recup_info -> rowCount() != 0):
            $data = $recup_info -> fetch();
            return $data['lien_website'];
        else:
            return '/';
        endif;
    }

    // function recup_logo_website($id_website, $bdd)
    // {
    //     $recup_info = $bdd -> query("SELECT logo_website FROM websites WHERE id_website = ?");
        
    //     if($recup_info -> rowCount() != 0):
    //         $data = $recup_info -> fetch();
    //         return $data['logo_website'];
    //     else:
    //         return '/';
    //     endif;
    // }


    function recup_email_website($id_website, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT adresse_email FROM core WHERE id_website = ?");

        $recup_infos -> execute(array($id_website));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['adresse_email']; 

        else :

            return '/';
            
        endif;

    }


    function recup_first_name($mat_member, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT first_name FROM member WHERE mat_member = ?");

        $recup_infos -> execute(array($mat_member));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['first_name']; 

        else :

            return '/';
            
        endif;

    }

    function recup_last_name($mat_member, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT last_name FROM member WHERE mat_member = ?");

        $recup_infos -> execute(array($mat_member));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['last_name']; 

        else :

            return '/';
            
        endif;

    }


    function recup_email($mat_member, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT email FROM member WHERE mat_member = ?");

        $recup_infos -> execute(array($mat_member));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['email']; 

        else :

            return '/';
            
        endif;

    }

    function recup_rubrique($mat_commission, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT rubrique FROM commission WHERE mat_commission = ?");

        $recup_infos -> execute(array($mat_commission));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['rubrique']; 

        else :

            return '/';
            
        endif;

    }
    

    function recup_phone_number($mat_member, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT phone_number FROM member WHERE mat_member = ?");

        $recup_infos -> execute(array($mat_member));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['phone_number']; 

        else :

            return '/';
            
        endif;

    }


    function recup_code_postal($mat_member, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT code_postal FROM member WHERE mat_member = ?");

        $recup_infos -> execute(array($mat_member));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['code_postal']; 

        else :

            return '/';
            
        endif;

    }


    function recup_libelle_formation($mat_formation, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT libelle FROM formation WHERE mat_formation = ?");

        $recup_infos -> execute(array($mat_formation));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['libelle']; 

        else :

            return '/';
            
        endif;

    }


    function recup_libelle_document($mat_document, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT libelle FROM document WHERE mat_document = ?");

        $recup_infos -> execute(array($mat_document));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['libelle']; 

        else :

            return '/';
            
        endif;

    }

    function recup_sous_service($mat_sous_service, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT libelle_sous_service FROM sous_service WHERE mat_sous_service= ?");

        $recup_infos -> execute(array($mat_sous_service));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['libelle_sous_service']; 

        else :

            return '/';
            
        endif;

    }


    function recup_nbre_visites_website($bdd)
	{
		$date = date("Y-m-d");
		$id_website = $_SESSION['id_website'];
			$recup_info = $bdd -> query("SELECT total_visiteurs FROM visiteurs_journaliers WHERE date_visite = '$date' AND id_website = '$id_website' ");
			if($recup_info -> rowCount() != 0):
				$nbre = 0;
				while($data = $recup_info -> fetch()):
					$nbre += $data['total_visiteurs'];
				endwhile;
				return $nbre;
			else:
				return 0;
			endif;
	}


    function recup_nbre_visites($bdd)
	{
		$date = date("Y-m-d");
		if(isset($_SESSION['id_website'])): //Au cas ou c'est un proprietaire de site qui est connecte
			$id_website = $_SESSION['id_website'];
			$recup_info = $bdd -> query("SELECT nbre FROM visiteurs_journaliers WHERE date_visite = '$date' AND id_website = '$id_website'");
			if($recup_info -> rowCount() != 0):
				$data = $recup_info -> fetch();
				return $data['nbre'];
			else:
				return 0;
			endif;
		else:
			$recup_info = $bdd -> query("SELECT nbre FROM visiteurs_journaliers WHERE date_visite = '$date'");
			if($recup_info -> rowCount() != 0):
				$nbre = 0;
				while($data = $recup_info -> fetch()):
					$nbre += $data['nbre'];
				endwhile;
				return $nbre;
			else:
				return 0;
			endif;
		endif;
		
		
	}

    

    ?>