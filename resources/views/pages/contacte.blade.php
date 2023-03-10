//@extends("base"),[

    //'titre' => 'page contact',
    //'page_contact' => '',
    //])

    //@section('vitrine')
    //@<h3>page contact b bigua woooo <h3>
    //@ @if(date('N')>= 6 )
    //@ @extension@extends("base"),[

        @inject('nomObjet',
        'App\utilities\Getweekend ')
        @extends("base",[
            
            'titre'])
        