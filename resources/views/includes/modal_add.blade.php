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