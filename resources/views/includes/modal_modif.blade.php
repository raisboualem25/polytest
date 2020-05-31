<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2Title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle2">Modifier un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!--utilisateur ajouter avec succes-->
              <div class="alert alert-success" style="display:none"></div>
              <div class="modal-body">
                <div >        
                  <form name="contentForm_modif" enctype="multipart/form-data" role="form" data-toggle="validator" 
                        novalidate="true" id="formoid_modif">
                        <input name="user_id"  type="hidden" value="">
                      <div class="form schedule-assessment">
                        <div class="row margin-top-l">
                        <div class="form-group col-md-12">
                          <label for="first_name_modif" class="sr-only">Nom: </label>
                          <input name="first_name_modif" id="first_name_modif" placeholder="Nom" type="text" value="" 
                                required="required" data-error="Entrez votre nom SVP.">
                          <div class="help-block with-errors"></div>
                        </div><!-- close col--> 
                        <div class="form-group col-md-12">
                          <label for="last_name_modif" class="sr-only">Prénom: </label>
                          <input name="last_name_modif" id="last_name_modif" placeholder="Prénom" type="text" value="" required="required" data-error="Entrez votre prénom SVP.">
                          <div class="help-block with-errors"></div>
                        </div><!-- close col-->
                        <div class="form-group col-md-12">
                          <label for="job_modif" class="sr-only">Fonction: </label>
                          <input name="job_modif" id="job_modif" placeholder="Fonction" type="text" value="" required="required" data-error="Entrez votre Fonction SVP.">
                          <div class="help-block with-errors"></div>
                        </div><!-- close col-->
                        <div class="form-group col-md-12">
                          <label for="email_modif" class="sr-only">Email Address: </label>
                          <input name="email_modif" id="email_modif" placeholder="Email" type="email" value="" required="required" data-error="Entrez un email valide SVP.">
                          <div class="help-block with-errors"></div>
                        </div>
                        </div><!-- close row-->
                        <div class="form-group text-center">                        
                            <button id="submit_modif" type="submit" class="submit btn center-block btn-primary">Modifier</button>
                        </div>
                      </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>