<?php
use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// Premiere Méthode
// Route::get('/', function () {
//     $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
//     return view('base')->with("jours", $jours);
// });

// Route::get('/about', function () {
//     return view('pages/about')
//     ->with("prenom", "Modou")
//     ->with('nom', "Sarr");
// });


// Deuxieme Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom("Gnoror")
//     ->withNom("Sarr");
// });


// Troisime Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom' => "Modou",
//         'nom' => "Sarr"
//     ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });



Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/service', 'pages/service');
Route::resource('etudiant', EtudiantController::class);


Route::get('/', function () {
    //🌴🌴🌴Apprendre SQL Brute 🌴🌴🌴
    //selectionner la liste des articles
    //$articles = DB::select('select *from articles');

    // selectionnerle premier article
    //$article = DB::select('select *from articles')['0'];
    //dd($article);

    
   // selectionnerle premier article
    //$article = DB::select('select *from articles limit 1');
    //dd($article);

   //A partir du 2em article,recupere 1 articles
   //$article = =DB::select('select *from articles limit 1 offset2');
      //dd($article);

      //Inserer un article : 1ere methode
    //  $ok = DB::insert("INSERT INTO articles
    //  values(null,:titre,:contenu,:etat,:date)",[
    //    'titre' =>'Titre4','contenu' => 'Contenu4','etat' => 1,
    //       'date' => date('Y-m-d H:i:s')

  // ]);
  //   dd($ok); 

     // Inserer un article : 2eme methode
    // $titre ='Titre 5';
    //   $contenu = 'Contenu 5';
    //   $etat = 0;
    //   $date = date('Y-m-d H:i:s');

    //   $ok = DB::insert("INSERT INTO articles
    //   values(null,:titre,:contenu,:etat,:date)",
    //  compact('titre', 'contenu', 'etat', 'date'));
    //    dd($ok); 

   //Inserer un article : 3eme methode
    // $titre = 'Titre 6';
    // $contenu = 'Contenu 6';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    //   $ok = DB::insert("INSERT INTO articles
   //  values(null,?, ?, ?, ?)",
    //   [$titre, $contenu, $etat, $date]);
    //   dd($ok); 

    // Modifier le titre du deuxieme article 
    // $ok = DB::update("UPDATE articles  SET titre='Titre 2 modifie' WHERE id =2");
     // dd($ok); 

     // Supprimer l'article dont l'id =6 
     // $ok = DB::delete("DELETE forom articles WHERE id =6");
    //  dd($ok);
    
    // 🌴🌴🌴🌴 Apprendre Fluent Query Builder🌴🌴🌴🌴
     // selectionner tous les articles 
      // $articles = DB::table('articles')->get('*');
      //  dd($articles);

    
     
      // selectionner tous les articles  (uniquement les colonnes id et titre) 
      //  $articles = DB::table('articles')->get(['contenu','titre']);
      // dd($articles);

      //  selectionner le premier article 
        //   $article = DB::table('articles')->first();
        // dd($article);

      //  selectionner le titre du premier article
      //     $article = DB::table('articles')->first()->contenu;
      //   dd($article);

      //  selectionner le titre du premier article
        //    $article = DB::table('articles')->first();
        //  dd($article ->contenu);

      //  selectionner l'article qui  a pour tirre "Titre 2"
          // $article = DB::table('articles')->whereId(2)->get();
          // $article = DB::table('articles')->where('id', 2)->get();
          // dd($article);

      // selectionner tous les articles dont leur id est >= 2
        // $article = DB::table('articles')->where('id', '>', 2)->get();
        // dd($article);

      //    selectionner l'article dont le titre est "Titre 2" et
      //   le contenu "Contenu 2" 
        //  $article = DB::table('articles')
        //     ->whereTitreAndContenu('Titre 4', 'Contenu 4' )
        //     ->get();
        //   dd($article);

      //   selectionner dehx article dont le titre est "Titre 2" ou
      //  le contenu "Contenu 2"(Deuxieme methode) 
          //  $article = DB::table('articles')
          //      ->where('titre','Titre 4')
          //     ->where('contenu','Contenu 4')
          //     ->get();
          //  dd($article);

     //   selectionner l'article dont le titre est "Titre 2" ou
      //   le contenu "Contenu 2"(Premiere methode) 
        //    $article = DB::table('articles')
        //   ->whereTitreOrContenu('Titre 5','Contenu 5')
        //   ->get();
        // dd($article);

      //  selectionner l'article dont le titre est "Titre 2" ou
      //   le contenu "Contenu 2"(Deuxieme methode) 
          //    $article = DB::table('articles')
          //    ->where('titre','Titre 4')
          //    ->orwhere('contenu', 'Contenu 4')
          //   ->get();
          // dd($article);

      //   selectionner deuxieme articles
            //  $article = DB::table('articles')->take(2)->get();
            // dd($article);

      //   A partir du deuxieme articles , selectionner 3 articles
          //  $article = DB::table('articles')
          // ->where('id', '>', '2')
          //   ->take(3)
          //   ->get();
          //  dd($article);

      //   selectionner tous les articles en faisant un trie ascendant sur le titre
          //  $article = DB::table('articles')->orderBy('titre', 'asc') ->get();
          //   dd($article);

       //   selectionner tous les articles en faisant un trie ascendant sur le titre
            // $article1 = DB::table('articles')->orderBy('titre', 'asc') ->get();
            // $article2 = DB::table('articles')->orderBy('titre', 'desc') ->get();
            // dump($article1);
            // dd($article2);

      //     selectionner tous les articles dont leur id >2
      //     en faisant un titr
            // $articles = DB::table('articles')
            // ->where('id','>','2')
            // ->orderBy('titre', 'asc')
            // ->get();
            // dd($articles);

        // Afficher le nombre d'article    
            //  $articles = DB::table('articles')->count();
            //  dd($articles);

            
      // Inserer un article (premiere Methode)
      //   $ok = $article = DB::table('articles')->insert(
      //      [
      //        'titre' => 'Titre 6',
      //        'contenu' => 'Contenu 6',
      //        'etat' => 0,
      //       'date' => date ('Y-m-d H:i:s') ,
 
      //     ],
      //       [
      //       'titre' => 'Titre 7',
      //      'contenu' => 'Contenu 7',
      //      'etat' => 1,
      //     'date' => date ('Y-m-d H:i:s') , 
      //    ]
      // ); 
      // dd($ok); 

      // Inserer 2 article (premiere Methode)
      //    $ok = $article = DB::table('articles')->insert(
      //     [

      //      [
      //       'titre' => 'Titre 8',
      //         'contenu' => 'Contenu 8',
      //        'etat' => 0,
      //       'date' => date ('Y-m-d H:i:s') ,
 
      //     ],
      //       [
      //       'titre' => 'Titre 9',
      //      'contenu' => 'Contenu 9',
      //      'etat' => 1,
      //     'date' => date ('Y-m-d H:i:s') , 
      //    ]
      //     ]   
      // ); 
      // dd($ok); 
      
      
      // Modifier le titre et le contenu de l'article dont l'id =3
    //     $ok = $article = DB::table('articles')->whereId( 2)->update(
    //         [  
    //                'titre' => 'BTitre modifie',
    //                'contenu' => 'Contenu 8 modifie',

    //         ]
        
    //  ); 
    //  dd($ok);   

     //  Supprimer l'article d'id 4
      // $ok = DB::table('articles')->wher('id', 4)->delete(); 
      //dd($ok); 
       

    // 🌴🌴🌴 Apprendre Eloquoent (ORM)🔥🔥🔥🔥🔥🔥🌴🌴🌴
    //  Recuperer tous les etudians
        // $etudiants = Etudiant::get();
        // dd($etudiants);
      

    // Recuperer l'etudiant qui l'id 1 
        // $etudiants = Etudiant::find(1);
        // dd($etudiants);

        // Recuperer le nom et le prenom l'etudiant qui l'id 2 
        //  $etudiants = Etudiant::whereId(2)->get(['nom','prenom']);
        //  dd($etudiants);

         // Recuperer le nom et le prenom l'etudiant dont son prenom est
         //different de Amina et son age > a 13
        //  $etudiants = Etudiant::where('prenom', '!=','Amina')
        //       ->where('age', '>', 13)
        //       ->get(['nom','prenom']);
        //  dd($etudiants);

        // Recuperer le nom du premier etudiant 
        //  $nomPremierEtudiant = Etudiant::first()->nom;
        //  dd( $nomPremierEtudiant);

        // Ajouter un etudiant (Premiere methode) 
        //  $etudiant = new Etudiant();
        //  $etudiant->nom = "Diop";
        //  $etudiant->prenom = "Fatou";
        //  $etudiant->matricule = "101011";
        //  $etudiant->age= 13;
        // $ok = $etudiant->save();
        //  dd($ok);

      // Ajouter un etudiant (Deuxieme methode)
        //   $etudiant = new Etudiant(
        //     [
        //        'nom' => "Sarr",
        //        'prenom' => "Modou",
        //        'matricule' => "101011",
        //        'age' => 13

        //     ]
        // );
        // $ok = $etudiant->save();
        //    dd($ok);

           // Ajouter un etudiant (Troisie,e methode)
        //   $etudiant =  Etudiant::create(
        //     [
        //        'nom' => "Ba",
        //        'prenom' => "Mouhammad",
        //        'matricule' => "101013",
        //        'age' => 14

        //     ]
        // );
        // dd("L'etudiant" . $etudiant->prenom . ' ' . $etudiant->nom .
        //  ' a été crée avec succés !!!');


        return view('base');    
});


