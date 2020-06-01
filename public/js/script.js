$(document).ready(function(){
            //ajouter un utilisateur
            $('#submit_add').click(function(e){
               e.preventDefault();
               //validation de tout les champs avant l envoi
               if($('#token').val() != '' && $('#first_name').val() != '' && $('#last_name').val() != '' 
                          && $('#job').val() != '' && $('#email').val() != '' ){
                 $.ajax({
                    url: '/user/save',
                    method: 'post',
                    data: {
                       _token: $('#token').val(),
                       first_name: $('#first_name').val(),
                       last_name: $('#last_name').val(),
                       job: $('#job').val(),
                       email: $('#email').val()
                    },
                    success: function(result){
                       $('#formoid').trigger("reset");

                       $('#exampleModalCenter .alert').show();                     
                       //recuperer les infos client returner par l API                     
                       var user_infos = JSON.parse(result);
                       console.log(user_infos);
                       $('#exampleModalCenter .alert').html('<h4>Nouveau utilisateur ajouter avec succès</h4><b>id: </b>'+ user_infos.id 
                                          +'<br><b>Nom: </b>'+ user_infos.name +'<br><b>Fonction: </b>'+ user_infos.job +'<br><b>Dtae de création: </b>'+ user_infos.createdAt );                     
                       //fermer le modal
                       setTimeout(function() {
                          $("#exampleModalCenter .close").click();$('.alert').hide();
                      }, 3000);
                    }});
                  }
               });                

                //supprimer un utilisateur
                $('.supprimer').click(function(){  
                         //mettre le data dans une variable global afin d etre utiliser dans des endroit differents             
                        window.data = $(this).attr("data"); // recuperer l id de l utilisateur 
                        event.preventDefault();
                        $('#infos_user').html('<b>êtes-vous sûr de vouloir supprimer :</b>' + $('#username_'+data).html() +' ?');                      
                        //confirmation de la seuppression

                    });
                $('#conf_supp').click(function(e){ 
                      e.preventDefault(); 
                      var id = window.data;
                      $.ajax({
                      url: '/user/delete',
                      method: 'post',
                      data: {
                         _token: $('#token').val(),
                         id: id,                         
                      },
                      success: function(result){
                        //validation du code du retour a partir de l API
                        if(result == 204 ){
                          $('#exampleModal .alert').show();
                          $('#infos_user').hide();
                          $('#exampleModal .alert').html('<h4>utilisateur a été supprime avec succès</h4>');                     
                           //fermer le modal
                           setTimeout(function() {
                              $("#exampleModal .close").click();$('#exampleModal .alert').hide();$('#infos_user').show();
                          }, 3000);
                          
                        }else{
                          $('#exampleModal .alert').show();
                          $('#infos_user').hide();
                          $('#exampleModal .alert').html('<h4>l\'utilisateur n\'a pas ete supprime correctement</h4>');                     
                           //fermer le modal
                           setTimeout(function() {
                              $("#exampleModal .close").click();$('#exampleModal .alert').hide();$('#infos_user').show();
                          }, 3000);                          
                        }
                      }});
                    }); 

                    //Modifier un utilisateur 
                    $('.modifier').click(function(e){  
                         //mettre le data dans une variable global afin d etre utiliser dans des endroit differents             
                        window.data = $(this).attr("data"); // recuperer l id de l utilisateur 
                        e.preventDefault();
                        //remplissage de formulaire de modification par les infos d l utilisateur
                        $("#first_name_modif").val($("#firstname_"+$(this).attr("data")).text());
                        $("#last_name_modif").val($("#lastname_"+$(this).attr("data")).text());                        
                        $("#email_modif").val($("#email_"+$(this).attr("data")).text());

                    });

                    $('#submit_modif').click(function(e){
                       e.preventDefault();
                       var id = window.data;
                       //validation des champs avant l envoi
                       if($('#first_name_modif').val() != '' && $('#last_name_modif').val() != ''
                          && $('#job_modif').val() != '' && $('#email_modif').val() != '' && $('#token').val() != ''){
                             $.ajax({
                                url: '/user/update',
                                method: 'post',
                                data: {
                                   _token: $('#token').val(),
                                   id: id,
                                   first_name: $('#first_name_modif').val(),
                                   last_name: $('#last_name_modif').val(),
                                   job: $('#job_modif').val(),
                                   email: $('#email_modif').val()
                                },
                                success: function(result){      
                                   $('#exampleModalCenter2 .alert').show();
                                   //$('#formoid_modif').trigger("reset");
                                   console.log(result);                     
                                   //recuperer les infos client returner par l API                     
                                   var user_infos = result;
                                   console.log(user_infos);
                                   $('#exampleModalCenter2 .alert').html('<h4>Utilisateur modifier avec succès</h4><b>id: </b>'+ id 
                                                      +'<br><b>Nom: </b>'+ user_infos.name +'<br><b>Fonction: </b>'+ user_infos.job +'<br><b>Dtae de modification: </b>'+ user_infos.updatedAt );                     
                                   //fermer le modal
                                   setTimeout(function() {
                                      $("#exampleModalCenter2 .close").click();$('.alert').hide();
                                  }, 4000);
                                   
                                }}); 
                        }
                          
                       }); 
            });