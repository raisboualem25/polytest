<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>PolyTest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--validation front-end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container">

        <div class="row">
        @foreach($data['data'] as $key => $value)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="panel panel-default userlist">
                  <div class="panel-heading">                
                  <div class="panel-body text-center">
                    <div class="userprofile">
                      <div class="userpic"> <img src="{{$data['data'][$key]['avatar']}}" alt="" class="userpicimg"> </div>
                      <h3 class="username" id="username_{{ $data['data'][$key]['id'] }}">{{$data['data'][$key]['first_name']}} {{$data['data'][$key]['last_name']}}</h3>
                      <p><a href="mailto:info@maxartkiller.in">{{$data['data'][$key]['email']}}</a></p>
                    </div>
                      
                    </div>
                    <div class="panel-footer col-md-12"> 
                        <button type="button" class="col-md-5 btn btn-warning float-left modifier">Modifier</button>
                        <button type="button" class="col-md-5 btn btn-danger float-right supprimer" data="{{ $data['data'][$key]['id'] }}"
                            data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                    </div>
                </div>
              </div>          
            </div>    
        @endforeach
        </div>
        <div class="col-md-12 ">
            <nav aria-label="Page navigation example">
                <ul class="col-md-12 pagination ">            
                    @for ($i = 1; $i <= $data['total_pages']; $i++)
                        @if ($i == $data['page'])                      
                            @php $class = 'curent_page' @endphp
                        @else
                            @php  $class = '' @endphp
                        @endif
                        <li class="page-item"><a href="/{{$i}}" class="{{$class}}">{{$i}}</a></li>
                    @endfor 
                    <li class="page-item"><button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">Ajouter</button></li>  
                </ul>
            </nav>
        </div>
        <!-- Modal Ajouter Utilisateur-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!--utilisateur ajouter avec succes-->
              <div class="alert alert-success" style="display:none"></div>
              <div class="modal-body">
                <div >        
                  <form name="contentForm" enctype="multipart/form-data" role="form" data-toggle="validator" 
                        novalidate="true" id="formoid">
                      <div class="form schedule-assessment">
                        <div class="row margin-top-l">
                        <div class="form-group col-md-12">
                          <label for="first_name" class="sr-only">Nom: </label>
                          <input name="first_name" id="first_name" placeholder="Nom" type="text" value="" 
                                required="required" data-error="Entrez votre nom SVP.">
                          <div class="help-block with-errors"></div>
                        </div><!-- close col--> 
                        <div class="form-group col-md-12">
                          <label for="last_name" class="sr-only">Prénom: </label>
                          <input name="last_name" id="last_name" placeholder="Prénom" type="text" value="" required="required" data-error="Entrez votre prénom SVP.">
                          <div class="help-block with-errors"></div>
                        </div><!-- close col-->
                        <div class="form-group col-md-12">
                          <label for="job" class="sr-only">Fonction: </label>
                          <input name="job" id="job" placeholder="Fonction" type="text" value="" required="required" data-error="Entrez votre Fonction SVP.">
                          <div class="help-block with-errors"></div>
                        </div><!-- close col-->
                        <div class="form-group col-md-12">
                          <label for="email" class="sr-only">Email Address: </label>
                          <input name="email" id="email" placeholder="Email" type="email" value="" required="required" data-error="Entrez un email valide SVP.">
                          <div class="help-block with-errors"></div>
                        </div>
                        </div><!-- close row-->
                        <div class="form-group text-center">                        
                            <button id="submit_add" type="submit" class="submit btn center-block btn-primary">Ajouter</button>
                        </div>
                      </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal Supprimer Utilisateur-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression d'un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!--utilisateur supprimer avec succes-->
              <div class="alert alert-success" style="display:none"></div>
              <div class="modal-body">
                <p id="infos_user"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <button type="button" class="btn btn-primary" id="conf_supp">Oui</button>
              </div>
            </div>
          </div>
        </div>




    </div>  
    <script type="text/javascript">
         $(document).ready(function(){


            //ajouter un utilisateur
            $('#submit_add').click(function(e){
               e.preventDefault();
               $.ajax({
                  url: '/user/save',
                  method: 'post',
                  data: {
                     _token: '{{ csrf_token() }}',
                     first_name: $('#first_name').val(),
                     last_name: $('#last_name').val(),
                     job: $('#job').val(),
                     email: $('#email').val()
                  },
                  success: function(result){
                     $('#formoid').trigger("reset");

                     $('.alert').show();                     
                     //recuperer les infos client returner par l API                     
                     var user_infos = JSON.parse(result);
                     console.log(user_infos);
                     $('.alert').html('<h4>Nouveau utilisateur ajouter avec succès</h4><b>id: </b>'+ user_infos.id 
                                        +'<br><b>Nom: </b>'+ user_infos.name +'<br><b>Fonction: </b>'+ user_infos.job +'<br><b>Dtae de création: </b>'+ user_infos.createdAt );                     
                     //fermer le modal
                     setTimeout(function() {
                        $("#exampleModalCenter .close").click();$('.alert').hide();
                    }, 3000);
                  }});
               });
                

                //supprimer un utilisateur
                $('.supprimer').click(function(){  
                         //mettre le data dans une variable global afin d etre utiliser dans des endroit differents             
                        window.data = $(this).attr("data"); // recuperer l id de l utilisateur 
                        event.preventDefault();
                        $('#infos_user').html('<b>êtes-vous sûr de vouloir supprimer :</b>' + $('#username_'+data).text());                      
                        //confirmation de la seuppression

                    });
                $('#conf_supp').click(function(e){ 
                      e.preventDefault(); 
                      var id = window.data;
                      $.ajax({
                      url: '/user/delete',
                      method: 'post',
                      data: {
                         _token: '{{ csrf_token() }}',
                         id: id,                         
                      },
                      success: function(result){
                        $('#exampleModal .alert').show();
                        $('#infos_user').hide();
                        $('#exampleModal .alert').html('<h4>utilisateur ont été supprime avec succès</h4>');                     
                         //fermer le modal
                         setTimeout(function() {
                            $("#exampleModal .close").click();$('#exampleModal .alert').hide();$('#infos_user').show();
                        }, 3000);
                        console.log(result);

                    
                      }});
                    });

            });
        

    </script>  
</body>
</html>

