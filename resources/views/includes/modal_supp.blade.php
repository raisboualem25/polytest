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